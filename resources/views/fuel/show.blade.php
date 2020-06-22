@extends('layouts.app')
@section('content')


                <div class="dump border rounded  shadow "   >

                    <div class="alert alert-success" role="alert">
                        {{$data->header}}

                       
                    </div>
                    <p>{{$data->text}}</p>

                </div>

            </div>
        </div>
    </div>
    </body>
    </html>

@endsection



