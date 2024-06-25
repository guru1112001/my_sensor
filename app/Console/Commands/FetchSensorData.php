<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Sensor;

class FetchSensorData extends Command
{
    protected $signature = 'fetch:sensor-data';

    protected $description = 'Fetch sensor data from API';

    public function handle()
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

            $this->info('Data stored successfully.');
        } else {
            $this->error('Failed to fetch data from API.');
        }
    }
}
