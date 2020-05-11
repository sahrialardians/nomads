<?php

use Illuminate\Database\Seeder;
use App\TravelPackage;

class TravelPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TravelPackage::class, 10)->create();
    }
}
