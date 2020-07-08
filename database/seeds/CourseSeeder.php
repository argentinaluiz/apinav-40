<?php

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run()
    {

        $data = [
            ['name' => 'ADMINISTRAÇÃO', 'code' => '1'],
            ['name' => 'ADMINISTRAÇÃO GERAL E AGROINDUSTRIAL', 'code' => '2'],
            ['name' => 'AGRONOMIA', 'code' => '3'],
            ['name' => 'BIOMEDICINA', 'code' => '4'],
            ['name' => 'CIÊNCIAS CONTÁBEIS', 'code' => '5'],
            ['name' => 'DIREITO', 'code' => '6'],
            ['name' => 'EDUCAÇÃO FÍSICA', 'code' => '7'],
        ];

        Course::insert($data);
    }
}
