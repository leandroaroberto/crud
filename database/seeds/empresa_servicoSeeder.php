<?php

use Illuminate\Database\Seeder;

class empresa_servicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresa_servico')->insert([
            'empresa_id' => 1,
            'servico_id' => 1            
        ]); 
        DB::table('empresa_servico')->insert([
            'empresa_id' => 1,
            'servico_id' => 2            
        ]); 
        DB::table('empresa_servico')->insert([
            'empresa_id' => 1,
            'servico_id' => 3            
        ]); 

        DB::table('empresa_servico')->insert([
            'empresa_id' => 2,
            'servico_id' => 1            
        ]); 
        DB::table('empresa_servico')->insert([
            'empresa_id' => 2,
            'servico_id' => 3            
        ]); 
    
        DB::table('empresa_servico')->insert([
            'empresa_id' => 3,
            'servico_id' => 2            
        ]); 
    }
}
