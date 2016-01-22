<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		User::create([
            'name' => 'Chris Gmyr',
            'email' => 'chris@example.com',
            'password' => Hash::make('pass123'),
        ]);

        User::create([
            'name' => 'Taylor Otwell',
            'email' => 'taylor@example.com',
            'password' => Hash::make('pass123'),
        ]);

        User::create([
            'name' => 'Adam Wathan',
            'email' => 'adam@example.com',
            'password' => Hash::make('pass123'),
        ]);
	}

}
