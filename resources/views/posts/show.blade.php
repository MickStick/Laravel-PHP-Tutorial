@extends('layouts.app')


@section("content")
    <a href="/posts" class="btn btn-floating left waves-effect waves-light large red lighten-3" style="margin-top: 3mm !important;"><i class="material-icons">arrow_back</i></a>
    <div class="clearfix"></div>
    <div class="view-container grey lighten-5">
        <h1>{{$post->title}} </h1> 
        <span>
        <h6> : {{$post->created_at}} </h6> 
        
        @if($post->updated_at != $post->created_at)
            <h6><i>Updated: {{$post->updated_at}}</i></h6>
        @endif
        <h6><i>Author: {{$post->user->name}}</i></h6>
        </span><hr>
        <br>
        <div><p>{!! $post->body !!}<p></div>
        @guest

        @else
        @if($post->user->id == Auth::user()->id)
        <div class="fixed-action-btn horizontal">
            <a href="{{$post->id}}/edit" class="btn-floating hoverable right btn-large blue lighten-2 wave-effect waves-green"><i class="material-icons">edit</i></a>
            <ul>
                <li>
                    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE'], ['class' => 'createForm btn-floating ']) !!}
                        <button type="submit" class="btn-floating hoverable right red accent-3 wave-effect waves-green"><i class="material-icons">delete</i></button>
                    {!! Form::close() !!}
                </li>
                {{--  <li><a href="{{$post->id}}" class="btn-floating hoverable right red accent-3 wave-effect waves-green"><i class="material-icons">delete</i></a></li>  --}}
            </ul>
        </div>
        @endif

        @endguest
        <br>
    </div>
    
    <br><br>
@endsection()