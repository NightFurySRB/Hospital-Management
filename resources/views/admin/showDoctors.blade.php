<x-app-layout></x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
      @include('admin.sidebar')
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">

        <div align="center" style="padding:70px">
        <h1 class="text-center">Doctors</h1>
        <table>
            <tr style="background-color:blueviolet">
                <th style="padding:15px; font-size:20px; color:white">Name</th>
                <th style="padding:15px; font-size:20px; color:white">Phone</th>
                <th style="padding:15px; font-size:20px; color:white">Speciality</th>
                <th style="padding:15px; font-size:20px; color:white">Experience</th>
                <th style="padding:15px; font-size:20px; color:white">Room</th>
                <th style="padding:15px; font-size:20px; color:white">Fee</th>
                <th style="padding:15px; font-size:20px; color:white">Image</th>
                <th style="padding:15px; font-size:20px; color:white">Update</th>
                <th style="padding:15px; font-size:20px; color:white">Fire</th>

            </tr>
            @foreach ($doctors as $doctor)
            <tr>
                <td style="padding: 15px">{{$doctor->name}}</td>
                <td style="padding: 15px">{{$doctor->phone}}</td>
                <td style="padding: 15px">{{$doctor->speciality}}</td>
                <td style="padding: 15px">{{$doctor->experience}} years</td>
                <td style="padding: 15px">{{$doctor->room}}</td>
                <td style="padding: 15px">{{$doctor->fee}}tk</td>
                <td><img height="120px" width="120px" src="doctorImages/{{$doctor->image}}" alt=""></td>
                <td align="center" style="padding: 15px">
                    <a class="btn btn-primary"  href="{{url("updateDoctor",$doctor->id)}}">
                        Update
                    </a>
                </td>
                <td align="center" style="padding: 15px">
                    <a class="btn btn-danger" onclick="return confirm('Are you sure to fire this doctor?')" href="{{url("fireDoctor",$doctor->id)}}">
                        Fire
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