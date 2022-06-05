@extends('layouts.app')

@section('content')
    <div class="margin-content-wraper content-wrapper">
        <div class="folder_container">
            <span>{{ $folder->name }}</span>
        </div>
        <div class="images_container">
            @foreach($photos as $photo)
            <div class="image_container">
                <div class="image">
                    <img src="{{ asset('/storage/' . $photo->path) }}" alt="photo">
                </div>
                <div class="image_delete">
                    <i class="fa-solid fa-trash-can"></i>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
