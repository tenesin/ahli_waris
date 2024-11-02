<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * The seeders to call based on the environment.
     *
     * @var array
     */
    protected $seeders = [
        'local' => [
            AssetCategoriesSeeder::class,
            StatusOptionSeeder::class, // Moved here to ensure it runs in local
        ],
        'production' => [
            AssetCategoriesSeeder::class,
            StatusOptionSeeder::class, // Moved here to ensure it runs in production
        ],
    ];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        DB::beginTransaction(); // Corrected capitalization
        try {
            if (!array_key_exists(app()->environment(), $this->seeders)) {
                return;
            }

            // Call the seeders specific to the current environment
            $this->call($this->seeders[app()->environment()]);
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e; // Rethrow the exception to let it be handled by Laravel
        }
        
        DB::commit(); // Commit the transaction after successful seeding
    }
}
