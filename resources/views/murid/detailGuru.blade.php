@extends('murid.layouts.app')

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
                            <h4>{{$guru->name}}</h4>
                            <label>Rating : 4.7</label></br>
                            <label>{{$guru->bio}}</label>
                    </div>
                </div>
                </div>
                <div class="content-below">
                    <div class="icons"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i><a href="" style="padding-left: 10px">Alamat</a></div>
                    <div class="content" style="margin-top: 2px;">
                        <label style="padding-left: 15px;">{{$guru->alamat}}</label>
                    </div>
                    <div class="icons"><i class="ion-ios-alarm-outline" style="color: #d63636;"></i><a href="" style="padding-left: 10px;">Rekam Studi</a></div>
                    <div class="content" style="margin-top: 2px;">
                        <label style="padding-left: 15px;">{{$guru->programstudi}} , {{$guru->institusi}}</label>
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
                        <p>{{$guru->tentangsaya}}</p>
                    </div>
                    <div class="tabpanel" id="panel2" role="tabpanel">
                        <h1>Apa Saja Pengalaman Saya ?</h1>
                        <p>{{$guru->pengalaman}}</p>
                    </div>
                    <div class="tabpanel" id="panel3" role="tabpanel">
                        <h1>Jadwal Saya ?</h1>
                        <table style="margin-left: 25px;">
                        @foreach ($jadwals as $jadwal)
                        <tr>
                            
                            <div class="icons">
                                <td>
                                    <i class="ion-ios-timer-outline" style="color: #d63636;"></i><a  style="padding-left: 10px;">{{$jadwal->hari}}</a>
                                <td>
                                <td>
                                    <i class="ion-ios-alarm-outline" style="color: #d63636;padding-left: 10px;"></i><a  style="padding-left: 10px;">{{$jadwal->jam}}</a>
                                </td>
                            </div>
                            
                        </tr>
                        @endforeach
                        </table>
                        <p></p>
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
                    <form action="{{route('checkout')}}" method="POST">
                        @csrf
                        <input type="hidden" name="mata_pelajaran" value="{{$bukakelas->mata_pelajaran}}" /> 
                        <input type="hidden" name="bukakelas_id" value="{{$bukakelas->id}}" /> 

                        <button class="btn search-button" type="submit">Pesan Guru</button>
                    </form>
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


@push('js')

 <!-- Script for Tab on detailGuru Tabs -->
  <script type="text/javascript">
      (function() {

  function activateTab() {
      if(activeTab) {
        resetTab.call(activeTab);
      }
      this.parentNode.className = 'tab tab-active';
      activeTab = this;
      activePanel = document.getElementById(activeTab.getAttribute('href').substring(1));
       activePanel.className = 'tabpanel show';
      activePanel.setAttribute('aria-expanded', true);
    }

    function resetTab() {
      activeTab.parentNode.className = 'tab';
      if(activePanel) {
        activePanel.className = 'tabpanel hide';
        activePanel.setAttribute('aria-expanded', false);
      }
    }

    var doc = document,
        tabs = doc.querySelectorAll('.tab a'),
        panels = doc.querySelectorAll('.tabpanel'),
        activeTab = tabs[0],
        activePanel;

     activateTab.call(activeTab);

    for(var i = tabs.length - 1; i >= 0; i--) {
      tabs[i].addEventListener('click', activateTab, false);
    }

  })();
  </script>
@endpush
