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

            <form action="{{url('uploadTestInfo')}}" method="POST" enctype="multipart/form-data">
                @csrf   
                <div style="padding: 15px">
                    <label>Test Name</label>
                    <input type="text" style="color:black;" name="name" placeholder="Enter the name" required="">
                </div>
                <div style="padding: 15px">
                    <label>Fee</label>
                    <input type="number" style="color:black;" name="fee" placeholder="Enter the fee" required="">
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