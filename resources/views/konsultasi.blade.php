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
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <form id="contact" action="{{ url('konsultasi') }}" method="post">
            @csrf
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="{{ asset('template') }}/assets/images/contact-dec-v3.png" alt="">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="info-post">
                        <div class="icon">
                          <fieldset>
                            <label for="">Pilih Jenis Konsultasi</label>
                            <select name="jenis_konsultasi" class="form-control" id="">
                              <option disabled selected>Select your option</option>
                              <option value="pribadi">Pribadi</option>
                              <option value="desa">Desa</option>
                            </select>
                          </fieldset>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="info-post">
                        <div class="icon">
                          <fieldset>
                            <label for="">Pilih Pengacara</label>
                            <select name="pengacara_id" class="form-control" id="">
                              <option disabled selected>Pilih Pengacara</option>
                              @foreach ($pengacara as $key)
                                <option value="{{ $key->pengacara->id }}">{{ $key->pengacara->nama }}</option>
                              @endforeach
                            </select>
                          </fieldset>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="nama" id="nama" placeholder="Nama" autocomplete="on" required>
                      </fieldset>
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email" required="">
                      </fieldset>
                      <fieldset>
                        <input type="subject" name="no_telp" id="subject" placeholder="No. Telepon" autocomplete="on">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <textarea name="detail_masalah" type="detail_masalah" class="form-control" id="message" placeholder="Detail Masalah" required=""></textarea>  
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button ">Konsultasi</button>
                      </fieldset>
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