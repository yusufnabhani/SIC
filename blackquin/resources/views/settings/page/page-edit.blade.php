@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Page content (Approach, Quality, Careers, Quote, FAQ, Sitemap)</h1>

    @if ($message = Session::get('setting_success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times"></i></button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @include('includes.form-errors')

    <div class="row">
        <div class="col-md-12">

            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3"><h6 class="m-0 font-weight-bold text-dark">Our Approach page</h6></div>
                <div class="card-body">
                    <form action="{{ route('page-setting.update', $setting->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-4"><div class="form-group"><strong>Hero eyebrow</strong><input type="text" name="approach_hero_eyebrow" class="form-control" value="{{ $setting->approach_hero_eyebrow }}"></div></div>
                            <div class="col-md-4"><div class="form-group"><strong>Hero title line 1</strong><input type="text" name="approach_hero_title_line1" class="form-control" value="{{ $setting->approach_hero_title_line1 }}"></div></div>
                            <div class="col-md-4"><div class="form-group"><strong>Hero title accent (line 2)</strong><input type="text" name="approach_hero_title_accent" class="form-control" value="{{ $setting->approach_hero_title_accent }}"></div></div>
                        </div>
                        <div class="form-group"><strong>Hero description</strong><textarea name="approach_hero_description" class="form-control" rows="2">{{ $setting->approach_hero_description }}</textarea></div>

                        <hr>
                        <div class="row">
                            <div class="col-md-6"><div class="form-group"><strong>"How we work" eyebrow</strong><input type="text" name="approach_work_eyebrow" class="form-control" value="{{ $setting->approach_work_eyebrow }}"></div></div>
                            <div class="col-md-6"><div class="form-group"><strong>"How we work" title</strong><input type="text" name="approach_work_title" class="form-control" value="{{ $setting->approach_work_title }}"></div></div>
                        </div>
                        <div class="form-group"><strong>"How we work" description</strong><textarea name="approach_work_description" class="form-control" rows="2">{{ $setting->approach_work_description }}</textarea></div>

                        <hr>
                        @for ($i = 1; $i <= 4; $i++)
                        <div class="row">
                            <div class="col-md-4"><div class="form-group"><strong>Step {{ $i }} title</strong><input type="text" name="approach_step{{ $i }}_title" class="form-control" value="{{ $setting->{'approach_step'.$i.'_title'} }}"></div></div>
                            <div class="col-md-8"><div class="form-group"><strong>Step {{ $i }} description</strong><input type="text" name="approach_step{{ $i }}_description" class="form-control" value="{{ $setting->{'approach_step'.$i.'_description'} }}"></div></div>
                        </div>
                        @endfor

                        <hr>
                        <div class="row">
                            <div class="col-md-6"><div class="form-group"><strong>Value section eyebrow</strong><input type="text" name="approach_value_eyebrow" class="form-control" value="{{ $setting->approach_value_eyebrow }}"></div></div>
                            <div class="col-md-6"><div class="form-group"><strong>Value section title</strong><input type="text" name="approach_value_title" class="form-control" value="{{ $setting->approach_value_title }}"></div></div>
                        </div>
                        <div class="form-group"><strong>Value description 1</strong><textarea name="approach_value_description1" class="form-control" rows="2">{{ $setting->approach_value_description1 }}</textarea></div>
                        <div class="form-group"><strong>Value description 2</strong><textarea name="approach_value_description2" class="form-control" rows="2">{{ $setting->approach_value_description2 }}</textarea></div>
                        <div class="form-group"><strong>Value button text</strong><input type="text" name="approach_value_buttontext" class="form-control" value="{{ $setting->approach_value_buttontext }}"></div>

                        <div class="text-right"><button type="submit" class="btn btn-primary">Update</button></div>
                    </form>
                </div>
            </div>
            <!-- /Approach -->

            <!-- Quality -->
            <div class="card shadow mb-4">
                <div class="card-header py-3"><h6 class="m-0 font-weight-bold text-dark">Quality & Compliance page</h6></div>
                <div class="card-body">
                    <form action="{{ route('page-setting.update', $setting->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-4"><div class="form-group"><strong>Hero eyebrow</strong><input type="text" name="quality_hero_eyebrow" class="form-control" value="{{ $setting->quality_hero_eyebrow }}"></div></div>
                            <div class="col-md-4"><div class="form-group"><strong>Hero title line 1</strong><input type="text" name="quality_hero_title_line1" class="form-control" value="{{ $setting->quality_hero_title_line1 }}"></div></div>
                            <div class="col-md-4"><div class="form-group"><strong>Hero title accent (line 2)</strong><input type="text" name="quality_hero_title_accent" class="form-control" value="{{ $setting->quality_hero_title_accent }}"></div></div>
                        </div>
                        <div class="form-group"><strong>Hero description</strong><textarea name="quality_hero_description" class="form-control" rows="2">{{ $setting->quality_hero_description }}</textarea></div>

                        <hr>
                        <div class="row">
                            <div class="col-md-6"><div class="form-group"><strong>Quality system eyebrow</strong><input type="text" name="quality_system_eyebrow" class="form-control" value="{{ $setting->quality_system_eyebrow }}"></div></div>
                            <div class="col-md-6"><div class="form-group"><strong>Quality system title</strong><input type="text" name="quality_system_title" class="form-control" value="{{ $setting->quality_system_title }}"></div></div>
                        </div>
                        <div class="form-group"><strong>Quality system description 1</strong><textarea name="quality_system_description1" class="form-control" rows="2">{{ $setting->quality_system_description1 }}</textarea></div>
                        <div class="form-group"><strong>Quality system description 2</strong><textarea name="quality_system_description2" class="form-control" rows="2">{{ $setting->quality_system_description2 }}</textarea></div>

                        <hr>
                        <div class="row">
                            <div class="col-md-6"><div class="form-group"><strong>Pillars eyebrow</strong><input type="text" name="quality_pillars_eyebrow" class="form-control" value="{{ $setting->quality_pillars_eyebrow }}"></div></div>
                            <div class="col-md-6"><div class="form-group"><strong>Pillars title</strong><input type="text" name="quality_pillars_title" class="form-control" value="{{ $setting->quality_pillars_title }}"></div></div>
                        </div>
                        @for ($i = 1; $i <= 4; $i++)
                        <div class="row">
                            <div class="col-md-4"><div class="form-group"><strong>Pillar {{ $i }} title</strong><input type="text" name="quality_pillar{{ $i }}_title" class="form-control" value="{{ $setting->{'quality_pillar'.$i.'_title'} }}"></div></div>
                            <div class="col-md-8"><div class="form-group"><strong>Pillar {{ $i }} description</strong><input type="text" name="quality_pillar{{ $i }}_description" class="form-control" value="{{ $setting->{'quality_pillar'.$i.'_description'} }}"></div></div>
                        </div>
                        @endfor

                        <hr>
                        <div class="row">
                            <div class="col-md-6"><div class="form-group"><strong>Partnership eyebrow</strong><input type="text" name="quality_partnership_eyebrow" class="form-control" value="{{ $setting->quality_partnership_eyebrow }}"></div></div>
                            <div class="col-md-6"><div class="form-group"><strong>Partnership title</strong><input type="text" name="quality_partnership_title" class="form-control" value="{{ $setting->quality_partnership_title }}"></div></div>
                        </div>
                        <div class="form-group"><strong>Partnership description</strong><textarea name="quality_partnership_description" class="form-control" rows="2">{{ $setting->quality_partnership_description }}</textarea></div>
                        <div class="form-group"><strong>Partnership button text</strong><input type="text" name="quality_partnership_buttontext" class="form-control" value="{{ $setting->quality_partnership_buttontext }}"></div>

                        <div class="text-right"><button type="submit" class="btn btn-primary">Update</button></div>
                    </form>
                </div>
            </div>
            <!-- /Quality -->

            <!-- Careers -->
            <div class="card shadow mb-4">
                <div class="card-header py-3"><h6 class="m-0 font-weight-bold text-dark">Careers page</h6></div>
                <div class="card-body">
                    <form action="{{ route('page-setting.update', $setting->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-4"><div class="form-group"><strong>Hero eyebrow</strong><input type="text" name="careers_hero_eyebrow" class="form-control" value="{{ $setting->careers_hero_eyebrow }}"></div></div>
                            <div class="col-md-4"><div class="form-group"><strong>Hero title line 1</strong><input type="text" name="careers_hero_title_line1" class="form-control" value="{{ $setting->careers_hero_title_line1 }}"></div></div>
                            <div class="col-md-4"><div class="form-group"><strong>Hero title accent (line 2)</strong><input type="text" name="careers_hero_title_accent" class="form-control" value="{{ $setting->careers_hero_title_accent }}"></div></div>
                        </div>
                        <div class="form-group"><strong>Hero description</strong><textarea name="careers_hero_description" class="form-control" rows="2">{{ $setting->careers_hero_description }}</textarea></div>
                        <div class="form-group"><strong>Departments (comma-separated)</strong><input type="text" name="careers_departments" class="form-control" value="{{ $setting->careers_departments }}"></div>

                        <hr>
                        <div class="row">
                            <div class="col-md-6"><div class="form-group"><strong>Empty-state eyebrow</strong><input type="text" name="careers_empty_eyebrow" class="form-control" value="{{ $setting->careers_empty_eyebrow }}"></div></div>
                            <div class="col-md-6"><div class="form-group"><strong>Empty-state title</strong><input type="text" name="careers_empty_title" class="form-control" value="{{ $setting->careers_empty_title }}"></div></div>
                        </div>
                        <div class="form-group"><strong>Empty-state description</strong><textarea name="careers_empty_description" class="form-control" rows="2">{{ $setting->careers_empty_description }}</textarea></div>
                        <div class="form-group"><strong>Empty-state button text</strong><input type="text" name="careers_empty_buttontext" class="form-control" value="{{ $setting->careers_empty_buttontext }}"></div>

                        <div class="text-right"><button type="submit" class="btn btn-primary">Update</button></div>
                    </form>
                </div>
            </div>
            <!-- /Careers -->

            <!-- Quote -->
            <div class="card shadow mb-4">
                <div class="card-header py-3"><h6 class="m-0 font-weight-bold text-dark">Get a Quote page</h6></div>
                <div class="card-body">
                    <form action="{{ route('page-setting.update', $setting->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-4"><div class="form-group"><strong>Hero eyebrow</strong><input type="text" name="quote_hero_eyebrow" class="form-control" value="{{ $setting->quote_hero_eyebrow }}"></div></div>
                            <div class="col-md-4"><div class="form-group"><strong>Hero title line 1</strong><input type="text" name="quote_hero_title_line1" class="form-control" value="{{ $setting->quote_hero_title_line1 }}"></div></div>
                            <div class="col-md-4"><div class="form-group"><strong>Hero title accent (line 2)</strong><input type="text" name="quote_hero_title_accent" class="form-control" value="{{ $setting->quote_hero_title_accent }}"></div></div>
                        </div>
                        <div class="form-group"><strong>Hero description</strong><textarea name="quote_hero_description" class="form-control" rows="2">{{ $setting->quote_hero_description }}</textarea></div>

                        <hr>
                        <div class="row">
                            <div class="col-md-6"><div class="form-group"><strong>Side eyebrow</strong><input type="text" name="quote_side_eyebrow" class="form-control" value="{{ $setting->quote_side_eyebrow }}"></div></div>
                            <div class="col-md-6"><div class="form-group"><strong>Side title</strong><input type="text" name="quote_side_title" class="form-control" value="{{ $setting->quote_side_title }}"></div></div>
                        </div>
                        @for ($i = 1; $i <= 3; $i++)
                        <div class="row">
                            <div class="col-md-4"><div class="form-group"><strong>Step {{ $i }} title</strong><input type="text" name="quote_step{{ $i }}_title" class="form-control" value="{{ $setting->{'quote_step'.$i.'_title'} }}"></div></div>
                            <div class="col-md-8"><div class="form-group"><strong>Step {{ $i }} description</strong><input type="text" name="quote_step{{ $i }}_description" class="form-control" value="{{ $setting->{'quote_step'.$i.'_description'} }}"></div></div>
                        </div>
                        @endfor
                        <div class="row">
                            <div class="col-md-6"><div class="form-group"><strong>Side note label</strong><input type="text" name="quote_side_note_label" class="form-control" value="{{ $setting->quote_side_note_label }}"></div></div>
                            <div class="col-md-6"><div class="form-group"><strong>Side note link text</strong><input type="text" name="quote_side_note_linktext" class="form-control" value="{{ $setting->quote_side_note_linktext }}"></div></div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-md-6"><div class="form-group"><strong>Form card title</strong><input type="text" name="quote_form_title" class="form-control" value="{{ $setting->quote_form_title }}"></div></div>
                            <div class="col-md-6"><div class="form-group"><strong>Form card note</strong><input type="text" name="quote_form_note" class="form-control" value="{{ $setting->quote_form_note }}"></div></div>
                        </div>

                        <div class="text-right"><button type="submit" class="btn btn-primary">Update</button></div>
                    </form>
                </div>
            </div>
            <!-- /Quote -->

            <!-- FAQ page -->
            <div class="card shadow mb-4">
                <div class="card-header py-3"><h6 class="m-0 font-weight-bold text-dark">FAQ page</h6></div>
                <div class="card-body">
                    <div class="mb-3">
                        <a class="btn btn-primary" href="{{ route('faq.index') }}">Manage FAQ items</a>
                        <a class="btn btn-primary" href="{{ route('faq.create') }}">Add FAQ item</a>
                    </div>
                    <form action="{{ route('page-setting.update', $setting->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-4"><div class="form-group"><strong>Hero eyebrow</strong><input type="text" name="faq_hero_eyebrow" class="form-control" value="{{ $setting->faq_hero_eyebrow }}"></div></div>
                            <div class="col-md-4"><div class="form-group"><strong>Hero title line 1</strong><input type="text" name="faq_hero_title_line1" class="form-control" value="{{ $setting->faq_hero_title_line1 }}"></div></div>
                            <div class="col-md-4"><div class="form-group"><strong>Hero title accent (line 2)</strong><input type="text" name="faq_hero_title_accent" class="form-control" value="{{ $setting->faq_hero_title_accent }}"></div></div>
                        </div>
                        <div class="form-group"><strong>Hero description</strong><textarea name="faq_hero_description" class="form-control" rows="2">{{ $setting->faq_hero_description }}</textarea></div>

                        <hr>
                        <div class="form-group"><strong>"How can we help?" title</strong><input type="text" name="faq_side_title" class="form-control" value="{{ $setting->faq_side_title }}"></div>
                        <div class="form-group"><strong>"How can we help?" description</strong><textarea name="faq_side_description" class="form-control" rows="2">{{ $setting->faq_side_description }}</textarea></div>
                        <div class="form-group"><strong>Button text</strong><input type="text" name="faq_side_buttontext" class="form-control" value="{{ $setting->faq_side_buttontext }}"></div>

                        <div class="text-right"><button type="submit" class="btn btn-primary">Update</button></div>
                    </form>
                </div>
            </div>
            <!-- /FAQ page -->

            <!-- Sitemap -->
            <div class="card shadow mb-4">
                <div class="card-header py-3"><h6 class="m-0 font-weight-bold text-dark">Sitemap page</h6></div>
                <div class="card-body">
                    <form action="{{ route('page-setting.update', $setting->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-4"><div class="form-group"><strong>Hero eyebrow</strong><input type="text" name="sitemap_hero_eyebrow" class="form-control" value="{{ $setting->sitemap_hero_eyebrow }}"></div></div>
                            <div class="col-md-4"><div class="form-group"><strong>Hero title line 1</strong><input type="text" name="sitemap_hero_title_line1" class="form-control" value="{{ $setting->sitemap_hero_title_line1 }}"></div></div>
                            <div class="col-md-4"><div class="form-group"><strong>Hero title accent (line 2)</strong><input type="text" name="sitemap_hero_title_accent" class="form-control" value="{{ $setting->sitemap_hero_title_accent }}"></div></div>
                        </div>
                        <div class="form-group"><strong>Hero description</strong><textarea name="sitemap_hero_description" class="form-control" rows="2">{{ $setting->sitemap_hero_description }}</textarea></div>

                        <div class="text-right"><button type="submit" class="btn btn-primary">Update</button></div>
                    </form>
                </div>
            </div>
            <!-- /Sitemap -->

        </div>
    </div>

</div>
@endsection
