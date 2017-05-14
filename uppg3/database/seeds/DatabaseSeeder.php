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
      $this->call(seed_products::Class);
      $this->call(seed_reviews::Class);
      $this->call(seed_stores::Class);
      $this->call(seed_product_store::Class);
    }
}
