@extends('layout')
@section('title', 'Home')
@section('content')
<br/>
<br/>
<div class="container">

    @if(Session::has('message'))
        <div class="alert alert-info">
            <span class="glyphicon glyphicon-exclamation-sign"></span>
            {{Session::get('message')}}
        </div>
    @endif
{{--<div id="app">--}}
{{--<p>@{{ message }}</p>--}}
    {{--<textarea style="width:100%;" v-model="message"></textarea>--}}
    {{--<br/>--}}
{{--</div>--}}
        <br/>
        <h1 class="chalkboard text-center">Welcome to ShareYum.com!</h1>
        <p class="text-muted text-center">Below you will find some of the latest and greatest recipes we have added to the site recently!</p>
        <p class="text-muted text-center">Enjoy your visit, exploring our recipes and please feel free to share these recipes with family &amp; friends!</p>
        <br/>
        <br/>
        <hr/>
        <br/>
    @foreach($main as $item)
        <br/>
            <div class="row">

                @if( $item->videoPath !=null)
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-1 order-lg-1 order-sm-1">
                        <div class="embed-responsive embed-responsive-16by9">
                        {!! $item->videoPath !!}
                        </div>

                    </div>


                @else

                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-1 order-lg-1 order-sm-1">
                        <a href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}"><img class="img-main-story" src="../images/{{ $item->imgPath}}"></a>

                    </div>

                @endif
                <div class="col-lg-6 col-md-12  col-sm-12 col-12 order-2 order-lg-2 order-sm-2">
                    <span class="story-mission-main"><button type="button" class="btn btn-default btn-sm text-uppercase">
            <span class="glyphicon glyphicon-folder-open"></span>
                            {{($item->category)}} -> SUBCATEGORY
        </button></span>
                    <h3 class="chalkboard"><a href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">{{ ucwords($item->title) }}</a></h3>
                    <p class="">Written by {{written_by($item->user_id)}} on {{ gameDate($item->created_at)}}</p>
                    <p class="">{{snippety($item->body)}} ...</p>
                    <a class="btn btn-primary btn-md active" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">Continue Reading</a>


                </div>
            </div>
        <br/>
        <hr>
    @endforeach

        <br/>
            <h2 class="text-center chalkboard"><a href="{{ route('posts.recipes') }}">More Tasty Recipes...</a></h2>


        <br/>


</div>
<br/>

<br/>

{{--<div class="col-md-3 col-sm-10 col-sm-offset-1 col-md-offset-1">--}}
    {{--@include('sidebar')--}}
{{--</div>--}}


@endsection

<script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="{{url('/js/lightslider.js')}}"></script>
<script>

    $(document).ready(function() {
        $("#content-slider").lightSlider({
            loop:true,
            keyPress:true
        })});




</script>




{{--<script>--}}

    {{--$(document).ready(function () {--}}
        {{--new Vue({--}}
            {{--el: '#app',--}}
            {{--data: {--}}
                {{--message: 'Welcome to ShareYum.com!  On this site you will be able to rate and share the yummiest recipes on the internet with family & friends.'--}}
            {{--}--}}
        {{--})--}}
    {{--});--}}

{{--</script>--}}