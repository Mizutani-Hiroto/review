<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => '田中由紀子',
                'email' => 'abc@au.com',
                'email_verified_at' => 'null',
                'password' => 'abc123',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                'name' => '鈴木翔太',
                'email' => 'def@au.com',
                'email_verified_at' => 'null',
                'password' => 'def456',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                ]
            ]);
    }
}
