@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Gallery</div>
                <div class="card-body">
                    <form action="{{route('galleryUpdate', $gallery->id)}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-12"> 
                                <label for="title">Gallery Title</label>
                                <input type="text" name="title" value="{{$gallery->title}}"class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label for="cover">Gallery Cover</label>
                                <input type="file" name="cover" class="form-control">
                                <input type="hidden" value="{{$gallery->cover}}" name="old_cover">
                            </div>
                        </div>
                        <div class="row">
                            <div class="con-md-12">
                            <label for="description">Gallery Description</label>
                            <textarea name="description" rows="3" class="form-control">{{$gallery->description}}</textarea>
                        </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Update Gallery</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection