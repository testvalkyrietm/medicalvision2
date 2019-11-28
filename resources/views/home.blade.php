@extends('layouts.app')

@section('content')
<div class="container admin-container">
    <div class="row justify-content-center">
        <div class="col-md-12" >
            <div class="card">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div style="margin-bottom: 20px" >
                        <a href="{{ route('addcategory') }}" class="btn btn-primary" >+ Add</a>
                    </div>
                    <table class="table" >
                        <thead>
                            <tr><td>Category ID</td><td>Category Name</td><td>Category Slug</td><td>Actions</td></tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr><td>{{ $category->id }}</td><td>{{ $category->name }}</td><td>{{ $category->slug }}</td><td><a href="{{ route('editcategory', $category->id) }}"><i class="fa fa-edit"></i> Edit</a> <a href="{{ route('deletecategory', $category->id) }}"><i class="fa fa-remove"></i> Remove</a> </td></tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Congresses</div>
                <div class="card-body">
                    <div style="margin-bottom: 20px" >
                        <a href="{{ route('addcongress') }}" class="btn btn-primary" >+ Add</a>
                    </div>
                    <table class="table" >
                        <thead>
                        <tr><td>Congress ID</td><td>Congress Title</td><td>Congress Slug</td><td>Congress Category</td><td>Actions</td></tr>
                        </thead>
                        <tbody>
                        @foreach ($congresses as $congress)
                            <tr><td>{{ $congress->id }}</td><td>{{ $congress->title }}</td><td>{{ $congress->slug }}</td><td>{{ $congress->category->name }}</td><td><a href="{{ route('editcongress', $congress->id) }}"><i class="fas fa-edit"></i> Edit</a> <a href="{{ route('deletecongress', $congress->id) }}"><i class="fas fa-remove"></i> Remove</a> <a href="{{ route('viewmedia', $congress->id) }}" ><i class="fas fa-file"></i> View Media</a> </td></tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Media</div>
                <div class="card-body">
                    <div style="margin-bottom: 20px" >
                        <a href="{{ route('addmedia') }}" class="btn btn-primary" >+ Add</a>
                    </div>
                    <table class="table" >
                        <thead>
                        <tr><td>Media ID</td><td>Media Title</td><td>Media Path</td><td>Congress</td><td>Actions</td></tr>
                        </thead>
                        <tbody>
                        @foreach ($medias as $media)
                            <tr><td>{{ $media->id }}</td><td>{{ $media->title }}</td><td>{{ $media->slug }}</td><td>{{ $media->congress->title }}</td><td><a href="{{ route('editmedia', $media->id) }}"><i class="fas fa-edit"></i> Edit</a> <a href="{{ route('deletemedia', $media->id) }}"><i class="fas fa-remove"></i> Remove</a> <a href="{{ route('viewmedia', $media->id) }}" ><i class="fas fa-file"></i> View Media</a> </td></tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
