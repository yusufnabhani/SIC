@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">FAQ</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All FAQ items</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <a href="{{ route('faq.create') }}" class="btn btn-primary btn-back">Create FAQ</a>

                @if ($message = Session::get('faq_success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times"></i></button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                <form action="{{ route('delete.faq') }}" method="POST" class="form-inline">
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
                            <th>Order</th>
                            <th>Question</th>
                            <th>Answer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($faqs as $faq)
                            <tr>
                                <td><input class="checkboxes" type="checkbox" name="checkbox_array[]" value="{{$faq->id}}"></td>
                                <td data-label="link">{{ $faq->order }}</td>
                                <td data-label="link">{{ $faq->question }}<br><a href="{{ route('faq.edit', $faq->id) }}">Edit</a></td>
                                <td data-label="link">{{ \Illuminate\Support\Str::limit($faq->answer, 100) }}</td>
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
