<?php

use Illuminate\Database\Seeder;

class servicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicos')->insert([
            'nome' => 'serviço 1',            
        ]);        
        DB::table('servicos')->insert([
            'nome' => 'serviço 2',            
        ]);
        DB::table('servicos')->insert([
            'nome' => 'serviço 3',            
        ]);
    }
}
