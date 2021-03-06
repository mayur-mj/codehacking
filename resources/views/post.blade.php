@extends('layouts.blog-home')

@section('content')
    <div class="row">
        <div class="col-md-8">


    <!-- Blog Post -->

    <!-- Title -->
    <h1>{{ $posts->title }}</h1>

    <!-- Author -->
    <p class="lead">
        by <a href="">{{ $posts->user->name }}</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p><span class="glyphicon glyphicon-time"></span> Posted {{ $posts->created_at->diffForHumans() }}</p>

    <hr>

    <!-- Preview Image -->
    <img class="img-responsive" src="{{ $posts->photo->file }}" alt="">

    <hr>

    <!-- Post Content -->
    <p class="lead">{{ $posts->body }}</p>
    <hr>



    <!-- Blog Comments -->

    @if(Auth::user())
        <!-- Comments Form -->
        <div class="well">
            <h4>Leave a Comment:</h4>

            {!! Form::open(['method'=>'POST','action'=>'App\Http\Controllers\PostCommentsController@store']) !!}

                <input type="hidden" name="post_id" value="{{ $posts->id }}">

                <div class="form-group">

                    {{--  {!! Form::label('body', 'Body :') !!}  --}}
                    {!! Form::textarea('body', null, ['class'=>'form-control','rows'=>'3']) !!}

                </div>

                <div class="form-group">
                    {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    @endif

    <hr>

    <!-- Posted Comments -->

    @if(count($comments) > 0)
        @foreach($comments as $comment)
            <!-- Comment -->
            <div class="media">

                    <a class="pull-left" href="#">
                        <img height="70px" width="70px" class="media-object" src="{{ $comment->photo }}" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">{{ $comment->author }}
                            <small>{{ $comment->created_at->diffForHumans() }}</small>
                        </h4>
                        {{ $comment->body }}
                    </div>

                    @if(count($comment->replies) > 0)
                        @foreach($comment->replies as $reply)

                            <!-- Nested Comment -->
                                <div id="nessted-comment" class="media">
                                    @if($reply->is_active == 1)
                                    <a class="pull-left" href="#">
                                        <img height="60px" width="60px" class="media-object" src="{{ $reply->photo }}" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">{{ $reply->author }}
                                            <small>{{ $reply->created_at->diffForHumans() }}</small>
                                        </h4>
                                        {{ $reply->body }}
                                    </div>
                                    @endif
                                </div>
                        @endforeach
                    @endif
                                <div id="nessted-comment" class="media">
                                    <div class="comment-reply-container">

                                        <button class="toggle-reply btn btn-primary pull-right">Reply</button>

                                        <div class="comment-reply col-sm-6" style="display:none">
                                            {!! Form::open(['method'=>'POST','action'=>'App\Http\Controllers\CommentRepliesController@createReply']) !!}

                                                <input type="hidden" name="comment_id" value="{{ $comment->id }}">

                                                <div class="form-group">
                                                    {!! Form::label('body', 'Reply : ') !!}
                                                    {!! Form::textarea('body', null, ['class'=>'form-control col-sm-4','rows'=>'1']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
                                                </div>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            <!-- End Nested Comment -->

            </div>
        @endforeach
    @endif
    </div>  <!-----Col-Md-4----->
    @include('includes.front_home_sidebar')
</div>  <!-----Row----->
@endsection

@section('scripts')

    <script>


        $(".comment-reply-container .toggle-reply").click(function(){

            $(this).next().slideToggle("slow");
         });
    </script>

@endsection




