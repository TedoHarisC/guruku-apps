@extends('halamanMurid.app')

@section('content')
    <!-- Detail Guru -->
    <section id="intro">
        <div class="container">
            <div class="shadow">
            <div class="card">
                <div class="bg-img">
                <div class="row">
                    <div class="col col-md-2">
                        <img src="{{ asset('landing') }}/img/sd.jpeg" class="profile-img" alt="">
                    </div>
                    <div class="col col-md-10 content">
                            <h4>Annisa</h4>
                            <label>Rating : 4.7</label>
                            <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis deleniti neque eaque odio sunt distinctio nesciunt, aut natus esse ab ex nisi laboriosam illum magnam perferendis consequuntur aspernatur error reiciendis?</label>
                    </div>
                </div>
                </div>
                <div class="content-below">
                    <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i><a href="" style="padding-left: 10px">Lokasi Mengajar</a></div>
                    <div class="content" style="margin-top: 2px;">
                        <label style="padding-left: 15px;">Jakarta Utara , Jakarta Selatan , Jakarta Barat</label>
                    </div>
                    <div class="icon"><i class="ion-ios-alarm-outline" style="color: #d63636;"></i><a href="" style="padding-left: 10px;">Rekam Studi</a></div>
                    <div class="content" style="margin-top: 2px;">
                        <label style="padding-left: 15px;">SMA N 1 KUDUS , Politeknik Negeri Semarang</label>
                    </div>
                </div>
                <div class="content">
                    <ul class="tablist" role="tablist">
                        <li class="tab" role="tab"><a href="#panel1">Tentang</a></li>
                        <li class="tab" role="tab"><a href="#panel2">Pengalaman</a></li>
                        <li class="tab" role="tab"><a href="#panel3">Jadwal</a></li>
                        <li class="tab-menu">
                            <div class="line"></div>
                            <div class="line"></div>
                            <div class="line"></div>
                        </li>
                    </ul>
                    <div class="tabpanel" id="panel1" role="tabpanel">
                        <h1>Siapa saya ?</h1>
                        <p>Lorem ipsum dolor sit amet, case solum pri ex, sed te feugiat legimus. Sea doming alterum necessitatibus id, ipsum putent disputando ei pri. Docendi electram ei cum, usu ea meis tractatos dignissim. An eos putent tamquam postulant, falli periculis nam et. Ne mel hinc scaevola probatus.</p>
                    </div>
                    <div class="tabpanel" id="panel2" role="tabpanel">
                        <h1>Apa Saja Pengalaman Saya ?</h1>
                        <p>Eu choro adolescens est. Cu pro case sanctus convenire, natum mazim duo ne. Ius numquam euismod luptatum eu, eu veri iudico molestie nec. Causae facilis duo id, te vix maiorum omittam appareat, nostrud platonem in quo. At nobis vitae vel.</p>
                    </div>
                    <div class="tabpanel" id="panel3" role="tabpanel">
                        <h1>Jadwal Saya ?</h1>
                        <p>Id qui natum prompta percipit, per no dicta ancillae scripserit. Simul veniam vidisse mea eu, vim ei corpora splendide. Aeque possim usu eu, ad brute choro verear pro. Amet erat copiosae has te. At lorem vocibus ancillae duo, ius ea putant scripserit, vel ei sale inimicus forensibus. No quando nullam voluptatum pro, has at quodsi aperiri principes.</p>
                    </div>
                </div>
            </div>
            </div>
            <br/><br/>

            <div class="shadow">
            <div class="card">
                <div class="content-below">
                    <h4>Tertarik dengan Saya ?</h4>
                    <label>Tekan tombol di bawah ini untuk les dengan saya</label><br/>
                    <button class="btn search-button">Pesan Guru</button>
                </div>
            </div>
            </div>

            <br/><br/>
            <label>Review (1)</label>
            <hr/>

            <div class="shadow">
                <!-- Ini core list -->
                <div class="card">
                <div class="bg-img">
                <div class="row">
                    <div class="col col-md-2">
                        <img src="{{ asset('landing') }}/img/sd.jpeg" class="profile-img" alt="" style="width: 130px;">
                    </div>
                    <div class="col col-md-10 content" style="padding-top: 30px">
                        <b><label>Annisa</label></b><br/>
                        <label class="tag">Murid</label>
                    </div>
                </div>
                <div class="content-below">
                    <h5>Bahasa Inggris SD</h5>
                    <label>Jadi semangat Belajar</label>
                </div>
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection
