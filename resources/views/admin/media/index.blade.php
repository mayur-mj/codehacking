@extends('layouts.admin')

@section('content')

    <h1>Media</h1>

    <form action="{{ route('delete.media') }}" method="post"  >
        {{ csrf_field() }}
        {{ method_field('delete') }}
        <div class="form-group">
            <select name="checkBoxArray" id="" class="select">
                <option value="">Delete</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" name="delete_all" value="Submit" class="btn btn-primary">
        </div>



    <div class="form-group">
        <table class="table">
            <thead>
                <tr>
                    <th><input type="checkbox" id="options"> All</th>
                    <th>Id</th>
                    <th>File</th>
                    <th>Created_AT</th>
                    <th>Updated_AT</th>
                    {{--  <th>Delete</th>  --}}
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
                            {{--  <td>
                                <form action="{{ route('delete.media') }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="photo" value="{{ $photo->id }}">
                                    <div class="form-group">

                                        <input type="submit" value="Delete" name="delete_single" class="btn btn-danger">

                                    </div>
                                </form>
                            </td>  --}}
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</form>



@endsection

@section('scripts')

    <script>
        $(document).ready(function(){

            $('#options').click(function(){
                if(this.checked)
                {
                    $('.checkBoxes').each(function(){
                        this.checked = true;
                    })

                }else{
                    $('.checkBoxes').each(function(){
                        this.checked = false;
                    })
                }

            });
        });
    </script>


@endsection
