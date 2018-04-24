<!DOCTYPE html>
<html lang="en-gb" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EpicFork.com | @yield('title') </title>
    <link rel="shortcut icon" href="{{ 'images/favicon.ico' }}">
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/css/custom.css')}}">



<style>
    @font-face {
        font-family: ChalkBoard;


        src: url('/fonts/chalkboard.ttf');
    }


    .chalkboard{
        font-family: ChalkBoard;
    }

    .main-contain{

    }

    /*.video-container {*/
        /*position: relative;*/
        /*padding-bottom: 56.25%;*/
        /*padding-top: 35px;*/
        /*height: 0;*/
        /*overflow: hidden;*/
    /*}*/

    /*.video-container iframe {*/
        /*position: absolute;*/
        /*top:0;*/
        /*left: 0;*/
        /*!*works better without a width here...*!*/
        /*!*width: 95%;*!*/
        /*height: 100%;*/
    /*}*/

    .main-article-titles a{
        color: silver;
        text-shadow: #000000 1px 1px;
        text-decoration: none;
        font-family: eightybitty !important;
        font-size: 1.4em;
    }
.main-article-titles a:hover {
    color: #85f665;
    text-shadow: #000000 1px 1px;
}
.article-title-show {
    color: silver;
    text-shadow: #000000 1px 1px;
    font-size: 2.1em !important;
    text-align: center;
    font-family: eightybitty;
}
hr {
    height: 1px;
    background-color: #007bff;
    margin-top: 20px;
    margin-bottom: 20px;
    width: 100%;
}
/*iframe{*/
    /*width: 90%;*/
    /*margin-left: 5%;*/
    /*margin-right: 5%;*/
/*}*/

.add-btn-margin {
margin-top:.5em;
    }
div.pagination {
    /*text-align:center;*/
}

    ul.pagination {
        padding: 0;
        margin: 0;
        font-size: 1.2em;
        color: #FFFFFF;
        font-family:ChalkBoard;
        display:inline-block;
        margin-left:auto;
        margin-right:auto;
    }

    ul.pagination li {
        display: inline;
        margin-left: 1em;
    }

    ul.pagination li a {
        color: #000000;
    }

    ul.pagination li.active {
        background-color: #007bff;
        color: #FFFFFF;
        padding: 8px 16px;
    }

.rating2 {
    width: 100px;
    height: 30px;
    position:relative;
}
.stars {
    width:100%;
    height:100%;
    background: url('{{ URL::asset('images/stars-to-rate.png') }}');
    z-index: 10;
    position:absolute;
    top:0;
    left:0;
}

.nav-bg-efork {

    background: url('{{ URL::asset('images/picnictablebgpurp.png') }}');
}

.back {
    background : gold;
    width:100%;
    height:100%;
}

ul.share-buttons{
    list-style: none;
    padding: 0;
}

ul.share-buttons li{
    display: inline;
}

ul.share-buttons .sr-only {
    position: absolute;
    clip: rect(1px 1px 1px 1px);
    clip: rect(1px, 1px, 1px, 1px);
    padding: 0;
    border: 0;
    height: 1px;
    width: 1px;
    overflow: hidden;
}

    /*.nav-tabs{*/
        /*background-color:#161616;*/
    /*}*/
    /*.tab-content{*/
        /*background-color:#303136;*/
        /*color:#fff;*/
        /*padding:5px*/
    /*}*/
    /*.nav-tabs > li > a{*/
        /*border: medium none;*/
    /*}*/
    /*.nav-tabs > li > a:hover{*/
        /*background-color: #303136 !important;*/
        /*border: medium none;*/
        /*border-radius: 0;*/
        /*color:#fff;*/
    /*}*/


.fb_iframe_widget_fluid span, iframe.fb_ltr { width: 95% !important; }

.fb_iframe_widget, .fb_iframe_widget span, .fb_iframe_widget span iframe[style] {
    min-width: 95% !important;

}


.small-folder{

    font-size: .3em !important;
}


p.second-art-snip{
    font-size: 1em;
}

/*p.article-texterson:first-letter{color:#85f665;font-size:1.7em;text-shadow:1px 1px 1px #000;padding-right:.1em; font-family:Bebas;}*/
/*div.article-texterson2 p:first-letter{color:#85f665;font-size:1.7em;text-shadow:1px 1px 1px #000;padding-right:.1em;}*/


.article-texterson2 {
    font-family: 'Trebuchet MS', Arial, Tahoma !important;
    font-size: 1.2em;
}

/*!
 * @copyright &copy; Kartik Visweswaran, Krajee.com, 2013 - 2016
 * @version 4.0.1
 *
 * A simple yet powerful JQuery star rating plugin that allows rendering fractional star ratings and supports
 * Right to Left (RTL) input.
 *
 * For more JQuery/Bootstrap plugins and demos visit http://plugins.krajee.com
 * For more Yii related demos visit http://demos.krajee.com
 */
