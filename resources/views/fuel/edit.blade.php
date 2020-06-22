@extends('layouts.app')
@section('content')


            <div class="dump border rounded  shadow "   >

                <div class="alert alert-success" role="alert">Редактируем запись</div>

                <div class="form-group">
                    <label for="usr">Название:</label>

                    <form method="post" action="{{ url('/notes',$data->id) }}">

                         {{ csrf_field() }}

                          <input type="hidden" name="_method" value="put">

                        <input type="text" class="form-control" id="usr" name="header" placeholder=""  value="{{$data->header}}">
                </div>

                <div class="form-group">
                    <label for="comment">Текст:</label>
                    <textarea class="form-control" rows="5" id="comment  "  name="text"  placeholder="">{{$data->text}}</textarea>
                </div>

                <button type="submit" class="btn btn-warning">Обновить</button>

                 </form>
            </div>
                   


        </div>
    </div>
</div>
</body>
</html>

@endsection




