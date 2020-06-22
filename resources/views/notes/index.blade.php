@extends('layouts.app')
@section('content')


                <div class="dump border rounded  shadow "   >

                    <div class="alert alert-success" role="alert">

                        @if (count($data) === 0)
                            В базе нет совпадений или  записей!
                        @else
                            Все записки
                        @endif
                    </div>

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
             <form method="post" action="{{ url('/notes',$record->id) }}">
               {{ csrf_field() }}
               <input type="hidden" name="_method"  value="delete">
             <button type="submit" class="btn btn-link"><i class="fas fa-trash-alt"></i></button>
             </form>

          </td>
         </tr>
         @endforeach
    </tbody>
  </table>
                    <br>
                 {{--   {{ $data->links() }}--}}
                </div>

            </div>
        </div>
    </div>

    
    </body>
    </html>

@endsection




