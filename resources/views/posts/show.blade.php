@extends('layout')
@section('title', $post->title)
@section('content')


    <div class="col-md-12">

    <article class="">
        <br/>
        <br/>
        <h1 class="chalkboard text-center" style="">{{ ucwords($post->title) }}</h1>
        <p class="text-center">{{ucwords($post->subHead)}}</p>

        <p class="" style="text-align:center;">
            Written by
            {{written_by($post->user_id)}}
            on {{ gameDate($post->created_at) }}
        </p>

        <p class="text-center"> <a href="{{ '../../'.route_articles($post->category)}}">
        <button type="button" class="btn btn-default btn-sm">
            <span class="glyphicon glyphicon-folder-open"></span>
            {{$post->category}}
        </button>
        </a></p>

        <div class="d-flex">
        <ul class="share-buttons mx-auto justify-content-center">
            <li><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ftrailblazersfans.com&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"><img alt="Share on Facebook" src="{{url('images/Facebook.png')}}"></a></li>
            <li><a href="https://twitter.com/intent/tweet?source=https%3A%2F%2Ftrailblazersfans.com&text=:%20https%3A%2F%2Ftrailblazersfans.com&via=tblazersfans" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL)); return false;"><img alt="Tweet" src="{{url('images/Twitter.png')}}"></a></li>
            <li><a href="https://plus.google.com/share?url=https%3A%2F%2Ftrailblazersfans.com" target="_blank" title="Share on Google+" onclick="window.open('https://plus.google.com/share?url=' + encodeURIComponent(document.URL)); return false;"><img alt="Share on Google+" src="{{url('images/Google+.png')}}"></a></li>
            <li><a href="http://www.tumblr.com/share?v=3&u=https%3A%2F%2Ftrailblazersfans.com&t=&s=" target="_blank" title="Post to Tumblr" onclick="window.open('http://www.tumblr.com/share?v=3&u=' + encodeURIComponent(document.URL) + '&t=' +  encodeURIComponent(document.title)); return false;"><img alt="Post to Tumblr" src="{{url('images/Tumblr.png')}}"></a></li>
            <li><a href="http://www.reddit.com/submit?url=https%3A%2F%2Ftrailblazersfans.com&title=" target="_blank" title="Submit to Reddit" onclick="window.open('http://www.reddit.com/submit?url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><img alt="Submit to Reddit" src="{{url('images/Reddit.png')}}"></a></li>

        </ul>
        </div>

        <br/>

