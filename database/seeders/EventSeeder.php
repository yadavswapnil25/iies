<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'title' => 'Union Budget 2025-26 Presentation',
                'description' => 'Presentation of Union Budget in Parliament by Finance Minister',
                'event_date' => Carbon::now()->addDays(30),
                'event_time' => '11:00',
                'location' => 'Parliament House, New Delhi',
                'url' => 'https://example.com/budget-presentation',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Economic Survey 2024-25 Release',
                'description' => 'Official release of the Economic Survey document',
                'event_date' => Carbon::now()->addDays(45),
                'event_time' => '14:00',
                'location' => 'North Block, Finance Ministry',
                'url' => 'https://example.com/economic-survey',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'G20 Finance Ministers Meeting',
                'description' => 'International meeting of G20 Finance Ministers and Central Bank Governors',
                'event_date' => Carbon::now()->addDays(60),
                'event_time' => '09:30',
                'location' => 'Virtual Conference',
                'url' => 'https://example.com/g20-meeting',
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Taxpayers Awareness Conference',
                'description' => 'National conference on taxpayer rights and new tax regulations',
                'event_date' => Carbon::now()->addDays(75),
                'event_time' => '10:00',
                'location' => 'Vigyan Bhawan, New Delhi',
                'url' => 'https://example.com/tax-conference',
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'title' => 'Digital Finance Innovation Summit',
                'description' => 'Exploring the future of digital finance and fintech innovations',
                'event_date' => Carbon::now()->addDays(90),
                'event_time' => '09:00',
                'location' => 'India International Centre, New Delhi',
                'url' => null,
                'is_active' => true,
                'sort_order' => 5,
            ],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}