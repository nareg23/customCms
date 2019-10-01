@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="">
                <div class="card">
                    <table class="table">
                        <div class="card-header badge">
                            <h1>Posts</h1>
                        </div>
                        <thead>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Modify</th>
                        </thead>

                        <tbody>
                        @foreach ($posts as $post)
                            <tr class="card-body">
                                <td>
                                    <img class="img-thumbnail" src="{{asset("storage/".$post->image)}}">
                                </td>
                                <td>{{$post->title}}</td>
                                <td><a class="btn btn-primary btn-sm" href="{{route('posts.edit',$post)}}">Edit</a></td>
                                <td><a class="btn btn-danger btn-sm" href="{{route('posts.destroy',$post)}}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="card-footer text-center">
                        <a href="{{route('posts.create')}}" class="btn btn-success btn-lg">ADD</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
