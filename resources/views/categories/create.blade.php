@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="col-md">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-grou p">
                        @foreach($errors->all() as $error)
                            <li class="list-group-item text-danger">
                                {{$error}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    Add Category
                </div>
                <div class="card-body">
                    <form
                        {{-- check if category set--}}
                        action="{{(isset($category)?route('category.update',[$category]) : route('category.store'))}}"
                        method="POST">
                        {{--                        convert to put request for the update function.--}}
                        @if (isset($category))
                            @method('PUT')
                        @endif
                        @csrf
                        <div class="form-group">
                            @if (isset($category))
                                <label for="text" class="col-form-label-lg">update</label>
                                <input type="text" class="form-control form-control-lg" name="name"
                                       value="{{$category->name}}">

                                <button type="submit" class="btn btn-primary btn-block mt-3 ">Update</button>
                            @else
                                <label for="text" class="col-form-label-lg">Add Category</label>
                                <input type="text" class="form-control form-control-lg" name="name">

                                <button type="submit" class="btn btn-primary btn-block mt-3 ">Create</button>
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
