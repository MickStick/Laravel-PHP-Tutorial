@extends('layouts.app')

@section('content')
<h2>Welcome {{Auth::user()->name}}</h2>


    @if (session('status'))
        <div id="card-alert" class="card-alert card green lighten-5">
        <div class="alert-content card-content green-text">
            <p>{{session('status')}}</p>
        </div>
    </div>
    @endif

    <h3>Your Blog Posts</h3>

<a href="posts/create" class="btn-floating hoverable right large green lighten-2 wave-effect waves-green"><i class="material-icons">add</i></a>
<br><br><br><br>
@endsection
