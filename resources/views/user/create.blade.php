@extends('master')
@section('title','จัดการฐานข้อมูล')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12"><br>
        <h3 align="center">เพิ่มข้อมูล</h3><br>
        @if(count($errors)>0)
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
        @endif
        @if(\Session::has('success'))
        <div class="alert alert-success">
          <p align="center">{{\Session::get('success')}}</p>
        </div>
        @endif

        <form action="{{url('user')}}" method="post">
          {{csrf_field()}}
          <div class="form-group">
            <input type="text" name="fname" placeholder="ป้อนชื่อ" class="form-control"><br>
          </div>
          <div class="form-group">
            <input type="text" name="lname" placeholder="ป้อนนามสกุล" class="form-control"><br>
          </div>
          <div align="center" class="form-group">
            <input type="submit" value="บันทึกข้อมูล" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
