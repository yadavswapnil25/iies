<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vacancy;
use Carbon\Carbon;

class VacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vacancies = [
            [
                'title' => 'Indian International Economic Service vacancies will start in August 2025',
                'url' => '#',
                'description' => 'Applications for IIES positions will be open from August 2025. Stay tuned for official notifications.',
                'application_deadline' => Carbon::now()->addMonths(3),
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Deputy Director - Economic Policy Division',
                'url' => 'https://example.com/vacancy/deputy-director',
                'description' => 'Looking for experienced professionals in economic policy formulation and analysis.',
                'application_deadline' => Carbon::now()->addDays(30),
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Senior Research Officer - International Trade',
                'url' => 'https://example.com/vacancy/senior-research-officer',
                'description' => 'Position available for candidates with expertise in international trade and economic research.',
                'application_deadline' => Carbon::now()->addDays(45),
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Assistant Director - Financial Cooperation',
                'url' => 'https://example.com/vacancy/assistant-director',
                'description' => 'Join our team to work on international financial cooperation and multilateral institutions.',
                'application_deadline' => null,
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'title' => 'Economic Analyst - Policy Research',
                'url' => 'https://example.com/vacancy/economic-analyst',
                'description' => 'Entry-level position for fresh graduates in economics with strong analytical skills.',
                'application_deadline' => Carbon::now()->addDays(20),
                'is_active' => true,
                'sort_order' => 5,
            ],
        ];

        foreach ($vacancies as $vacancy) {
            Vacancy::create($vacancy);
        }
    }
}