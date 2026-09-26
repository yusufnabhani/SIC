<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'language_id',

        'approach_hero_eyebrow', 'approach_hero_title_line1', 'approach_hero_title_accent', 'approach_hero_description',
        'approach_work_eyebrow', 'approach_work_title', 'approach_work_description',
        'approach_step1_title', 'approach_step1_description',
        'approach_step2_title', 'approach_step2_description',
        'approach_step3_title', 'approach_step3_description',
        'approach_step4_title', 'approach_step4_description',
        'approach_value_eyebrow', 'approach_value_title', 'approach_value_description1', 'approach_value_description2', 'approach_value_buttontext',

        'quality_hero_eyebrow', 'quality_hero_title_line1', 'quality_hero_title_accent', 'quality_hero_description',
        'quality_system_eyebrow', 'quality_system_title', 'quality_system_description1', 'quality_system_description2',
        'quality_pillars_eyebrow', 'quality_pillars_title',
        'quality_pillar1_title', 'quality_pillar1_description',
        'quality_pillar2_title', 'quality_pillar2_description',
        'quality_pillar3_title', 'quality_pillar3_description',
        'quality_pillar4_title', 'quality_pillar4_description',
        'quality_partnership_eyebrow', 'quality_partnership_title', 'quality_partnership_description', 'quality_partnership_buttontext',

        'careers_hero_eyebrow', 'careers_hero_title_line1', 'careers_hero_title_accent', 'careers_hero_description',
        'careers_departments',
        'careers_empty_eyebrow', 'careers_empty_title', 'careers_empty_description', 'careers_empty_buttontext',

        'quote_hero_eyebrow', 'quote_hero_title_line1', 'quote_hero_title_accent', 'quote_hero_description',
        'quote_side_eyebrow', 'quote_side_title',
        'quote_step1_title', 'quote_step1_description',
        'quote_step2_title', 'quote_step2_description',
        'quote_step3_title', 'quote_step3_description',
        'quote_side_note_label', 'quote_side_note_linktext',
        'quote_form_title', 'quote_form_note',

        'faq_hero_eyebrow', 'faq_hero_title_line1', 'faq_hero_title_accent', 'faq_hero_description',
        'faq_side_title', 'faq_side_description', 'faq_side_buttontext',

        'sitemap_hero_eyebrow', 'sitemap_hero_title_line1', 'sitemap_hero_title_accent', 'sitemap_hero_description',
    ];

    public function departmentList(): array
    {
        return array_filter(array_map('trim', explode(',', $this->careers_departments ?? '')));
    }
}
