@extends('layouts.admin')

@section('content')

    {{--  @if(session('deleted_post'))

        <div class="alert alert-danger">{{ session('deleted_post') }}</div>
    @elseif(session('updated_post'))
        <div class="alert alert-success">{{ session('updated_post') }}</div>
    @elseif(session('post_not_update'))
        <div class="alert alert-danger">{{ session('post_not_update') }}</div>
    @endif  --}}
    <h1>Categories</h1>
        <div class="col-sm-5">
            {!! Form::open(['method'=>'Post','action'=>'App\Http\Controllers\AdminCategoriesController@store']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Name : ') !!}
                    {!! Form::text('name', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Create Category', ['class'=>'btn btn-primary col-sm-5']) !!}
                </div>

            {!! Form::close() !!}
        </div>
    <div class="col-sm-7">

        <table class="table">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Created_At</th>
                <th>Updated_At</th>
            </thead>

            <tbody>
                @if($categories)
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td><a href="{{ route('categories.edit',$category->id) }}">{{ $category->name }}</a></td>
                            <td>{{ $category->created_at->diffForHumans() }}</td>
                            <td>{{ $category->updated_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

    </div>

@endsection
