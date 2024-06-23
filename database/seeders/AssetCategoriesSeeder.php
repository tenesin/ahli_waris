<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssetCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(database_path('seeders/json/asset-categories.json'));
        $data = json_decode($json, true);


        if ($this->checkIfSeeded($data)) {
            return;
        }

        $payload = [];
        foreach ($data as $datum) {
            $payload[] = [
                'category_id' => $datum['category_id'],
                'category_name' => $datum['category_name'],
            ];
        }

        DB::table('asset_categories')->insert($payload);
    }

    /**
     * Check if the table is already seeded.
     */
    private function checkIfSeeded(array $data): bool
    {
        $categoryIds = array_column($data, 'category_id');
        $categories = DB::table('asset_categories')
            ->whereIn('category_id', $categoryIds)
            ->get();

        return $categories->isNotEmpty();
    }
}
