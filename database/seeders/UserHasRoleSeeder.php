<?php

namespace Database\Seeders;

use App\Models\UserHasRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserHasRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userHasRole = [
            ['user_id'=>1,'role_id'=>1],
            ['user_id'=>2,'role_id'=>2],
            ['user_id'=>3,'role_id'=>3],
            ['user_id'=>4,'role_id'=>5],
            ['user_id'=>5,'role_id'=>4],
        ];
        UserHasRole::insert($userHasRole);
    }
}
