@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-3">
                <h2>menu</h2>

                <div class="dump  border  rounded  shadow ">

                    <ul class="list-group">
                        <li class="list-group-item"><a href="/notes">Главная страница</a></li>

                       
                    </ul>
                </div>
            </div>
            <div class="col-sm-9">
                <h2  >admindashboard</h2>

                <div class="dump border rounded  shadow ">

<form   action="{{ url('/notes') }} method="post">
    {{ csrf_field() }}
    <div class="alert alert-success" role="alert">Новая запись</div>

                    <div class="form-group">
                        <label for="usr">Заголовок:</label>
                        <input type="text" class="form-control" id="usr" name="header" required="">
                    </div>

                    <div class="form-group">
                        <label for="comment">Текст записи:</label>
                        <textarea class="form-control" rows="5" id="comment" name="text"   required=""></textarea>
                    </div>
                     <hr>
                    <button type="submit" class="btn btn-primary">Добавить запись</button>

</form>
                    


                   
                </div>

            </div>
        </div>
    </div>
    </body>
    </html>

@endsection





