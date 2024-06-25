<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\BaselinePulseRate;
use App\Models\Result;
use Illuminate\Support\Facades\Validator;

class SmartboardController extends Controller
{
    public function getUsers()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function calculate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer|exists:users,id',
            'age_group' => 'required|string',
            'weight_range' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $baselinePulseRate = BaselinePulseRate::where('age_group', $request->age_group)
            // ->where('height_group', $request->height_group)
            ->where('weight_range', $request->weight_range)
            ->first();

        if (!$baselinePulseRate) {
            return response()->json(['error' => 'Baseline pulse rate not found'], 404);
        }

        // Dummy sensor data
        $sensor_data = SenorData::latest()->first();

        $pain_level = round($k1 * ($sensor_data['pulse_rate'] - $baseline->pulse_rate) + $k2 * $sensor_data['force_']  + $k3 * $sensor_data['pressure_']);
        $sweat_level = round($a * $sensor_data['hum_'] + $b * $sensor_data['temp_']);
        $fatigue_level = round($c1 * $pulseRateVariability  + $c2 * $sensor_data['hum_'] + ($sensor_data['pressure_'] != 0 ? $c3 * (1 / $sensor_data['pressure_']) : 0));

        $result = Result::create([
            'user_id' => $request->user_id,
            'sweat_level' => $sweat_level,
            'pain_level' => $pain_level,
            'fatigue_level' => $fatigue_level,
            'pulse_rate' => $sensorData['pulse_rate'],
        ]);

        return response()->json($result);
    }
}
