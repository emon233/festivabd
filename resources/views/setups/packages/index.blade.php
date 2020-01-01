@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                Packages
            </div>
            <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-condensed table-bordered">
                        <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Rate</th>
                            <th>Serial</th>
                            <th>Actions</th>

                        </thead>
                        <tbody>
                            @foreach($packages as $key=>$package)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$package->name}}</td>
                                <td>{{$package->rate}}</td>
                                <td>{{$package->serial}}</td>
                                <td>
                                    <a href="{{ route('packages.edit', $package->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('packages.features', $package->id) }}" class="btn btn-success">Features</a>
                                    <form method="post" action="{{ route('packages.destroy', $package->id) }}">
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
                <a href="{{ route('packages.create') }}" class="btn btn-primary" style="width:25%;">New</a>
            </div>
        </div>
    </div>
</div>

@endsection