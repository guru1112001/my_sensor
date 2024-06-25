<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'Mohammed Al-Owais'],
            ['name' => 'Mohammed Al-Rubaie'],
            ['name' => 'Ahmed Al-Kassar'],
            ['name' => 'Ali Lajami'],
            ['name' => 'Awn Al-Saluli'],
            ['name' => 'Ali Al-Bulayhi'],
            ['name' => 'Yasser Al-Shahrani'],
            ['name' => 'Hassan Kadesh'],
            ['name' => 'Saud Abdulhamid'],
            ['name' => 'Sultan Al-Ghannam'],
            ['name' => 'Mohammed Al-Burayk'],
            ['name' => 'Mukhtar Ali'],
            ['name' => 'Abdulelah Al-Malki'],
            ['name' => 'Faisal Al-Ghamdi'],
            ['name' => 'Mohamed Kanno'],
            ['name' => 'Abbas Al-Hassan'],
            ['name' => 'Nasser Al-Dawsari'],
            ['name' => 'Sami Al-Najei'],
            ['name' => 'Abdulrahman Ghareeb'],
            ['name' => 'Salem Al-Dawsari'],
            ['name' => 'Ayman Yahya'],
            ['name' => 'Abdullah Radif'],
            ['name' => 'Feras Al-Birakan'],
            ['name' => 'Saleh Al-Shehri'],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    
    }
}
