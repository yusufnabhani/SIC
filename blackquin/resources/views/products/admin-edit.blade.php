@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Edit product</h1>

    @if ($message = Session::get('product_success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times"></i></button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @include('includes.form-errors')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Product details</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('product.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Name *</strong>
                            <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Slug</strong>
                            <input type="text" name="slug" class="form-control" value="{{ $product->slug }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Category *</strong>
                            <select name="category" class="form-control" required>
                                <option value="coffee_cocoa" {{ $product->category === 'coffee_cocoa' ? 'selected' : '' }}>Coffee & cocoa</option>
                                <option value="spices" {{ $product->category === 'spices' ? 'selected' : '' }}>Spices</option>
                                <option value="botanicals" {{ $product->category === 'botanicals' ? 'selected' : '' }}>Botanicals</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Botanical name</strong>
                            <input type="text" name="botanical_name" class="form-control" value="{{ $product->botanical_name }}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <strong>Description</strong>
                    <textarea name="description" class="form-control" rows="4">{{ $product->description }}</textarea>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Origin</strong>
                            <input type="text" name="origin" class="form-control" value="{{ $product->origin }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Image filename</strong>
                            <br>
                            <img src="{{ asset('images/sic/' . $product->image) }}" style="max-height:80px;margin-bottom:8px;">
                            <input type="text" name="image" class="form-control" value="{{ $product->image }}" placeholder="e.g. coffee.png (in public/images/sic/)">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <strong>Display order</strong>
                    <input type="number" name="order" class="form-control" value="{{ $product->order }}" style="max-width:160px;">
                </div>

                <div class="text-right">
                    <a href="{{ route('product.index') }}" class="btn btn-secondary">Back to list</a>
                    <button type="submit" class="btn btn-primary">Update product</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Specifications / forms</h6>
        </div>
        <div class="card-body">

            @if($product->forms->count())
                <div class="table-responsive mb-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th><th>Origin</th><th>Processing</th><th>Screen</th><th>Grade</th><th>Moisture</th><th>Packaging</th><th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product->forms as $form)
                                <tr>
                                    <td>{{ $form->name }}</td>
                                    <td>{{ $form->origin }}</td>
                                    <td>{{ $form->processing }}</td>
                                    <td>{{ $form->screen }}</td>
                                    <td>{{ $form->grade }}</td>
                                    <td>{{ $form->moisture }}</td>
                                    <td>{{ $form->packaging }}</td>
                                    <td>
                                        <form action="{{ route('product.forms.delete', $form->id) }}" method="POST" onsubmit="return confirm('Remove this specification?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-muted">No specification forms yet.</p>
            @endif

            <h6 class="font-weight-bold">Add a specification form</h6>
            <form action="{{ route('product.forms.store', $product->id) }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4"><div class="form-group"><strong>Name *</strong><input type="text" name="name" class="form-control" required placeholder="e.g. Gayo Arabica Green Coffee Beans"></div></div>
                    <div class="col-md-4"><div class="form-group"><strong>Origin</strong><input type="text" name="origin" class="form-control"></div></div>
                    <div class="col-md-4"><div class="form-group"><strong>Processing</strong><input type="text" name="processing" class="form-control"></div></div>
                </div>
                <div class="row">
                    <div class="col-md-3"><div class="form-group"><strong>Screen</strong><input type="text" name="screen" class="form-control"></div></div>
                    <div class="col-md-3"><div class="form-group"><strong>Grade</strong><input type="text" name="grade" class="form-control"></div></div>
                    <div class="col-md-3"><div class="form-group"><strong>Moisture</strong><input type="text" name="moisture" class="form-control"></div></div>
                    <div class="col-md-3"><div class="form-group"><strong>Packaging</strong><input type="text" name="packaging" class="form-control"></div></div>
                </div>
                <div class="form-group"><strong>Defect standard</strong><input type="text" name="defect_standard" class="form-control"></div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Add form</button>
                </div>
            </form>
        </div>
    </div>

</div>
@stop
