@extends('layouts.app')

@section('content')
    <div class="container" >
        <div class="card" >
            <div class="card-header" >
                <a href="{{ URL::to('/') }}" >Category</a> > {{ $category->name }}
            </div>
            <div class="card-body" >

                <div class="row" >

                    @foreach($category->congress as $congress)
                        <div class="col-md-6 category" >
                            <div class="thumbnail">
                                <div class="caption">
                                    <img src="https://via.placeholder.com/400x400?text={{ $congress->title }}" alt="{{ $congress->title }}">
                                    <h3>{{ $congress->title }}</h3>
                                    <p><a href="{{ route('viewcongress', $congress->id) }}" class="btn btn-primary" role="button">Browse</a></p>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>

@endsection
