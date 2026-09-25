@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Create product</h1>

    @include('includes.form-errors')

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('product.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Name *</strong>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Slug</strong>
                            <input type="text" name="slug" class="form-control" value="{{ old('slug') }}" placeholder="Auto-generated from name if left blank">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Category *</strong>
                            <select name="category" class="form-control" required>
                                <option value="coffee_cocoa" {{ old('category') === 'coffee_cocoa' ? 'selected' : '' }}>Coffee & cocoa</option>
                                <option value="spices" {{ old('category') === 'spices' ? 'selected' : '' }}>Spices</option>
                                <option value="botanicals" {{ old('category') === 'botanicals' ? 'selected' : '' }}>Botanicals</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Botanical name</strong>
                            <input type="text" name="botanical_name" class="form-control" value="{{ old('botanical_name') }}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <strong>Description</strong>
                    <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Origin</strong>
                            <input type="text" name="origin" class="form-control" value="{{ old('origin') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Image filename</strong>
                            <input type="text" name="image" class="form-control" value="{{ old('image') }}" placeholder="e.g. coffee.png (in public/images/sic/)">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <strong>Display order</strong>
                    <input type="number" name="order" class="form-control" value="{{ old('order') }}" style="max-width:160px;">
                </div>

                <div class="text-right">
                    <a href="{{ route('product.index') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create product</button>
                </div>
            </form>
        </div>
    </div>

</div>
@stop
