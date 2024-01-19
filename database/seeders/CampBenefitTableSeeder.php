<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampBenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
            'ticket_id' => 1,
                'name' => 'Tiket Fisik',
            ],
            [
                'ticket_id' => 2,
                'name' => 'Tiket Fisik',
            ],
            [
                'ticket_id' => 3,
                'name' => 'Tiket Fisik',
            ],
            [
                'ticket' => 4,
                'name' => 'Tiket Fisik',
            ],
        ];
        
        CampBenefit::insert($campBenefits);
    }
}
