<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Agent;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $agents = [
            [
                'name' => 'Akash Reddy',
                'agent_code' => '35486955',
                'experience_years' => 8,
                'phone' => '+91-9876543210',
                'email' => 'akash.reddy@example.com',
                'address' => 'Mumbai, Maharashtra',
                'category' => 'category-a',
                'specialization' => 'Individual NOC, Small Business NOC',
                'service_fee_percentage' => 2.00,
                'daily_fee_min' => 3500.00,
                'daily_fee_max' => 8000.00,
                'sbi_account_number' => 'DEA35486955',
                'is_active' => true,
                'notes' => 'Experienced in individual and small business NOC applications.'
            ],
            [
                'name' => 'Anurag Bhat',
                'agent_code' => '45486968',
                'experience_years' => 5,
                'phone' => '+91-9876543211',
                'email' => 'anurag.bhat@example.com',
                'address' => 'Delhi, NCR',
                'category' => 'category-b',
                'specialization' => 'Corporate NOC, Large Business NOC',
                'service_fee_percentage' => 2.00,
                'daily_fee_min' => 5000.00,
                'daily_fee_max' => 10000.00,
                'sbi_account_number' => 'DEA45486968',
                'is_active' => true,
                'notes' => 'Specializes in corporate and large business NOC applications.'
            ],
            [
                'name' => 'Atul Ghosh',
                'agent_code' => '55486981',
                'experience_years' => 6,
                'phone' => '+91-9876543212',
                'email' => 'atul.ghosh@example.com',
                'address' => 'Kolkata, West Bengal',
                'category' => 'category-c',
                'specialization' => 'International Trade NOC',
                'service_fee_percentage' => 2.00,
                'daily_fee_min' => 4000.00,
                'daily_fee_max' => 9000.00,
                'sbi_account_number' => 'DEA55486981',
                'is_active' => true,
                'notes' => 'Expert in international trade NOC applications.'
            ],
            [
                'name' => 'Deepak Bose',
                'agent_code' => '65486994',
                'experience_years' => 11,
                'phone' => '+91-9876543213',
                'email' => 'deepak.bose@example.com',
                'address' => 'Bangalore, Karnataka',
                'category' => 'category-d',
                'specialization' => 'Investment NOC, Financial NOC',
                'service_fee_percentage' => 2.00,
                'daily_fee_min' => 6000.00,
                'daily_fee_max' => 10000.00,
                'sbi_account_number' => 'DEA65486994',
                'is_active' => true,
                'notes' => 'Senior agent with extensive experience in investment and financial NOC applications.'
            ],
            [
                'name' => 'Rahul Sharma',
                'agent_code' => '75487007',
                'experience_years' => 7,
                'phone' => '+91-9876543214',
                'email' => 'rahul.sharma@example.com',
                'address' => 'Pune, Maharashtra',
                'category' => 'category-e',
                'specialization' => 'Special Projects NOC',
                'service_fee_percentage' => 2.00,
                'daily_fee_min' => 4500.00,
                'daily_fee_max' => 9500.00,
                'sbi_account_number' => 'DEA75487007',
                'is_active' => true,
                'notes' => 'Handles complex special projects NOC applications.'
            ],
            [
                'name' => 'Priya Patel',
                'agent_code' => '85487020',
                'experience_years' => 9,
                'phone' => '+91-9876543215',
                'email' => 'priya.patel@example.com',
                'address' => 'Ahmedabad, Gujarat',
                'category' => 'category-a',
                'specialization' => 'Individual NOC, Small Business NOC',
                'service_fee_percentage' => 2.00,
                'daily_fee_min' => 3500.00,
                'daily_fee_max' => 7500.00,
                'sbi_account_number' => 'DEA85487020',
                'is_active' => true,
                'notes' => 'Experienced in individual and small business NOC applications.'
            ],
            [
                'name' => 'Vikram Singh',
                'agent_code' => '95487033',
                'experience_years' => 4,
                'phone' => '+91-9876543216',
                'email' => 'vikram.singh@example.com',
                'address' => 'Chandigarh, Punjab',
                'category' => 'category-b',
                'specialization' => 'Corporate NOC',
                'service_fee_percentage' => 2.00,
                'daily_fee_min' => 4000.00,
                'daily_fee_max' => 8000.00,
                'sbi_account_number' => 'DEA95487033',
                'is_active' => true,
                'notes' => 'Specializes in corporate NOC applications.'
            ],
            [
                'name' => 'Neha Gupta',
                'agent_code' => '105487046',
                'experience_years' => 12,
                'phone' => '+91-9876543217',
                'email' => 'neha.gupta@example.com',
                'address' => 'Chennai, Tamil Nadu',
                'category' => 'category-c',
                'specialization' => 'International Trade NOC',
                'service_fee_percentage' => 2.00,
                'daily_fee_min' => 5000.00,
                'daily_fee_max' => 10000.00,
                'sbi_account_number' => 'DEA105487046',
                'is_active' => true,
                'notes' => 'Senior agent with extensive experience in international trade NOC applications.'
            ],
            [
                'name' => 'Sanjay Kumar',
                'agent_code' => '115487059',
                'experience_years' => 6,
                'phone' => '+91-9876543218',
                'email' => 'sanjay.kumar@example.com',
                'address' => 'Hyderabad, Telangana',
                'category' => 'category-d',
                'specialization' => 'Investment NOC',
                'service_fee_percentage' => 2.00,
                'daily_fee_min' => 4000.00,
                'daily_fee_max' => 9000.00,
                'sbi_account_number' => 'DEA115487059',
                'is_active' => true,
                'notes' => 'Expert in investment NOC applications.'
            ],
            [
                'name' => 'Anita Desai',
                'agent_code' => '125487072',
                'experience_years' => 10,
                'phone' => '+91-9876543219',
                'email' => 'anita.desai@example.com',
                'address' => 'Mumbai, Maharashtra',
                'category' => 'category-e',
                'specialization' => 'Special Projects NOC',
                'service_fee_percentage' => 2.00,
                'daily_fee_min' => 5000.00,
                'daily_fee_max' => 10000.00,
                'sbi_account_number' => 'DEA125487072',
                'is_active' => true,
                'notes' => 'Senior agent handling complex special projects NOC applications.'
            ]
        ];

        foreach ($agents as $agent) {
            Agent::create($agent);
        }
    }
}
