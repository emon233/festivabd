@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                Galleries
            </div>
            <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-condensed table-bordered">
                        <thead>
                            <th>#</th>
                            <th>Category</th>
                            <th>Album Name</th>
                            <th>Actions</th>

                        </thead>
                        <tbody>
                            @foreach($galleries as $key=>$gallery)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$gallery->category->name}}</td>
                                <td>{{$gallery->album}}</td>
                                <td>
                                    <a  href="{{ route('galleries.edit', $gallery->id) }}"
                                        class="btn btn-primary"
                                    >Edit</a>
                                    <a  href="{{ route('galleries.images', $gallery->id) }}"
                                        class="btn btn-success"
                                    >Images</a>
                                    <form method="post" action="{{ route('galleries.destroy', $gallery->id) }}">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('galleries.create') }}" class="btn btn-primary" style="width:25%;">New</a>
            </div>
        </div>
    </div>
</div>

@endsection