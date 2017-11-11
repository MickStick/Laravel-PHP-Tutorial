@extends('layouts.app')

@section('content')
<h1 class="page-header">Contact Us</h1>
<form action="">
    <div class="input-field">
        <input type="text" name="name" placeholder="John Doe">
        <label for="name"> Your Name</label>
    </div>

    <div class="input-field">
        <input type="email" name="email" placeholder="exam@ple.com">
        <label for="email">Email Address</label>
    </div>
    <br>
    <div class="input-field">
        <textarea name="info" id="info" class="materialize-textarea" placeholder="What's on your mind, dear child?"></textarea>
    </div>

</form>
@endsection