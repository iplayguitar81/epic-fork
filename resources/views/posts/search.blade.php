@extends('layout')

@section('title', 'Search Results')


@section('content')


@if($results_empty)
        <div class="alert alert-info">
            <span class="glyphicon glyphicon-exclamation-sign"></span>
            No Results for '{{$search}}' Query Try A Different Search!!!!!!!
        </div>

@else
    <br/>
    <h1 class="chalkboard text-center">Search Results</h1>
    <h3 class="text-center">Showing Results For '{{ucwords($search)}}'.....</h3>
    <br/>
    <hr/>


    @foreach($results2 as $result)


        <div class="col-lg-5 offset-lg-1 col-md-11 col-md-11-offset-1 col-sm-11 col-sm-offset-1 col-11 d-block mx-auto">
            <br/>
            <a class="" href="{{ route('posts.show', [$result->id, str_slug($result->title)]) }}"><img src="../images/md-img-{{ $result->imgPath}}" class="img-fluid mx-auto"></a>
            <br/>
            <br/>
            <span class="text-muted"> {{strtoupper (gameDate($result->created_at))}}</span>
            <br/>
            <span class="text-muted">Written by <a href="#">{{written_by($result->user_id)}}</a></span>
            <h2 class="chalkboard"><a class="" href="{{ route('posts.show', [$result->id, str_slug($result->title)]) }}">{{ ucwords($result->title)}}</a></h2>

        </div>

            {{--<div class="row justify-content-md-center">--}}
                {{--<div class="col-sm-5 text-center">--}}

                    {{--@if( $result->videoPath !=null)--}}
                        {{--<div class="video-container">--}}
                            {{--{!! $result->videoPath !!}--}}
                        {{--</div>--}}
                    {{--@else--}}
                        {{--<img src="../images/md-img-{{ $result->imgPath}}" class="img-responsive">--}}
                    {{--@endif--}}
                    {{--<br/>--}}
                    {{--<span>{{$result->mainImg_caption}}</span>--}}
                {{--</div>--}}
                {{--<div class="col-sm-7 text-center">--}}

                    {{--<h2 class="secondary-posts-title"><a class="" href="{{ route('posts.show', [$result->id, str_slug($result->title)]) }}">{{ ucwords($result->title)}}</a>--}}
                       {{--<a href="{{ route_articles($result->category)}}">--}}
                        {{--<button type="button" class="btn btn-default btn-sm">--}}
                            {{--<span class="glyphicon glyphicon-folder-open"></span>--}}
                            {{--{{$result->category}}--}}
                        {{--</button>--}}
                       {{--</a>--}}

                    {{--</h2>--}}
                    {{--<p class="text-muted">{{$result->subHead}}</p>--}}
                    {{--<p class="text-muted">Written by <a href="#">{{written_by($result->user_id)}}</a> on {{gameDate($result->created_at)}} </p>--}}


                    {{--<p>{{snippet($result->body)}}...<a class="" href="{{ route('posts.show', [$result->id, str_slug($result->title)]) }}"> <button type="button" class="btn btn-success btn-xs">READ MORE</button></a></p>--}}


                {{--</div>--}}
                {{--<br/>--}}

            {{--</div>--}}
            <br/>
            <hr/>



    @endforeach


    <div class="pagination">{!! $results2->render() !!}</div>

@endif
            <br/>
            <br/>



@endsection