@extends('layouts.admin')

@section('content')

    @if(session('deleted_post'))

        <div class="alert alert-danger">{{ session('deleted_post') }}</div>
    @elseif(session('updated_post'))
        <div class="alert alert-success">{{ session('updated_post') }}</div>
    @elseif(session('post_not_update'))
        <div class="alert alert-danger">{{ session('post_not_update') }}</div>
    @endif
    <h1>Posts</h1>
    <div class="form-group">

        <table class="table">
            <thead>
                <th>Id</th>
                <th>Owner</th>
                <th>Category</th>
                <th>Photo</th>
                <th>Title</th>
                <th>Body</th>
                <th>View Post</th>
                <th>View Comment</th>
                <th>Created_At</th>
                <th>Updated_At</th>
            </thead>

            <tbody>
                @if($posts)
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td><a href="{{ route('posts.edit',$post->id) }}">{{ $post->user->name }}</a></td>
                            <td>{{ $post->category ? $post->category->name : 'Uncategories' }}</td>
                            <td><img class="img-rounded" height="70px" width="90px" src="{{ $post->photo ? $post->photo->file : 'http://placehold.it/400x400' }}" alt=""></td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->body}}</td>
                            <td> <a href="{{ route('home.post',$post->id) }}">View Post</a></td>
                            <td><a href="{{ route('comments.show',$post->id) }}">View Comments</a></td>
                            <td>{{ $post->created_at->diffForHumans() }}</td>
                            <td>{{ $post->updated_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>


    <div class="row">

        <div class="col-sm-6 col-sm-offset-5">
            {{ $posts->render() }}
        </div>

    </div>



@endsection
