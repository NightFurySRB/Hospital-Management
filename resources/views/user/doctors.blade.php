<div class="page-section">
    <div id="doctors" class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

        @foreach ($doctors as $doctor)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img height="300px" src="doctorImages/{{$doctor->image}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body" onclick="#requestAppointment">
              <p class="text-xl mb-0">{{$doctor->name}}</p>
              <span class="text-sm text-grey">Practicing <b>{{$doctor->speciality}}</b></span>
              <span class="text-sm text-grey">for {{$doctor->experience}} years</span>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>