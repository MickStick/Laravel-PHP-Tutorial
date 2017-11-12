@extends('layouts.app')

@section('content')
<div class="view-container grey lighten-5">
   {!! Form::open(['action' => 'ContactController@send', 'method' => 'POST'], ['class' => 'createForm']) !!}
        
        <h1>Contact Us</h1> 
        <div class="input-field">
            {{Form::text('name')}}
            {{Form::label('name', 'Your Name')}}
        </div>

         <div class="input-field">
            {{Form::text('email', '', ['placeholder' => 'exam@ple.com'])}}
            {{Form::label('email', 'Email Address')}}
        </div>

        <div class="input-field">
            {{ Form::textarea('info', '', ['class' => 'materialize-textarea','placeholder' => 'What\'s on your mind, dear child?'] )}}
            <br>
        </div>
        {{Form::submit('Submit', ['class' => 'btn blue accent-4 left waves-effect waves-light'])}}
    {!! Form::close() !!}
    <br><br><br><br>      
</div>

@endsection