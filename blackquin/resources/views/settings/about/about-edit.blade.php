@extends('layouts.admin')

@section('content')

@include('includes.tinyeditor')

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{clean( trans('niva-backend.about_settings') , array('Attr.EnableID' => true))}}</h1>

                @if ($message = Session::get('setting_success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times"></i></button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                <div class="pb-2 text-right">
                    @if (!empty($langs))
                        <select name="language" class="form-control language-control" onchange="window.location='{{url()->current() . '?language='}}'+this.value">
                            <option value="" selected disabled>{{clean( trans('niva-backend.select_language') , array('Attr.EnableID' => true))}}</option>
                            @foreach ($langs as $lang)
                                <option value="{{$lang->code}}" {{$lang->code == request()->input('language') ? 'selected' : ''}}>{{$lang->name}}</option>
                            @endforeach
                        </select>
                    @endif
                </div>


                @include('includes.form-errors')

                <div class="row">

                	<div class="col-md-12">



                        <!-- about -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-dark">{{clean( trans('niva-backend.about_settings') , array('Attr.EnableID' => true))}}</h6>
                            </div>
                            <div class="card-body">
                        		<form action="{{route('about-setting.update', $setting->id)}}" method="POST" enctype="multipart/form-data">
        					        @csrf
        					        @method('PUT')

        					        <div class="row">
        					   
        	                           
                                       <div class="col-xs-12 col-sm-12 col-md-12">

                                             <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' => true))}}</strong> <span>{{clean( trans('niva-backend.upload_image') , array('Attr.EnableID' => true))}} <a target="_blank" href="{{route('media.create') . '?language=' . request()->input('language')}}"> {{clean( trans('niva-backend.here') , array('Attr.EnableID' => true))}} </a> {{clean( trans('niva-backend.then_copy_url') , array('Attr.EnableID' => true))}} <a target="_blank" href="{{route('media.index'). '?language=' . request()->input('language')}}"> {{clean( trans('niva-backend.here') , array('Attr.EnableID' => true))}} </a></span>
                                                        <br>
                                                        <img style="padding-bottom:10px" class="img-fluid" width="300" src="{{$setting->banner_img ? $setting->banner_img : '/public/img/200x200.png'}}" alt="123">
                                                        <input type="text" name="banner_img" class="form-control" value="{{$setting->banner_img}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.title') , array('Attr.EnableID' => true))}}</strong>
                                                        <input type="text" name="banner_title" class="form-control" value="{{$setting->banner_title}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.description') , array('Attr.EnableID' => true))}}</strong>
                                                        <input type="text" name="banner_desc" class="form-control" value="{{$setting->banner_desc}}">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.subtitle') , array('Attr.EnableID' => true))}}</strong>
                                                        <input type="text" name="about_subtitle" class="form-control" value="{{$setting->about_subtitle}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.title') , array('Attr.EnableID' => true))}}</strong>
                                                        <input type="text" name="about_title" class="form-control" value="{{$setting->about_title}}">
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.description') , array('Attr.EnableID' => true))}}</strong>
                                                <textarea name="about_description" class="form-control" rows="6">{{clean( $setting->about_description , array('Attr.EnableID' => true))}}</textarea>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.button_text') , array('Attr.EnableID' => true))}}</strong>
                                                        <input type="text" name="about_buttontext" class="form-control" value="{{$setting->about_buttontext}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.button_link') , array('Attr.EnableID' => true))}}</strong>
                                                        <input type="text" name="about_buttonlink" class="form-control" value="{{$setting->about_buttonlink}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.photo') , array('Attr.EnableID' => true))}}</strong>
                                                        <input type="text" name="about_image" class="form-control" value="{{$setting->about_image}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <strong>{{clean( trans('niva-backend.button_youtube_link') , array('Attr.EnableID' => true))}}</strong>
                                                        <input type="text" name="about_ytlink" class="form-control" value="{{$setting->about_ytlink}}">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

        					            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
        					                <button type="submit" class="btn btn-primary">{{clean( trans('niva-backend.update') , array('Attr.EnableID' => true))}}</button>
        					            </div>
        					        </div>

        					    </form>
                            </div>
                        </div>
                        <!-- about -->

                        <!-- member -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-dark">{{clean( trans('niva-backend.section_members') , array('Attr.EnableID' => true))}}</h6>
                            </div>
                            <div class="card-body">
                                <form action="{{route('about-setting.update', $setting->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')


                                    <div class="form-group">
                                        <strong>{{clean( trans('niva-backend.title') , array('Attr.EnableID' => true))}}</strong>
                                        <input type="text" name="member_title_section" class="form-control" value="{{$setting->member_title_section}}">
                                    </div>
                           

                                    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                        <button type="submit" class="btn btn-primary">{{clean( trans('niva-backend.update') , array('Attr.EnableID' => true))}}</button>
                                    </div>

                                </form>
                                <div class="mb-3">
                                    <a class="btn btn-primary" href="{{ route('member.index') . '?language=' . request()->input('language')}}">{{clean( trans('niva-backend.view_all') , array('Attr.EnableID' => true))}}</a>
                                    <a class="btn btn-primary" href="{{ route('member.create') . '?language=' . request()->input('language')}}">{{clean( trans('niva-backend.create') , array('Attr.EnableID' => true))}}</a>
                                </div>
                            </div>
                        </div>
                        <!-- member -->

                        <!-- testimonial -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-dark">{{clean( trans('niva-backend.section_6_testimonials') , array('Attr.EnableID' => true))}}</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <a class="btn btn-primary" href="{{ route('testimonial.index') . '?language=' . request()->input('language')}}">{{clean( trans('niva-backend.view_all') , array('Attr.EnableID' => true))}}</a>
                                    <a class="btn btn-primary" href="{{ route('testimonial.create') . '?language=' . request()->input('language')}}">{{clean( trans('niva-backend.create') , array('Attr.EnableID' => true))}}</a>
                                </div>
                            </div>
                        </div>
                        <!-- testimonial -->

                        <!-- clients -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-dark">{{clean( trans('niva-backend.section_clients') , array('Attr.EnableID' => true))}}</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <a class="btn btn-primary" href="{{ route('client.index') . '?language=' . request()->input('language')}}">{{clean( trans('niva-backend.view_all') , array('Attr.EnableID' => true))}}</a>
                                    <a class="btn btn-primary" href="{{ route('client.create') . '?language=' . request()->input('language')}}">{{clean( trans('niva-backend.create') , array('Attr.EnableID' => true))}}</a>
                                </div>
                            </div>
                        </div>
                        <!-- clients -->

                        <!-- Redesign: hero -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3"><h6 class="m-0 font-weight-bold text-dark">Hero banner (new site design)</h6></div>
                            <div class="card-body">
                                <form action="{{route('about-setting.update', $setting->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6"><div class="form-group"><strong>Title line 1</strong><input type="text" name="hero_title_line1" class="form-control" value="{{$setting->hero_title_line1}}"></div></div>
                                        <div class="col-md-6"><div class="form-group"><strong>Title line 2</strong><input type="text" name="hero_title_line2" class="form-control" value="{{$setting->hero_title_line2}}"></div></div>
                                    </div>
                                    <div class="form-group"><strong>Description</strong><textarea name="hero_description" class="form-control" rows="2">{{$setting->hero_description}}</textarea></div>
                                    <div class="text-right"><button type="submit" class="btn btn-primary">{{clean( trans('niva-backend.update') , array('Attr.EnableID' => true))}}</button></div>
                                </form>
                            </div>
                        </div>

                        <!-- Redesign: vision -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3"><h6 class="m-0 font-weight-bold text-dark">Vision &amp; mission</h6></div>
                            <div class="card-body">
                                <form action="{{route('about-setting.update', $setting->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6"><div class="form-group"><strong>Kicker</strong><input type="text" name="vision_kicker" class="form-control" value="{{$setting->vision_kicker}}"></div></div>
                                        <div class="col-md-6"><div class="form-group"><strong>Title</strong><input type="text" name="vision_title" class="form-control" value="{{$setting->vision_title}}"></div></div>
                                    </div>
                                    <div class="form-group"><strong>Description</strong><textarea name="vision_description" class="form-control" rows="2">{{$setting->vision_description}}</textarea></div>
                                    <div class="form-group"><strong>Statement label (e.g. "Our vision")</strong><input type="text" name="vision_label" class="form-control" value="{{$setting->vision_label}}"></div>
                                    <div class="form-group"><strong>Vision statement</strong><textarea name="vision_statement" class="form-control" rows="2">{{$setting->vision_statement}}</textarea></div>
                                    <div class="text-right"><button type="submit" class="btn btn-primary">{{clean( trans('niva-backend.update') , array('Attr.EnableID' => true))}}</button></div>
                                </form>
                            </div>
                        </div>

                        <!-- Redesign: values -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3"><h6 class="m-0 font-weight-bold text-dark">Our values (4 cards)</h6></div>
                            <div class="card-body">
                                <form action="{{route('about-setting.update', $setting->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    @for ($i = 1; $i <= 4; $i++)
                                        <div class="row">
                                            <div class="col-md-4"><div class="form-group"><strong>Value {{ $i }} title</strong><input type="text" name="value{{ $i }}_title" class="form-control" value="{{ $setting->{'value'.$i.'_title'} }}"></div></div>
                                            <div class="col-md-8"><div class="form-group"><strong>Value {{ $i }} description</strong><input type="text" name="value{{ $i }}_description" class="form-control" value="{{ $setting->{'value'.$i.'_description'} }}"></div></div>
                                        </div>
                                    @endfor
                                    <div class="text-right"><button type="submit" class="btn btn-primary">{{clean( trans('niva-backend.update') , array('Attr.EnableID' => true))}}</button></div>
                                </form>
                            </div>
                        </div>

                        <!-- Redesign: beliefs -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3"><h6 class="m-0 font-weight-bold text-dark">What we believe (4 cards)</h6></div>
                            <div class="card-body">
                                <form action="{{route('about-setting.update', $setting->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6"><div class="form-group"><strong>Kicker</strong><input type="text" name="beliefs_kicker" class="form-control" value="{{$setting->beliefs_kicker}}"></div></div>
                                        <div class="col-md-6"><div class="form-group"><strong>Title</strong><input type="text" name="beliefs_title" class="form-control" value="{{$setting->beliefs_title}}"></div></div>
                                    </div>
                                    @for ($i = 1; $i <= 4; $i++)
                                        <div class="row">
                                            <div class="col-md-4"><div class="form-group"><strong>Belief {{ $i }} title</strong><input type="text" name="belief{{ $i }}_title" class="form-control" value="{{ $setting->{'belief'.$i.'_title'} }}"></div></div>
                                            <div class="col-md-8"><div class="form-group"><strong>Belief {{ $i }} description</strong><input type="text" name="belief{{ $i }}_description" class="form-control" value="{{ $setting->{'belief'.$i.'_description'} }}"></div></div>
                                        </div>
                                    @endfor
                                    <div class="text-right"><button type="submit" class="btn btn-primary">{{clean( trans('niva-backend.update') , array('Attr.EnableID' => true))}}</button></div>
                                </form>
                            </div>
                        </div>

                        <!-- Redesign: leadership -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3"><h6 class="m-0 font-weight-bold text-dark">Leadership section intro</h6></div>
                            <div class="card-body">
                                <form action="{{route('about-setting.update', $setting->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6"><div class="form-group"><strong>Kicker</strong><input type="text" name="leadership_kicker" class="form-control" value="{{$setting->leadership_kicker}}"></div></div>
                                        <div class="col-md-6"><div class="form-group"><strong>Description</strong><input type="text" name="leadership_description" class="form-control" value="{{$setting->leadership_description}}"></div></div>
                                    </div>
                                    <div class="text-right"><button type="submit" class="btn btn-primary">{{clean( trans('niva-backend.update') , array('Attr.EnableID' => true))}}</button></div>
                                </form>
                            </div>
                        </div>
                        <!-- /Redesign -->

                        <!-- SEO -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-dark">{{clean( trans('niva-backend.seo') , array('Attr.EnableID' => true))}}</h6>
                            </div>
                            <div class="card-body">
                                <form action="{{route('about-setting.update', $setting->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.meta_title') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="meta_title" class="form-control" value="{{$setting->meta_title}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.meta_description') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="meta_description" class="form-control" value="{{$setting->meta_description}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.slug') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="slug" class="form-control" value="{{$setting->slug}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('niva-backend.anchor_text') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="breadcrumbs_anchor" class="form-control" value="{{$setting->breadcrumbs_anchor}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                            <button type="submit" class="btn btn-primary">{{clean( trans('niva-backend.update') , array('Attr.EnableID' => true))}}</button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <!-- SEO -->


                		
                	</div>
                </div>



</div>
<!-- /.container-fluid -->




@endsection