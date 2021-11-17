<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            ['name' => 'Superadmin', 'email' => 'superadmin@pndc.com', 'password' => bcrypt('password')],
            ['name' => 'Prabhu Budhathoki', 'email' => 'prabhu.byn@gmail.com', 'password' => bcrypt('password')],
        ];
        \DB::table('users')->insert($admins);
    }
}
