@extends('layouts.admin')
@section('content')

    <h1>Edit Categories</h1>
    <div class="row">
        <div class="col-sm-9">
            {!! Form::model($categories,['method'=>'PUT','action'=>['App\Http\Controllers\AdminCategoriesController@update',$categories->id],'files'=>true]) !!}

              <div class="form-group">
                    {!! Form::label('name', 'Name : ') !!}
                    {!! Form::text('name', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Update Category', ['class'=>'btn btn-primary col-sm-5']) !!}
                </div>

            {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE','action'=>['App\Http\Controllers\AdminCategoriesController@destroy',$categories->id]]) !!}

                {!! Form::submit('Delete Categories', ['class'=>'btn btn-danger col-sm-5']) !!}

            {!! Form::close() !!}
        </div>
    </div>

    @include('includes.form_error')

@endsection
