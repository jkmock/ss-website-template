<?php
/**
 * Template part for displaying team members
 *
 * @package SkySouth_Website
 */

$team_members = array(
    array(
        'name' => 'Kevin Mock',
        'title' => 'President',
        'image' => get_template_directory_uri() . '/assets/images/team/kevin-mock-headshot.webp',
        'description' => 'Kevin has over 30 years of flight experience and more than 9,000 hours in a wide range of aircraft, including the C-130, T-38, Baron, and several Citation jets. In 2003, he founded SkySouth with a single Baron. Five years later, he expanded the business by launching SkySouth Aviation Services, a full-service fixed base operator located at the Burlington-Alamance Regional Airport.',
    ),
    array(
        'name' => 'David Carr',
        'title' => 'Chief Pilot',
        'image' => get_template_directory_uri() . '/assets/images/team/david-carr-headshot.webp',
        'description' => 'David has flown high-performance aircraft for more than 25 years, accumulating over 7,500 hours of flight time. When he’s not flying, he enjoys outdoor adventure sports, hunting, and traveling with his family. Originally from West Virginia and a graduate of Marshall University, David has called North Carolina home since 1995.',
    ),
    array(
        'name' => 'Mike Ward',
        'title' => 'Captain',
        'image' => get_template_directory_uri() . '/assets/images/team/mike-ward-headshot.webp',
        'description' => 'Mike joined SkySouth in 2023 as a Captain. Originally from Burlington, Mike brings extensive experience and a deep passion for aviation to the team. He began flying at the age of 17 and has since built a diverse career in the industry. Before joining SkySouth, Mike spent 20 years in aircraft maintenance and 17 years as a flight instructor. He is a graduate of Liberty University, where he earned a B.S. in Aeronautics, and he now holds an Airline Transport Pilot certificate.',
    ),
    array(
        'name' => 'Paul LoRusso',
        'title' => 'Captain',
        'image' => get_template_directory_uri() . '/assets/images/team/paul-lorusso-headshot.webp',
        'description' => 'Paul has been flying since 1985 and flying for Sky South since 2022. He donates his time as a flight instructor to Missionary Air Group, teaching missionaries to become pilots. He also enjoys spending time with his children and grandchildren. He and his wife, Julie, live in Pittsboro and are active in their local church.',
    ),
    array(
        'name' => 'Sharon Raub',
        'title' => 'Captain',
        'image' => get_template_directory_uri() . '/assets/images/team/sharon-raub-headshot.webp',
        'description' => 'Sharon is a captain at SkySouth Aviation with extensive turbine jet experience and a strong background across multiple facets of the aviation industry. A Texas native, she has been based in North Carolina for over a decade and finds the critical transport work she does with SkySouth to be among the most meaningful aspects of her flying career.',
    ),
    array(
        'name' => 'Reuben Savits',
        'title' => 'Director of Business Operations',
        'image' => get_template_directory_uri() . '/assets/images/team/reuben-savits-headshot.webp',
        'description' => 'Reuben has been part of SkySouth since 2017 and acts as controller, human resources, and oversees accounts payable and receivable. He previously managed charter quotes and continues to play a key role in business operations. In his free time, Reuben enjoys traveling and spending time with his family.',
    ),
    array(
        'name' => 'Sarah Vickers',
        'title' => 'Dispatch Coordinator and Accounting',
        'image' => get_template_directory_uri() . '/assets/images/team/sarah-vickers-headshot.webp',
        'description' => 'Sarah has been part of SkySouth since 2022. She began her career on the line staff, gaining hands-on experience with aircraft operations before transitioning into her current role in Dispatch Coordinating and Accounting. Sarah plays a vital role in coordinating daily flight operations, managing schedules, and maintaining financial records.',
    ),
    array(
        'name' => 'Jack Huffines',
        'title' => 'Second in Command',
        'image' => get_template_directory_uri() . '/assets/images/team/jack-huffines-headshot.webp',
        'description' => 'Jack joined the SkySouth team in 2019 as a Line Service Technician and later transitioned to his current role as a pilot. Since then, he has accumulated over 1,000 flight hours as Second in Command. He holds a degree in Meteorology from the University of North Carolina at Asheville. Outside of aviation, Jack enjoys storm chasing and swimming.',
    ),
    array(
        'name' => 'Parker Shelton',
        'title' => 'Second in Command',
        'image' => get_template_directory_uri() . '/assets/images/team/parker-shelton-headshot.webp',
        'description' => 'Parker grew up in an aviation family and has been flying his entire life. While flying across the country with his family in a C182, his passion for aviation was fully sparked. He graduated from NC State University and worked as an aircraft broker before deciding to fly professionally. Parker started flying for SkySouth in 2024 and is the second member of his family to fly for SkySouth.',
    ),
);
?>

<section class="py-16 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="mb-16 text-center">
                <h2 class="font-serif text-4xl sm:text-5xl font-light text-foreground">
                    Team Members
                </h2>
            </div>

            <!-- Team Members Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 lg:gap-16">
                <?php foreach ($team_members as $member) : ?>
                    <div class="flex flex-col items-center text-center">
                        <!-- Photo -->
                        <div class="mb-6 w-64 h-64 overflow-hidden">
                            <img
                                src="<?php echo esc_url($member['image']); ?>"
                                alt="<?php echo esc_attr($member['name']); ?>"
                                class="w-full h-full object-cover"
                            />
                        </div>

                        <!-- Name -->
                        <h3 class="font-serif text-2xl sm:text-3xl font-light text-foreground mb-2">
                            <?php echo esc_html($member['name']); ?>
                        </h3>

                        <!-- Title -->
                        <p class="text-sm font-medium tracking-wider uppercase text-primary mb-4">
                            <?php echo esc_html($member['title']); ?>
                        </p>

                        <!-- Description -->
                        <p class="text-base text-foreground/70 font-light leading-relaxed max-w-md text-left">
                            <?php echo esc_html($member['description']); ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
