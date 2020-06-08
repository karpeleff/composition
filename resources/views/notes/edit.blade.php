@extends('layouts.app')
@section('content')
<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-3">
            <h2>menu</h2>

            <div class="dump  border  rounded  shadow ">

                <ul class="list-group">
                    <li class="list-group-item"><a href="/create">Новая запись</a> </li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>



            </div>


        </div>
        <div class="col-sm-9">
            <h2  >admindashboard</h2>

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




