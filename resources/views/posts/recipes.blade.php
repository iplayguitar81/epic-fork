@extends('layout')
@section('title', 'Recipe Categories')
@section('content')


        <h1 class="chalkboard text-center">Latest Recipes By Category</h1>
        <br/>

        {{--'appetizers_beverages','casseroles', 'desserts_baked_goods',--}}
        {{--'fish_poultry', 'meat', 'misc_canning',--}}
        {{--'pasta', 'soups_salads', 'vegetables'--}}


            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link active chalkboard" data-toggle="tab" href="#appetizer">Appetizers &amp; Beverages</a></li>
                <li class="nav-item"><a class="nav-link chalkboard" data-toggle="tab" href="#casserole">Casseroles</a></li>
            </ul>

            <div class="tab-content">
                <div id="appetizer" class="tab-pane active" role="tabpanel">
                    <br/>

                    <h3 class="chalkboard">Appetizers &amp; Beverages </h3>

                    <br/>
                    {{--<a href="/news/general" class="btn btn-success btn-lg">--}}
                        {{--<span class="glyphicon glyphicon-folder-open"></span> &nbsp;General News--}}
                    {{--</a>--}}

                @foreach($appetizers_beverages as $item)


                        <div class="row">

                            @if( $item->videoPath !=null)
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-1 order-lg-2 order-sm-1">
                                    <div class="embed-responsive embed-responsive-16by9">
                                    {!! $item->videoPath !!}
                                    </div>
                                </div>


                            @else

                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-1 order-lg-2 order-sm-1">
                                    <a href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}"><img class="img-main-story" src="../images/{{ $item->imgPath}}"></a>

                                </div>

                            @endif
                            <div class="col-lg-6 col-md-12  col-sm-12 col-12 order-2 order-lg-1 order-sm-2">
                    <span class="story-mission-main"><button type="button" class="btn btn-default btn-sm text-uppercase">
            <span class="glyphicon glyphicon-folder-open"></span>
                            {{($item->category)}} -> SUBCATEGORY
        </button></span>
                                <h3 class="chalkboard"><a href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">{{ ucwords($item->title) }}</a></h3>
                                <p class="">Written by {{written_by($item->user_id)}} on {{ gameDate($item->created_at)}}</p>
                                <p class=" story-mission-para">{{snippety($item->body)}} ...</p>
                                <a class="btn btn-primary btn-md active" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">Continue Reading</a>


                            </div>
                        </div>
