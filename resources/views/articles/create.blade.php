@extends('layouts.admins')

@section('content')
    <div class="card">
        <div class="card-header w3-padding-16 w3-xlarge">
            Create Article
        </div>
        <div class="card-body w3-section w3-light-gray w3-card-2 w3-container">
            <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class=" form-group">
                    <label for="title" class="w3-round-large  w3-large w3-card p-1">Title:</label>
                    <input type="text"
                    class=" form-control"
                    name="title"
                    />
                    @error('title')
                        <div class=" alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="body" class="w3-round-large  w3-large w3-card p-1">Content:</label>
                    <textarea name="body" id="" cols="30" rows="12" class=" form-control"></textarea>
                    @error('body')
                        <div class=" alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="body" class="w3-round-large  w3-large w3-card p-1">Upload Image:</label>
                    <input type="file" name="image" id="" class=" form-control-file">
                </div><hr>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn w3-blue">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection
