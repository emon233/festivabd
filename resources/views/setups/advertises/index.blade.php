@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                First Page - Advertises
            </div>
            <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-condensed table-bordered">
                        <thead>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Serial</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($advertises as $key=>$advertise)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>
                                    <img src="{{ route('advertises.displayImage', $advertise->image) }}" alt="Card image cap" style="height:100px; width:200px;">
                                </td>
                                <td>{{$advertise->title}}</td>
                                <td>{{$advertise->footer}}</td>
                                <td>{{$advertise->serial}}</td>
                                <td>
                                    <form action="{{ route('advertises.destroy', $advertise->id)}}" method="post">
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
                <a href="{{ route('advertises.create') }}" class="btn btn-primary" style="width:25%;">New</a>
            </div>
        </div>
    </div>
</div>

@endsection