<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'=>'Admin',
            'email'=>'admin@admin.com',
            "phone"=>'01234567890',
            'password'=>bcrypt('12345678'),

        ] )   ;

    }
}
