@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                Categories
            </div>
            <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-condensed table-bordered">
                        <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($categories as $key=>$category)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    <a 
                                        href="{{ route('categories.edit', $category->id) }}"
                                        class="btn btn-primary"
                                    >Edit</a>
                                    <form action="{{ route('categories.destroy', $category->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <input class="btn btn-danger" type="submit" value="Delete" />
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('categories.create') }}" class="btn btn-primary" style="width:25%;">New</a>
            </div>
        </div>
    </div>
</div>

@endsection