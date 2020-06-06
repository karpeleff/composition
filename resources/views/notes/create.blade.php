@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-3">
                <h2>menu</h2>

                <div class="dump  border  rounded  shadow ">

                    <ul class="list-group">
                        <li class="list-group-item"><a href="/notes">Главная страница</a></li>
                        <li class="list-group-item"><a href="notes/create">Новая запись</a></li>
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

                    <div class="alert alert-success" role="alert">Новая запись</div>

                    <div class="form-group">
                        <label for="usr">Заголовок:</label>
                        <input type="text" class="form-control" id="usr">
                    </div>

                    <div class="form-group">
                        <label for="comment">Текст записи:</label>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>


                    <hr>
                    <button type="button" class="btn btn-primary">Добавить запись</button>
                </div>

            </div>
        </div>
    </div>
    </body>
    </html>

@endsection