.rating-loading {
    width: 25px;
    height: 25px;
    font-size: 0;
    color: #fff;
    background: transparent url({{url('images/loading.gif')}}) top left no-repeat;
    border: none;
}

/*
 * Stars
 */
.rating-container .rating {
    cursor: default;
    position: relative;
    vertical-align: middle;
    display: inline-block;
    overflow: hidden;
    white-space: nowrap;
}

.rating-disabled .rating {
    cursor: not-allowed;
}

.rating-container .star {
    display: inline-block;
    margin: 0 3px;
    text-align: center;
}

.rating-container .empty-stars {
    color: #aaa;
}

.rating-container .filled-stars {
    position: absolute;
    left: 0;
    top: 0;
    margin: auto;
    color: #fde16d;
    white-space: nowrap;
    overflow: hidden;
    -webkit-text-stroke: 1px #777;
    text-shadow: 1px 1px #999;
}

.rating-rtl {
    float: right;
}

.rating-animate .filled-stars {
    transition: width 0.25s ease;
    -o-transition: width 0.25s ease;
    -moz-transition: width 0.25s ease;
    -webkit-transition: width 0.25s ease;
}

.rating-rtl .filled-stars {
    left: auto;
    right: 0;
    -moz-transform: matrix(-1, 0, 0, 1, 0, 0) translate3d(0, 0, 0);
    -webkit-transform: matrix(-1, 0, 0, 1, 0, 0) translate3d(0, 0, 0);
    -o-transform: matrix(-1, 0, 0, 1, 0, 0) translate3d(0, 0, 0);
    transform: matrix(-1, 0, 0, 1, 0, 0) translate3d(0, 0, 0);
}

.rating-rtl.is-star .filled-stars {
    right: 0.06em;
}

.rating-rtl.is-heart .empty-stars {
    margin-right: 0.07em;
}

/**
 * Sizes
 */
.rating-xl {
    font-size: 4.89em;
}

.rating-lg {
    font-size: 3.91em;
}

.rating-md {
    font-size: 3.13em;
}

.rating-sm {
    font-size: 2.5em;
}

.rating-xs {
    font-size: 2em;
}

.rating-xl {
    font-size: 4.89em;
}

/**
 * Clear
 */
.rating-container .clear-rating {
    color: #aaa;
    cursor: not-allowed;
    display: inline-block;
    vertical-align: middle;
    font-size: 60%;
}

.clear-rating-active {
    cursor: pointer !important;
}

.clear-rating-active:hover {
    color: #843534;
}

.rating-container .clear-rating {
    padding-right: 5px;
}

/**
 * Caption
 */
.rating-container .caption {
    color: #999;
    display: inline-block;
    vertical-align: middle;
    font-size: 60%;
    margin-top: -0.6em;
    display:none;
}

.rating-container .caption {
    margin-left: 5px;
    margin-right: 0;
}

.rating-rtl .caption {
    margin-right: 5px;
    margin-left: 0;
}


.Ripper{
    font-family: 'FabFelt' !important;
}

.Bebas{
    font-family: 'segoe' !important;
}

#brand-image {
        height: 90px;
    }


.fb_iframe_widget, .fb_iframe_widget span, .fb_iframe_widget span iframe[style] {
    min-width: 95% !important;
    width: 95% !important;
    background-color: #FFFFFF
}

.fb_iframe_widget, .fb_iframe_widget span, .fb_iframe_widget span iframe[style] a {
    color: #FFFFFF
}

twitterwidget{
    margin-left:auto;
    margin-right:auto;
}



.bubble {
    float: right;
    position: relative;
    width: 60px;
    height: 20px;
    padding: 0px;
    background: #000000;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    text-align: center;
    color: #FFFFFF;
    margin-right: 5%
}

.bubble:after {
    content: '';
    position: absolute;
    border-style: solid;
    border-width: 15px 5px 0;
    border-color: #000000 transparent;
    display: block;
    width: 0;
    z-index: 1;
    margin-left: -5px;
    bottom: -15px;
    left: 48%
}

.readmore2 {
    width: 100%;
    display: inline
}

.article-texterson {
    font-size: 1.2em;
    line-height: 1.2em;
    text-align: center;
    font-family: 'Trebuchet MS', Arial, Tahoma;
}

.panel-footer{
    text-align:center;
}

.uk-accordion-title {
    font-size: 1em !important
}



/*iframe {*/
    /*width: 90%;*/
    /*margin-left: 5%;*/
    /*margin-right: 5%*/
/*}*/

