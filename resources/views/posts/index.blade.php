@extends('layouts.app')

@section("content")
<h3>Your Posts</h3>
@if(count($posts) > 0)
    <ul class="collection">
        @foreach($posts as $post)
            
                <li class="collection-item avatar post-item">
                    <i class="material-icons green circle small">note</i>
                    <span class="title" >
                        <a href="/posts/{{$post->id}}" class="black-text waves-effect waves-teal" style="margin-top: 3mm !important;">
                            <?php echo $post->title ?>
                        </a>
                    </span>
                    <div class="truncate post-preview" style="width: 70% !important; height: 19px !important;"><p>{!! $post->body !!}</p></div>
                    <label class="secondary-content">
                        <span><?php echo $post->created_at ?></span>  
                    </label>
                </li>
            
        @endforeach
        {{$posts->links()}}
    </ul>   
@else
    <p>No Post As Yet</p>
@endif
<a href="posts/create" class="btn-floating hoverable right large green lighten-2 wave-effect waves-green"><i class="material-icons">add</i></a>
<br><br><br><br>
@endsection()