<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Result;
use App\Models\Sensor;
use Illuminate\Http\Request;
use App\Models\BaselinePulseRate;
use Illuminate\Support\Facades\Http;

class SensorController extends Controller
{
    public function fetchData()
    {
        $response = Http::get('https://ai.eprime.app/sensor/public/api/get-data');

        if ($response->successful()) {
            $data = $response->json();

            Sensor::create([
                'temp_' => $data['temp_'],
                'hum_' => $data['hum_'],
                'force_' => $data['force_'],
                'bend_' => $data['bend_'],
                'pressure_' => $data['pressure_'],
                'pulse_rate' => $data['pulse_rate'],
            ]);

            return response()->json(['message' => 'Data stored successfully.'], 200);
        } else {
            return response()->json(['message' => 'Failed to fetch data from API.'], 500);
        }
    }

    public function index()
    {
        $sensors = Sensor::get();
        return view('sensors', ['sensors' => $sensors]);
    }

    public function home()
    {
        return view('home');
    }

    public function selectPlayer()
    {
        $users = User::all();
        $age_groups = BaselinePulseRate::select('age_group')->distinct()->pluck('age_group');
        $weight_groups = BaselinePulseRate::select('weight_range')->distinct()->pluck('weight_range');
        
        return view('select-player', compact('users', 'age_groups', 'weight_groups'));
    }

    public function runSmartboard(Request $request)
    {
        $baseline = BaselinePulseRate::where('age_group', $request->age_group)
                    // ->where('height_group', $request->height_group)
                    ->where('weight_range', $request->weight_group)
                    ->first();

        if (!$baseline) {
            return redirect()->back()->with('error', 'No baseline data found for the provided age, height, and weight groups.');
        }

        $k1 = 0.5;
        $k2 = 0.3;
        $k3 = 0.2;
        $a = 0.4;
        $b = 0.4;
        $c1 = 0.4;
        $c2 = 0.3;
        $c3 = 0.3;
        $pulseRateVariability=1;

        // Dummy sensor data (you would replace this with real sensor data)
        $sensor_data = Sensor::latest()->first();

        $pain_level = round($k1 * ($sensor_data['pulse_rate'] - $baseline->pulse_rate) + $k2 * $sensor_data['force_']  + $k3 * $sensor_data['pressure_']);
        $sweat_level = round($a * $sensor_data['hum_'] + $b * $sensor_data['temp_']);
        $fatigue_level = round($c1 * $pulseRateVariability  + $c2 * $sensor_data['hum_'] + ($sensor_data['pressure_'] != 0 ? $c3 * (1 / $sensor_data['pressure_']) : 0));
       
        // $sensor->fatigue_level = $c1 * $pulseRateVariability + $c2 * $sensor_data['humidity'] + ($sensor_data['pressure'] != 0 ? $c3 * (1 / $sensor_data['pressure']) : 0);


        $result = Result::create([
            'user_id' => $request->user_id,
            'sweat_level' => $sweat_level,
            'pain_level' => $pain_level,
            'fatigue_level' => $fatigue_level,
            'pulse_rate' => round($sensor_data['pulse_rate'])
        ]);

        return view('results', [
            'name' => User::find($request->user_id)->name,
            'sweat_level' => $result->sweat_level,
            'pain_level' => $result->pain_level,
            'pulse_rate' => $result->pulse_rate,
            'fatigue_level' => $result->fatigue_level
        ]);
    }
}
