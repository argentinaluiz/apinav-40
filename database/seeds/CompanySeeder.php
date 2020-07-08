<?php

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Serra Dourada Altamira', 'city' => 'Altamira', 'state' => 'PA'],
            ['name' => 'Faculdade Alis de Itabirito', 'city' => 'Itabirito', 'state' => 'MG'],
            ['name' => 'Serra Dourada Lorena', 'city' => 'Lorena', 'state' => 'SP']
        ];

        Company::insert($data);
    }
}
