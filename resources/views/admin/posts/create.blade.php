@extends('layouts.admin')
@section('content')


    <h1>Create Post</h1>
    <div class="row">
        <div class="col-sm-9">
            {!! Form::open(['method'=>'POST','action'=>'App\Http\Controllers\AdminPostsController@store','files'=>true]) !!}
            {{ csrf_field() }}

                <div class="form-group">
                    {!! Form::label('title', 'Title : ') !!}
                    {!! Form::text('title', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('category_id', 'Category : ') !!}
                    {!! Form::select('category_id', [''=>'Choose Category']+$categories,null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('photo_id', 'Photo : ') !!}
                    {!! Form::file('photo_id',null ,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('body', 'Description : ') !!}
                    {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
                </div>

            {!! Form::close() !!}

        </div>
    </div>


        @include('includes.form_error')

@endsection

