<div id="donateBlood" class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Apply to donate blood</h1>

      <form class="main-form" action="{{url('donateBlood')}}" method="POST">
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
            <select name="bloodgroup" id="bloodgroup" class="custom-select" required="">
                <option value="">--Select Blood Group--</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input name="number" type="text" class="form-control" placeholder="Phone Number" required="">
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
