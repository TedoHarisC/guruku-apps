<section id="intro">
      <div class="container">
          <div class="row about-extra">
          
           @if (empty($murid) ) 
              <div class="alert alert-danger alert-dismissible show wow fadeInUp" role="alert">
                <a href="{{route('muridprofile')}}" class="alert-link">Silahkan lengkapi data diri anda pada halaman profil, untuk melakukan proses selanjutnya</a>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @else
            @endif
        </div>
      </div><br>
      <div class="container">
        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="{{ asset('landing') }}/img/about-extra-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Temukan Solusi Kesulitan Mencari Guru Les Privat Anda di GuruKu</h4>
            <p>
              Masih kesulitan dalam mencari jasa guru les privat ? Bergabung bersama kami di GuruKu
            </p>
            <p>
              Klik tombol di bawah ini untuk mulai mencari guru les privat yang anda butuhkan.
            </p>
            <p>
            <div class="text-center">
              <a href="{{route('cariguru')}}">
                <button type="button" class="pelajari" title="Pelajari Selengkapnya">Cari Guru Sekarang</button>
              </a>
            </div>
            </p>
          </div>
        </div>
      </div>
</section>