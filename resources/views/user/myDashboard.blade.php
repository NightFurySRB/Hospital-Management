<!DOCTYPE html>
<html lang="en">
<head>
    @include("user.css")
</head>
<body>
    @include("user.navbar")

    <div align="center" style="padding:70px">
        <h1 class="text-center">Appointments</h1>
        <table>
            <tr style="background-color:aquamarine ">
                <th style="padding:15px; font-size:20px; color:black">Name</th>
                <th style="padding:15px; font-size:20px; color:black">Doctor's Name</th>
                <th style="padding:15px; font-size:20px; color:black">Speciality</th>
                <th style="padding:15px; font-size:20px; color:black">Fee</th>
                <th style="padding:15px; font-size:20px; color:black">Date</th>
                <th style="padding:15px; font-size:20px; color:black">Email</th>
                <th style="padding:15px; font-size:20px; color:black">Phone Number</th>
                <th style="padding:15px; font-size:20px; color:black">Status</th>
                <th style="padding:15px; font-size:20px; color:black">Cancel Appointment</th>

            </tr>
            @foreach ($appointments as $appointment)
            <tr>
                <td style="padding: 15px">{{$appointment->name}}</td>
                <td style="padding: 15px">{{$appointment->doctor}}</td>
                <td style="padding: 15px">{{$appointment->speciality}}</td>
                <td style="padding: 15px">{{$appointment->fee}}</td>
                <td style="padding: 15px">{{$appointment->date}}</td>
                <td style="padding: 15px">{{$appointment->email}}</td>
                <td style="padding: 15px">{{$appointment->phone}}</td>
                <td style="padding: 15px">{{$appointment->status}}</td>
                <td align="center" style="padding: 15px">
                    <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this appointment request?')" href="{{url("cancelAppointment",$appointment)}}">
                        Cancel
                    </a>
                </td>
            </tr>
            @endforeach
            
        </table>
    </div>

    <div align="center" style="padding:70px">
        <h1 class="text-center">Test Appointments</h1>
        <table>
            <tr style="background-color:aquamarine ">
                <th style="padding:15px; font-size:20px; color:black">Name</th>
                <th style="padding:15px; font-size:20px; color:black">Test Name</th>
                <th style="padding:15px; font-size:20px; color:black">Fee</th>
                <th style="padding:15px; font-size:20px; color:black">Date</th>
                <th style="padding:15px; font-size:20px; color:black">Email</th>
                <th style="padding:15px; font-size:20px; color:black">Phone Number</th>
                <th style="padding:15px; font-size:20px; color:black">Status</th>
                <th style="padding:15px; font-size:20px; color:black">Delete Appointment</th>

            </tr>
            @foreach ($testAppointments as $testAppointment)
            <tr>
                <td style="padding: 15px">{{$testAppointment->patientName}}</td>
                <td style="padding: 15px">{{$testAppointment->testName}}</td>
                <td style="padding: 15px">{{$testAppointment->fee}}</td>
                <td style="padding: 15px">{{$testAppointment->date}}</td>
                <td style="padding: 15px">{{$testAppointment->email}}</td>
                <td style="padding: 15px">{{$testAppointment->phone}}</td>
                <td style="padding: 15px">{{$testAppointment->status}}</td>
                <td align="center" style="padding: 15px">
                    <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this test?')" href="{{url("deleteTestReq",$testAppointment->id)}}">
                        Delete
                    </a>
                </td>
            </tr>
            @endforeach
            
        </table>
    </div>

    <div align="center" style="padding:70px">
        <h1 class="text-center">Blood Donation</h1>
        <table>
            <tr style="background-color:aquamarine ">
                <th style="padding:15px; font-size:20px; color:black" >Name</th>
                <th style="padding:15px; font-size:20px; color:black" >Blood Group</th>
                <th style="padding:15px; font-size:20px; color:black">Date</th>
                <th style="padding:15px; font-size:20px; color:black">Email</th>
                <th style="padding:15px; font-size:20px; color:black">Phone Number</th>
                <th style="padding:15px; font-size:20px; color:black">Cancel Donation</th>

            </tr>
            @foreach ($bloodDonations as $bloodDonation)
            <tr>
                <td style="padding: 15px">{{$bloodDonation->name}}</td>
                <td style="padding: 15px">{{$bloodDonation->bloodgroup}}</td>
                <td style="padding: 15px">{{$bloodDonation->date}}</td>
                <td style="padding: 15px">{{$bloodDonation->email}}</td>
                <td style="padding: 15px">{{$bloodDonation->phone}}</td>
                <td align="center" style="padding: 15px">
                    <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this donation event?')" href="{{url("cancelDonation",$bloodDonation)}}">
                        Cancel
                    </a>
                </td>
            </tr>
            @endforeach
            
        </table>
    </div>


    @include("user.footer")
</body>
</html>