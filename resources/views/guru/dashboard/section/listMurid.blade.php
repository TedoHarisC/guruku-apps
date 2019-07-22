<section id="list" style="background-color:white">
    <div class="container">
        <div class="row about-extra">
          <div class="col-lg-12 wow fadeInUp pt-5 pt-lg-0">
            <h4>List Murid yang memesan</h4>
            -
            @if ($kelas->first())
            <!-- Ini List nya -->
            <div class="row">
                <!-- Ini core list -->
                @foreach ($pesan as $data)
                <div class="col-md-9 col-lg-8 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box" style="background-color:#ddfaff">
                        <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
                        <h4 class="title"><a href="{{route('detailPesananMurid',$data->id)}}">{{$data->name}}</a></h4>
                        <p class="description"><i class="ion-ios-bookmarks-outline" style="color: #d63636;"></i>{{$data->mata_pelajaran}} kelas {{$data->kelas}} {{$data->tingkat_pendidikan}}</p>
                        <p class="description"><i class="ion-ios-alarm-outline" style="color: #d63636;"></i>
                        @foreach ($jadwals as $jadwal)
                            @if($jadwal->pesanan_id == $data->id)    
                                {{$jadwal->hari}} {{$jadwal->jam}},
                            @endif
                        @endforeach
                        <p class="description"><i class="ion-ios-home-outline" style="color: #d63636;"></i>{{$data->alamat}}
                        </p>
                        <p class="description"><i class="ion-android-favorite-outline" style="color: #d63636;"></i>{{$data->status}}
                        </p>
                        <div class="row" style="padding-left: 80px; padding-bottom: 20px">
                        @if($data->status == "waiting")
                        <div class="col-md-6">
                            <form role="form" method="POST" action="{{ route('konfirmasiterima') }}">
                                @csrf
                                <input type="hidden" name="status" value="accepted">
                                <input type="hidden" name="id" value="{{$data->id}}">
                                <button type="submit" class="btn-get-accepted" aria-label="Close">Terima</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <form role="form" method="POST" action="{{ route('konfirmasiterima') }}">
                                @csrf
                                <input type="hidden" name="status" value="canceled">
                                <input type="hidden" name="id" value="{{$data->id}}">
                                <button type="submit" class="btn-get-decline" aria-label="Close">Tolak</button>
                            </form>
                        </div>
                        @endif
                        </div>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>  
    </div>
</section>