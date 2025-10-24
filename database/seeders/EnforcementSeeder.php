<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Enforcement;

class EnforcementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $enforcements = [
            [
                'title' => 'Red Corner Notice',
                'hindi_text' => 'निविदा के लिए इन वेबसाइट पर लॉगिन करें',
                'url' => 'https://enforcementdirectorate.gov.in/red-corner-notice',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'FEMA Rule',
                'hindi_text' => 'अधिनियम और नियम',
                'url' => 'https://enforcementdirectorate.gov.in/fema',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Money Laundering Prevention',
                'hindi_text' => 'मनी लॉन्ड्रिंग रोकथाम',
                'url' => 'https://enforcementdirectorate.gov.in/money-laundering',
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Economic Offenses',
                'hindi_text' => 'आर्थिक अपराध',
                'url' => 'https://enforcementdirectorate.gov.in/economic-offenses',
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'title' => 'Asset Recovery',
                'hindi_text' => 'संपत्ति वसूली',
                'url' => 'https://enforcementdirectorate.gov.in/asset-recovery',
                'is_active' => true,
                'sort_order' => 5,
            ],
        ];

        foreach ($enforcements as $enforcement) {
            Enforcement::create($enforcement);
        }
    }
}