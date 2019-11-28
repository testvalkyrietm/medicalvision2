@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Category</div>

                    @if($errors->any())
                        <div class="alert alert-danger" >
                            <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                <div class="card-body">
                    <form action="{{ route('saveeditcategory',$category->id) }}" method="post" >
                        @csrf
                        <div class="form-group" >
                            <label for="name" >Category Name</label>
                            <input name="name" type="text" value="{{ $category->name }}" class="form-control" />
                        </div>
                        <div class="form-group" >
                            <label for="slug" >Category Slug</label>
                            <input name="slug" type="text" value="{{ $category->slug }}" class="form-control" />
                        </div>
                        <div class="form-group" >
                            <input type="hidden" name="id" value="{{ $category->id }}" />
                            <input type="submit" class="btn btn-primary" value="Save" />
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
