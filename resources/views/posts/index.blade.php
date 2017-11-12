@extends('layouts.app')

@section("content")
<h3>Your Posts</h3>
@if(count($posts) > 0)
    <ul class="collection">
        @foreach($posts as $post)
            
                <li class="collection-item avatar">
                    <i class="material-icons green circle small">note</i>
                        <span class="title" >
                            <a href="/posts/{{$post->id}}" class="black-text waves-effect waves-teal" style="margin-top: 3mm !important;">
                                <?php echo $post->title ?>
                            </a>
                        </span>
                        <p class="truncate" style="width: 70% !important;">{{$post->body}}</p>
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

@endsection()