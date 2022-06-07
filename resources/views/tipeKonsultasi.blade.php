@extends('template')
@section('content')
  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Mulai Konsultasi</h6>
            <h4>Konsultasikan Masalah Anda</h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="{{ asset('template') }}/assets/images/contact-dec-v3.png" alt="">
                </div>
              </div>
              <div class="d-flex justify-content-center">
                <div class="col-lg-7">
                  <div class="fill-form">
                    <div class="row d-flex justify-content-center">
                      <div class="col-lg-4">
                        <div class="info-post">
                          <div class="icon">
                            <img src="{{ asset('template') }}/assets/images/phone-icon.png" alt="">
                            <a href="https://api.whatsapp.com/send/?phone=6282130426921&text=Halo+Justika%2C+saya+ingin+bertanya+&app_absent=0" target="_blank">Whatsapp</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="info-post">
                          <div class="icon">
                            <img src="{{ asset('template') }}/assets/images/email-icon.png" alt="">
                            <a href="https://meet.google.com/fdk-bsgx-ehm" target="_blank">Google Meet</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection