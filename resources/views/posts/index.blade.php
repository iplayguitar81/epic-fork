@extends('layout')
@section('content')
@section('title', 'Admin Recipe Listings')
<div class="container">
    <h1 class="chalkboard text-center">All Recipe Listings</h1>

    @can('isAdmin')
        <h3 class="chalkboard text-center">Welcome {{Auth::user()->name}}</h3>
    <p class="text-center text-muted">Below you will find ALL of the recipes that have been posted but please note that you will only be able to update or delete those that you are the author of!</p>
        <br/>
        <div class="row">
            <div class="col-lg-5 col-lg-offset-1 mx-auto">
                <a href="{{ url('/posts/create') }}" class="btn btn-primary btn-sm">Add New Post</a>
                &nbsp;
                <a href="{{ url('/posts/file_upload') }}" class="btn btn-success btn-sm">Import CSV Posts</a>
             &nbsp;
                <a href="{{ url('/posts/file_export') }}" class="btn btn-warning btn-sm">Export Excel All Posts</a>

            </div>
        </div>
    @endcan
    <br/>
    <hr>
    <br/>
<div class="row">
    @foreach($posts as $item)

        <div class="col-lg-4 col-md-6 col-sm-12 col-12 d-block mx-auto">
            <br/>
            <span class=""> <b>{{strtoupper (gameDate($item->created_at))}}</b></span>
            <a class="" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}"><img src="../images/md-img-{{ $item->imgPath}}" class="img-fluid mx-auto"></a>
            <p><b>{{'Gallery Image Count: '. $item->images()->count() }}</b></p>
            <span class="text-muted">Written by <a href="#">{{written_by($item->user_id)}}</a></span>
            <br/>
            <br/>
            <h2 class="chalkboard"><a class="" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">{{ ucwords($item->title)}}</a></h2>
           <br/>
            @can('isAdmin')

                @if($item->user_id == $user)

                        <a href="{{ url('/posts/' . $item->id . '/edit') }}" class="btn btn-success btn-sm add-btn-margin">{{Auth::user()->name}}- -Update Post</a> &nbsp;&nbsp;
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/posts', $item->id],
                            'style' => 'display:inline'
                        ]) !!}

                        {!! Form::submit(Auth::user()->name.' - -Delete Post', ['class' => 'btn btn-danger btn-sm add-btn-margin']) !!}

                        @endif

                        {!! Form::close() !!}

                @endcan

        </div>
    @endforeach
</div>
    <br/>
    <br/>
    <hr/>
    <br/>

    <div class="pagination"> {!! $posts->render() !!} </div>
</div>
@endsection