<div class="row">
        <div class="col-lg-10 col-md-9 col-sm-10 mx-auto">
       <img class="img-fluid mx-auto d-block" src='{{"../../images/". $post->imgPath}}'><p class="text-muted text-center">{{ ucwords($post->mainImg_caption)}}</p>
        @if( $post->videoPath !=null)
        <div class="embed-responsive embed-responsive-16by9">{!! $post->videoPath !!}</div>
        @else

        @endif
        </div>
    </div>
        <br/>
        <div class="center-block text-left">
       <div class="article-texterson2"> {!! ($post->body) !!} </div>
            @if(($post->images->count() > 0 ))
            <div class="container">
                <h2 class='chalkboard'>Article Gallery</h2>
                    <br/>
                {{--<div class="customNavigation">--}}
                {{--<a class="btn prev btn-danger">Previous</a>--}}
                {{--<a class="btn next btn-danger">Next</a>--}}
                {{--</div>--}}
                <ul class="owl-carousel">
                    @foreach($post->images as $image)

                        {{--*/ @ $pathy =$image->file_path  /*--}}

                        {{--*/ @ list($width, $height) = getimagesize($pathy) /*--}}

                        {{--*/ @ $dimensions =$width.'x'.$height  /*--}}

                        {{--*/ $thumb_path= substr($image->file_path, 7);/*--}}
                        <li class="owl-trick">
                            <a href="{{url($image->file_path)}}" data-size="{{$dimensions}}" data-title="{{$image->caption}}">
                                <img class="img-responsive" src="{{url('images/thmb-'.$thumb_path)}}" alt="1"></a></li>
                    @endforeach

                </ul>

            </div>
                @endif
                    </div>

    </article>



        <br/>
    </div>

    <br/>
    <hr>
    <div class="col-md-12">

        <h2 id="fb-comments-show" class="text-center chalkboard" >Leave a Facebook Comment!</h2>
        <div class="fb-comments center-block" data-href="https://dev.fidgetspinnerdog.com/posts/{{$post->id}}/{{str_slug($post->title)}}" data-numposts="10"></div>

        <br/>
        <br/>

        <div class="buttons-show">


        <button type="submit" class="btn center-block btn-md" onclick="window.location='{{url('/recipes')}}';" >Back to All Recipes</button>

   &nbsp;
    <a href="{{url('/')}}">

        <button type="submit" class="btn btn-primary center-block btn-md">Back Home</button>
    </a>

    </div>
</div>
    <br/>
    <br/>


    @endsection

<script src="{{url('/js/jquery.js')}}"></script>

{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
<script src="{{url('/js/star-rating.js')}}"></script>
<script src="{{url('/js/owl.carousel.js')}}"></script>
<script src="{{url('/js/photoswipe.min.js')}}"></script>
<script src="{{url('/js/photoswipe-ui-default.min.js')}}"></script>
<script>

    $(function(){

        // Drawing the HTML for PhotoSwipe
        function buildPswdHtml(){
            $("body").append([
                '<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">',
                '  <div class="pswp__bg"></div>',
                '  <div class="pswp__scroll-wrap">',
                '    <div class="pswp__container">',
                '      <div class="pswp__item"></div>',
                '      <div class="pswp__item"></div>',
                '      <div class="pswp__item"></div>',
                '    </div>',
                '    <div class="pswp__ui pswp__ui--hidden">',
                '      <div class="pswp__top-bar">',
                '          <div class="pswp__counter"></div>',
                '          <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>',
                '          <button class="pswp__button pswp__button--share" title="Share"></button>',
                '          <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>',
                '          <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>',
                '          <div class="pswp__preloader">',
                '            <div class="pswp__preloader__icn">',
                '              <div class="pswp__preloader__cut">',
                '                <div class="pswp__preloader__donut"></div>',
                '              </div>',
                '            </div>',
                '          </div>',
                '      </div>',
                '      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">',
                '        <div class="pswp__share-tooltip"></div> ',
                '      </div>',
                '      <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>',
                '      <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>',
                '      <div class="pswp__caption">',
                '        <div class="pswp__caption__center"></div>',
                '      </div>',
                '    </div>',
                '  </div>',
                '</div>'
            ].join(""));
        }


        // From the gallery, get the items for PhotoSwipe
        function getGalleryItems($gallery){
            var items = [];

            $gallery.find("a").each(function(){
                var $anchor = $(this),
                        size = $anchor.attr("data-size").split("x"),
                        title = $anchor.attr("data-title"),
                        item = {
                            el: $anchor.get(0),
                            src: $anchor.attr("href"),
                            w: parseInt(size[0]),
                            h: parseInt(size[1])
                        };

                // caption
                if( title ) item.title = title;

                items.push(item);
            });

            return items;
        }


        //Opening the PhotoSwipe
        function openGallery($gallery, index, items, pswpOptions){
            var $pswp = $(".pswp"),
                    owl = $gallery.data("owlCarousel"),
                    gallery;

            //Set an option value
            var options = $.extend(true, {
                // Image number to open
                index: index,

                //Zoom setting at the time of image click
                getThumbBoundsFn: function(index){
                    var $thumbnail = $(items[index].el).find("img"),
                            offset = $thumbnail.offset();
                    return {
                        x: offset.left,
                        y: offset.top,
                        w: $thumbnail.outerWidth()
                    };
                }
            }, pswpOptions);

            //Display the PhotoSwipe
            gallery = new PhotoSwipe($pswp.get(0), PhotoSwipeUI_Default, items, options);
            gallery.init();

            // In accordance with the switching of PhotoSwipe slide , OwlCarousel also adjusts position
            gallery.listen("beforeChange", function(x){
                owl.goTo(this.getCurrentIndex());
            });

            gallery.listen("close", function(){
                this.currItem.initialLayout = options.getThumbBoundsFn(this.getCurrentIndex());
            });
        }


        // Initialization
        function initializeGallery($elem, owlOptions, pswpOptions){

            //If the DOM for PhotoSwipe does not exist , a new drawing
            if( $(".pswp").size() === 0 ){
                buildPswdHtml();
            }

            // Scan to accommodate a plurality of gallery
            $elem.each(function(i){
                var $gallery = $(this),
                        uid = i + 1,
                        items = getGalleryItems($gallery),
                        options = $.extend(true, {}, pswpOptions);

                // Initialization of OwlCarousel
                $gallery.owlCarousel(owlOptions);

                //Assign a unique ID to each gallery
                options.galleryUID = uid;
                $gallery.attr("data-pswp-uid", uid);

                // With the click of each item , start PhotoSwipe
                $gallery.find(".owl-item").on("click", function(e){
                    if( !$(e.target).is("img") ) return;

                    //items pass a copy because it is rewritten to PhotoSwipe.init ()
                    openGallery($gallery, $(this).index(), items.concat(), options);
                    return false;
                });
            });
        }


        // In the sample to perform the processing for the `.owl-carousel`
        var owlOptions = {
            //what to mess with if you want to change the amount of slides on the page no matter what as default 3 will show up...
//                    itemsCustom: [[0, 3]],
                    items: 3,
                    responsiveRefreshRate: 0,
                    navigation: true,
//                    pagination: true,
//                    paginationNumbers: true,
                    scrollPerPage: false,
                    dots: true,
                    dotsEach: true
                },
                pswpOptions = {
                    bgOpacity: 0.9,
                    history: false,
                    shareEl: true
                };

        initializeGallery($(".owl-carousel"), owlOptions, pswpOptions);

    });

</script>


