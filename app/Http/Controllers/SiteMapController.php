<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteMapController extends Controller
{
    public function index()
    {
        $siteMap = [
            'main' => [
                'title' => 'Main Pages',
                'pages' => [
                    [
                        'title' => 'Home',
                        'url' => '/',
                        'description' => 'Official homepage of Indian International Economic Service'
                    ],
                    [
                        'title' => 'About IIES',
                        'url' => '/about/iies',
                        'description' => 'Learn about Indian International Economic Service'
                    ],
                    [
                        'title' => 'Our Minister',
                        'url' => '/about/our-minister',
                        'description' => 'Information about our ministers'
                    ],
                    [
                        'title' => 'Our Performance',
                        'url' => '/about/our-performance',
                        'description' => 'Performance reports and achievements'
                    ],
                    [
                        'title' => 'Our Finance Minister',
                        'url' => '/about/our-fin-min',
                        'description' => 'Finance Minister and Minister of State information'
                    ]
                ]
            ],
            'services' => [
                'title' => 'Services',
                'pages' => [
                    [
                        'title' => 'NOC Process',
                        'url' => '/services/noc-process',
                        'description' => 'No Objection Certificate process information'
                    ],
                    [
                        'title' => 'Procedure & Guidelines',
                        'url' => '/services/proc-guide',
                        'description' => 'Detailed procedures and guidelines'
                    ],
                    [
                        'title' => 'Object Certificate',
                        'url' => '/services/object-certificate',
                        'description' => 'Object certificate services'
                    ],
                    [
                        'title' => 'Track NOC Application',
                        'url' => '/user/login',
                        'description' => 'Track your NOC application status'
                    ]
                ]
            ],
            'guidelines' => [
                'title' => 'Guidelines',
                'pages' => [
                    [
                        'title' => 'NOC Guidelines',
                        'url' => '/guidelines/noc-guidelines',
                        'description' => 'Guidelines for NOC applicants'
                    ],
                    [
                        'title' => 'Guideline for Issuance NOC',
                        'url' => '/guidelines/issuance-noc',
                        'description' => 'Guidelines for NOC issuance'
                    ],
                    [
                        'title' => 'IIES Officials',
                        'url' => '/guidelines/iies-officials',
                        'description' => 'Information about IIES officials'
                    ],
                    [
                        'title' => 'Super Agent',
                        'url' => '/guidelines/super-agent',
                        'description' => 'Super agent information and guidelines'
                    ]
                ]
            ],
            'register' => [
                'title' => 'Register Facilitating Agent',
                'pages' => [
                    [
                        'title' => 'Super Agent Role',
                        'url' => '/register-fac-agent/super-agent-role',
                        'description' => 'Role and responsibilities of super agents'
                    ],
                    [
                        'title' => 'Super Agent List',
                        'url' => '/register-fac-agent/super-agent-list',
                        'description' => 'List of registered super agents'
                    ],
                    [
                        'title' => 'Super Agent Hire',
                        'url' => '/register-fac-agent/super-agent-hire',
                        'description' => 'Hire a super agent for your needs'
                    ]
                ]
            ],
            'legal' => [
                'title' => 'Legal & Policies',
                'pages' => [
                    [
                        'title' => 'Law Act Policy',
                        'url' => '/law-act-policy',
                        'description' => 'Legal acts and policies'
                    ],
                    [
                        'title' => 'Law Issue NOC',
                        'url' => '/law-issue-noc',
                        'description' => 'Legal issues related to NOC'
                    ],
                    [
                        'title' => 'Penalty',
                        'url' => '/penalty',
                        'description' => 'Penalty information and guidelines'
                    ]
                ]
            ],
            'forms' => [
                'title' => 'Forms & Contact',
                'pages' => [
                    [
                        'title' => 'Enquiry Form',
                        'url' => '/enquiry-form',
                        'description' => 'Submit your enquiry'
                    ],
                    [
                        'title' => 'Contact Us',
                        'url' => '/contact-us',
                        'description' => 'Contact IIES for assistance'
                    ]
                ]
            ],
            'dynamic_content' => [
                'title' => 'Dynamic Content',
                'pages' => [
                    [
                        'title' => 'Tenders',
                        'url' => '/tenders',
                        'description' => 'Current tenders and procurement opportunities'
                    ],
                    [
                        'title' => 'Press Releases',
                        'url' => '/press-releases',
                        'description' => 'Latest press releases and announcements'
                    ],
                    [
                        'title' => 'Vacancies',
                        'url' => '/vacancies',
                        'description' => 'Job vacancies and career opportunities'
                    ],
                    [
                        'title' => 'What\'s News',
                        'url' => '/news',
                        'description' => 'Latest news and updates'
                    ],
                    [
                        'title' => 'Events',
                        'url' => '/events',
                        'description' => 'Upcoming events and conferences'
                    ],
                    [
                        'title' => 'Announcements',
                        'url' => '/announcements',
                        'description' => 'Important announcements and notices'
                    ]
                ]
            ],
            'admin' => [
                'title' => 'Admin Panel',
                'pages' => [
                    [
                        'title' => 'Admin Login',
                        'url' => '/admin/login',
                        'description' => 'Administrator login portal'
                    ],
                    [
                        'title' => 'Admin Dashboard',
                        'url' => '/admin/dashboard',
                        'description' => 'Administrative dashboard (requires login)'
                    ]
                ]
            ]
        ];

        return view('sitemap', compact('siteMap'));
    }
}