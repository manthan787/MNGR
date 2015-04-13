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
        $this->call('RolesTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('SubjectsTableSeeder');
		$this->call('MediumsTableSeeder');
	}

}
