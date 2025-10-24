<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FinanceMinister;

class FinanceMinisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FinanceMinister::create([
            'name' => 'Smt. Nirmala Sitharaman',
            'hindi_name' => 'सुश्री निर्मला सीतारमण',
            'designation' => 'Finance Minister',
            'hindi_designation' => 'वित्त मंत्री',
            'image_path' => 'uploads/nirmal-sitaraman-finance-minister_0 (1).jpg',
            'bio' => 'Smt. Nirmala Sitharaman is the Finance Minister of India. She has been serving in this capacity since 2019 and has been instrumental in shaping India\'s economic policies.',
            'hindi_bio' => 'सुश्री निर्मला सीतारमण भारत की वित्त मंत्री हैं। वह 2019 से इस पद पर कार्यरत हैं और भारत की आर्थिक नीतियों को आकार देने में महत्वपूर्ण भूमिका निभा रही हैं।',
            'is_active' => true,
            'sort_order' => 1
        ]);

        FinanceMinister::create([
            'name' => 'Shri Pankaj Chaudhary',
            'hindi_name' => 'श्री पंकज चौधरी',
            'designation' => 'Minister of State for Finance',
            'hindi_designation' => 'वित्त राज्य मंत्री',
            'image_path' => 'uploads/pankaj-chaudhary.png',
            'bio' => 'Shri Pankaj Chaudhary is the Minister of State for Finance. He assists the Finance Minister in various financial matters and policy implementation.',
            'hindi_bio' => 'श्री पंकज चौधरी वित्त राज्य मंत्री हैं। वह विभिन्न वित्तीय मामलों और नीति कार्यान्वयन में वित्त मंत्री की सहायता करते हैं।',
            'is_active' => true,
            'sort_order' => 2
        ]);
    }
}
