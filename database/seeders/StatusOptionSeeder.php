<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StatusOption;

class StatusOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            ['status_id' => 1, 'status' => 'Belum Dialokasikan'],
            ['status_id' => 2, 'status' => 'Sedang Dialokasikan'],
            ['status_id' => 3, 'status' => 'Sudah Dialokasikan'],
        ];

        foreach ($statuses as $status) {
            StatusOption::updateOrCreate(['status_id' => $status['status_id']], $status);
        }
    }
}
