@extends('layouts.admin')

@section('content')

    @if(count($comments) > 0)
        <h1>Comments</h1>

        <div class="form-group">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Author</th>
                        <th>Email</th>
                        <th>Body</th>
                        {{--  <th>View Post</th>
                        <th>Approve</th>
                        <th>Delete</th>  --}}
                    </tr>
                </thead>
                <tbody>

                        @foreach($comments as $comment)
                            <tr>
                                <td>{{ $comment->id }}</td>
                                <td>{{ $comment->author }}</td>
                                <td>{{ $comment->email }}</td>
                                <td>{{ $comment->body }}</td>
                                <td><a href="{{ route('home.post',$comment->post->id) }}">View Post</a></td>
                                <td><a href="{{ route('replies.show',$comment->id) }}">View Reply</a></td>
                                <td>
                                    @if($comment->is_active == 1)
                                        {!! Form::open(['method'=>'PUT','action'=>['App\Http\Controllers\PostCommentsController@update',$comment->id]]) !!}

                                            <input type="hidden" name="is_active" value="0">

                                            {!! Form::submit('Un-Approve', ['class'=>'btn btn-success']) !!}

                                        {!! Form::close() !!}
                                    @else
                                        {!! Form::open(['method'=>'PUT','action'=>['App\Http\Controllers\PostCommentsController@update',$comment->id]]) !!}

                                            <input type="hidden" name="is_active" value="1">

                                            {!! Form::submit('Approve', ['class'=>'btn btn-info']) !!}

                                        {!! Form::close() !!}
                                    @endif
                                </td>
                                <td>
                                    {!! Form::open(['method'=>'DELETE','action'=>['App\Http\Controllers\PostCommentsController@destroy',$comment->id]]) !!}
                                        {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach

                </tbody>
            </table>

        </div>
    @else
        <h1 class="text-center">No Comments</h1>
    @endif
@endsection
