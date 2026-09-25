@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Products</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All products</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <a href="{{ route('product.create') }}" class="btn btn-primary btn-back">Create product</a>

                @if ($message = Session::get('product_success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times"></i></button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                <form action="{{ route('delete.product') }}" method="POST" class="form-inline">
                @csrf
                @method('DELETE')
                <div class="form-group">
                    <select name="checkbox_array" id="" class="form-control">
                        <option value="">Delete</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="submit" name="delete_all" class="btn btn-primary">
                </div>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="options"></th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Order</th>
                            <th>Forms</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td><input class="checkboxes" type="checkbox" name="checkbox_array[]" value="{{$product->id}}"></td>
                                <td><img height="60" src="{{ asset('images/sic/' . $product->image) }}" alt="{{ $product->name }}">
                                    <p class="mb-0 mt-2"><a href="{{ route('product.edit', $product->id) }}">Edit</a></p>
                                </td>
                                <td data-label="link">{{ $product->name }}<br><small class="text-muted">{{ $product->slug }}</small></td>
                                <td data-label="link">{{ \App\Models\Product::categoryLabel($product->category) }}</td>
                                <td data-label="link">{{ $product->order }}</td>
                                <td data-label="link">{{ $product->forms()->count() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                </form>

            </div>
        </div>
    </div>

</div>
@stop
