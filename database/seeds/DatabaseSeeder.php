<?php

use Illuminate\Database\Seeder;
use App\Student;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Student::class, 100)->create();
        // $this->call(UserSeeder::class);
    }
}