h2.story_h2{font-family:FabFelt;color:#FFFFFF}
h2.story_h2{background-color:#D73F3F;text-align:center;border-top:2px solid #6d7173;border-bottom:2px solid #000000;padding-top:1.5%}
.story_h2 a{text-decoration:none;color:#BBBBBB;text-shadow:2px 2px #000000}
h2.story_h2 a:hover{color:#FFFFFF}
h2.story_h2 {
    line-height: 1.4em;
    padding-bottom: .2em;
}



@media (max-width: 568px){td.hide_box_column{display:none}}
/**
 * Print
 */
@media print {
    .rating-container .clear-rating {
        display: none;
    }
}
/*
 * The MIT License
 * Copyright (c) 2012 Matias Meno <m@tias.me>
 */
@-webkit-keyframes passing-through {
    0% {
        opacity: 0;
        -webkit-transform: translateY(40px);
        -moz-transform: translateY(40px);
        -ms-transform: translateY(40px);
        -o-transform: translateY(40px);
        transform: translateY(40px); }
    30%, 70% {
        opacity: 1;
        -webkit-transform: translateY(0px);
        -moz-transform: translateY(0px);
        -ms-transform: translateY(0px);
        -o-transform: translateY(0px);
        transform: translateY(0px); }
    100% {
        opacity: 0;
        -webkit-transform: translateY(-40px);
        -moz-transform: translateY(-40px);
        -ms-transform: translateY(-40px);
        -o-transform: translateY(-40px);
        transform: translateY(-40px); } }
@-moz-keyframes passing-through {
    0% {
        opacity: 0;
        -webkit-transform: translateY(40px);
        -moz-transform: translateY(40px);
        -ms-transform: translateY(40px);
        -o-transform: translateY(40px);
        transform: translateY(40px); }
    30%, 70% {
        opacity: 1;
        -webkit-transform: translateY(0px);
        -moz-transform: translateY(0px);
        -ms-transform: translateY(0px);
        -o-transform: translateY(0px);
        transform: translateY(0px); }
    100% {
        opacity: 0;
        -webkit-transform: translateY(-40px);
        -moz-transform: translateY(-40px);
        -ms-transform: translateY(-40px);
        -o-transform: translateY(-40px);
        transform: translateY(-40px); } }
@keyframes passing-through {
    0% {
        opacity: 0;
        -webkit-transform: translateY(40px);
        -moz-transform: translateY(40px);
        -ms-transform: translateY(40px);
        -o-transform: translateY(40px);
        transform: translateY(40px); }
    30%, 70% {
        opacity: 1;
        -webkit-transform: translateY(0px);
        -moz-transform: translateY(0px);
        -ms-transform: translateY(0px);
        -o-transform: translateY(0px);
        transform: translateY(0px); }
    100% {
        opacity: 0;
        -webkit-transform: translateY(-40px);
        -moz-transform: translateY(-40px);
        -ms-transform: translateY(-40px);
        -o-transform: translateY(-40px);
        transform: translateY(-40px); } }
@-webkit-keyframes slide-in {
    0% {
        opacity: 0;
        -webkit-transform: translateY(40px);
        -moz-transform: translateY(40px);
        -ms-transform: translateY(40px);
        -o-transform: translateY(40px);
        transform: translateY(40px); }
    30% {
        opacity: 1;
        -webkit-transform: translateY(0px);
        -moz-transform: translateY(0px);
        -ms-transform: translateY(0px);
        -o-transform: translateY(0px);
        transform: translateY(0px); } }
@-moz-keyframes slide-in {
    0% {
        opacity: 0;
        -webkit-transform: translateY(40px);
        -moz-transform: translateY(40px);
        -ms-transform: translateY(40px);
        -o-transform: translateY(40px);
        transform: translateY(40px); }
    30% {
        opacity: 1;
        -webkit-transform: translateY(0px);
        -moz-transform: translateY(0px);
        -ms-transform: translateY(0px);
        -o-transform: translateY(0px);
        transform: translateY(0px); } }
@keyframes slide-in {
    0% {
        opacity: 0;
        -webkit-transform: translateY(40px);
        -moz-transform: translateY(40px);
        -ms-transform: translateY(40px);
        -o-transform: translateY(40px);
        transform: translateY(40px); }
    30% {
        opacity: 1;
        -webkit-transform: translateY(0px);
        -moz-transform: translateY(0px);
        -ms-transform: translateY(0px);
        -o-transform: translateY(0px);
        transform: translateY(0px); } }
@-webkit-keyframes pulse {
    0% {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1); }
    10% {
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -ms-transform: scale(1.1);
        -o-transform: scale(1.1);
        transform: scale(1.1); }
    20% {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1); } }
@-moz-keyframes pulse {
    0% {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1); }
    10% {
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -ms-transform: scale(1.1);
        -o-transform: scale(1.1);
        transform: scale(1.1); }
    20% {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1); } }
@keyframes pulse {
    0% {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1); }
    10% {
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -ms-transform: scale(1.1);
        -o-transform: scale(1.1);
        transform: scale(1.1); }
    20% {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1); } }
.dropzone, .dropzone * {
    box-sizing: border-box; }

