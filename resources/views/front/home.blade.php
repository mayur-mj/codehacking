@extends('layouts.blog-home')

@section('content')
    <!-- Page Content -->

    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <!-- First Blog Post -->
                @if($posts)
                    @foreach($posts as $post)

                        <h2>
                            <a href="/">{{ $post->title }}</a>
                        </h2>
                        <p class="lead">
                            By {{ $post->user->name }}
                        </p>
                        <p><span class="glyphicon glyphicon-time"></span> Posted {{ $post->created_at->diffForHumans() }}</p>
                        <hr>
                        <img class="img-responsive" src="{{ $post->photo->file }}" alt="">
                        <hr>
                        <p>{{ $post->body }}</p>
                        <a class="btn btn-primary" href="/post/{{ $post->id }}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                        <hr>
                    @endforeach
                @endif
                <!-- Pagination -->

            </div>

            <!-- Blog Sidebar -->
            @include('includes.front_home_sidebar')

        </div>
        <!-- /.row -->

@endsection
