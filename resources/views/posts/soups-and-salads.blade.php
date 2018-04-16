@extends('layout')
@section('title', 'Soup &amp; Salad Recipes')
@section('content')
<div class="container">
    <h1 class="chalkboard text-center">Soup &amp; Salad Recipes</h1>
    <p class="text-center text-muted">Here you view our tasty Soup &amp; Salad recipes tested &amp; approved by the ShareYum.com staff!</p>
    <hr>
    <br/>
    <div class="row">



        @foreach($news as $item)

            <div class="col-lg-5 offset-lg-1 col-md-11 col-md-11-offset-1 col-sm-11 col-sm-offset-1 col-11 d-block mx-auto">
                <br/>
                <a class="" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}"><img src="../images/md-img-{{ $item->imgPath}}" class="img-fluid mx-auto"></a>
                <br/>
                <br/>
                <span class="text-muted"> {{strtoupper (gameDate($item->created_at))}}</span>
                <br/>
                <span class="text-muted">Written by <a href="#">{{written_by($item->user_id)}}</a></span>
                <h2 class="chalkboard"><a class="" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">{{ ucwords($item->title)}}</a></h2>

            </div>
        @endforeach

    </div>
    <br/>
    <br/>

    <div class="buttons-show">
        <button type="submit" class="btn btn-primary center-block btn-md" onclick="window.location='{{url('/recipes')}}';" >Back to All Recipes</button>
    </div>
</div>
@endsection
