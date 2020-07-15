<?php

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['student' => [], 'user' => []]
        ];

        foreach($data as $row){
            Student::createWithUser($row);
        }
    }
}
