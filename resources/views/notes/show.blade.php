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

                    </ul>
                </div>


            </div>
            <div class="col-sm-9">
                <h2  >admindashboard</h2>

                <div class="dump border rounded  shadow "   >

                    <div class="alert alert-success" role="alert">
                        {{$data->header}}
                   <div class="[-=] float-right ">
                        <a href="#" class="text-success"><i class="fas fa-edit"></i></a>
                        <a href="{{ url('/notes',$data->id) }}" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                   </div>
                       
                    </div>
                    <p>{{$data->text}}</p>

                </div>

            </div>
        </div>
    </div>
    </body>
    </html>

@endsection