.dropzone {
    min-height: 150px;
    border: 2px solid rgba(0, 0, 0, 0.3);
    background: white;
    padding: 20px 20px; }
.dropzone.dz-clickable {
    cursor: pointer; }
.dropzone.dz-clickable * {
    cursor: default; }
.dropzone.dz-clickable .dz-message, .dropzone.dz-clickable .dz-message * {
    cursor: pointer; }
.dropzone.dz-started .dz-message {
    display: none; }
.dropzone.dz-drag-hover {
    border-style: solid; }
.dropzone.dz-drag-hover .dz-message {
    opacity: 0.5; }
.dropzone .dz-message {
    text-align: center;
    margin: 2em 0; }
.dropzone .dz-preview {
    position: relative;
    display: inline-block;
    vertical-align: top;
    margin: 16px;
    min-height: 100px; }
.dropzone .dz-preview:hover {
    z-index: 1000; }
.dropzone .dz-preview:hover .dz-details {
    opacity: 1; }
.dropzone .dz-preview.dz-file-preview .dz-image {
    border-radius: 20px;
    background: #999;
    background: linear-gradient(to bottom, #eee, #ddd); }
.dropzone .dz-preview.dz-file-preview .dz-details {
    opacity: 1; }
.dropzone .dz-preview.dz-image-preview {
    background: white; }
.dropzone .dz-preview.dz-image-preview .dz-details {
    -webkit-transition: opacity 0.2s linear;
    -moz-transition: opacity 0.2s linear;
    -ms-transition: opacity 0.2s linear;
    -o-transition: opacity 0.2s linear;
    transition: opacity 0.2s linear; }
.dropzone .dz-preview .dz-remove {
    font-size: 14px;
    text-align: center;
    display: block;
    cursor: pointer;
    border: none; }
.dropzone .dz-preview .dz-remove:hover {
    text-decoration: underline; }
.dropzone .dz-preview:hover .dz-details {
    opacity: 1; }
.dropzone .dz-preview .dz-details {
    z-index: 20;
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    font-size: 13px;
    min-width: 100%;
    max-width: 100%;
    padding: 2em 1em;
    text-align: center;
    color: rgba(0, 0, 0, 0.9);
    line-height: 150%; }
.dropzone .dz-preview .dz-details .dz-size {
    margin-bottom: 1em;
    font-size: 16px; }
.dropzone .dz-preview .dz-details .dz-filename {
    white-space: nowrap; }
.dropzone .dz-preview .dz-details .dz-filename:hover span {
    border: 1px solid rgba(200, 200, 200, 0.8);
    background-color: rgba(255, 255, 255, 0.8); }
.dropzone .dz-preview .dz-details .dz-filename:not(:hover) {
    overflow: hidden;
    text-overflow: ellipsis; }
.dropzone .dz-preview .dz-details .dz-filename:not(:hover) span {
    border: 1px solid transparent; }
.dropzone .dz-preview .dz-details .dz-filename span, .dropzone .dz-preview .dz-details .dz-size span {
    background-color: rgba(255, 255, 255, 0.4);
    padding: 0 0.4em;
    border-radius: 3px; }
.dropzone .dz-preview:hover .dz-image img {
    -webkit-transform: scale(1.05, 1.05);
    -moz-transform: scale(1.05, 1.05);
    -ms-transform: scale(1.05, 1.05);
    -o-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05);
    -webkit-filter: blur(8px);
    filter: blur(8px); }
.dropzone .dz-preview .dz-image {
    border-radius: 20px;
    overflow: hidden;
    width: 120px;
    height: 120px;
    position: relative;
    display: block;
    z-index: 10; }
.dropzone .dz-preview .dz-image img {
    display: block; }
.dropzone .dz-preview.dz-success .dz-success-mark {
    -webkit-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
    -moz-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
    -ms-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
    -o-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
    animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1); }
.dropzone .dz-preview.dz-error .dz-error-mark {
    opacity: 1;
    -webkit-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
    -moz-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
    -ms-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
    -o-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
    animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1); }
.dropzone .dz-preview .dz-success-mark, .dropzone .dz-preview .dz-error-mark {
    pointer-events: none;
    opacity: 0;
    z-index: 500;
    position: absolute;
    display: block;
    top: 50%;
    left: 50%;
    margin-left: -27px;
    margin-top: -27px; }
.dropzone .dz-preview .dz-success-mark svg, .dropzone .dz-preview .dz-error-mark svg {
    display: block;
    width: 54px;
    height: 54px; }
.dropzone .dz-preview.dz-processing .dz-progress {
    opacity: 1;
    -webkit-transition: all 0.2s linear;
    -moz-transition: all 0.2s linear;
    -ms-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
    transition: all 0.2s linear; }
.dropzone .dz-preview.dz-complete .dz-progress {
    opacity: 0;
    -webkit-transition: opacity 0.4s ease-in;
    -moz-transition: opacity 0.4s ease-in;
    -ms-transition: opacity 0.4s ease-in;
    -o-transition: opacity 0.4s ease-in;
    transition: opacity 0.4s ease-in; }
