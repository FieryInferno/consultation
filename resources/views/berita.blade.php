@extends('template')
@section('content')
  <div id="blog" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="section-heading">
            <h6>Berita Terkini</h6>
            <h4>Berita - Berita Mengenai Hukum</h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-post">
            <div class="thumb">
              <a href="#"><img src="{{ asset('images') }}/1.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Berita Hukum</span>
              <span class="date">03 August 2021</span>
              <a href="#"><h4>Kasus Suap Dana PEN, Eks Pejabat Kemendagri Segera Disidangkan</h4></a>
              <p>Tim penyidik KPK telah merampungkan berkas penyidikan mantan Direktur Jenderal (Dirjen) Bina Keuangan Daerah (Keuda) Kemendagri, M Ardian Noervianto (MAN).</p>
              <span class="author"><img src="{{ asset('template') }}/assets/images/author-post.jpg" alt="">By: Andrea Mentuzi</span>
              <div class="border-first-button"><a href="#">Discover More</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-posts">
            <div class="row">
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="#"><img src="{{ asset('images') }}/2.jpeg" alt="" width="5%"></a>
                  </div>
                  <div class="right-content">
                    <span class="category">Berita Hukum</span>
                    <span class="date">24 September 2021</span>
                    <a href="#"><h4>KAI Ingin Aspirasi Organisasi Advokat Didengar Pemerintah</h4></a>
                    <p>Presiden Kongres Advokat Indonesia (KAI) Adv. Tjoetjoe Sandjaja Hernanto berharap, pemerintah mendengarkan aspirasi berbagai organisasi advokat.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="#"><img src="{{ asset('images') }}/3.jpg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">Berita Hukum</span>
                    <span class="date">24 September 2021</span>
                    <a href="#"><h4>2 Mantan Pegawai Pajak Dituntut 8 dan 10 Tahun Penjara</h4></a>
                    <p>Mantan pemeriksa pajak Direktorat Jenderal Pajak Kementerian Keuangan Wawan Ridwan dituntut 10 tahun penjara dan denda Rp300 juta subsider lima bulan penjara oleh jaksa penuntut umum (JPU) Komisi Pemberantasan Korupsi (KPK).</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item last-post-item">
                  <div class="thumb">
                    <a href="#"><img src="{{ asset('images') }}/4.jpg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">Berita Hukum</span>
                    <span class="date">24 September 2021</span>
                    <a href="#"><h4>Apa Saja Sumber Hukum Itu?</h4></a>
                    <p>Peter Mahmud Marzuki dalam buku berjudul Pengantar Ilmu Hukum menjelaskan bahwa sumber hukum adalah bahan-bahan yang digunakan sebagai dasar oleh pengadilan dalam memutus perkara.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
@endsection