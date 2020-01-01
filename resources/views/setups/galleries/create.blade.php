@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <form method="POST" action="{{ route('galleries.store') }}">
                @csrf
                <div class="card-header">
                    Gallery
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="category_id" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                        <div class="col-md-6">
                            <select id="category_id" name="category_id" class="form-control">
                                <option>(select)</option>
                                @foreach($categories as $key=>$category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>

                            @error('album')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="album" class="col-md-4 col-form-label text-md-right">{{ __('Album Name') }}</label>

                        <div class="col-md-6">
                            <input id="album" type="text" class="form-control @error('album') is-invalid @enderror" name="album" value="{{ old('album') }}" required autofocus>

                            @error('album')
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