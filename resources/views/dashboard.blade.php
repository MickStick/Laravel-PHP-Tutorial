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
        @if(count($posts) > 0)
            <li class="collection-item">                
                    <table class="striped">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td style="font-size: 20px !important;"><a href="/posts/{{$post->id}}" class="teal-text" >{{$post->title}}</a></td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn-floating btn-small blue lighten-2 wave-effect waves-green"><i class="material-icons">edit</i></a></td>
                                    <td>
                                        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE'], ['class' => 'createForm btn-floating ']) !!}
                                            <button type="submit" class="btn-floating btn-small red accent-3 wave-effect waves-green"><i class="material-icons tiny">delete</i></button>
                                            
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </li>
        @else
            <label class="black-text" style="font-size: 18px !important; margin: 4mm !important;">You Have No Posts...</label>
        @endif
            
        
    </ul>
    

    

    <a href="posts/create" class="btn-floating hoverable right large green lighten-2 wave-effect waves-green"><i class="material-icons">add</i></a>
    <br>
</div><br><br><br>
@endsection
