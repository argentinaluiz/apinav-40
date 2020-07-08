<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Professor', 'description' => 'Professor  de Ensino'],
            ['name' => 'Administrador Geral', 'description' => 'Administrador Geral'],
            ['name' => 'Aluno', 'description' => 'Aluno ou Estudante'],
            ['name' => 'Conteudista', 'description' => 'Criador de Conteudo']
        ];

        Role::insert($data);
    }
}
