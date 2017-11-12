@extends('layouts.app')

@section('content')
<div class="grey lighten-5 view-container">
    @if (session('status'))
        <div id="card-alert" class="card-alert card green lighten-5">
        <div class="alert-content card-content green-text">
            <p>{{session('status')}}</p>
        </div>
    </div>
    @endif

  
    <h3>Welcome {{Auth::user()->name}}</h3>
    <hr>

    <ul class="collection">
        <li class="collection-item">
            <h4>Your Blog Posts</h4>
        </li>
        <li class="collection-item">
            <ul class="collection">
            
            </ul>
        </li>
    </ul>
    

    

    <a href="/create" class="btn-floating hoverable right large green lighten-2 wave-effect waves-green"><i class="material-icons">add</i></a>
    <br><br><br><br>
</div>
@endsection
