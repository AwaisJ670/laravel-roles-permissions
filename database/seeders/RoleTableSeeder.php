<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        DB::table('cache')->truncate();
        DB::table('permissions')->truncate();
        DB::table('roles')->insert([
            array('name' => 'Super Admin','guard_name' => 'web'),
            array('name' => 'Admin','guard_name' => 'web'),
            array('name' => 'Driver','guard_name' => 'web'),
            array('name' => 'Accountant','guard_name' => 'web'),
            array('name' => 'Reservationist','guard_name' => 'web'),
            array('name' => 'Dispatcher','guard_name' => 'web'),
            array('name' => 'Supervisor','guard_name' => 'web'),
            array('name' => 'Independent Driver','guard_name' => 'web'),
            array('name' => 'Dispatcher Supervisor','guard_name' => 'web'),
            array('name' => 'Independent contractor','guard_name' => 'web'),
            array('name' => 'OUT SOURCE ','guard_name' => 'web')
        ]);
    }
}
