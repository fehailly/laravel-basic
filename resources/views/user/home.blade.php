@extends('master')
@section('tltle','Homepage')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10">
      <br>
      <div align="right">
        <a href="{{route('user.create')}}" class="btn btn-success">Add User</a>
      </div>
      <br>
      @if(\Session::has('success'))
      <div class="alert alert-success">
        <p align="center">{{\Session::get('success')}}</p>
      </div>
      @endif
      @if(\Session::has('deleted'))
      <div class="alert alert-danger">
        <p align="center">{{\Session::get('deleted')}}</p>
      </div>
      @endif
      <table class="table table-bordered table-striped table-dark">
        <tr align="center">
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        @foreach($users as $row)
        <tr align="center">
          <td>{{$row['id']}}</td>
          <td>{{$row['fname']}}</td>
          <td>{{$row['lname']}}</td>
          <td><a href="#" class="btn btn-primary">Edit</a></td>
          <td>
            <form class="delete_form" action="{{action('UserController@destroy',$row['id'])}}" method="post">
              {{csrf_field()}}
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
  $(".delete_form").submit(function(){
    if(confirm("คุณต้องการลบหรือไม่ ?")){
      return true;
    }
    else return false;
  });
});
</script>
@stop
@section('footer')

@stop
