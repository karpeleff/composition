@extends('layouts.fuel')
@section('content')
</div>
<div  id="app"  >
    <example-component></example-component>
</div>

                <div class="dump border rounded  shadow "   >

                    <div class="alert alert-success" role="alert">

                        @if (count($data) === 0)
                            В базе нет совпадений или  записей!
                        @else
                            Все записки
                        @endif



                    <br>
                 {{--   {{ $data->links() }}--}}
                </div>

            </div>
        </div>
    </div>

<script src="{!! asset('js/app.js') !!}"></script>
    </body>
    </html>

@endsection




