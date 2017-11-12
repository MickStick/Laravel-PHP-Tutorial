@extends('layouts.app')

@section('content')
<div class="container">
    
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'PUT'], ['class' => 'createForm']) !!}
        <h1>Update Post</h1> 
        <div class="input-field">
            {{Form::text('title', $post->title, ['placeholder' => 'The Title'])}}
            {{Form::label('email', 'Title')}}
        </div>

        <div class="input-field">
            {{Form::label('post', 'Post')}} <br>
            {{ Form::textarea('post', $post->body, ['id' => 'article-ckeditor', 'class' => 'materialize-textarea','placeholder' => 'What\'s going on in your brain right now?'] )}}
            <br>
        </div>
        {{Form::submit('Update Post', ['class' => 'btn blue lighten-2 left waves-effect waves-green'])}}
        <a href="/posts/{{$post->id}}" class="btn red right waves-effect waves-lights lighten-1">Cancel</a>
        <div class="clearfix"></div>
    {!! Form::close() !!}
    <br><br><br>
</div>
@endsection()

@section('script')
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
@endsection()