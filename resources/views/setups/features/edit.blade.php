@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card">
            <form method="POST" action="{{ route('features.update', $feature->id) }}">
                @csrf
                @method('PUT')
                <div class="card-header">
                    Edit Feature
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Feature Text') }}</label>

                        <div class="col-md-6">
                            <input id="text" type="text" class="form-control @error('text') is-invalid @enderror" name="text" value="{{ $feature->text ?? old('text') ?? '' }}" required autofocus>

                            @error('text')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="serial" class="col-md-4 col-form-label text-md-right">{{ __('Feature Serial') }}</label>

                        <div class="col-md-6">
                            <input id="serial" type="number" class="form-control @error('serial') is-invalid @enderror" name="serial" value="{{ $feature->serial ?? old('serial') ?? '' }}" required autofocus>

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