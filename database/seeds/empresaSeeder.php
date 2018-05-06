<?php

use Illuminate\Database\Seeder;

class empresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cnpj =rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
        DB::table('empresas')->insert([
            'razao_social' => str_random(10),
            'cnpj' => $cnpj,            
        ]);
        $cnpj =rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
        DB::table('empresas')->insert([
            'razao_social' => str_random(10),
            'cnpj' => $cnpj,            
        ]);
        $cnpj =rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
        DB::table('empresas')->insert([
            'razao_social' => str_random(10),
            'cnpj' => $cnpj,            
        ]);
        $cnpj =rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
        DB::table('empresas')->insert([
            'razao_social' => str_random(10),
            'cnpj' => $cnpj,            
        ]);
        $cnpj =rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
        DB::table('empresas')->insert([
            'razao_social' => str_random(10),
            'cnpj' => $cnpj,            
        ]);
        $cnpj =rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
        DB::table('empresas')->insert([
            'razao_social' => str_random(10),
            'cnpj' => $cnpj,            
        ]);
        $cnpj =rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
        DB::table('empresas')->insert([
            'razao_social' => str_random(10),
            'cnpj' => $cnpj,            
        ]);
        $cnpj =rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
        DB::table('empresas')->insert([
            'razao_social' => str_random(10),
            'cnpj' => $cnpj,            
        ]);
        $cnpj =rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
        DB::table('empresas')->insert([
            'razao_social' => str_random(10),
            'cnpj' => $cnpj,            
        ]);
        $cnpj =rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
        DB::table('empresas')->insert([
            'razao_social' => str_random(10),
            'cnpj' => $cnpj,            
        ]);
    }
}
