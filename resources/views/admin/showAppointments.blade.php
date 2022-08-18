<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <x-app-layout></x-app-layout>
      @include('admin.sidebar')
      @include('admin.navbar')
    
      <div class="container-fluid page-body-wrapper">

        <div align="center" style="padding:70px">
        <h1 class="text-center">Appointments</h1>
        <table>
            <tr style="background-color:blueviolet">
                <th style="padding:15px; font-size:20px; color:white" >Name</th>
                <th style="padding:15px; font-size:20px; color:white" >Doctor's Name</th>
                <th style="padding:15px; font-size:20px; color:white" >Speciality</th>
                <th style="padding:15px; font-size:20px; color:white">Date</th>
                <th style="padding:15px; font-size:20px; color:white">Email</th>
                <th style="padding:15px; font-size:20px; color:white">Phone Number</th>
                <th style="padding:15px; font-size:20px; color:white">Status</th>
                <th style="padding:15px; font-size:20px; color:white">Approve</th>
                <th style="padding:15px; font-size:20px; color:white">Cancel</th>

            </tr>
            @foreach ($appointments as $appointment)
            <tr>
                <td style="padding: 15px">{{$appointment->name}}</td>
                <td style="padding: 15px">{{$appointment->doctor}}</td>
                <td style="padding: 15px">{{$appointment->speciality}}</td>
                <td style="padding: 15px">{{$appointment->date}}</td>
                <td style="padding: 15px">{{$appointment->email}}</td>
                <td style="padding: 15px">{{$appointment->phone}}</td>
                <td style="padding: 15px">{{$appointment->status}}</td>
                <td align="center" style="padding: 15px">
                    <a class="btn btn-success" onclick="return confirm('Are you sure to approve this appointment request?')" href="{{url("approveAppointment",$appointment->id)}}">
                        Approve
                    </a>
                </td>
                <td align="center" style="padding: 15px">
                    <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this appointment request?')" href="{{url("cancelAppointmentAdmin",$appointment->id)}}">
                        Cancel
                    </a>
                </td>
            </tr>
            @endforeach
            
            </table>
        </div>

    </div>

    <!-- container-scroller -->
    @include('admin.scripts')
  </body>
</html>