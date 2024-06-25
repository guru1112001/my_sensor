<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BaselinePulseRate;

class BaselinePulseRatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $baselinePulseRates = [
            ['age_group' => 'Infants (0-1 year)', 'weight_range' => '2.5-10', 'pulse_rate' => 130],
            ['age_group' => 'Children (1-10 years)', 'weight_range' => '10-20', 'pulse_rate' => 100],
            ['age_group' => 'Children (1-10 years)', 'weight_range' => '20-30', 'pulse_rate' => 105],
            ['age_group' => 'Adolescents (11-17)', 'weight_range' => '30-40', 'pulse_rate' => 85],
            ['age_group' => 'Adolescents (11-17)', 'weight_range' => '40-50', 'pulse_rate' => 90],
            ['age_group' => 'Adults (18-60)', 'weight_range' => '50-60', 'pulse_rate' => 75],
            ['age_group' => 'Adults (18-60)', 'weight_range' => '60-70', 'pulse_rate' => 80],
            ['age_group' => 'Adults (18-60)', 'weight_range' => '70-80', 'pulse_rate' => 85],
            ['age_group' => 'Adults (18-60)', 'weight_range' => '80-90', 'pulse_rate' => 90],
            ['age_group' => 'Adults (18-60)', 'weight_range' => '90+', 'pulse_rate' => 95],
            ['age_group' => 'Older Adults (60+)', 'weight_range' => '50-60', 'pulse_rate' => 80],
            ['age_group' => 'Older Adults (60+)', 'weight_range' => '60-70', 'pulse_rate' => 85],
            ['age_group' => 'Older Adults (60+)', 'weight_range' => '70-80', 'pulse_rate' => 90],
            ['age_group' => 'Older Adults (60+)', 'weight_range' => '80-90', 'pulse_rate' => 95],
            ['age_group' => 'Older Adults (60+)', 'weight_range' => '90+', 'pulse_rate' => 100],
        ];
    
        foreach ($baselinePulseRates as $baselinePulseRate) {
            \App\Models\BaselinePulseRate::create($baselinePulseRate);
        }
    }
}
