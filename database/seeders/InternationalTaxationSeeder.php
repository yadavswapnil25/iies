<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\InternationalTaxation;

class InternationalTaxationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $internationalTaxations = [
            [
                'title' => 'Tax Treaties',
                'url' => 'https://incometaxindia.gov.in/Pages/international-taxation/dtaa.aspx',
                'description' => 'Comprehensive information about Double Taxation Avoidance Agreements (DTAA) between India and other countries.',
                'category' => 'Tax Treaties',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Treaty Comparison',
                'url' => 'https://incometaxindia.gov.in/Pages/international-taxation/treaty-comparison.aspx',
                'description' => 'Compare tax treaties between different countries and understand the provisions.',
                'category' => 'Treaty Comparison',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Transfer Pricing',
                'url' => 'https://incometaxindia.gov.in/Pages/international-taxation/transfer-pricing.aspx',
                'description' => 'Guidelines and regulations for transfer pricing in international transactions.',
                'category' => 'Transfer Pricing',
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Double Taxation Relief',
                'url' => 'https://incometaxindia.gov.in/Pages/international-taxation/relief.aspx',
                'description' => 'Information about relief from double taxation for residents and non-residents.',
                'category' => 'Double Taxation',
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'title' => 'Tax Information Exchange',
                'url' => 'https://incometaxindia.gov.in/Pages/international-taxation/tiea.aspx',
                'description' => 'Tax Information Exchange Agreements (TIEA) for international cooperation.',
                'category' => 'Tax Information Exchange',
                'is_active' => true,
                'sort_order' => 5,
            ],
        ];

        foreach ($internationalTaxations as $internationalTaxation) {
            InternationalTaxation::create($internationalTaxation);
        }
    }
}