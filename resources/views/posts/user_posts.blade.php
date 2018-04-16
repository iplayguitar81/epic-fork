@extends('layout')
@section('title', 'Welcome '.$user_name. ' Here Are Your Recipes!')
@section('content')

    <div class="container">
        <h1 class="text-center chalkboard">{{$user_name}}'s Recipes</h1>
        <br/>
           <div class="text-center">@can('isAdmin')<a href="{{ url('/posts/create') }}" class="btn btn-primary mx-auto btn-sm">Add New Recipe</a>@endcan</div>
       <br/>
        <p class="text-center text-muted">Welcome <b>{{$user_name}}</b>!  Below you will find <i>ALL</i> of the recipes that you have posted with your user name!</p>
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
