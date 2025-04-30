<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Show the list of resources.
     */
    public function index()
    {
        return view('resources.index');
    }

    /**
     * Show a single resource detail.
     *
     * @param  string  $resource
     */
    public function show($resource)
    {
        $resources = [
            'handbook' => (object) [
                'title'       => 'Community Building Handbook',
                'description' => 'A step-by-step guide for organizers to foster strong, engaged communities.',
                'sections'    => [
                    [
                        'heading' => 'Overview',
                        'body'    => 'This handbook provides an end-to-end roadmap for creating, growing, and sustaining community projects—from ideation through impact measurement.'
                    ],
                    [
                        'heading' => 'Chapter 1: Foundations',
                        'body'    => 'Defining mission & vision, stakeholder mapping, community needs assessment, and goal-setting frameworks.'
                    ],
                    [
                        'heading' => 'Chapter 2: Engagement & Outreach',
                        'body'    => 'Techniques for recruiting volunteers, building trust, running workshops, and leveraging social media for awareness.'
                    ],
                    [
                        'heading' => 'Chapter 3: Resource Mobilization',
                        'body'    => 'Grant writing templates, partnership guides, budget planning, and in-kind donation strategies.'
                    ],
                    [
                        'heading' => 'Chapter 4: Governance & Sustainability',
                        'body'    => 'Establishing leadership structures, decision-making processes, succession planning, and metrics for long-term impact.'
                    ],
                ],
                'download'    => '/downloads/community-building-handbook.pdf'
            ],
            'volunteer-templates' => (object) [
                'title'       => 'Volunteer Management Templates',
                'description' => 'Ready-to-use forms and checklists to recruit, train, and appreciate volunteers.',
                'sections'    => [
                    [
                        'heading' => 'Overview',
                        'body'    => 'This pack equips you with standardized documents to streamline volunteer coordination at every stage.'
                    ],
                    [
                        'heading' => 'Template 1: Application Form',
                        'body'    => 'Collect contact details, availability, skillsets, background checks, and areas of interest.'
                    ],
                    [
                        'heading' => 'Template 2: Onboarding Checklist',
                        'body'    => 'Step-by-step tasks—from orientation & training schedules to policy acknowledgments.'
                    ],
                    [
                        'heading' => 'Template 3: Feedback & Evaluation',
                        'body'    => 'Post-event surveys, performance review forms, and exit interviews to gather honest insights.'
                    ],
                    [
                        'heading' => 'Template 4: Recognition Letter',
                        'body'    => 'Customizable thank-you letters and certificates to celebrate volunteer contributions.'
                    ],
                ],
                'download'    => '/downloads/volunteer-management-templates.zip'
            ],
            'opensource-guidelines' => (object) [
                'title'       => 'Open Source Project Guidelines',
                'description' => 'Best practices for launching and scaling open-source, community-driven projects.',
                'sections'    => [
                    [
                        'heading' => 'Overview',
                        'body'    => 'Framework for setting up, governing, and growing open-source initiatives with clear contribution paths.'
                    ],
                    [
                        'heading' => 'Section 1: Repository Setup',
                        'body'    => 'Choose a license, create README & CODE_OF_CONDUCT, configure contribution guidelines and issue templates.'
                    ],
                    [
                        'heading' => 'Section 2: Onboarding Contributors',
                        'body'    => 'Maintainer onboarding, mentorship programs, labeling issues for newcomers, and writing good pull request templates.'
                    ],
                    [
                        'heading' => 'Section 3: Community Governance',
                        'body'    => 'Decision-making models (BDFL, committees, benevolent dictators), conflict resolution, and transparency reports.'
                    ],
                    [
                        'heading' => 'Section 4: Growth & Outreach',
                        'body'    => 'Marketing your project, creating showcase case studies, speaking at conferences, and collaborating with foundations.'
                    ],
                ],
                'download'    => '/downloads/opensource-project-guidelines.pdf'
            ],
        ];

        if (!isset($resources[$resource])) {
            abort(404);
        }

        return view('resources.show', [
            'item' => $resources[$resource],
        ]);
    }
}
