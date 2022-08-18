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
        <h1 class="text-center">Blood Donation</h1>
        <table>
            <tr style="background-color:blueviolet">
                <th style="padding:15px; font-size:20px; color:white">Name</th>
                <th style="padding:15px; font-size:20px; color:white">Phone</th>
                <th style="padding:15px; font-size:20px; color:white">Email</th>
                <th style="padding:15px; font-size:20px; color:white">Blood Group</th>
                <th style="padding:15px; font-size:20px; color:white">Date</th>
                <th style="padding:15px; font-size:20px; color:white">UserID</th>
                <th style="padding:15px; font-size:20px; color:white">Status</th>
            </tr>
            @foreach ($donors as $donor)
            <tr>
                <td style="padding: 15px">{{$donor->name}}</td>
                <td style="padding: 15px">{{$donor->phone}}</td>
                <td style="padding: 15px">{{$donor->email}}</td>
                <td style="padding: 15px">{{$donor->bloodgroup}}</td>
                <td style="padding: 15px">{{$donor->date}}</td>
                <td style="padding: 15px">{{$donor->userID}}</td>
                <td style="padding: 15px">{{$donor->status}}</td>
                <td align="center" style="padding: 15px">
                    <a class="btn btn-success" href="{{url("donationDone",$donor->id)}}">
                        Done
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