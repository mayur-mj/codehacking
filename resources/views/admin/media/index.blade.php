@extends('layouts.admin')

@section('content')

    <h1>Media</h1>

    <form action="{{ route('delete.media') }}" method="post"  >
        {{ csrf_field() }}
        {{ method_field('delete') }}
        <div class="form-group">
            <select name="checkBoxArray" id="" class="select">
                <option value="delete">Delete</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-primary">
        </div>



    <div class="form-group">
        <table class="table">
            <thead>
                <tr>
                    <th>Delete All <input type="checkbox" id=""></th>
                    <th>Id</th>
                    <th>File</th>
                    <th>Created_AT</th>
                    <th>Updated_AT</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @if($photos)
                    @foreach($photos as $photo)
                        <tr>
                            <td><input type="checkbox" name="checkBoxArray[]" id="" value="{{ $photo->id }}" class="checkBoxes"></td>
                            <td>{{ $photo->id }}</td>
                            <td><a href="{{ route('medias.edit',$photo->id) }}"><img class="img-rounded" height="80px" width="120px" src="{{ $photo->file }}" alt="not display"></a></td>
                            <td>{{ $photo->created_at ? $photo->created_at->diffForHumans() : 'No Date Available' }}</td>
                            <td>{{ $photo->updated_at ? $photo->updated_at->diffForHumans() : 'No Date Available' }}</td>
                            <td>
                                {!! Form::open(['method'=>'DELETE','action'=>['App\Http\Controllers\AdminMediasController@destroy',$photo->id]]) !!}
                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger col-sm-5']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</form>

@endsection

@section('scripts')



@endsection
