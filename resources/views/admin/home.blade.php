<x-app-layout></x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
      @include('admin.sidebar')
      @include('admin.navbar')
      @include('admin.body')
    
    <!-- container-scroller -->
    @include('admin.scripts')
  </body>
</html>