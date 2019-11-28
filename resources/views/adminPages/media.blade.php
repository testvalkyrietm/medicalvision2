@extends('layouts.app')

@section('content')
<div class="container admin-container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $congress->title }} Media</div>
                <div class="card-body">
                    <div style="margin-bottom: 20px" >
                        <a href="{{ route('addmedia').'/'.$congress->id }}" class="btn btn-primary" >+ Add</a>
                    </div>
                    <table class="table" >
                        <thead>
                        <tr><td>Media ID</td><td>Media Title</td><td>Media URL</td><td>Media Year</td><td>Actions</td></tr>
                        </thead>
                        <tbody>
                        @foreach ($congress->media as $media)
                            <tr><td>{{ $media->id }}</td><td>{{ $media->title }}</td><td><a class="btn btn-primary" target="_blank" href="{{ $media->downloadPath }}" >Open</a></td><td>{{ $media->year }}</td><td><a href="{{ route('editmedia', $media->id) }}"><i class="fas fa-edit"></i> Edit</a> <a href="{{ route('deletemedia', $media->id) }}"><i class="fas fa-remove"></i> Remove</a></td></tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
