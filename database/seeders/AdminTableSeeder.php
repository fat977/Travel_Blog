<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $adminsRecords = [
            [
                'id'=> 1,
                'name'=>'Fatma',
                'type'=>'admin',
                
                'email'=>'fatma@admin.com',
                'password'=>bcrypt('12345678'),
                'image'=>'',
                'status'=>1
            ],
            ];
            Admin::insert($adminsRecords);
    }
}
