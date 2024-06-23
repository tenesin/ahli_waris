<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    protected $seeders = [
        'local' => [
            AssetCategoriesSeeder::class,
        ],
        'production' => [
            AssetCategoriesSeeder::class,
        ],
    ];

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::BeginTransaction();
        try {
            if (!array_key_exists(app()->environment(), $this->seeders)) {
                return;
            }
            $this->call($this->seeders[app()->environment()]);
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        } finally {
            DB::commit();
        }
    }
}
