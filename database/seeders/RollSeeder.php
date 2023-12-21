<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['admin','writer'];
        foreach ($roles as $role){
            $newRoll = new Role();
            $newRoll->name = $role;
            $newRoll->save();
        }
    }
}
