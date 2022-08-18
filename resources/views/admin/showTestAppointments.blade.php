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
        <h1 class="text-center">Test Appointments</h1>
        <table>
            <tr style="background-color:blueviolet">
                <th style="padding:15px; font-size:20px; color:white">Patient</th>
                <th style="padding:15px; font-size:20px; color:white">userID</th>
                <th style="padding:15px; font-size:20px; color:white">Test</th>
                <th style="padding:15px; font-size:20px; color:white">Fee</th>
                <th style="padding:15px; font-size:20px; color:white">Date</th>
                <th style="padding:15px; font-size:20px; color:white">Email</th>
                <th style="padding:15px; font-size:20px; color:white">Phone Number</th>
                <th style="padding:15px; font-size:20px; color:white">Status</th>
                <th style="padding:15px; font-size:20px; color:white">Approve</th>
                <th style="padding:15px; font-size:20px; color:white">Cancel</th>

            </tr>
            @foreach ($testAppointments as $testAppointment)
            <tr>
                <td style="padding: 15px">{{$testAppointment->patientName}}</td>
                <td style="padding: 15px">{{$testAppointment->userID}}</td>
                <td style="padding: 15px">{{$testAppointment->testName}}</td>
                <td style="padding: 15px">{{$testAppointment->fee}}</td>
                <td style="padding: 15px">{{$testAppointment->date}}</td>
                <td style="padding: 15px">{{$testAppointment->email}}</td>
                <td style="padding: 15px">{{$testAppointment->phone}}</td>
                <td style="padding: 15px">{{$testAppointment->status}}</td>
                <td align="center" style="padding: 15px">
                    <a class="btn btn-success" onclick="return confirm('Are you sure that the test is completed?')" href="{{url("approveTestAppointment",$testAppointment->id)}}">
                        Done
                    </a>
                </td>
                <td align="center" style="padding: 15px">
                    <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this appointment request?')" href="{{url("cancelTestAppointmentAdmin",$testAppointment->id)}}">
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