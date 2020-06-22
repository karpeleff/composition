@extends('layouts.app')
@section('content')


                <div class="dump border rounded  shadow ">

<form   action="/notes" method="post">
    {{ csrf_field() }}
    <div class="alert alert-success" role="alert">Запуск Дизель генератора</div>

                    <div class="form-group">
                        <label for="usr">Заголовок:</label>
                        <input type="text" class="form-control" id="usr" name="header" required="">
                    </div>
    <!-- Group of default radios - option 1 -->
    <label for="usr">Агрегат:</label>
    <!-- Group of default radios - option 1 -->
    <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" value="1" " id="defaultGroupExample1" name="diz" checked>
        <label class="custom-control-label" for="defaultGroupExample1">ADR</label>
    </div>

    <!-- Group of default radios - option 2 -->
    <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input"  value="2" id="defaultGroupExample2" name="diz" >
        <label class="custom-control-label" for="defaultGroupExample2">SD6000</label>
    </div>

    <hr>
    <label for="usr">Причина пуска:</label>
    <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" value="1" " id="defaultGroupExample3" name="reason" checked>
        <label class="custom-control-label" for="defaultGroupExample3">нет промсети</label>
    </div>

    <!-- Group of default radios - option 2 -->
    <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" value="2" id="defaultGroupExample4" name="reason" >
        <label class="custom-control-label" for="defaultGroupExample4">плановое то</label>
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





