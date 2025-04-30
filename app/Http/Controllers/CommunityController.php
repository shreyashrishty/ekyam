<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    /**
     * The raw community data (no function calls here).
     * Slug => plain data array.
     */
    private array $raw = [
        'environmental-warriors' => [
            'slug'      => 'environmental-warriors',
            'name'      => 'Environmental Warriors',
            'hero_image'=> 'images/environmental-bg.jpg',
            'overview'  => 'Dedicated to environmental conservation through drives and clean-ups.',
            'details'   => 'Organizes tree plantations, river clean-ups, workshops, and policy advocacy. Partners with NGOs to promote sustainability.',
            'activities'=> [
                'Tree plantation drives',
                'Beach & river clean-ups',
                'Sustainability workshops',
                'NGO collaborations',
            ],
            'impact'    => '10,000+ trees planted & 600 tons of waste removed.',
        ],
        'tech-for-good' => [
            'slug'      => 'tech-for-good',
            'name'      => 'Tech For Good',
            'hero_image'=> 'images/techforgood-bg.jpg',
            'overview'  => 'Applying technology to solve community challenges.',
            'details'   => 'Hosts hackathons, data workshops, mentorship, and supports civic tech projects.',
            'activities'=> [
                'NGO hackathons',
                'Public health data workshops',
                'Developer mentorship',
                'Civic tech support',
            ],
            'impact'    => 'Built 15 apps & trained 300+ developers.',
        ],
        // … repeat for the other 8 communities …
        'youth-empowerment' => [
            'slug'      => 'youth-empowerment',
            'name'      => 'Youth Empowerment',
            'hero_image'=> 'images/youth-bg.jpg',
            'overview'  => 'Empowering young leaders via training & projects.',
            'details'   => 'Runs bootcamps, scholarships, networking, and startup incubators.',
            'activities'=> [
                'Leadership bootcamps',
                'Scholarships',
                'Networking events',
                'Startup incubator',
            ],
            'impact'    => 'Mentored 500+ and funded 20 startups.',
        ],
        // … etc. up to 'disaster-relief' …
    ];

    /**
     * Show the list of communities.
     */
    public function index()
    {
        // Transform raw data into objects with runtime helpers
        $communities = collect($this->raw)
            ->map(function($item) {
                return (object) array_merge($item, [
                    'hero_image' => asset($item['hero_image']),
                    'join_link'  => route('communities.show', ['community' => $item['slug']]),
                ]);
            })
            ->toArray();

        return view('communities.index', compact('communities'));
    }

    /**
     * Show the details for one community.
     *
     * @param  string  $community  Slug
     */
    public function show(string $community)
    {
        if (!array_key_exists($community, $this->raw)) {
            abort(404);
        }

        $data = $this->raw[$community];
        $communityObj = (object) array_merge($data, [
            'hero_image' => asset($data['hero_image']),
            'join_link'  => route('communities.index'),
        ]);

        return view('communities.show', ['community' => $communityObj]);
    }
}