.dropzone .dz-preview:not(.dz-processing) .dz-progress {
    -webkit-animation: pulse 6s ease infinite;
    -moz-animation: pulse 6s ease infinite;
    -ms-animation: pulse 6s ease infinite;
    -o-animation: pulse 6s ease infinite;
    animation: pulse 6s ease infinite; }
.dropzone .dz-preview .dz-progress {
    opacity: 1;
    z-index: 1000;
    pointer-events: none;
    position: absolute;
    height: 16px;
    left: 50%;
    top: 50%;
    margin-top: -8px;
    width: 80px;
    margin-left: -40px;
    background: rgba(255, 255, 255, 0.9);
    -webkit-transform: scale(1);
    border-radius: 8px;
    overflow: hidden; }
.dropzone .dz-preview .dz-progress .dz-upload {
    background: #333;
    background: linear-gradient(to bottom, #666, #444);
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 0;
    -webkit-transition: width 300ms ease-in-out;
    -moz-transition: width 300ms ease-in-out;
    -ms-transition: width 300ms ease-in-out;
    -o-transition: width 300ms ease-in-out;
    transition: width 300ms ease-in-out; }
.dropzone .dz-preview.dz-error .dz-error-message {
    display: block; }
.dropzone .dz-preview.dz-error:hover .dz-error-message {
    opacity: 1;
    pointer-events: auto; }
.dropzone .dz-preview .dz-error-message {
    pointer-events: none;
    z-index: 1000;
    position: absolute;
    display: block;
    display: none;
    opacity: 0;
    -webkit-transition: opacity 0.3s ease;
    -moz-transition: opacity 0.3s ease;
    -ms-transition: opacity 0.3s ease;
    -o-transition: opacity 0.3s ease;
    transition: opacity 0.3s ease;
    border-radius: 8px;
    font-size: 13px;
    top: 130px;
    left: -10px;
    width: 140px;
    background: #be2626;
    background: linear-gradient(to bottom, #be2626, #a92222);
    padding: 0.5em 1.2em;
    color: white; }
.dropzone .dz-preview .dz-error-message:after {
    content: '';
    position: absolute;
    top: -6px;
    left: 64px;
    width: 0;
    height: 0;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-bottom: 6px solid #be2626; }

td.score-link{
    border: none !important;
    padding-top: .3em;
}

.initials{
    font-size: 1.9em;
    line-height: 1em;
}


#owl-demo .item{

    margin: 10px;
    color: #FFF;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    text-align: center;
}
.customNavigation{
    text-align: center;
}

  .customNavigation a{
      -webkit-user-select: none;
      -khtml-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  }


.owl_trick img.img-responsive2{
    /*margin: 0 auto !important;*/
    max-width: 100%;
    height: auto;
    display: inline-block;
}


.form-group label {
    font-family: ChalkBoard;
    font-size: 2em;
}

.secondary-posts-title{

    font-family:segoe;
    font-size: 3em;
    margin-top: 0;
    margin-bottom:0;
}

.secondary-posts-title a{
    font-size: .5em;
}




.secondary-article-img{

    width:97%;
    height:180px;
    margin-right: 1em;

}

.category-search {
    font-size: .4em;
}


._2p3a {
    width: 100% !important;
    min-width: 90% !important;
}
table.header_last_game{font-family: Bebas;
    margin-left: auto;
    margin-right: auto;
    font-size: 1.5em;}.header_last_game td{border:1px inset #000000;text-align:center;line-height:1.5em}.win_loss_box_show_win{background-color:#FFFFFF;font-size:1em;padding:.5%;color:green;text-shadow:2px 2px white;border:1px inset #777788;font-family:"Trebuchet MS", georgia, Verdana, Sans-serif;margin-bottom:.2%}.win_loss_box_show_loss{padding:.5%;font-size:1em;background-color:#FFFFFF;border:1px inset #000000;color:#D73F3F;text-shadow:1px 1px #777788;font-family:"Trebuchet MS", georgia, Verdana, Sans-serif;margin-bottom:.2%}.win_loss_box_show_win2{background-color:#FFFFFF;font-size:1em;padding:.5%;color:green;text-shadow:2px 2px white;font-family:"Trebuchet MS", georgia, Verdana, Sans-serif;margin-bottom:.2%}.win_loss_box_show_loss2{padding:.5%;font-size:1.2em;background-color:#FFFFFF;color:#D73F3F;text-shadow:1px 1px #777788;font-family:Bebas;margin-bottom:.2%}

.slider_score {
    line-height: 1em;
    font-size: 1.5em;
    font-weight: 500;
}

.buttons-show {
text-align:center;
}

ul{
    list-style: none outside none;
    padding-left: 0;
    margin: 0;
}
.demo .item{
    margin-bottom: 60px;
}
.content-slider li{
    background-color: #ed3020;
    text-align: center;
    color: #FFF;
}
.content-slider h3 {
    margin: 0;
    padding: 70px 0;
}
.demo{
    width: 800px;
}

#top{

    background-color: silver;
    /*height: 65px;*/
}


em.caption-em{
    text-align:center;
    display:block;
    font-size: .95em;
}


    .count-icon {
        display: inline-block;
        position: relative;
    }

    .fb-comments-count {
        position: absolute;
        top: .8em;
        right: .5em;
        height: 1.5em;
        width: 2.2em;
        background: #85f665;
        border-radius: 8px;
        font-size: .8em;
        text-align: center;
    }

    .twitter-timeline{

        width: 90% !important;

    }

    .fb-page, .fb-page iframe[style], .fb-page span {
        width: 100% !important;
    }
    .fb-comments, .fb-comments iframe[style], .fb-comments span {
        width: 100% !important;
    }





 </style>
</head>
<body>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-82376312-1', 'auto');
    ga('send', 'pageview');

</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1863073990661184";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<script>window.twttr = (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
        if (d.getElementById(id)) return t;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);

        t._e = [];
        t.ready = function(f) {
            t._e.push(f);
        };

        return t;
    }(document, "script", "twitter-wjs"));</script>

