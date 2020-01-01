@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                Gallery - {{$gallery->album}}
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <form method="post" action="{{ route('images.store') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="gallery_id" value="{{$gallery->id}}">
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
                    @foreach($gallery->galleryImages as $key=>$image)
                    <div class="col-lg-4" style="padding-bottom: 10px;">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ route('galleries.displayImage', $image->image) }}" alt="Card image cap" style="width:200px;">
                            </div>
                            <div class="card-footer">
                                <form method="post" action="{{ route('images.destroy', $image->id) }}">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="Remove Image">
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection