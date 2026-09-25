<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Minimal placeholder content so the site renders locally.
     * Edit everything here from the admin dashboard after logging in.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        DB::table('roles')->insert([
            ['id' => 1, 'name' => 'administrator', 'created_at' => $now, 'updated_at' => $now],
        ]);

        DB::table('languages')->insert([
            ['id' => 1, 'name' => 'English', 'code' => 'en', 'is_default' => 1, 'rtl' => 0, 'created_at' => $now, 'updated_at' => $now],
        ]);

        DB::table('settings')->insert([
            'id' => 1,
            'title' => 'Samudra International Commerce',
            'favicon' => '',
            'keywords' => 'samudra, international, commerce',
            'facebook_pixel' => '',
            'facebook_pixel_switch' => 0,
            'analytics' => '',
            'analytics_switch' => 0,
            'SchmeaORG' => '',
            'SchmeaORG_switch' => 0,
            'OGgraph' => '',
            'OGgraph_switch' => 0,
            'photo_id' => null,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('header_footer_settings')->insert([
            'id' => 1,
            'sidebar_title' => 'Samudra International Commerce',
            'sidebar_description' => 'Official website of Samudra International Commerce.',
            'typed_title' => 'Samudra International Commerce',
            'typed_text' => 'Trusted Trading Partner',
            'typed_buttontext' => 'Contact Us',
            'typed_buttonlink' => '/contact',
            'footer_col1_subtitle' => 'About',
            'footer_col1_title' => 'Samudra International Commerce',
            'footer_col1_buttontext' => 'Learn More',
            'footer_col1_buttonlink' => '/about',
            'footer_col2_title1' => 'Company',
            'footer_col2_title2' => 'Contact',
            'footer_col2_html1' => '<p>About Us</p>',
            'footer_col2_html2' => '<p>Contact Us</p>',
            'footer_copyright' => '&copy; ' . $now->year . ' Samudra International Commerce. All rights reserved.',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('home_settings')->insert([
            'id' => 1,
            'meta_title' => 'Samudra International Commerce',
            'meta_description' => 'Official website of Samudra International Commerce.',
            'fun_title' => 'Our Achievements',
            'fun_description' => 'Placeholder stats — edit from the dashboard.',
            'count_number1' => '0',
            'count_description1' => 'Clients',
            'count_number2' => '0',
            'count_description2' => 'Projects',
            'count_number3' => '0',
            'count_description3' => 'Years',
            'count_number4' => '0',
            'count_description4' => 'Team Members',
            'about_subtitle' => 'About Us',
            'about_title' => 'Samudra International Commerce',
            'about_description' => 'Placeholder description — edit this from the admin dashboard.',
            'about_buttontext' => 'Learn More',
            'about_buttonlink' => '/about',
            'about_image1' => '',
            'about_image2' => '',
            'about_yearstitle' => '0',
            'about_yearstext' => 'Years of experience',
            'services_title' => 'Our Services',
            'projects_title' => 'Our Projects',
            'projects_subtitle' => 'What we have done',
            'blog_title' => 'Latest News',
            'blog_subtitle' => 'From our blog',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('about_settings')->insert([
            'id' => 1,
            'meta_title' => 'About Us - Samudra International Commerce',
            'meta_description' => 'About Samudra International Commerce.',
            'slug' => 'about-us',
            'breadcrumbs_anchor' => 'About Us',
            'about_subtitle' => 'About Us',
            'about_title' => 'Samudra International Commerce',
            'about_description' => 'Placeholder description — edit this from the admin dashboard.',
            'about_buttontext' => 'Contact Us',
            'about_buttonlink' => '/contact',
            'about_image' => '',
            'about_ytlink' => '',
            'member_title_section' => 'Our Team',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('contact_settings')->insert([
            'id' => 1,
            'meta_title' => 'Contact Us - Samudra International Commerce',
            'meta_description' => 'Contact Samudra International Commerce.',
            'slug' => 'contact',
            'breadcrumbs_anchor' => 'Contact',
            'box_icon1' => '', 'box_icon2' => '', 'box_icon3' => '',
            'box_title1' => 'Address', 'box_title2' => 'Phone', 'box_title3' => 'Email',
            'box_html1' => '<p>Placeholder address</p>',
            'box_html2' => '<p>Placeholder phone</p>',
            'box_html3' => '<p>Placeholder email</p>',
            'form_title' => 'Get In Touch',
            'form_input_name' => 'Name',
            'form_input_email' => 'Email',
            'form_input_budget' => 'Subject',
            'form_input_phone' => 'Phone',
            'form_message' => 'Message',
            'button_text' => 'Send',
            'button_link' => '',
            'mailto' => 'noreply@sic.test',
            'title' => 'Contact Us',
            'iframe_txt' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('portfolio_settings')->insert([
            'id' => 1,
            'meta_title' => 'Portfolio - Samudra International Commerce',
            'meta_description' => 'Portfolio of Samudra International Commerce.',
            'slug' => 'portfolio',
            'breadcrumbs_anchor' => 'Portfolio',
            'title' => 'Our Portfolio',
            'description' => 'Placeholder description — edit this from the admin dashboard.',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('blog_settings')->insert([
            'id' => 1,
            'meta_title' => 'Blog - Samudra International Commerce',
            'meta_description' => 'Blog of Samudra International Commerce.',
            'slug' => 'blog',
            'breadcrumbs_anchor' => 'Blog',
            'html_sidebar1' => '',
            'html_sidebar2' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('pricing_settings')->insert([
            'id' => 1,
            'meta_title' => 'Pricing - Samudra International Commerce',
            'meta_description' => 'Pricing of Samudra International Commerce.',
            'slug' => 'pricing',
            'breadcrumbs_anchor' => 'Pricing',
            'title' => 'Our Pricing',
            'description' => 'Placeholder description — edit this from the admin dashboard.',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $password = Str::random(16);

        DB::table('users')->insert([
            'name' => 'Admin',
            'role_id' => 1,
            'email' => 'admin@sic.test',
            'email_verified_at' => $now,
            'password' => Hash::make($password),
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $this->command->info("Admin login -> email: admin@sic.test | password: {$password}");
    }
}
