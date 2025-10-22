<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newsItems = [
            [
                'title' => 'APPLICATIONS INVITED FOR THE POST OF DEPUTY GOVERNOR, RESERVE BANK OF INDIA',
                'url' => 'https://financialservices.gov.in/beta/sites/default/files/Advertisment-English-DG-RBI.pdf',
                'is_active' => true,
                'sort_order' => 1
            ],
            [
                'title' => 'Upcoming Events of the Department',
                'url' => 'https://financialservices.gov.in/beta/en/events',
                'is_active' => true,
                'sort_order' => 2
            ],
            [
                'title' => 'New Circular Released: Guidelines for Foreign Exchange Management',
                'url' => 'https://example.com/forex-guidelines',
                'is_active' => true,
                'sort_order' => 3
            ],
            [
                'title' => 'Economic Survey 2024-25 Highlights India\'s Growth Trajectory',
                'url' => 'https://example.com/economic-survey-2024',
                'is_active' => true,
                'sort_order' => 4
            ],
            [
                'title' => 'Government Launches Digital Finance Awareness Campaign',
                'url' => 'https://example.com/digital-finance-campaign',
                'is_active' => true,
                'sort_order' => 5
            ]
        ];

        foreach ($newsItems as $item) {
            News::create($item);
        }
    }
}
