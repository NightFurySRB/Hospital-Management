<div id="requestAppointment" class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Request for an Appointment</h1>

      <form class="main-form" action="{{url('requestAppointment')}}" method="POST">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input name="name" type="text" class="form-control" placeholder="Full name" required="">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input name="email" type="text" class="form-control" placeholder="Email address" required="">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input name="date" type="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="doctor" class="custom-select" required="">
                <option value="">--Select Doctor--</option>
                @foreach ($doctors as $doctor)
                <option value="{{$doctor->name}}">{{$doctor->name}}---{{$doctor->speciality}}---{{$doctor->fee}}tk</option>
                @endforeach
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input name="number" type="number" class="form-control" placeholder="Phone Number" required="">
          </div>
          {{-- <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message"></textarea>
          </div> --}}
        </div>
        <div class="btn btn-primary mt-3 wow zoomIn">
          <button type="submit" >Submit Request</button>
        </div>
      </form>
    </div>
  </div> <!-- .page-section -->