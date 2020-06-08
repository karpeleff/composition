@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top:30px"  >
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

                    <div class="alert alert-success" role="alert">Все записки</div>

                   <table class="table table-hover   text-center  ">
    <thead>
      <tr>
        <th>Заголовок</th>
        <th>Текст</th>
        <th>View</th>
          <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>

          @foreach ($data as $record)
            <td>{{ $record->header }}</td>
             <td>{{$record->text}}</td>

              <td><a href="{{ url('/notes',$record->id) }}" class="text-info"><i class="fas fa-eye"></i></a></td>
          <td><a href="notes/{{$record->id}}/edit" class="text-success"><i class="fas fa-edit"></i></a></td>
          <td>
             {{-- <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>--}}
              {{ Form::open(array('url' => 'notes.destroy ','method' => 'delete')) }}

              {{ Form::close() }}

          </td>
         </tr>
         @endforeach


    </tbody>
  </table>
                    <br>
                    {{ $data->links() }}
                </div>

            </div>
        </div>
    </div>

    
    </body>
    </html>

@endsection




