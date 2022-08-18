<x-app-layout></x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <style type="text/css">
        label{
            display: inline-block;
            width: 200px;
        }
    </style>
    @include('admin.css')
  </head>
  <body>
      @include('admin.sidebar')
      @include('admin.navbar')

      <div class="container-fluid page-body-wrapper">

        <div class="container" align="center" style="padding:100px">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}
                </div>
            @endif

        <form action="{{url('saveDoctorChanges',$doctor->id)}}" method="POST" enctype="multipart/form-data">
            @csrf   
            <div style="padding: 15px">
                <label>Doctor Name</label>
                <input type="text" style="color:black;" name="name" value="{{$doctor->name}}">
            </div>
            <div style="padding: 15px">
                <label>Phone</label>
                <input type="number" style="color:black;" name="phone" value="{{$doctor->phone}}">
            </div>
            <div style="padding: 15px">
                <label>Speciality</label>
                <input type="text" style="color:black;" name="speciality" value="{{$doctor->speciality}}">
            </div>
            <div style="padding: 15px">
                <label>Experience(years)</label>
                <input type="text" style="color:black;" name="experience" value="{{$doctor->experience}}">
            </div>
            <div style="padding: 15px">
                <label>Room</label>
                <input type="number" style="color:black;" name="room" value="{{$doctor->room}}">
            </div>
            <div style="padding: 15px">
                <label>Fee(tk)</label>
                <input type="fee" style="color:black;" name="fee" value="{{$doctor->fee}}">
            </div>
            <div style="padding: 15px">
                <label>Old Image</label>
                <img height="120px" width="120px" src="doctorImages/{{$doctor->image}}" alt="">
            </div>
            <div style="padding: 15px">
                <label>New Image</label>
                <input type="file" name="image">
            </div>
            <div style="padding: 15px">
                <input type="submit" class="btn btn-success">
            </div>
        </form>
       </div>
      </div>
    
    <!-- container-scroller -->
    @include('admin.scripts')
  </body>
</html>