@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <form method="POST" action="{{ route('categories.update', $category->id) }}">
                @csrf
                @method('PUT')
                <div class="card-header">
                    Categories
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $category->name ?? old('name') ?? '' }}" required autofocus>

                            @error('name')
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