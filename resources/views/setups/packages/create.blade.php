@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card">
            <form method="POST" action="{{ route('packages.store') }}">
                @csrf
                <div class="card-header">
                    New Package
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rate" class="col-md-4 col-form-label text-md-right">{{ __('Package Rate') }}</label>

                        <div class="col-md-6">
                            <input id="rate" type="text" class="form-control @error('rate') is-invalid @enderror" name="rate" value="{{ old('rate') }}" required autofocus>

                            @error('rate')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="serial" class="col-md-4 col-form-label text-md-right">{{ __('Package Serial') }}</label>

                        <div class="col-md-6">
                            <input id="serial" type="number" class="form-control @error('serial') is-invalid @enderror" name="serial" value="{{ old('serial') }}" required autofocus>

                            @error('serial')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-success" value="SUBMIT" />
                </div>
            </form>
        </div>
    </div>
</div>

@endsection