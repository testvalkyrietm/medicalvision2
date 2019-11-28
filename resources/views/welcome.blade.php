@extends('layouts.app')

@section('content')
    <div class="container" >
        <div class="card" >
            <div class="card-header" >
                Categories
            </div>
            <div class="card-body" >

                <div class="row" >

                    @foreach($categories as $category)
                        <div class="col-md-6 category" >
                            <div class="thumbnail">
                                <div class="caption">
                                    <h3>{{ $category->name }}</h3>
                                    <p><a href="{{ route('viewcategory', $category) }}" class="btn btn-primary" role="button">Browse</a></p>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>

@endsection
