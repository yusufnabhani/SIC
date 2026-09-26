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
     * Baseline content matching the Samudra International Commerce mockup,
     * so the site renders fully on a fresh migrate. Edit from the admin
     * dashboard after logging in.
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

        $password = Str::random(16);
        $adminId = DB::table('users')->insertGetId([
            'name' => 'Admin',
            'role_id' => 1,
            'email' => 'admin@sic.test',
            'email_verified_at' => $now,
            'password' => Hash::make($password),
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('settings')->insert([
            'id' => 1,
            'title' => 'PT Samudra International Commerce',
            'favicon' => '',
            'keywords' => 'indonesian coffee, spices, botanicals, export, cassia cinnamon, cloves',
            'facebook_pixel' => '',
            'facebook_pixel_switch' => 0,
            'analytics' => '',
            'analytics_switch' => 0,
            'SchmeaORG' => '',
            'SchmeaORG_switch' => 0,
            'OGgraph' => '',
            'OGgraph_switch' => 0,
            'photo_id' => null,
            'address' => 'Menara Karya, 28th Floor, Jl. HR Rasuna Said Block X-5, Kav 1-2, South Jakarta, Indonesia 12950',
            'contact' => 'info@samudrainternationalcommerce.com',
            'author' => 'PT Samudra International Commerce',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('header_footer_settings')->insert([
            'id' => 1,
            'sidebar_title' => 'Get a quote',
            'sidebar_description' => '/get-a-quote',
            'typed_title' => 'Your next great ingredient starts with a conversation.',
            'typed_text' => '["Direct sourcing", "Consistent quality", "Trusted partnership"]',
            'typed_buttontext' => 'Talk to our export team',
            'typed_buttonlink' => '/get-a-quote',
            'footer_col1_subtitle' => "Connecting Indonesia's natural excellence with the world through trusted sourcing and lasting partnerships.",
            'footer_col1_title' => 'Samudra International Commerce',
            'footer_col1_buttontext' => 'Learn More',
            'footer_col1_buttonlink' => '/about-us',
            'footer_col2_title1' => 'Discover',
            'footer_col2_title2' => "Let's connect",
            'footer_col2_html1' => '<p>About Us</p>',
            'footer_col2_html2' => '<p>Contact Us</p>',
            'footer_copyright' => '&copy; ' . $now->year . ' PT Samudra International Commerce. All rights reserved.',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('home_settings')->insert([
            'id' => 1,
            'meta_title' => 'Samudra International Commerce',
            'meta_description' => 'Exceptional Indonesian coffee, spices, and botanicals. Responsibly sourced. Thoughtfully delivered.',
            'fun_title' => 'Our Achievements',
            'fun_description' => 'Placeholder stats — edit from the dashboard.',
            'count_number1' => '0', 'count_description1' => 'Clients',
            'count_number2' => '0', 'count_description2' => 'Projects',
            'count_number3' => '0', 'count_description3' => 'Years',
            'count_number4' => '0', 'count_description4' => 'Team Members',
            'about_subtitle' => 'About Us',
            'about_title' => 'Samudra International Commerce',
            'about_description' => 'Placeholder description — edit this from the admin dashboard.',
            'about_buttontext' => 'Learn More',
            'about_buttonlink' => '/about-us',
            'about_image1' => '', 'about_image2' => '',
            'about_yearstitle' => '0', 'about_yearstext' => 'Years of experience',
            'services_title' => 'Our Services',
            'projects_title' => 'Our Projects',
            'projects_subtitle' => 'What we have done',
            'blog_title' => 'Latest News',
            'blog_subtitle' => 'From our blog',

            'hero_kicker' => 'Rooted in Indonesia. Ready for the world.',
            'hero_title_line1' => 'From our land.',
            'hero_title_line2' => 'To your world.',
            'hero_description' => 'Exceptional Indonesian coffee, spices, and botanicals. Responsibly sourced. Thoughtfully delivered.',
            'hero_image' => 'home_img1_749x662.png',
            'hero_button1_text' => 'Explore our products',
            'hero_button1_link' => '/our-products',
            'hero_button2_text' => 'Discover Samudra',
            'hero_button2_link' => '/about-us',

            'value1_title' => 'Direct sourcing network',
            'value2_title' => 'Consistent product quality',
            'value3_title' => 'Transparent partnership',
            'value4_title' => 'Long-term commitment',

            'story_kicker' => 'Inside Samudra',
            'story_title' => 'See the story behind the source.',
            'story_description' => 'Take a closer look at the ingredients, people, and partnerships that connect Indonesia with the world.',
            'story_image' => 'home_img7_1282x583.png',
            'story_video_link' => '#',

            'partner_kicker' => 'More than an export partner',
            'partner_title' => 'Good products. Even better partnerships.',
            'partner_description' => 'We connect trusted Indonesian farmers, cooperatives and producers with businesses around the world. With care at every step, from responsible sourcing to export preparation.',
            'partner_image' => 'home_img8_601x510.png',
            'partner_point1_title' => 'Close to the source',
            'partner_point1_text' => "Built on relationships with Indonesia's growing communities.",
            'partner_point2_title' => 'Focused on your business',
            'partner_point2_text' => 'Clear specifications and a collaborative approach to sourcing.',
            'partner_buttontext' => 'Get to know Samudra',
            'partner_buttonlink' => '/about-us',

            'insights_kicker' => 'From origin to opportunity',

            'process_kicker' => 'How we deliver',
            'process_title' => 'From trusted origins to export-ready supply.',
            'process_description' => 'Direct sourcing, selected in-house processing, quality control and professional export coordination form one connected approach.',
            'step1_title' => 'Source & process',
            'step1_description' => 'Work with Indonesian growers and prepare selected ingredients in the forms buyers need.',
            'step1_linktext' => 'Our approach',
            'step1_linkurl' => '/approach',
            'step2_title' => 'Check & document',
            'step2_description' => 'Review product quality and coordinate documentation for the trade.',
            'step2_linktext' => 'Quality & compliance',
            'step2_linkurl' => '/quality',
            'step3_title' => 'Partner & deliver',
            'step3_description' => 'Align on the specification, destination and commercial terms with each buyer.',
            'step3_linktext' => 'Start a conversation',
            'step3_linkurl' => '/get-a-quote',

            'cta_title_line1' => "Let's grow together.",
            'cta_title_line2' => 'Your next great ingredient starts with a conversation.',
            'cta_buttontext' => 'Talk to our export team',
            'cta_buttonlink' => '/get-a-quote',

            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('about_settings')->insert([
            'id' => 1,
            'meta_title' => 'About Us - Samudra International Commerce',
            'meta_description' => "Connecting Indonesia's agricultural heritage with the possibilities of global trade.",
            'slug' => 'about-us',
            'breadcrumbs_anchor' => 'About Samudra',
            'about_subtitle' => 'Our Story',
            'about_title' => 'A bridge between land and opportunity.',
            'about_description' => 'PT Samudra International Commerce is an Indonesian trading, sourcing and processing company bringing coffee, spices and botanicals to international markets. We work with farmers, cooperatives and supply partners to help buyers source with confidence.',
            'about_buttontext' => 'Explore our portfolio',
            'about_buttonlink' => '/our-products',
            'about_image' => 'about_img1_601x510.png',
            'about_ytlink' => '',
            'member_title_section' => 'People behind the partnerships.',

            'hero_title_line1' => 'Rooted in our origins.',
            'hero_title_line2' => 'Invested in your future.',
            'hero_description' => "Connecting Indonesia's agricultural heritage with the possibilities of global trade.",

            'vision_kicker' => 'Vision & mission',
            'vision_title' => 'Growing Indonesian value in global markets.',
            'vision_description' => 'Our ambition combines international reach with enduring value for producers, employees and surrounding communities.',
            'vision_label' => 'Our vision',
            'vision_statement' => 'To become a leading global agribusiness in premium Indonesian agricultural products through integrated trading and value added manufacturing.',

            'value1_title' => 'Source responsibly',
            'value1_description' => 'Develop premium products through partnerships with farmers and local suppliers.',
            'value2_title' => 'Create more value',
            'value2_description' => 'Build efficient, hygienic and integrated processing operations.',
            'value3_title' => 'Serve global buyers',
            'value3_description' => 'Deliver dependable products, professional service and lasting partnerships.',
            'value4_title' => 'Support communities',
            'value4_description' => 'Promote sustainable practices that benefit people and preserve resources.',

            'beliefs_kicker' => 'What we believe',
            'beliefs_title' => 'Trade begins with products. Partnership begins with trust.',
            'belief1_title' => 'Direct sourcing',
            'belief1_description' => 'Relationships with growers, cooperatives and trusted supply partners.',
            'belief2_title' => 'Consistent quality',
            'belief2_description' => 'Careful product selection, handling and preparation.',
            'belief3_title' => 'Transparency',
            'belief3_description' => 'Clear communication from inquiry to shipment.',
            'belief4_title' => 'Long-term thinking',
            'belief4_description' => 'A shared commitment to sustainable business relationships.',

            'leadership_kicker' => 'Our leadership',
            'leadership_description' => 'A shared focus on dependable supply, meaningful relationships and lasting value.',

            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('contact_settings')->insert([
            'id' => 1,
            'meta_title' => 'Contact Us - Samudra International Commerce',
            'meta_description' => 'Tell us what your business needs. Let\'s explore what we can source together.',
            'slug' => 'contact',
            'breadcrumbs_anchor' => 'Contact',
            'box_icon1' => '', 'box_icon2' => '', 'box_icon3' => '',
            'box_title1' => 'Email us', 'box_title2' => 'Call us', 'box_title3' => 'Our office',
            'box_html1' => '<p>info@samudrainternationalcommerce.com</p>',
            'box_html2' => '<p>+62 823 7953 5398</p>',
            'box_html3' => 'Menara Karya, 28th Floor<br>Jl. HR Rasuna Said Block X-5, Kav 1-2<br>South Jakarta, Indonesia 12950',
            'form_title' => "Let's have a conversation.",
            'form_input_name' => 'Full name',
            'form_input_email' => 'Business email',
            'form_input_budget' => 'Company',
            'form_input_phone' => 'Phone number',
            'form_message' => 'Your message',
            'button_text' => 'Send message',
            'button_link' => '',
            'mailto' => 'info@samudrainternationalcommerce.com',
            'title' => 'Great partnerships start here.',
            'iframe_txt' => '',

            'hero_title_line1' => 'Great partnerships',
            'hero_title_line2' => 'start here.',
            'hero_description' => "Tell us what your business needs. Let's explore what we can source together.",
            'side_kicker' => 'Get in touch',
            'side_title_line1' => 'Indonesia, to',
            'side_title_line2' => 'wherever you are.',
            'warehouse_address' => 'Jl. Raya Taman Adiyasa No. 6, Blok J No. 4<br>Cikuya, Solear, Tangerang, Banten 15730',
            'hours_line1' => 'Monday–Friday · 08:00–17:00 WIB',
            'hours_line2' => 'Saturday–Sunday · By appointment',
            'map_link' => '#',

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
            'meta_title' => 'Insights - Samudra International Commerce',
            'meta_description' => 'A closer look at coffee, spices and export from PT Samudra International Commerce.',
            'slug' => 'insights',
            'breadcrumbs_anchor' => 'Insights',
            'html_sidebar1' => '',
            'html_sidebar2' => '',
            'hero_title_line1' => 'Perspectives from',
            'hero_title_line2' => 'the source.',
            'hero_description' => 'Stories about Indonesian origins, product quality and the relationships that make international trade work.',
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

        DB::table('page_settings')->insert([
            'id' => 1,

            'approach_hero_eyebrow' => 'Our approach',
            'approach_hero_title_line1' => 'From origin to delivery.',
            'approach_hero_title_accent' => 'Built on trust.',
            'approach_hero_description' => 'A sourcing and supply process designed around consistency, traceability and collaboration.',
            'approach_work_eyebrow' => 'How we work',
            'approach_work_title' => 'A clear path from grower to global buyer.',
            'approach_work_description' => 'Our 2026 company profile describes an integrated approach to sourcing, processing and export coordination.',
            'approach_step1_title' => 'Direct sourcing',
            'approach_step1_description' => 'We work with farmers, cooperatives and verified suppliers to support authenticity and responsible trading.',
            'approach_step2_title' => 'In-house processing',
            'approach_step2_description' => 'For selected products such as turmeric, ginger and galangal, we process dried slices and powders to meet export requirements.',
            'approach_step3_title' => 'Standardized handling',
            'approach_step3_description' => 'Selection, processing and inspection follow defined product specifications and quality parameters.',
            'approach_step4_title' => 'Export preparation',
            'approach_step4_description' => 'We coordinate the documentation and shipping arrangements needed for international trade.',
            'approach_value_eyebrow' => 'Value added in Indonesia',
            'approach_value_title' => 'Closer to the product. Closer to the details.',
            'approach_value_description1' => 'Processing selected rhizomes into dried slices and powders gives us more control over product form, consistency and buyer specifications.',
            'approach_value_description2' => 'Our trade team discusses grade, packaging, destination and delivery requirements with each partner. FOB and CIF terms may be available depending on the transaction.',
            'approach_value_buttontext' => 'Explore quality & compliance',

            'quality_hero_eyebrow' => 'Quality & compliance',
            'quality_hero_title_line1' => 'Confidence is built',
            'quality_hero_title_accent' => 'in the details.',
            'quality_hero_description' => 'A practical quality system for Indonesian agricultural products moving into international markets.',
            'quality_system_eyebrow' => 'Our quality system',
            'quality_system_title' => 'Care from source to shipment.',
            'quality_system_description1' => 'Quality grading, visual inspection and product specifications help us prepare ingredients for buyers. Source and handling details support traceability through the supply chain.',
            'quality_system_description2' => 'Our team prepares export documentation appropriate to the product and destination, including Commercial Invoice, Packing List, Certificate of Origin and Bill of Lading or Air Waybill where applicable.',
            'quality_pillars_eyebrow' => 'Four pillars',
            'quality_pillars_title' => 'A structured approach to reliable supply.',
            'quality_pillar1_title' => 'Quality grading',
            'quality_pillar1_description' => 'Physical and visual inspection against agreed product requirements.',
            'quality_pillar2_title' => 'Traceability',
            'quality_pillar2_description' => 'Visibility from supply origin through preparation and delivery.',
            'quality_pillar3_title' => 'Export documents',
            'quality_pillar3_description' => 'Coordination of required trade papers for the shipment and destination.',
            'quality_pillar4_title' => 'Halal compliance',
            'quality_pillar4_description' => 'Applicable halal documentation for relevant products and markets.',
            'quality_partnership_eyebrow' => 'Partnership advantage',
            'quality_partnership_title' => 'Quality. Supply. Commercial clarity.',
            'quality_partnership_description' => 'Our catalog presents export-grade products, supply reliability, competitive pricing, a structured trading process and long-term partnership as the reasons buyers work with SIC.',
            'quality_partnership_buttontext' => 'Request product details',

            'careers_hero_eyebrow' => 'Careers',
            'careers_hero_title_line1' => 'Grow with purpose.',
            'careers_hero_title_accent' => 'Connect with the world.',
            'careers_hero_description' => 'Explore opportunities to help connect Indonesian producers and international businesses.',
            'careers_departments' => 'Information Technology,Marketing,Sales,Office Management',
            'careers_empty_eyebrow' => 'Future opportunities',
            'careers_empty_title' => 'No open positions at the moment.',
            'careers_empty_description' => 'There are currently no published vacancies. Please check back for future opportunities.',
            'careers_empty_buttontext' => 'Get to know Samudra',

            'quote_hero_eyebrow' => 'Request a quotation',
            'quote_hero_title_line1' => 'Your requirements.',
            'quote_hero_title_accent' => 'Our sourcing expertise.',
            'quote_hero_description' => 'Share what you are looking for. Our export team will help you find the right product and supply solution.',
            'quote_side_eyebrow' => 'Built around your business',
            'quote_side_title' => 'A clear path from inquiry to partnership.',
            'quote_step1_title' => 'Tell us what you need',
            'quote_step1_description' => 'Product, volume and destination.',
            'quote_step2_title' => 'Align on the details',
            'quote_step2_description' => 'Specifications, packaging and availability.',
            'quote_step3_title' => 'Plan your supply',
            'quote_step3_description' => 'A quotation tailored to your requirements.',
            'quote_side_note_label' => 'Prefer a conversation?',
            'quote_side_note_linktext' => 'Contact our export team',
            'quote_form_title' => 'Request details',
            'quote_form_note' => 'Fields marked * are required.',

            'faq_hero_eyebrow' => 'Frequently asked questions',
            'faq_hero_title_line1' => 'A little clarity.',
            'faq_hero_title_accent' => 'A confident next step.',
            'faq_hero_description' => 'Find answers about our products, sourcing and quotation process.',
            'faq_side_title' => 'How can we help?',
            'faq_side_description' => "Can't find the answer you need? Talk to our export team about your requirements.",
            'faq_side_buttontext' => 'Contact our team',

            'sitemap_hero_eyebrow' => 'Sitemap',
            'sitemap_hero_title_line1' => 'One brand.',
            'sitemap_hero_title_accent' => 'Every touchpoint.',
            'sitemap_hero_description' => 'Every page on the Samudra International Commerce website, in one place.',

            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('faqs')->insert([
            ['question' => 'What products does Samudra supply?', 'answer' => 'We supply Indonesian coffee, spices and botanicals — including cassia cinnamon, cloves, pepper, nutmeg, turmeric and more. See the full catalog on Our Products.', 'order' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['question' => 'Can I request a sample?', 'answer' => 'Yes. Samples can be arranged for most products — let us know the destination and required quantity when you request a quotation.', 'order' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['question' => 'Can packaging be customized?', 'answer' => 'We support custom packaging (bag size, liner, labeling) for qualifying order volumes.', 'order' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['question' => 'What export documents are available?', 'answer' => 'Standard documentation includes Certificate of Origin, phytosanitary certificate, and commercial invoice/packing list. Halal certification is available for applicable products.', 'order' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['question' => 'How do I get pricing and order information?', 'answer' => 'Submit a request through Get a Quote with your product, volume and destination, and our export team will respond with pricing.', 'order' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['question' => 'Where is Samudra based?', 'answer' => 'Our office is in South Jakarta, Indonesia, with a warehouse in Cikuya, Solear, Tangerang, Banten.', 'order' => 6, 'created_at' => $now, 'updated_at' => $now],
        ]);

        // ---------------- Navigation ----------------
        DB::table('menus')->insert([
            ['name' => 'Home', 'link' => '/', 'on_off_submenu' => 0, 'order' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'About us', 'link' => '/about-us', 'on_off_submenu' => 0, 'order' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Our products', 'link' => '/our-products', 'on_off_submenu' => 0, 'order' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Insights', 'link' => '/insights', 'on_off_submenu' => 0, 'order' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Careers', 'link' => '/careers', 'on_off_submenu' => 0, 'order' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Contact', 'link' => '/contact', 'on_off_submenu' => 0, 'order' => 6, 'created_at' => $now, 'updated_at' => $now],
        ]);

        // ---------------- Leadership (About page) ----------------
        $leaderPhotoIds = [];
        foreach (['leader_diah_bardiah.png', 'leader_toni_hainuri.png', 'leader_ujang_yusup_nabhani.png'] as $file) {
            $leaderPhotoIds[$file] = DB::table('photos')->insertGetId(['file' => 'sic-' . $file, 'created_at' => $now, 'updated_at' => $now]);
        }
        DB::table('members')->insert([
            ['name' => 'Diah Bardiah', 'position' => 'Chief Executive Officer', 'photo_id' => $leaderPhotoIds['leader_diah_bardiah.png'], 'facebook' => '', 'twitter' => '', 'linkedin' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ujang Yusup Nabhani', 'position' => 'Chief Marketing Officer', 'photo_id' => $leaderPhotoIds['leader_ujang_yusup_nabhani.png'], 'facebook' => '', 'twitter' => '', 'linkedin' => '', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Toni Hainuri', 'position' => 'Chief Business Architect', 'photo_id' => $leaderPhotoIds['leader_toni_hainuri.png'], 'facebook' => '', 'twitter' => '', 'linkedin' => '', 'created_at' => $now, 'updated_at' => $now],
        ]);

        // ---------------- Insights (blog) ----------------
        $categoryId = DB::table('categories')->insertGetId(['name' => 'Insights', 'created_at' => $now, 'updated_at' => $now]);

        $postPhotoIds = [];
        foreach (['home_img9_409x264.png', 'home_img10_409x264.png', 'home_img11_409x264.png'] as $file) {
            $postPhotoIds[] = DB::table('photos')->insertGetId(['file' => 'sic-' . $file, 'created_at' => $now, 'updated_at' => $now]);
        }

        $posts = [
            [
                'title' => 'The world drinks coffee every day.',
                'slug' => 'the-world-drinks-coffee-every-day',
                'body' => '<h3>A character shaped by origin</h3>'
                    . '<p>Indonesia\'s coffee regions bring different identities to a global market. Gayo, Toraja and Java each offer a distinct story of growing conditions, processing and producer knowledge. For buyers, origin is a starting point for understanding the coffee.</p>'
                    . '<h3>Beyond the first sample</h3>'
                    . '<p>A successful sourcing relationship needs repeatable quality. Traceability, clear grading and reliable communication help roasters plan with confidence across shipments.</p>'
                    . '<h3>Connecting origin to opportunity</h3>'
                    . '<p>Samudra works with farming and supply partners to connect Indonesian ingredients with international buyers. The objective is a relationship that respects origin and supports consistent supply.</p>'
                    . '<blockquote style="border-left:3px solid var(--sic-amber);padding-left:20px;margin:28px 0;font-family:\'Manrope\',sans-serif;font-weight:700;font-size:22px;color:var(--sic-navy);">From Indonesian origins to lasting global partnerships.</blockquote>',
            ],
            [
                'title' => 'Most import problems start before the shipment.',
                'slug' => 'most-import-problems-start-before-the-shipment',
                'body' => '<h3>Specification comes first</h3>'
                    . '<p>Most issues buyers encounter trace back to unclear specification agreed before the order — grade, moisture, screen size and packaging all need to be confirmed in writing before production begins.</p>'
                    . '<h3>Documentation, prepared early</h3>'
                    . '<p>Certificate of Origin, phytosanitary certificates and, where relevant, Halal certification take time to prepare correctly. Coordinating them early avoids delays at the port.</p>'
                    . '<h3>A single point of coordination</h3>'
                    . '<p>Samudra manages sourcing, quality checks and export documentation as one connected process, so buyers have one point of contact from inquiry to shipment.</p>'
                    . '<blockquote style="border-left:3px solid var(--sic-amber);padding-left:20px;margin:28px 0;font-family:\'Manrope\',sans-serif;font-weight:700;font-size:22px;color:var(--sic-navy);">Clear specification prevents most shipment problems.</blockquote>',
            ],
            [
                'title' => 'Spices are easy to grow. Hard to standardize.',
                'slug' => 'spices-are-easy-to-grow-hard-to-standardize',
                'body' => '<h3>Variation is the default</h3>'
                    . '<p>Cassia, cloves and pepper grow across many smallholder farms, each with its own harvest timing and post-harvest handling. Left unmanaged, that variation shows up in the final product.</p>'
                    . '<h3>Building consistency deliberately</h3>'
                    . '<p>Consistent quality comes from deliberate process — selection at intake, controlled drying, and grading against agreed specification before packing.</p>'
                    . '<h3>What buyers can expect</h3>'
                    . '<p>Working with Samudra means every batch is checked against the same standard, so what arrives matches what was ordered.</p>'
                    . '<blockquote style="border-left:3px solid var(--sic-amber);padding-left:20px;margin:28px 0;font-family:\'Manrope\',sans-serif;font-weight:700;font-size:22px;color:var(--sic-navy);">Consistent quality is a process, not an accident.</blockquote>',
            ],
        ];

        foreach ($posts as $i => $post) {
            DB::table('posts')->insert([
                'locale' => 'en',
                'user_id' => $adminId,
                'category_id' => $categoryId,
                'photo_id' => $postPhotoIds[$i],
                'title' => $post['title'],
                'slug' => $post['slug'],
                'body' => $post['body'],
                'meta_title' => $post['title'],
                'meta_description' => strip_tags($post['body']),
                'created_at' => $now->copy()->subDays(3 - $i),
                'updated_at' => $now,
            ]);
        }

        // ---------------- Products ----------------
        $products = [
            ['name' => 'Coffee', 'slug' => 'coffee', 'category' => 'coffee_cocoa', 'botanical_name' => 'Arabica & Robusta', 'origin' => 'Gayo, Aceh · Java, Indonesia', 'image' => 'coffee.png', 'description' => "Green coffee beans from Indonesia's distinctive growing regions, selected for roasters, importers and coffee brands.", 'forms' => [
                ['name' => 'Gayo Arabica Green Coffee Beans', 'origin' => 'Gayo Highlands, Aceh', 'processing' => 'Semi-washed / full-washed', 'screen' => '16 up', 'grade' => 'Commercial / buyer specification', 'moisture' => '12–13%', 'defect_standard' => 'According to buyer specification', 'packaging' => '60 kg new jute bag; GrainPro liner optional'],
                ['name' => 'Java Robusta Green Coffee Beans', 'origin' => 'East Java', 'processing' => 'Dry / wet-hulled', 'screen' => '15 up', 'grade' => 'Commercial / buyer specification', 'moisture' => '12–13%', 'defect_standard' => 'According to buyer specification', 'packaging' => '60 kg new jute bag; GrainPro liner optional'],
            ]],
            ['name' => 'Cassia Cinnamon', 'slug' => 'cassia-cinamon', 'category' => 'spices', 'botanical_name' => 'Cinnamomum burmannii', 'origin' => 'West Sumatra, Indonesia', 'image' => 'cassia_cinnamon.png', 'description' => 'Warm, aromatic cassia cinnamon in cuts and forms suited to food manufacturing and retail packing.', 'forms' => [
                ['name' => 'Cassia Vera Whole', 'origin' => 'Kerinci, West Sumatra', 'processing' => 'Sun-dried', 'grade' => 'AA / A / B', 'moisture' => '≤13%', 'packaging' => '25 kg bale'],
            ]],
            ['name' => 'Cloves', 'slug' => 'cloves', 'category' => 'spices', 'botanical_name' => 'Syzygium aromaticum', 'origin' => 'Sulawesi & Maluku, Indonesia', 'image' => 'cloves.png', 'description' => 'Rich, aromatic whole cloves rooted in tradition, hand-sorted for oil content and appearance.', 'forms' => [
                ['name' => 'Whole Cloves (Hand-picked)', 'origin' => 'Sulawesi', 'processing' => 'Sun-dried', 'grade' => 'Export grade', 'moisture' => '≤12%', 'packaging' => '25 kg PP bag'],
            ]],
            ['name' => 'Ginger', 'slug' => 'ginger', 'category' => 'botanicals', 'botanical_name' => 'Zingiber officinale', 'origin' => 'Central Java, Indonesia', 'image' => 'ginger.png', 'description' => 'Fresh and dried ginger for food, beverage and pharmaceutical applications.', 'forms' => [
                ['name' => 'Dried Ginger Slices', 'processing' => 'Sun-dried, sliced', 'moisture' => '≤10%', 'packaging' => '25 kg carton'],
            ]],
            ['name' => 'Galangal', 'slug' => 'galangal', 'category' => 'botanicals', 'botanical_name' => 'Alpinia galanga', 'origin' => 'Java, Indonesia', 'image' => 'galangal.png', 'description' => 'Aromatic galangal root, fresh or dried, for culinary and herbal use.', 'forms' => [
                ['name' => 'Dried Galangal Slices', 'processing' => 'Sun-dried, sliced', 'moisture' => '≤10%', 'packaging' => '25 kg carton'],
            ]],
            ['name' => 'Turmeric', 'slug' => 'turmeric', 'category' => 'botanicals', 'botanical_name' => 'Curcuma longa', 'origin' => 'Java, Indonesia', 'image' => 'turmeric.png', 'description' => 'Vivid Indonesian turmeric, available fresh, dried or as powder.', 'forms' => [
                ['name' => 'Dried Turmeric Slices', 'processing' => 'Sun-dried, sliced', 'moisture' => '≤10%', 'packaging' => '25 kg carton'],
            ]],
            ['name' => 'Java Turmeric', 'slug' => 'java-turmeric', 'category' => 'botanicals', 'botanical_name' => 'Curcuma xanthorrhiza', 'origin' => 'Java, Indonesia', 'image' => 'java_turmeric.jpeg', 'description' => 'Temulawak / Java turmeric, valued in traditional herbal preparations.', 'forms' => []],
            ['name' => 'White Pepper', 'slug' => 'white-pepper', 'category' => 'spices', 'botanical_name' => 'Piper nigrum', 'origin' => 'Bangka Belitung, Indonesia', 'image' => 'white_pepper.png', 'description' => 'Clean, pungent Muntok white pepper for food manufacturing and export.', 'forms' => [
                ['name' => 'Muntok White Pepper', 'origin' => 'Bangka Belitung', 'grade' => 'ASTA / FAQ', 'moisture' => '≤13%', 'packaging' => '25/50 kg PP bag'],
            ]],
            ['name' => 'Black Pepper', 'slug' => 'black-pepper', 'category' => 'spices', 'botanical_name' => 'Piper nigrum', 'origin' => 'Lampung, Indonesia', 'image' => 'black_pepper.png', 'description' => 'Bold Lampung black pepper, hand-selected for density and aroma.', 'forms' => [
                ['name' => 'Lampung Black Pepper', 'origin' => 'Lampung', 'grade' => 'ASTA / FAQ', 'moisture' => '≤13%', 'packaging' => '25/50 kg PP bag'],
            ]],
            ['name' => 'Cardamom', 'slug' => 'cardamom', 'category' => 'spices', 'botanical_name' => 'Amomum compactum', 'origin' => 'Java, Indonesia', 'image' => 'cardamom.jpeg', 'description' => 'Indonesian cardamom for spice blends and traditional medicine.', 'forms' => []],
            ['name' => 'Clove Stems', 'slug' => 'clove-stems', 'category' => 'spices', 'botanical_name' => 'Syzygium aromaticum', 'origin' => 'Sulawesi, Indonesia', 'image' => 'clove_stems.jpeg', 'description' => 'Clove stems for oil extraction and industrial use.', 'forms' => []],
            ['name' => 'Nutmeg', 'slug' => 'nutmeg', 'category' => 'spices', 'botanical_name' => 'Myristica fragrans', 'origin' => 'Maluku & West Sumatra, Indonesia', 'image' => 'nutmeg.png', 'description' => 'Indonesian nutmeg, the origin of the spice, in whole and split forms.', 'forms' => [
                ['name' => 'Whole Nutmeg (ABCD grade)', 'origin' => 'Siau, North Sulawesi', 'grade' => 'ABCD', 'moisture' => '≤10%', 'packaging' => '25/50 kg PP bag'],
            ]],
            ['name' => 'Candlenuts', 'slug' => 'candlenuts', 'category' => 'spices', 'botanical_name' => 'Aleurites moluccanus', 'origin' => 'Sulawesi, Indonesia', 'image' => 'candlenuts.png', 'description' => 'Indonesian candlenuts (kemiri), a staple ingredient in Southeast Asian cuisine.', 'forms' => []],
            ['name' => 'Vanilla Beans', 'slug' => 'vanilla-beans', 'category' => 'spices', 'botanical_name' => 'Vanilla planifolia', 'origin' => 'Papua & Bali, Indonesia', 'image' => 'vanilla_beans.png', 'description' => 'Indonesian cured vanilla beans, prized for their rich flavor profile.', 'forms' => []],
            ['name' => 'Cocoa Beans', 'slug' => 'cocoa-beans', 'category' => 'coffee_cocoa', 'botanical_name' => 'Theobroma cacao', 'origin' => 'Sulawesi, Indonesia', 'image' => 'cocoa_beans.png', 'description' => 'Fermented Indonesian cocoa beans for chocolate manufacturing.', 'forms' => []],
            ['name' => 'Moringa', 'slug' => 'moringa', 'category' => 'botanicals', 'botanical_name' => 'Moringa oleifera', 'origin' => 'East Java, Indonesia', 'image' => 'moringa.png', 'description' => 'Indonesian moringa leaf powder, a nutrient-dense superfood ingredient.', 'forms' => []],
            ['name' => 'Aromatic Ginger', 'slug' => 'aromatic-ginger', 'category' => 'botanicals', 'botanical_name' => 'Kaempferia galanga', 'origin' => 'Java, Indonesia', 'image' => 'aromatic_ginger.jpeg', 'description' => 'Kencur / aromatic ginger, used in traditional Indonesian herbal drinks.', 'forms' => []],
            ['name' => 'Noni', 'slug' => 'noni', 'category' => 'botanicals', 'botanical_name' => 'Morinda citrifolia', 'origin' => 'Java, Indonesia', 'image' => 'noni.jpeg', 'description' => 'Dried noni fruit for herbal and nutraceutical applications.', 'forms' => []],
        ];

        foreach ($products as $order => $p) {
            $productId = DB::table('products')->insertGetId([
                'name' => $p['name'],
                'slug' => $p['slug'],
                'category' => $p['category'],
                'botanical_name' => $p['botanical_name'],
                'description' => $p['description'],
                'origin' => $p['origin'],
                'image' => $p['image'],
                'order' => $order + 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            foreach ($p['forms'] as $fi => $form) {
                DB::table('product_forms')->insert(array_merge([
                    'product_id' => $productId,
                    'order' => $fi + 1,
                    'created_at' => $now,
                    'updated_at' => $now,
                ], $form, [
                    'origin' => $form['origin'] ?? null,
                    'processing' => $form['processing'] ?? null,
                    'screen' => $form['screen'] ?? null,
                    'grade' => $form['grade'] ?? null,
                    'moisture' => $form['moisture'] ?? null,
                    'defect_standard' => $form['defect_standard'] ?? null,
                    'packaging' => $form['packaging'] ?? null,
                ]));
            }
        }

        $this->command->info("Admin login -> email: admin@sic.test | password: {$password}");
    }
}
