@extends('layouts.app')

@section('content')
<div class="container view-container grey lighten-5">
    
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST'], ['class' => 'createForm']) !!}
        <h1>New Post</h1> 
        <div class="input-field">
            {{Form::text('title', '', ['placeholder' => 'The Title'])}}
            {{Form::label('email', 'Title')}}
        </div>

        <div class="input-field">
            {{Form::label('post', 'Post')}} <br>
            {{ Form::textarea('post', '', ['id' => 'article-ckeditor', 'class' => 'materialize-textarea','placeholder' => 'What\'s going on in your brain right now?'] )}}
            <br>
        </div>
        {{Form::submit('Add Post', ['class' => 'btn green left waves-effect waves-light'])}}
        <a href="/posts" class="btn red right waves-effect waves-lights lighten-1">Cancel</a>
        <div class="clearfix"></div>
    {!! Form::close() !!}
    <br>
</div><br><br>
@endsection()

@section('script')
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
@endsection()