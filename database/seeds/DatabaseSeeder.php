<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
    }
}

class UsersTableSeeder extends Seeder
{
	public function run()
    {
		DB::table('users')->delete();

		\App\User::create([
			'name' => 'Felipe Lacerda',
			'email'=>'lipe.lacerda@gmail.com',
			//'password' => bcrypt('123456')
            'password' => '123456'
		]);
	}
}
 