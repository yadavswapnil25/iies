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
                        'title' => 'Office of The Finance Minister',
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
                        'title' => 'Fee of No Objection Certificate',
                        'url' => '/services/object-certificate',
                        'description' => 'Prescribed fee for the No Objection Certificate'
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
                        'title' => 'Guidelines for NOC Applicants',
                        'url' => '/guidelines/noc-guidelines',
                        'description' => 'Guidelines for individuals and entities applying for NOC'
                    ],
                    [
                        'title' => 'Guideline for Issuance NOC',
                        'url' => '/guidelines/issuance-noc',
                        'description' => 'Guidelines for NOC issuance'
                    ],
                    [
                        'title' => 'Guidelines for IIES Officials',
                        'url' => '/guidelines/iies-officials',
                        'description' => 'Information about IIES officials'
                    ],
                    [
                        'title' => 'Guidelines for Registered Facilitation Agent',
                        'url' => '/guidelines/super-agent',
                        'description' => 'Registered Facilitation Agent information and guidelines'
                    ]
                ]
            ],
            'register' => [
                'title' => 'Registered Facilitation Agent',
                'pages' => [
                    [
                        'title' => 'Role of Registered Facilitation Agent',
                        'url' => '/register-fac-agent/super-agent-role',
                        'description' => 'Role and responsibilities of Registered Facilitation Agents'
                    ],
                    [
                        'title' => 'List of Registered Facilitation Agent',
                        'url' => '/register-fac-agent/super-agent-list',
                        'description' => 'Directory of Registered Facilitation Agents'
                    ],
                    [
                        'title' => 'Engage a Registered Facilitation Agent',
                        'url' => '/register-fac-agent/super-agent-hire',
                        'description' => 'Engage a Registered Facilitation Agent for assistance'
                    ]
                ]
            ],
            'legal' => [
                'title' => 'Legal & Policies',
                'pages' => [
                    [
                        'title' => 'Act & Policy',
                        'url' => '/law-act-policy',
                        'description' => 'Legal acts and policies'
                    ],
                    [
                        'title' => ' Law Before Issuing NOC',
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
        
        ];

        return view('sitemap', compact('siteMap'));
    }
}