@extends('layouts.app')

@section('content')
<div class="orange lighten-4 home-container">
    <h1 class="page-header center">So it's Laravel this time</h1>
    <p class="flow-Text center">Welcome To the Test Laravel Blog Application.</p>
    <div class="row">
        <div class="col s6"><a href="/about" class="btn blue light-4 right">About</a></div>
        <div class="col s6"><a href="/posts" class="btn green light-4 left">Posts</a></div>
    </div>
</div>
@endsection
