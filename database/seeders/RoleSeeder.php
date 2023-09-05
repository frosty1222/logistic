<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'ADMIN'],
            ['name' => 'USER'],
            ['name' => 'CUSTOMER SERVICE'],
            ['name' => 'LOGISTIC STAFF'],
            ['name' => 'WARE-HOUSE STAFF'],
        ];

        // Insert data into the roles table
        role::insert($roles);
    }
}
