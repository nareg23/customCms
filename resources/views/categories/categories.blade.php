@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header text-center font-weight-bold">Categories</div>
            <div class="card-body">
                <ul class="list-group">
                    @if ($categories->isEmpty())
                        <li class="list-group-item">
                            There is no Categories added yet.
                        </li>
                    @else
                        @foreach($categories as $category)
                            <li class="list-group-item  d-flex justify-content-between align-items-lg-">

                                <div class="w-100">
                                    {{$category->name}}
                                </div>
                                <a href="{{route('category.edit',$category)}}"
                                   class="btn btn-primary mr-3 btn-sm  ">EDIT </a>

                                <button class="btn btn-danger btn-sm" type="button"
                                        onclick="handleDelete('{{$category->id}}')">DELETE
                                </button>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <div class="card-footer text-center">
                <a href="{{route('category.create')}}" class="btn btn-success">Create</a>
            </div>
        </div>
        {{--            delete form modal--}}
        <div class="modal fade" id="deleteModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        are you sure you want to delete?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <form action="" id="deleteCategoryFrom" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
