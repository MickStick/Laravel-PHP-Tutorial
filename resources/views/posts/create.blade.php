@extends('layouts.app')


@section('content')
<div class="container view-container grey lighten-5" style="padding: 3% 3% !important">
    
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/data'], ['class' => 'createForm']) !!}
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
        <div class="file-field input-field">
            <div class="btn orange lighten-3">
                <span><i class="material-icons">insert_photo</i></span>
                 {{Form::file('file', '')}}
            </div>
            <div class="file-path-wrapper">
                {{Form::text('file', '', ['class' => 'file-path validate'])}}
            </div>
        </div>
        {{Form::submit('Add Post', ['class' => 'btn green left waves-effect waves-light'])}}
        <a href="/posts" class="btn red right waves-effect waves-lights lighten-1">Cancel</a>
        <div class="clearfix"></div>
    {!! Form::close() !!}
    <br>
</div><br><br>
@endsection()

@section('script')
{{--  <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script src="vendor\unisharp\laravel-ckeditor\plugins\uploadimage"></script>
<script src="vendor/unisharp/laravel-ckeditor/plugins/uploadimage"></script>
<script src="/node_modules/@ckeditor/ckeditor5-upload/src/filereader.js"></script>
vendor\unisharp\laravel-ckeditor\plugins\uploadimage
\node_modules\@ckeditor\ckeditor5-upload\src
<script>
    CKEDITOR.replace( 'article-ckeditor' );
    <script>
    CKEDITOR.replace( 'editor1' );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ),{
                toolbars : ['Image','ImageUpload','ImageUploadButton'],
                extraPlugins: 'imageuploader'
        } )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
        console.log(ClassicEditor.build.plugins.map( plugin => plugin.pluginName ));
</script>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
</script>  --}}

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
@endsection()