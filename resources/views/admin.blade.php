@extends('layouts.client')
@section('content')

          <!--Main layout-->
          <main style="margin-top: 58px;">

           <a class="dropdown-item" href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();"
                                                               style="padding-left:91%">
                                                 Logout
                                              </a>

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
      <th scope="col">Approve</th>
      <th scope="col">Delete</th>
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

      @if($appointment->isAppointment_approved == 0)
        <td><a href="approveAppointments/{{$appointment->id}}">Approve</a></td>
      @else
        <td><a href="" style="color:green">Aprroved</a></td>
      @endif
      <td><a href="{{route('admin.appointment.destroy', $appointment->id)}}">Delete</a></td>

    </tr>
    @endforeach

  </tbody>
</table>

            </div>
          </main>
         @endsection
