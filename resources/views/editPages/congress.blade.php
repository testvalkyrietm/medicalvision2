@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Congress</div>

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
                    <form action="{{ route('saveeditcongress',$congress->id) }}" method="post" >
                        @csrf
                        <div class="form-group" >
                            <label for="title" >Congress Name</label>
                            <input name="title" type="text" value="{{ $congress->title }}" class="form-control" />
                        </div>
                        <div class="form-group" >
                            <label for="slug" >Congress Slug</label>
                            <input name="slug" type="text" value="{{ $congress->slug }}" class="form-control" />
                        </div>
                        <div class="form-group" >
                            <label for="slug" >Congress Category</label>
                            <select class="custom-select" name="category_id" >
                                @foreach($categories as $category)
                                    <option {{ $congress->category_id == $category->id ? 'SELECTED ' : '' }}value="{{ $category->id }}" >{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group" >
                            <input type="hidden" name="id" value="{{ $congress->id }}" />
                            <input type="submit" class="btn btn-primary" value="Save" />
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
