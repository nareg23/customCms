@extends('layouts.app')
@section('content')
    <div class="container">
        @if($errors->any())
            <div class="alert alert-danger">

                @foreach($errors->all() as $error)
                    <li class="list-group-item">
                        {{$error}}
                    </li>
                @endforeach
            </div>
        @endif

        <div class="card">
            @if (isset($posts))
                <div class="card-header">
                    Edit Post
                </div>
            @endif
            <div class="card-header">
                Add Post
            </div>
            <div class="card-body">
                <form action="{{isset($post) ? route('posts.update',$post) : route('posts.store')}}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    @if (isset($post))
                        @method('PUT')
                    @endif
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="{{isset($post)?$post->title:""}}">
                        <label for="description">description</label>
                        <input type="text" class="form-control" name="description"
                               value="{{isset($post)?$post->description:""}}">
                        <label for="description">content</label>
                        <input type="text" class="form-control" name="content"
                               value="{{isset($post)?$post->content:""}}">
                        <label for="image">image</label>
                        <input type="file" class="form-control-file" name="image">
                    </div>
                    <div class="fixed-bottom text-center d-block">
                        @if (isset($post))
                            <button class="btn btn-primary mb-3" type="submit">Update</button>
                        @else
                            <button class="btn btn-success mb-3" type="submit">Proceed</button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
