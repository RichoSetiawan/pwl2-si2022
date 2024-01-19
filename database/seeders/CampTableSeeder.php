<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Transtudio Bandung',
               'slug' => 'Indahnya bermain bersama keluarga',
               'price' => 35,
               'created_at' => date('Y-m-d H:i:s', time()),
               'updated_at' => date('Y-m-d H:i:s', time()),
           ],
           [
               'title' => 'Jungle Land',
               'slug' => 'The best fun in the World',
               'price' => 100,
               'created_at' => date('Y-m-d H:i:s', time()),
               'updated_at' => date('Y-m-d H:i:s', time()),
           ],
           [
               'title' => 'Seaworld',
               'slug' => 'seaworld',
               'price' => 95,
               'created_at' => date('Y-m-d H:i:s', time()),
               'updated_at' => date('Y-m-d H:i:s', time()),
           ],
           [
                'title' => 'Dufan',
               'slug' => 'Taman-Impian-Jaya-Ancol',
               'price' => 10,
               'created_at' => date('Y-m-d H:i:s', time()),
               'updated_at' => date('Y-m-d H:i:s', time()),
           ]
       ];

       Camp::insert($camps);
}
}