<br/>
<hr/>
                    @endforeach

                    <br/>
                    <br/>


                    <button type="submit" class="btn btn-primary btn-md active" onclick="window.location='{{url('recipes/appetizers-and-beverages')}}';" >All Appetizer &amp; Beverage Recipes</button>

                </div>
                <div id="casserole" class="tab-pane" role="tabpanel">
                    <br/>
                    <h3 class="chalkboard">Casseroles</h3>

                    @foreach($casseroles as $item)

                        <div class="row">

                            @if( $item->videoPath !=null)
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-1 order-lg-2 order-sm-1">
                                    <div class="embed-responsive embed-responsive-16by9">
                                    {!! $item->videoPath !!}
                                    </div>
                                </div>


                            @else

                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-1 order-lg-2 order-sm-1">
                                    <a href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}"><img class="img-main-story" src="../images/{{ $item->imgPath}}"></a>

                                </div>

                            @endif
                            <div class="col-lg-6 col-md-12  col-sm-12 col-12 order-2 order-lg-1 order-sm-2">
                    <span class="story-mission-main"><button type="button" class="btn btn-default btn-sm text-uppercase">
            <span class="glyphicon glyphicon-folder-open"></span>
                            {{($item->category)}} -> SUBCATEGORY
        </button></span>
                                <h3 class="chalkboard"><a href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">{{ ucwords($item->title) }}</a></h3>
                                <p class="">Written by {{written_by($item->user_id)}} on {{ gameDate($item->created_at)}}</p>
                                <p class=" story-mission-para">{{snippety($item->body)}} ...</p>
                                <a class="btn btn-primary btn-md active" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">Continue Reading</a>


                            </div>
                        </div>


                    @endforeach


                    <br/>

                    <button type="submit" class="btn btn-primary btn-md active" onclick="window.location='{{url('recipes/casseroles')}}';" >All Casserole Recipes</button>


                </div>

            </div>

            <br/>



            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active chalkboard" data-toggle="tab" href="#desserts">Desserts &amp; Baked Goods</a></li>
                <li><a class="nav-link chalkboard" data-toggle="tab" href="#fish">Fish &amp; Poultry</a></li>
            </ul>

            <div class="tab-content">
                <div id="desserts"  class="tab-pane active" role="tabpanel">
                    <br/>
                    <h3 class="chalkboard">Desserts &amp; Baked Goods</h3>

                    @foreach($desserts_baked_goods as $item)

                        <div class="row">

                            @if( $item->videoPath !=null)
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-1 order-lg-2 order-sm-1">
                                    <div class="embed-responsive embed-responsive-16by9">
                                    {!! $item->videoPath !!}
                                    </div>

                                </div>


                            @else

                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-1 order-lg-2 order-sm-1">
                                    <a href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}"><img class="img-main-story" src="../images/{{ $item->imgPath}}"></a>

                                </div>

                            @endif
                            <div class="col-lg-6 col-md-12  col-sm-12 col-12 order-2 order-lg-1 order-sm-2">
                    <span class="story-mission-main"><button type="button" class="btn btn-default btn-sm text-uppercase">
            <span class="glyphicon glyphicon-folder-open"></span>
                            {{($item->category)}} -> SUBCATEGORY
        </button></span>
                                <h3 class="chalkboard"><a href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">{{ ucwords($item->title) }}</a></h3>
                                <p class="">Written by {{written_by($item->user_id)}} on {{ gameDate($item->created_at)}}</p>
                                <p class=" story-mission-para">{{snippety($item->body)}} ...</p>
                                <a class="btn btn-primary btn-md active" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">Continue Reading</a>


                            </div>
                        </div>


                    @endforeach


                    <br/>

                    <button type="submit" class="btn btn-primary btn-md active" onclick="window.location='{{url('recipes/desserts-and-baked-goods')}}';" >All Dessert &amp; Baked Good Recipes</button>


                </div>
                <div id="fish" class="tab-pane" role="tabpanel">
                    <br/>
                    <h3 class="chalkboard">Fish &amp; Poultry</h3>


                    @foreach($fish_poultry as $item)


                        <div class="row">

                            @if( $item->videoPath !=null)
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-1 order-lg-2 order-sm-1">
                                    <div class="embed-responsive embed-responsive-16by9">
                                    {!! $item->videoPath !!}
                                    </div>

                                </div>


                            @else

                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-1 order-lg-2 order-sm-1">
                                    <a href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}"><img class="img-main-story" src="../images/{{ $item->imgPath}}"></a>

                                </div>

                            @endif
                            <div class="col-lg-6 col-md-12  col-sm-12 col-12 order-2 order-lg-1 order-sm-2">
                    <span class="story-mission-main"><button type="button" class="btn btn-default btn-sm text-uppercase">
            <span class="glyphicon glyphicon-folder-open"></span>
                            {{($item->category)}} -> SUBCATEGORY
        </button></span>
                                <h3 class="chalkboard"><a href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">{{ ucwords($item->title) }}</a></h3>
                                <p class="">Written by {{written_by($item->user_id)}} on {{ gameDate($item->created_at)}}</p>
                                <p class=" story-mission-para">{{snippety($item->body)}} ...</p>
                                <a class="btn btn-primary btn-md active" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">Continue Reading</a>


                            </div>
                        </div>


                    @endforeach


                    <br/>
                    <button type="submit" class="btn btn-primary btn-md active" onclick="window.location='{{url('recipes/fish-and-poultry')}}';" >All Fish &amp; Poultry Recipes</button>

                </div>

            </div>



        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active chalkboard" data-toggle="tab" href="#meat">Meat</a></li>
            <li class="nav-item"><a class="nav-link chalkboard" data-toggle="tab" href="#misc_canning">Misc. Canning etc.</a></li>
        </ul>

        <div class="tab-content">
            <div id="meat" class="tab-pane active" role="tabpanel">
                <br/>

                <h3 class="chalkboard">Meat </h3>

                <br/>
                {{--<a href="/news/general" class="btn btn-success btn-lg">--}}
                {{--<span class="glyphicon glyphicon-folder-open"></span> &nbsp;General News--}}
                {{--</a>--}}

                @foreach($meat as $item)


                    <div class="row">

                        @if( $item->videoPath !=null)
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-1 order-lg-2 order-sm-1">
                                <div class="embed-responsive embed-responsive-16by9">
                                {!! $item->videoPath !!}
                                </div>

                            </div>


                        @else

                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-1 order-lg-2 order-sm-1">
                                <a href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}"><img class="img-main-story" src="../images/{{ $item->imgPath}}"></a>

                            </div>

                        @endif
                        <div class="col-lg-6 col-md-12  col-sm-12 col-12 order-2 order-lg-1 order-sm-2">
                    <span class="story-mission-main"><button type="button" class="btn btn-default btn-sm text-uppercase">
            <span class="glyphicon glyphicon-folder-open"></span>
                            {{($item->category)}} -> SUBCATEGORY
        </button></span>
                            <h3 class="chalkboard"><a href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">{{ ucwords($item->title) }}</a></h3>
                            <p class="">Written by {{written_by($item->user_id)}} on {{ gameDate($item->created_at)}}</p>
                            <p class=" story-mission-para">{{snippety($item->body)}} ...</p>
                            <a class="btn btn-primary btn-md active" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">Continue Reading</a>


                        </div>
                    </div>


                @endforeach

                <br/>

                <button type="submit" class="btn btn-primary btn-md active" onclick="window.location='{{url('recipes/meat')}}';" >All Meat Recipes</button>

            </div>
            <div id="misc_canning" class="tab-pane" role="tabpanel">
                <br/>
                <h3 class="chalkboard">Misc. Canning etc.</h3>

                @foreach($misc_canning as $item)

                    <div class="row">

                        @if( $item->videoPath !=null)
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-1 order-lg-2 order-sm-1">
                                <div class="embed-responsive embed-responsive-16by9">
                                {!! $item->videoPath !!}
                                </div>

                            </div>


                        @else

                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-1 order-lg-2 order-sm-1">
                                <a href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}"><img class="img-main-story" src="../images/{{ $item->imgPath}}"></a>

                            </div>

                        @endif
                        <div class="col-lg-6 col-md-12  col-sm-12 col-12 order-2 order-lg-1 order-sm-2">
                    <span class="story-mission-main"><button type="button" class="btn btn-default btn-sm text-uppercase">
            <span class="glyphicon glyphicon-folder-open"></span>
                            {{($item->category)}} -> SUBCATEGORY
        </button></span>
                            <h3 class="chalkboard"><a href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">{{ ucwords($item->title) }}</a></h3>
                            <p class="">Written by {{written_by($item->user_id)}} on {{ gameDate($item->created_at)}}</p>
                            <p class=" story-mission-para">{{snippety($item->body)}} ...</p>
                            <a class="btn btn-primary btn-md active" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">Continue Reading</a>


                        </div>
                    </div>


                @endforeach


                <br/>

                <button type="submit" class="btn btn-primary btn-md active" onclick="window.location='{{url('recipes/misc-canning-etc')}}';" >All Misc./Canning etc. Recipes</button>


            </div>

        </div>




        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active chalkboard" data-toggle="tab" href="#pasta">Pasta</a></li>
            <li class="nav-item"><a class="nav-link chalkboard" data-toggle="tab" href="#soups-and-salads">Soups &amp; Salads</a></li>
            <li class="nav-item"><a class="nav-link chalkboard" data-toggle="tab" href="#vegetables">Vegetables</a></li>

        </ul>

        <div class="tab-content">
            <div id="pasta" class="tab-pane active" role="tabpanel">
                <br/>

                <h3 class="chalkboard">Pasta </h3>

                <br/>
                {{--<a href="/news/general" class="btn btn-success btn-lg">--}}
                {{--<span class="glyphicon glyphicon-folder-open"></span> &nbsp;General News--}}
                {{--</a>--}}

                @foreach($pasta as $item)


                    <div class="row">

                        @if( $item->videoPath !=null)
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-1 order-lg-2 order-sm-1">
                                <div class="embed-responsive embed-responsive-16by9">
                                {!! $item->videoPath !!}
                                </div>

                            </div>


                        @else

                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-1 order-lg-2 order-sm-1">
                                <a href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}"><img class="img-main-story" src="../images/{{ $item->imgPath}}"></a>

                            </div>

                        @endif
                        <div class="col-lg-6 col-md-12  col-sm-12 col-12 order-2 order-lg-1 order-sm-2">
                    <span class="story-mission-main"><button type="button" class="btn btn-default btn-sm text-uppercase">
            <span class="glyphicon glyphicon-folder-open"></span>
                            {{($item->category)}} -> SUBCATEGORY
        </button></span>
                            <h3 class="chalkboard"><a href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">{{ ucwords($item->title) }}</a></h3>
                            <p class="">Written by {{written_by($item->user_id)}} on {{ gameDate($item->created_at)}}</p>
                            <p class=" story-mission-para">{{snippety($item->body)}} ...</p>
                            <a class="btn btn-primary btn-md active" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">Continue Reading</a>


                        </div>
                    </div>


                @endforeach

                <br/>

                <button type="submit" class="btn btn-primary btn-md active" onclick="window.location='{{url('recipes/pasta')}}';" >All Pasta Recipes</button>

            </div>
            <div id="soups-and-salads" class="tab-pane" role="tabpanel">
                <br/>
                <h3 class="chalkboard">Soups &amp; Salads</h3>

                @foreach($soups_salads as $item)

                    <div class="row">

                        @if( $item->videoPath !=null)
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-1 order-lg-2 order-sm-1">
                                <div class="embed-responsive embed-responsive-16by9">
                                {!! $item->videoPath !!}
                                </div>

                            </div>


                        @else

                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-1 order-lg-2 order-sm-1">
                                <a href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}"><img class="img-main-story" src="../images/{{ $item->imgPath}}"></a>

                            </div>

                        @endif
                        <div class="col-lg-6 col-md-12  col-sm-12 col-12 order-2 order-lg-1 order-sm-2">
                    <span class="story-mission-main"><button type="button" class="btn btn-default btn-sm text-uppercase">
            <span class="glyphicon glyphicon-folder-open"></span>
                            {{($item->category)}} -> SUBCATEGORY
        </button></span>
                            <h3 class="chalkboard"><a href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">{{ ucwords($item->title) }}</a></h3>
                            <p class="">Written by {{written_by($item->user_id)}} on {{ gameDate($item->created_at)}}</p>
                            <p class=" story-mission-para">{{snippety($item->body)}} ...</p>
                            <a class="btn btn-primary btn-md active" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">Continue Reading</a>


                        </div>
                    </div>


                @endforeach


                <br/>

                <button type="submit" class="btn btn-primary btn-md active" onclick="window.location='{{url('recipes/soups-and-salads')}}';" >All Soups &amp; Salad Recipes</button>


            </div>


            <div id="vegetables" class="tab-pane" role="tabpanel">
                <br/>

                <h3 class="chalkboard">Vegetables </h3>

                <br/>
                {{--<a href="/news/general" class="btn btn-success btn-lg">--}}
                {{--<span class="glyphicon glyphicon-folder-open"></span> &nbsp;General News--}}
                {{--</a>--}}

                @foreach($vegetables as $item)


                    <div class="row">

                        @if( $item->videoPath !=null)
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-1 order-lg-2 order-sm-1">
                                <div class="embed-responsive embed-responsive-16by9">
                                {!! $item->videoPath !!}
                                </div>

                            </div>


                        @else

                            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-1 order-lg-2 order-sm-1">
                                <a href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}"><img class="img-main-story" src="../images/{{ $item->imgPath}}"></a>

                            </div>

                        @endif
                        <div class="col-lg-6 col-md-12  col-sm-12 col-12 order-2 order-lg-1 order-sm-2">
                    <span class="story-mission-main"><button type="button" class="btn btn-default btn-sm text-uppercase">
            <span class="glyphicon glyphicon-folder-open"></span>
                            {{($item->category)}} -> SUBCATEGORY
        </button></span>
                            <h3 class="chalkboard"><a href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">{{ ucwords($item->title) }}</a></h3>
                            <p class="">Written by {{written_by($item->user_id)}} on {{ gameDate($item->created_at)}}</p>
                            <p class=" story-mission-para">{{snippety($item->body)}} ...</p>
                            <a class="btn btn-primary btn-md active" href="{{ route('posts.show', [$item->id, str_slug($item->title)]) }}">Continue Reading</a>


                        </div>
                    </div>
                    <hr/>

                @endforeach

                <br/>

                <button type="submit" class="btn btn-primary btn-md active" onclick="window.location='{{url('recipes/vegetables')}}';" >All Vegetable Recipes</button>

            </div>


        </div>



    <br/>
    <br/>



@endsection

