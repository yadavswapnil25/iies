<?php

namespace Database\Seeders;

use App\Models\Tender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tenders = [
            [
                'title' => 'Bid Document for Automatic Box Strapping Machine',
                'url' => 'https://example.com/tender/box-strapping-machine',
                'is_active' => true,
                'sort_order' => 1
            ],
            [
                'title' => 'Bid Document For Printing Machine and Equipment',
                'url' => 'https://example.com/tender/printing-equipment',
                'is_active' => true,
                'sort_order' => 2
            ],
            [
                'title' => 'Tender for Page Setting And Printing of Economic Survey 2023-24',
                'url' => 'https://example.com/tender/economic-survey-printing',
                'is_active' => true,
                'sort_order' => 3
            ],
            [
                'title' => 'Tender for Supply of Binding Material and Paper',
                'url' => 'https://example.com/tender/binding-materials',
                'is_active' => true,
                'sort_order' => 4
            ],
            [
                'title' => 'E-Tender for Office Stationery Supply',
                'url' => 'https://example.com/tender/office-stationery',
                'is_active' => true,
                'sort_order' => 5
            ],
            [
                'title' => 'Tender for IT Infrastructure Development',
                'url' => 'https://example.com/tender/it-infrastructure',
                'is_active' => true,
                'sort_order' => 6
            ],
            [
                'title' => 'Bid for Security Services and Equipment',
                'url' => 'https://example.com/tender/security-services',
                'is_active' => true,
                'sort_order' => 7
            ]
        ];

        foreach ($tenders as $tender) {
            Tender::create($tender);
        }
    }
}
