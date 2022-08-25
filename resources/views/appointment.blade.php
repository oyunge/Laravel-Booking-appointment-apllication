@extends('layouts.client')
@section('content')
          <!--Main layout-->
          <main style="margin-top: 58px;">
            <div class="container pt-4">

            <form action="/appointment"  method="post">
            {{ csrf_field() }}
            <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control"   placeholder="Enter your name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email"  placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Doctor's Specialization</label>
    <input type="text" class="form-control" name="doctor_Specialization" placeholder="Doctor's Specialization" required>
  </div>
  <div class="form-group">
  <label class="form-check-label" for="exampleCheck1">Doctors Name</label>
    <input type="text" class="form-control" name="doctor_Name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date</label>
    <input type="date" class="form-control" name="date" required>
  </div>
  <div class="form-group">
  <label class="form-check-label" for="exampleCheck1">Time</label>
    <input type="time" class="form-control" name="time" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

            </div>
          </main>
         @endsection
