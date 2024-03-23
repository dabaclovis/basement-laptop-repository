@extends('layouts.admins')

@section('content')
    <div class="card">
        <div class="card-header w3-padding-16 w3-xlarge">
            Article Details
        </div>
        <div class="card-body w3-card-4 mt-2 ">
            <h3>{{ Str::ucfirst($article->title) }}</h3>
            <p id="mandese">
                {{ Str::ucfirst($article->body) }}
            </p>
            <small>
                {{ Str::ucfirst($article->user->lname) }}
            </small>
        </div><hr>
        <div class=" d-flex justify-content-between">
            <a href="{{ route('articles.index') }}" class=" btn btn-secondary ml-2 mt-1 mb-1"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
            <a href="" class=" btn btn-secondary mr-2 mt-1 mb-1"><i class="fa fa-edit" aria-hidden="true"></i></a>
        </div>
    </div>
    <style>
        #mandese{
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 1.34em;
        }
    </style>
@endsection
