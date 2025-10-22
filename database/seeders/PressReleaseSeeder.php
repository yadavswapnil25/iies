<?php

namespace Database\Seeders;

use App\Models\PressRelease;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PressReleaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pressReleases = [
            [
                'title' => 'Press Communique: Government\'s Borrowing Plan for the Second Half of FY 2025-26',
                'url' => 'https://example.com/press-release/borrowing-plan-2025-26',
                'is_active' => true,
                'sort_order' => 1
            ],
            [
                'title' => 'Update on Fiscal Deficit and Economic Outlook Q3 FY 2025',
                'url' => 'https://example.com/press-release/fiscal-deficit-q3-2025',
                'is_active' => true,
                'sort_order' => 2
            ],
            [
                'title' => 'Government Launches Digital Finance Awareness Campaign',
                'url' => 'https://example.com/press-release/digital-finance-campaign',
                'is_active' => true,
                'sort_order' => 3
            ],
            [
                'title' => 'Finance Ministry Introduces E-Payment Policy for MSMEs',
                'url' => 'https://example.com/press-release/epayment-policy-msme',
                'is_active' => true,
                'sort_order' => 4
            ],
            [
                'title' => 'Union Budget Preparations Begin for FY 2026-27',
                'url' => 'https://example.com/press-release/budget-preparation-2026-27',
                'is_active' => true,
                'sort_order' => 5
            ],
            [
                'title' => 'New Tax Reforms to Boost Economic Growth',
                'url' => 'https://example.com/press-release/tax-reforms-economic-growth',
                'is_active' => true,
                'sort_order' => 6
            ],
            [
                'title' => 'Government Announces Infrastructure Development Fund',
                'url' => 'https://example.com/press-release/infrastructure-development-fund',
                'is_active' => true,
                'sort_order' => 7
            ]
        ];

        foreach ($pressReleases as $pressRelease) {
            PressRelease::create($pressRelease);
        }
    }
}
