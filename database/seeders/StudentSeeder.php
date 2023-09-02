<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
class StudentSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Thomas',
                'course' => 'BCA',
            ],
            [
                'name' => 'Ferry',
                'course' => 'BCOM',
            ],
            [
                'name' => 'John',
                'course' => 'BSC',
            ],
            [
                'name' => 'Miller',
                'course' => 'BCA',
            ],
            [
                'name' => 'Strac',
                'course' => 'BCOM',
            ],
            [
                'name' => 'Marvin',
                'course' => 'BCOM',
            ],
            [
                'name' => 'Maxwell',
                'course' => 'BCA',
            ]
        ];

        foreach($data as $value){
            Student::create($value);
        }
    }
}