<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        // $this->call([
            
        //     Wilayah::class,


        // ]);

        

        
            DB::table('users')
            ->insert([
    
                'id' => 1,
                'email' => 'autada.web@gmail.com',
                'name' => 'Autada',
                'role' => '0',
                'admin' => 'ADMIN',
                'password' => Hash::make('Developerkita')
    
            ]);
    
    
           
        

        
        
    }
}
