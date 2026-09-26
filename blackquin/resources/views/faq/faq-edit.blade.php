@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Edit FAQ</h1>

    @include('includes.form-errors')

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('faq.update', $faq->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <strong>Question *</strong>
                    <input type="text" name="question" class="form-control" value="{{ $faq->question }}" required>
                </div>

                <div class="form-group">
                    <strong>Answer *</strong>
                    <textarea name="answer" class="form-control" rows="4" required>{{ $faq->answer }}</textarea>
                </div>

                <div class="form-group">
                    <strong>Display order</strong>
                    <input type="number" name="order" class="form-control" value="{{ $faq->order }}" style="max-width:160px;">
                </div>

                <div class="text-right">
                    <a href="{{ route('faq.index') }}" class="btn btn-secondary">Back to list</a>
                    <button type="submit" class="btn btn-primary">Update FAQ</button>
                </div>
            </form>
        </div>
    </div>

</div>
@stop
