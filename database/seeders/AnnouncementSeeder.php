<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Announcement;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $announcements = [
            [
                'title' => 'Monthly Economic Review August 2025',
                'url' => '/files/announcements_documents/Monthly%20Economic%20Review%20August%202025.pdf',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'WTM vacancy circular dated 4th September, 2025',
                'url' => '/files/announcements_documents/WTM_vacancy.pdf',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'India\'s External Debt: A Status Report 2024-25',
                'url' => '/files/announcements_documents/ExDebtReport2024-25_Final.pdf',
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Bid Document for Automatic Box Strapping Machine',
                'url' => '/files/announcements_documents/GeM-Bidding-8206518.pdf',
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'title' => 'Bid Document For Printing Machine and Equipment',
                'url' => '/files/announcements_documents/GeM-Bidding-8206228.pdf',
                'is_active' => true,
                'sort_order' => 5,
            ],
            [
                'title' => 'Budget Circular 2026-27',
                'url' => '/files/announcements_documents/Budget_Circular202627.pdf',
                'is_active' => true,
                'sort_order' => 6,
            ],
            [
                'title' => 'Monthly Economic Review July 2025',
                'url' => '/files/announcements_documents/FinalMER_July2025.pdf',
                'is_active' => true,
                'sort_order' => 7,
            ],
        ];

        foreach ($announcements as $announcement) {
            Announcement::create($announcement);
        }
    }
}