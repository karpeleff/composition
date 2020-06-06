@extends('layouts.app')
@section('content')
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3">
      <h2>menu</h2>
      
      <div class="dump  border  rounded  shadow ">
        
<ul class="list-group">
  <li class="list-group-item"><a href="/create">Новая запись</a> </li>
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
        
<div class="alert alert-success" role="alert">новый огнетушитель</div>

<div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="usr">
</div>
<div class="form-group">
  <label for="pwd">Password:</label>
  <input type="password" class="form-control" id="pwd">
</div>
<br>
<button type="button" class="btn btn-warning">В базу</button>

<br>
<div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="">Option 2
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Option 1
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Option 2
  </label>
</div>
<div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1">
    <option>кефир</option>
    <option>полбатона</option>
    <option>бутылка</option>
    <option>сидим дома</option>
  </select>
</div>
<hr>
<table class="table table-hover">
    <thead>
      <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Email</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td><a href="#" class="text-success"><i class="fas fa-edit"></i></a></td>
          <td><a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a></td>
      
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td><a href="#" class="text-success"><i class="fas fa-edit"></i></a></td>
          <td><a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a></td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
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



