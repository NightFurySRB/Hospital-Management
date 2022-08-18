<x-app-layout></x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
    label{
        display: inline-block;
        width: 10rem;
    }
    </style>
    @include('admin.css')
  </head>
  <body>
      @include('admin.sidebar')
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
        <div class="container" align="center" style="padding-top: 4rem">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{session()->get('message')}}
                <button type="button" class="close" data-dismiss="alert">x</button>
            </div>
            @endif

            <form action="{{url('uploadDocInfo')}}" method="POST" enctype="multipart/form-data">
                @csrf   
                <div style="padding: 15px">
                    <label>Doctor Name</label>
                    <input type="text" style="color:black;" name="name" placeholder="Enter the name" required="">
                </div>
                <div style="padding: 15px">
                    <label>Phone</label>
                    <input type="number" style="color:black;" name="number" placeholder="Enter the number" required="">
                </div>
                <div style="padding: 15px">
                    <label>Speciality</label>
                    <select name="speciality" style="color: black; width: 13rem" required="">
                        <option value="Not selected">--Select--</option>
                        <option value="Medicine">Medicine</option>
                        <option value="Surgery">Surgery</option>
                        <option value="Pediatrics">Pediatrics</option>
                        <option value="Dermatology">Dermatology</option>
                        <option value="Cardiology">Cardiology</option>
                        <option value="Nephrology">Nephrology</option>
                        <option value="Neurology">Neurology</option>
                    </select>
                </div>
                <div style="padding: 15px">
                    <label>Experience Year(s)</label>
                    <input type="number" style="color:black;" name="experience" placeholder="Enter years of experience" required="">
                </div>
                <div style="padding: 15px">
                    <label>Room No.</label>
                    <input type="number" style="color:black;" name="roomnumber" placeholder="Enter the room number" required="">
                </div>
                <div style="padding: 15px">
                    <label>Fee</label>
                    <input type="number" style="color:black;" name="fee" placeholder="Enter the doctor's fee" required="">
                </div>
                <div style="padding: 15px">
                    <label>Doctor Image</label>
                    <input type="file" name="img" required="">
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