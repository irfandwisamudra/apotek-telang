<?php

namespace Database\Seeders;

use App\Models\Drug;
use App\Models\Supplier;
use App\Models\Transaction;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => md5('admin')
        ]);

        // Supplier::factory(5)->create();

        // Drug::factory(10)->create();

        // Transaction::factory(20)->create();
    }
}
