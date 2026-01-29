<?php

namespace Database\Seeders;

use App\Models\Link;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    // Gera 10 usuarios com varios links
    public function run(): void
    {
        User::all()->each(function($user){
            foreach(range(1,random_int(1,8)) as $order){
                Link::factory()->create([
                    "user_id" => $user->id,
                    "order"=>$order
                ]);
            }
        });
    }
}
