@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <form method="POST" action="{{ route('advertises.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    First Page - Advertises
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autofocus>

                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="footer" class="col-md-4 col-form-label text-md-right">{{ __('Sub Title') }}</label>

                        <div class="col-md-6">
                            <input id="footer" type="text" class="form-control @error('footer') is-invalid @enderror" name="footer" value="{{ old('footer') }}" required>

                            @error('footer')
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
                        <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                        <div class="col-md-6">
                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required>

                            @error('image')
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