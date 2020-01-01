@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                Gallery - {{$package->name}}
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <form method="post" action="{{ route('features.store') }}">
                            @csrf
                            <input type="hidden" name="package_id" value="{{$package->id}}">
                            <div class="form-group row">
                                <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Feature') }}</label>

                                <div class="col-md-6">
                                    <input id="text" type="text" class="form-control @error('text') is-invalid @enderror" name="text" value="{{ old('text') }}" required>

                                    @error('text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="serial" class="col-md-4 col-form-label text-md-right">{{ __('Serial') }}</label>

                                <div class="col-md-6">
                                    <input id="serial" type="number" class="form-control @error('serial') is-invalid @enderror" name="serial" value="{{ old('serial') }}" required>

                                    @error('serial')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right"></label>

                                <div class="col-md-6">
                                    <input type="submit" class="btn btn-primary" value="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-lg-12" style="padding-bottom: 10px;">
                        <div class="table table-responsive">
                            <table class="table table-condensed table-bordered">
                                <thead>
                                    <th>#</th>
                                    <th>Text</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($package->features as $key=>$feature)
                                    <tr>
                                        <td>{{$feature->serial}}</td>
                                        <td>{{$feature->text}}</td>
                                        <td>
                                            <form method="get" action="{{ route('features.edit', $feature->id) }}">
                                                <button type="submit" class="btn-primary">
                                                    Edit
                                                </button>
                                            </form>
                                            <form method="post" action="{{ route('features.destroy', $feature->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection