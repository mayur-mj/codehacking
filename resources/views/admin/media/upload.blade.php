@extends('layouts.admin')

@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.css">

@endsection

@section('content')

    <h1>Upload Photo</h1>
        <div class="col-sm-12">
            {!! Form::open(['method'=>'Post','action'=>'App\Http\Controllers\AdminMediasController@store','class'=>'dropzone']) !!}

            {!! Form::close() !!}
        </div>

@endsection

@section('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.js"></script>
@endsection

