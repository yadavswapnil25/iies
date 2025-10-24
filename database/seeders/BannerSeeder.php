<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banners = [
            [
                'title' => 'Department of Economic Affairs',
                'description' => 'Welcome to the Department of Economic Affairs - Your gateway to economic policy and financial governance.',
                'image_path' => 'uploads/logo-1600x400-01.png',
                'alt_text' => 'Department of Economic Affairs Logo',
                'url' => 'https://dea.gov.in',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Economic Policy Initiatives',
                'description' => 'Explore our latest economic policy initiatives and government programs.',
                'image_path' => 'uploads/slider1.png',
                'alt_text' => 'Economic Policy Initiatives Banner',
                'url' => 'https://dea.gov.in/policies',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Financial Services & Regulations',
                'description' => 'Stay updated with the latest financial services and regulatory frameworks.',
                'image_path' => 'uploads/slider2.png',
                'alt_text' => 'Financial Services Banner',
                'url' => 'https://dea.gov.in/financial-services',
                'is_active' => true,
                'sort_order' => 3,
            ],
        ];

        foreach ($banners as $banner) {
            Banner::create($banner);
        }
    }
}