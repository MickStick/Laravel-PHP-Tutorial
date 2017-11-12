@extends('layouts.app')


@section("content")
    <a href="/posts" class="btn btn-floating left waves-effect waves-light large red lighten-3" style="margin-top: 3mm !important;"><i class="material-icons">arrow_back</i></a>
    <div class="clearfix"></div>
    <h1>{{$post->title}} </h1> 
    <span>
    <h6> : {{$post->created_at}} </h6> 
    
    @if($post->updated_at != $post->created_at)
        <h6><i>Updated: {{$post->updated_at}}</i></h6>
    @endif

    </span><hr>
    <br>
    <div><p>{!! nl2br(e($post->body)) !!}<p></div>
 

@endsection()