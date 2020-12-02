@extends('layouts.blog-post')

@section('content')

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

    @if(session('comment_message'))
        <div class="alert alert-success">{{ session('comment_message') }}</div>
    @endif

    <!-- Blog Comments -->

    @if(Auth::user())
        <!-- Comments Form -->
        <div class="well">
            <h4>Leave a Comment:</h4>

            {!! Form::open(['method'=>'POST','action'=>'App\Http\Controllers\PostCommentsController@store']) !!}

                <input type="hidden" name="post_id" value="{{ $posts->id }}">

                <div class="form-group">

                    {!! Form::label('body', 'Body :') !!}
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
                <!-- Nested Comment -->
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="http://placehold.it/64x64" alt="">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Nested Start Bootstrap
                                <small>August 25, 2014 at 9:30 PM</small>
                            </h4>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>

                        {!! Form::open(['method'=>'POST','action'=>'App\Http\Controllers\CommentRepliesController@store']) !!}

                            {!! Form::label('body', 'Body') !!}
                            {!! Form::textarea('body', null, ['class'=>'form-control','rows'=>'4']) !!}

                        {!! Form::close() !!}

                    </div>
                    <!-- End Nested Comment -->

            </div>
        @endforeach
    @endif

@endsection
