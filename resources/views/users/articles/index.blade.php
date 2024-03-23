@extends('layouts.user')


@section('content')
    <div class="card">
        <div class="card-header">
            Articles
            <div class="">
                <small><a href="{{ route('users/articles/create') }}">Create Article</a></small>
            </div>
        </div>
    </div>
@endsection
