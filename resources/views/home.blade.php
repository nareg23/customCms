@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <div class="text-center h-25">
                    <h1 class="mt-5">
                        <a href="{{route('category.create')}}" class="btn-link">Add Category</a><br><br>
                        <a href="{{route('posts.index')}}" class="btn-link ">Add Post</a>
                    </h1>
                </div>
            </div>
        </div>
    </div>

@endsection
