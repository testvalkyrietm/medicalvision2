@extends('layouts.app')

@section('content')
    <div class="container" >
        <div class="card" >
            <div class="card-header" >
                <a href="{{ URL::to('/') }}" >Categories</a> > <a href="{{ route('viewcategory', $congress->category) }}" >{{ $congress->category->name }}</a> > {{ $congress->title }}
            </div>
            <div class="card-body" >

                <div class="row" >
                    <div class="col-xl-12" style="margin-bottom: 20px" >
                        <a href="{{ route('viewcongress', $congress) }}" class="btn btn-primary" >All</a>
                        @foreach($years as $y)
                            <a class="btn btn-primary" href="{{ route('viewcongress', ['congress'=>$congress, 'year'=>$y->year]) }}" >{{ $y->year }}</a>
                        @endforeach
                    </div>
                    @php
                        $filtered_media = $filtered_media != null ? $filtered_media : $congress->media;
                    @endphp
                    @foreach($filtered_media as $media)
                        <div class="col-md-6 category" >
                            <div class="thumbnail">
                                <img src="https://via.placeholder.com/400x400?text={{ $congress->title }}" alt="{{ $congress->title }}">
                                <div class="caption">
                                    <h3><a target=”_blank” href="{{ $media->downloadPath }}" >{{ $media->title }}</a></h3>
                                    <p>Year: {{ $media->year }}</p>
                                    <p><a target=”_blank” href="{{ $media->downloadPath }}" class="btn btn-primary" role="button">Open Media</a></p>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>

@endsection
