<div class="col-lg-8 col-md-10">
    <section id="halamanList">
        <div class="about-extra">
        <div class="grid-container">
            <ul class="list">
            <!-- Sing di looping card e terus mengko ning css e di loop sesuai jumlah -->
            @foreach ($list as $data)              
            
                <li>
                <div class="card">
                    <div class="bg-img">
                    <img src="{{ asset('landing') }}/img/sd.jpeg" class="profile-img" alt="">
                        <div class="content">
                            <h4 class="name">{{$data->name}}</h4>
                            <label>Tulisan tentang diri</label>
                        </div>
                    </div>
                    <div class="content-below">
                        <div class="icons"><i class="ion-ios-briefcase-outline" style="color: #ff689b;"></i><a href="" style="padding-left: 10px" class="studi">{{$data->tingkat_pendidikan}}</a></div>
                        <div class="icons"><i class="ion-ios-bookmarks-outline" style="color: #ff689b;"></i><a href="" style="padding-left: 10px" class="mapel">{{$data->mata_pelajaran}}</a></div>
                        <div class="icons"><i class="ion-ios-pricetags-outline" style="color: #ff689b;"></i><a href="" style="padding-left: 10px" class="harga">{{$data->biaya}}</a></div>
                        <div class="icons"><i class="ion-ios-alarm-outline" style="color: #d63636;"></i><a href="" style="padding-left: 10px" class="kota">Jakarta</a></p></p>

                        <a href="{{route('detailguru',$data->id)}}" class="btn-get-started scrollto">Read More</a>
                    </div>
                </div>
                </li>
            @endforeach
            {{-- end loop --}}
            </ul>
        </div>
        </div>
    </section>
</div>

