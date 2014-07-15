<?php

class ItemsTableSeeder extends Seeder {

	public function run(){

			DB::table('items')->delete();

			$items = array(

				array(
					'owner_id' => 1,
					'name' => 'Bring Milk',
					'done' => false
					),



				array(
					'owner_id' => 1,
					'name' => 'Swith the motor',
					'done' => true
					),


				array(
					'owner_id' => 1,
					'name' => 'Prepare Dinner',
					'done' => false
					)
					);

			DB::table('items')->insert($items);

	}
}