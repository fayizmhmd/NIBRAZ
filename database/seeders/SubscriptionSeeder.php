<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subscription::create([
            'user_id' => 2,
            'plan_id' => 1,
            'price' => 600,
            'duration' => '360',
            'start_date' => '2024-01-01 14:50:32',
            'end_date' => '2024-02-28 14:50:32',
            'insurance_type' => 'INSURANCE',
            'payment_mood' => 'ONLINE',
            'payment_status' => 'SUCCESS',
            'payment_id' => '56566665',
        ]);
        Subscription::create([
            'user_id' => 2,
            'plan_id' => 2,
            'price' => 600,
            'duration' => '360',
            'start_date' => '2024-02-01 14:50:32',
            'end_date' => '2024-02-28 14:50:32',
            'insurance_type' => 'HEALTH CARE',
            'payment_mood' => 'ONLINE',
            'payment_status' => 'SUCCESS',
            'payment_id' => '5656434345',
        ]);
        Subscription::create([
            'user_id' => 2,
            'plan_id' => 3,
            'price' => 600,
            'duration' => '360',
            'start_date' => '2024-03-01 14:50:32',
            'end_date' => '2024-03-28 14:50:32',
            'insurance_type' => 'INSURANCE',
            'payment_mood' => 'ONLINE',
            'payment_status' => 'SUCCESS',
            'payment_id' => '56565',
        ]);

    }
}
