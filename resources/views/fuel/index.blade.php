@extends('layouts.fuel')
@section('content')


                <div class="dump border rounded  shadow "   >

                    <div class="alert alert-success" role="alert">

                        @if (count($data) === 0)
                            В базе нет совпадений или  записей!
                        @else
                            Все записки
                        @endif
                    </div>
                    <div  id="app"  >
                        <example-component></example-component>
                    </div>


                    <br>
                 {{--   {{ $data->links() }}--}}
                </div>

            </div>
        </div>
    </div>

    
    </body>
    </html>

@endsection