{{--<header id="top" role="banner">--}}
    {{--<a href="{{url('/')}}">--}}
        {{--<img alt="fidgetspinnerdog.com" style="width:100%;" src="{{url('images/fidgetspinnerdog-logo.jpg')}}">--}}

    {{--</a>--}}


{{--</header>--}}

<nav class="navbar navbar-expand-lg navbar-light bg-light nav-bg-efork">
    <a class="navbar-brand triad-lg-brand" href="{{url('/')}}">
        <img id="brand-image" style="width:250px; height:auto;" src="{{url('images/epicforkdraft2.png')}}" alt="EpicFork.com Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto chalkboard">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/about')}}">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Yummies
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('/recipes')}}">Recipes</a>
                    <a class="dropdown-item" href="{{url('/posts')}}">Epic Fork Blog</a>
                    {{--<div class="dropdown-divider"></div>--}}
                    {{--<a class="dropdown-item" href="#">Something else here</a>--}}
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/contact')}}">Contact</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" role="search" action="/search" method="GET">
            <input class="form-control mr-sm-2" type="search" class="form-control" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<br/>


{{--<nav class="navbar navbar-default">--}}
    {{--<div class="container-fluid">--}}
        {{--<div class="navbar-header">--}}
            {{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}
            {{--<a class="navbar-brand" href="{{url('/')}}">--}}
                {{--<img src="{{url('images/blazers-fans-logo-draft.png')}}"alt="">--}}
                {{--<!-- put text here if want/need be-->--}}

            {{--</a>--}}
            {{--<a class="navbar-brand" href="{{url('/')}}" style="font-family:Pacifico,cursive; font-size: 2em;color: #D71B32;text-shadow: #230D10 1px 1px 1px;">--}}

            {{--</a>--}}
        {{--</div>--}}
        {{--<div class="collapse navbar-collapse" id="myNavbar">--}}
            {{--<ul class="nav navbar-nav">--}}
                {{--<li @if(\Request::url()==='https://trailblazersfans.com') class='active' @else  @endif><a href="{{url('/')}}">Home</a></li>--}}
                {{--<li @if(\Request::url()==='https://trailblazersfans.com/about') class='active' @else  @endif><a href="{{url('/about')}}">About</a></li>--}}

                {{--<li @if(\Request::url()==='https://trailblazersfans.com/news') class='active' @else  @endif><a href="{{url('/news')}}">News</a></li>--}}
                {{--<li @if(\Request::url()==='https://trailblazersfans.com/contact') class='active' @else  @endif><a href="{{url('/contact')}}">Contact</a></li>--}}

                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-btn fa-search"></i></a>--}}
                    {{--<ul class="dropdown-menu" style="width: 300px;">--}}
                        {{--<li>--}}
                            {{--<form class="navbar-form" role="search" action="/search" method="GET">--}}
                                {{--<div class="input-group">--}}
                                    {{--<input type="text" class="form-control" name="search" placeholder="Search"  name="srch-term" id="srch-term">--}}
                                    {{--<div class="input-group-btn">--}}
                                        {{--<button class="btn btn-success btn-md active" type="submit">Enter</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</form>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}


            {{--</ul>--}}



            {{--<ul class="nav navbar-nav navbar-right pull-right">--}}



                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-btn fa-gear"></i>--}}
{{--@if(Auth::guest())--}}

    {{--Login--}}
          {{--@else--}}
                        {{--{{Auth::user()->name}}--}}

    {{--@endif--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu" style="width: 300px;">--}}
                        {{--<li>--}}

                        {{--@if (Auth::guest())--}}
                            {{--<li><a href="{{url('/login')}}"><i class="fa fa-btn fa-sign-in"></i> Login</a></li>--}}

                        {{--@else--}}

                            {{--<li> <a href="{{url('/posts/user_posts')}}"><i class="fa fa-btn fa-sign-out"></i>  {{Auth::user()->name}}!</a></li>--}}

                            {{--<li><a style="position:relative; padding-left: 50px;" href="{{url('/logout')}}">--}}

                                    {{--@if(empty(Auth::user()->avatar))--}}


                                        {{--<img src="{{url('images/default-user-img.png')}}" alt="user avatar" class="img-rounded"style="width:20px; height:20px;">--}}

                                    {{--@else--}}
                                        {{--<img src="{{Auth::user()->avatar}}" alt="user avatar" class="img-rounded"style="width:32px; height:32px; position:absolute; top:10px; left: 10px;">--}}

                                    {{--@endif--}}
                                    {{--<i class="fa fa-btn fa-sign-out"></i>Logout</a></li>--}}


                            {{--@endif--}}


                            {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

            {{--</ul>--}}


        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}
{{--<div id="nav-bar-logo-stick" data-uk-sticky="{boundary:'#footsy'}">--}}
    {{--<header id="top">--}}
        {{--<a href="{{url('/')}}" ><img alt="bowtie software &amp; web development" src="{{url('/images/bowtiebranded.png')}}"></a>--}}
    {{--</header>--}}


    {{--<br/>--}}
    {{--<nav class="uk-navbar uk-margin-large-bottom">--}}
        {{--<a class="uk-navbar-brand uk-hidden-small" href="{{url('/')}}"><img src="{{url('/images/bowtiebranded.png')}}" alt="bowtiesoftware &amp; web development"/></a>--}}
        {{--<ul class="uk-navbar-nav uk-hidden-small">--}}
            {{--<li class="uk-active">--}}
                {{--<a href="{{url('/')}}" >Home</a>--}}
            {{--</li>--}}

            {{--<li>--}}
                {{--<a href="{{url('/posts')}}">Blog</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="/contact">Contact</a>--}}
            {{--</li>--}}
            {{--@if (Auth::guest())--}}
                {{--<li><a href="{{ url('/login') }}">Login</a></li>--}}
                {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
            {{--@else--}}



                {{--<ul href="#" class="uk-nav uk-nav-dropdow" role="button" aria-expanded="false">--}}

                {{--{{Auth::user()->name}} <span class="caret"></span>--}}
                {{--</ul>--}}

                {{--<li><a href="{{url('/posts/user_posts')}}"><i class="fa fa-btn fa-sign-out"></i>Posts You Made</a></li>--}}

                {{--<li><a href="{{url('/logout')}}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>--}}


                {{--<ul class="n" role="menu">--}}



                {{--</ul>--}}

                {{--<div class="uk-button-dropdown uk-align-right" data-uk-dropdown="{mode:'click'}" aria-haspopup="true" aria-expanded="false">--}}
                    {{--<button class="uk-button">{{Auth::user()->name}}&nbsp;&nbsp;<i class="uk-icon-caret-down"></i></button>--}}
                    {{--<div class="uk-dropdown uk-dropdown-bottom" style="top: 30px; left: 0px;">--}}
                        {{--<ul class="uk-nav uk-nav-dropdown">--}}
                            {{--<li><a href="{{url('/posts/user_posts')}}"><i class="fa fa-btn fa-sign-out"></i>Posts You Made</a></li>--}}
                            {{--<li class="uk-nav-divider"></li>--}}
                            {{--<li><a href="{{url('/logout')}}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>--}}

                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--@endif--}}
        {{--</ul>--}}
        {{--<a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>--}}
        {{--<div class="uk-navbar-brand uk-navbar-center uk-visible-small"><!-- This is where you put branding text --></div>--}}
    {{--</nav>--}}
{{--</div>--}}


<div class="container-fluid main-contain">

<div class="row">

        @yield('content')

</div>
</div>



    <div id="footsy"></div>

    @include('footer')

{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}

<script src="{{url('/js/jquery.js')}}"></script>
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js')}}"></script>


<script src="{{url('/js/photoswipe.min.js')}}"></script>
<script src="{{url('/js/photoswipe-ui-default.min.js')}}"></script>
<script src="{{url('/js/lightslider.js')}}"></script>


{{--figuring out right gallery sitch:--}}


<script src="{{url('/js/owl.carousel.js')}}"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>


{{--<script>--}}
    {{--(function() {--}}
        {{--var link = document.createElement('link');--}}
        {{--link.rel = "stylesheet";--}}
        {{--link.href = "https://fonts.googleapis.com/css?family=Pacifico";--}}
        {{--document.querySelector("head").appendChild(link);--}}
    {{--})();--}}
{{--</script>--}}
<style scoped>
    /*@import "https://fonts.googleapis.com/css?family=Pacifico";*/
    /*@import "https://fonts.googleapis.com/css?family=Boogaloo";*/
    @import "https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css";
    @import "{{url('/css/default-skin.css')}}";
    @import "{{url('/css/lightslider.css')}}";


    {{--getting this part right........ among files to remove after figuring out right gallery sitch:--}}

     {{--@import "{{url('/css/slick.css')}}";--}}
    {{--@import "{{url('/css/slick-theme.css')}}";--}}
    {{--@import "{{url('/css/slick-theme.css')}}";--}}
    @import "{{url('/css/owl.carousel.css')}}";
    @import "{{url('/css/owl.theme.css')}}";


    @import "{{url('/css/photoswipe.css')}}";
    @import "//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css";
    @import "//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css";
    @import "//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css";
    @import "https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.6/fonts/glyphicons-halflings-regular.woff";


  #gallery-images img {
      width: 240px;
      height: 160px;
      border: 2px solid black;
      margin-bottom: 10px;
  }

#gallery-images ul {
    margin: 0;
}
#gallery-images li {
    margin: 0;
    padding: 0;
    list-style: none;
    float: left;
    padding-right: 10px;
}


    /*#owl-demo .item{*/
        /*margin: 3px;*/
        /*width: 80%;*/
        /*margin-left:10%;*/
        /*margin-right:10%;*/

    /*}*/
    /*#owl-demo .item img{*/
        /*display: block;*/
        /*width: 100%;*/
        /*!*height: auto;*!*/
    /*}*/



    /*.customNavigation{*/
        /*text-align: center;*/
    /*}*/

      /*.customNavigation a{*/
          /*-webkit-user-select: none;*/
          /*-khtml-user-select: none;*/
          /*-moz-user-select: none;*/
          /*-ms-user-select: none;*/
          /*user-select: none;*/
          /*-webkit-tap-highlight-color: rgba(0, 0, 0, 0);*/
      /*}*/


    .owl-carousel li {
        list-style:none;
        margin-right: .3em;
    }

    .owl-carousel li img {
        border-radius:.5em;
        transition:transform .15s ease-out;
    }

    .owl-carousel li img:hover {
        transform:scale(.98, .98);
    }

    .owl-carousel li img:active {
        transform:scale(.96, .96);
    }


    /*tabs custom styling*/

    .nav-tabs{
        /*background-color:#C8D3DB;*/
    }

    .nav-tabs > li > a{
        border-radius: 5px;
    }
    .nav-tabs > li > a:hover{
        background-color: silver !important;
        /*border-radius: 5px;*/
        color: #FFFFFF;
        /*border: 1px solid black;*/
        /*border-bottom: none;*/
    }
    .nav-tabs > li.active > a,
    .nav-tabs > li.active > a:focus,
    .nav-tabs > li.active > a:hover{
        background-color: #85f665 !important;
        color: black;
        border: 1px solid #000000;
        border-bottom: none;
    }

    .tab-links {
        color: #000000;
    }

</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="{{url('/js/owl.carousel.js')}}"></script>
<script src="{{url('/js/photoswipe.min.js')}}"></script>
<script src="{{url('/js/photoswipe-ui-default.min.js')}}"></script>
{{--<script>--}}
    {{--$(document).ready(function(){--}}
        {{--$('.slider').slick({--}}
            {{--infinite: true,--}}
            {{--arrows: true,--}}
            {{--speed: 500,--}}
            {{--slidesToShow: 1,--}}
            {{--slidesToScroll: 1--}}
    {{--});--}}
    {{--});--}}





{{--</script>--}}

<script>

    $(document).ready(function(){


    });
    var baseUrl = "{{ url('') }}";
    var handleDropzoneFileUpload ={

        handleError: function(response) {
            console.log(response);
        },
        handleSuccess: function(response){
           var imageList =$('#gallery-images ul');
            var imageSrc = baseUrl + '/' + response.file_path;
$(imageList).append('<li><a href=""><img src="'+imageSrc +'"></a><br/><span>Upload Successful</span><br/>Refresh Page for Delete Button');
        }
    };

    //
    //<button class="btn btn-danger" type="submit">Delete</button>
    {{--{!! Form::submit(Auth::user()->name.' - -Delete Image', ['class' => 'btn btn-danger']) !!}--}}
    {{--@endif--}}

   //

    //
    Dropzone.options.addImages ={

        maxFilesize: 2,

        acceptedFiles: 'image/*',
        success: function(file, response) {
          console.log(file);
            console.log(response);

            if(file.status =='success'){
                handleDropzoneFileUpload.handleSuccess(response);

            }
            else{
                handleDropzoneFileUpload.handleError(response);
            }
        },

    };

    $(document).ready(function() {

        var owl = $("#owl-demo");

        owl.owlCarousel({

//            navigation : true,
            singleItem: true

        });

    })



</script>



</body>
</html>

