<?php

use App\Models\Period;
use Illuminate\Database\Seeder;

class PeriodSeeder extends Seeder
{
    public function run()
    {
        $data = ['name' => '2020/2', 'code' => '20202', 'description' => 'Segundo semestre letivo de 2020'];
        Period::create($data);
    }
}
