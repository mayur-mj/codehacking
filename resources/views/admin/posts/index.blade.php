@extends('layouts.admin')

@section('content')
{{--
    @if(session('deleted_user'))

        <div class="alert alert-danger">{{ session('deleted_user') }}</div>
    @elseif(session('updated_user'))
        <div class="alert alert-success">{{ session('updated_user') }}</div>
    @endif --}}
    <h1>Posts</h1>
    <div class="form-group">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Owner</th>
                    <th>Category</th>
                    <th>Photo</th>
                    <th>Title</th>
                    <th>Body</th>>
                    <th>Created_At</th>
                    <th>Updated_At</th>
                </tr>
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
                            <td>{{ $post->body }}</td>
                            <td>{{ $post->created_at->diffForHumans() }}</td>
                            <td>{{ $post->updated_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection
