<section id="list">
    <div class="container">
        <div class="row about-extra">
          <div class="col-lg-12 wow fadeInUp pt-5 pt-lg-0">
            <h4>List Kelas yang Anda Punya</h4><br/>
            
            <!-- Ini List nya -->
            @if ($kelas->first())
            <div class="row">
                <!-- Ini core list -->
                @foreach ($kelas as $data)
                    <div class="col-md-9 col-lg-8 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
                            <h4 class="title"><a href="">{{$data->mata_pelajaran}}</a></h4>
                            <p class="description">{{$data->mata_pelajaran}} tingkat {{$data->tingkat_pendidikan}} kelas {{$data->kelas}}</p>
                            <p class="description"><i class="ion-ios-alarm-outline" style="color: #d63636;"></i>
                            @foreach ($jadwals as $jadwal)
                            {{$jadwal->hari}} ({{$jadwal->jam}}),
                                
                            @endforeach
                            </p>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>

            @else
            <div class="row">
                <!-- Ini core list -->
                        <h4 class="title"><a href="">-</a></h4>
            </div>
            
            @endif
            


            
        </div>
    </div>
</section>