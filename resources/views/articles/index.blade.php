@extends('layouts.admins')

@section('content')

<style>
    #camstyle {
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 1.34em;
    }
</style>
    <div class="card">
        <div class="card-header w3-padding-24 ">
           <h3>Articles</h3>
            <div>
                <small>
                    <a href="{{ route('articles.create') }}">create Articles</a>
                </small>
            </div>
        </div>
        <div class="card-body w3-light-gray w3-container w3-card-4 mt-2 ">
            @if (count($articles) > 0)
                @foreach ($articles as $article)
                   <div class="form-group mb-1">
                    <a href="" class="form-control">{{ Str::ucfirst($article->title) }}
                    <span class=" w3-right font-weight-bolder small">{{ Str::ucfirst($article->user->fname) }}</span></a>
                   </div>
                @endforeach
            @endif
        </div>
        <div class=" d-flex justify-content-center mt-1">
            <p>{{ $articles->links() }}</p>
        </div>
    </div>

@endsection
