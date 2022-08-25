@extends('layouts.client')
@section('content')
          <!--Main layout-->
          <main style="margin-top: 58px;">
            <div class="container pt-4">

            <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Doctor's Specialization</th>
      <th scope="col">Doctors Name</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($appointments as $appointment)
    <tr>
      <td>{{$appointment ->name}}</td>
      <td>{{$appointment ->email}}</td>
      <td>{{$appointment ->doctor_Name}}</td>
      <td>{{$appointment ->doctor_Specialization}}</td>
      <td>{{$appointment ->date}}</td>
      <td>{{$appointment ->time}}</td>
    </tr>
    @endforeach

  </tbody>
</table>

            </div>
          </main>
          <!--Main layout-->
@endsection
