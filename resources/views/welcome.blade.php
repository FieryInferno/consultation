@extends('template')
@section('content')
  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6>Consultation</h6>
                    <h2>+15.000 Klien Telah Berhasil Konsultasi via Chat</h2>
                    <p>Dapatkan saran hukum terpercaya dari puluhan Advokat pilihan serta jaminan kerahasiaan privasi dan data Anda</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="#contact">Mulai Konsultasi</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{ asset('template') }}/assets/images/slider-dec-v3.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection