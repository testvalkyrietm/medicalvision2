@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Media</div>

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
                    <form action="{{ route('saveeditmedia',$media->id) }}" method="post" >
                        @csrf
                        <div class="form-group" >
                            <label for="title" >Media Name</label>
                            <input name="title" type="text" value="{{ $media->title }}" class="form-control" />
                        </div>
                        <div class="form-group" >
                            <label for="downloadPath" >Media URL</label>
                            <input name="downloadPath" type="text" value="{{ $media->downloadPath }}" class="form-control" />
                        </div>
                        <div class="form-group" >
                            <label for="year" >Media Year</label>
                            <input name="year" type="text" value="{{ $media->year }}" class="form-control" />
                        </div>
                        <div class="form-group" >
                            <label for="slug" >Congress</label>
                            <select class="custom-select" name="congress_id" >
                                @foreach($congresses as $congress)
                                    <option {{ $media->congress_id == $congress->id ? 'SELECTED ' : '' }}value="{{ $congress->id }}" >{{ $congress->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group" >
                            <input type="hidden" name="id" value="{{ $media->id }}" />
                            <input type="submit" class="btn btn-primary" value="Save" />
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
