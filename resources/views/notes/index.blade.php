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

                    <div class="alert alert-success" role="alert">Все записки</div>

                   <table class="table table-hover   text-center  ">
    <thead>
      <tr>
        <th>Заголовок</th>
        <th>Текст</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td><a href="#" class="text-success"><i class="fas fa-edit"></i></a></td>
          <td><a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a></td>
      
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td><a href="#" class="text-success"><i class="fas fa-edit"></i></a></td>
          <td><a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a></td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td><a href="#" class="text-success"><i class="fas fa-edit"></i></a></td>
          <td><a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a></td>
      </tr>
    </tbody>
  </table> 
                </div>

            </div>
        </div>
    </div>
    </body>
    </html>

@endsection




