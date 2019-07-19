<!-- CSS di landing untuk profile -->

<section id="intro">
<div class="container" style="margin-top: -90px; margin-bottom: -20px">
          <div class="row profile">
			<div class="col-md-12">
           <!-- @if (empty($murid) )  -->
              <div class="alert alert-danger alert-dismissible show wow fadeInUp" role="alert">
                <a href="" class="alert-link">Gagal mengganti password</a>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <!-- @else
			@endif -->
			</div>
		</div>
</div><br>
<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic" style="text-align:center">
					@if (!empty($guru->foto) )  
						<img src="{{ asset($guru->foto) }}" class="img-responsive" alt="">
					@else
						<img src="{{ asset('landing') }}/img/sd.jpeg" class="img-responsive" alt="">
					@endif
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						{{$user->name}}
					</div>
					<div class="profile-usertitle-job">
						Joined <?php $date=$user->created_at; echo date_format($date,"D, d M y");?>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				{{-- <div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div> --}}
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul>
						<li>
							<a href="#">
							<ion-icon name="mail"></ion-icon>
							{{$user->email}}</a>
						</li>
						<li>
							<a href="#">
							<ion-icon name="call"></ion-icon>
								@if (!empty($guru->telp) )  
								{{$guru->telp}}
								@else
								-
								@endif
							</a>
						</li>
						{{-- <li>
							<a href="#" target="_blank">
							<ion-icon name="globe"></ion-icon>
							Indonesia </a>
						</li> --}}
						<li>
							<a href="#">
							<ion-icon name="business"></ion-icon>
								@if (!empty($guru->institusi) )  
								{{$guru->institusi}}
								@else
								-
								@endif
							</a>
						</li>
						<li>
							<a href="#">
							<ion-icon name="pin"></ion-icon>
								@if (!empty($guru->alamat) )  
									{{$guru->alamat}}
								@else
									-
								@endif
							</a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
      <div class="profile-content">
					<label>Data Profil Guru</label>
					<form action="{{route('postprofiles')}}" method="POST" enctype="multipart/form-data">
					@csrf
					<!--Sub entry left  -->
					<div class="sub-entry">
						<div class="form-group col-md-12">
							<label for="namaDepan">Nama </label>
							<input type="text" class="form-control" id="namaDepan" name="name" 
							@if (!empty($guru) ) 
								value="{{$user->name}}"
							@else
								value="{{$user->name}}"
							@endif required>
						</div>

						<div class="form-group col-md-12">
							<label for="ipk">IPK</label>
							<input type="text" class="form-control" id="ipk" name="ipk" placeholder="3.75"
							@if (!empty($guru) )  
								value="{{$guru->ipk}}"
							@else
								
							@endif required>
						</div>

						<div class="form-group col-md-12">
								<label for="contact">Nomor Telepon</label>
								<input type="text" class="form-control" id="nomorTelepon" name="telp" placeholder="08xxxxxxx"
								@if (!empty($guru) )  
									value="{{$guru->telp}}"
								@else
								@endif required>
						</div>

						{{-- comment
						<div class="form-group col-md-12">
							<label for="tingkatPendidikan">Tingkat Pendidikan</label>
							<input type="text" class="form-control" id="tingkatPendidikan" name="tingkatPendidikan" value="SD">
						</div>
						--}}
						<div class="form-group col-md-12">
							<label for="alamat">Alamat</label>
							
							@if (!empty($guru) )  
								<textarea class="form-control" id="alamat" name="alamat" rows="2" required>{{$guru->alamat}}</textarea>
							@else
								<textarea class="form-control" id="alamat" name="alamat" rows="2" required></textarea>
							@endif
							
						</div>

						<div class="form-group col-md-12">
							<label for="bio">Bio</label>
							
							@if (!empty($guru) )  
								<textarea class="form-control" id="bio" name="bio" rows="2" required>{{$guru->bio}}</textarea>
							@else
								<textarea class="form-control" id="bio" name="bio" rows="2" required></textarea>
							@endif
							
						</div>

						<div class="form-group col-md-12">
							<div class="row">
									<label>Change Password</label>
									<label class="switch">
										<input name="change_password" type="checkbox" id="myCheck" onclick="myFunction()">
										<div class="slider round"></div>
									</label>
							</div>
						</div>

						<div id="text" style="display:none">
								
									<div class="form-group col-md-12">
										<label for="password">Password Lama</label>
										<input type="password" class="form-control" id="passwordlama" name="passwordlama">
									</div>

									<div class="form-group col-md-12">
										<label for="password">Password Baru</label>
										<input type="password" class="form-control" id="passwordbaru" name="passwordbaru">
									</div>
								

									<div class="form-group col-md-12">
										<label for="password">Ulangi Password Baru</label>
										<input type="password" class="form-control" id="passwordconfirm" name="passwordconfirm">
									</div>
								
						</div>
					</div>

					<!-- Sub entry right -->
					<div class="sub-entry">
						<div class="form-group col-md-12">
							<label for="jenisKelamin">Jenis Kelamin</label>
							<select class="form-control" id="jenisKelamin" name="jk">
								
								@if ((!empty($guru) ) && ($guru->jk == 'laki'))
									<option  disabled>Pilih</option>
									<option value="laki" selected>Laki laki</option>
									<option value="perempuan">Perempuan</option>
								@elseif (( !empty($guru) ) && ($guru->jk == 'perempuan'))
									<option  disabled>Pilih</option>
									<option value="laki">Laki laki</option>
									<option value="perempuan" selected>Perempuan</option>
									
								@else
									<option selected disabled>Pilih</option>
									<option value="laki">Laki laki</option>
									<option value="perempuan">Perempuan</option>
									
								@endif
								
							</select>
						</div>


						<div class="form-group col-md-12">
								<label for="institusi">Institusi</label>
								<input type="text" class="form-control" id="institusi" name="institusi" 
								@if (!empty($guru) )  
									value="{{$guru->institusi}}"
								@else
								@endif>
						</div>

						<div class="form-group col-md-12">
							<label for="programStudi">Program Studi</label>
							<input type="text" class="form-control" id="programStudi" name="programstudi" 
								@if (!empty($guru) )  
									value="{{$guru->programstudi}}"
								@else
								@endif>
						</div>

						<div class="form-group col-md-12">
							<label for="bio">Tentang saya</label>
							
							@if (!empty($guru) )  
								<textarea class="form-control" id="tentangsaya" name="tentangsaya" rows="2" required>{{$guru->tentangsaya}}</textarea>
							@else
								<textarea class="form-control" id="tentangsaya" name="tentangsaya" rows="2" required></textarea>
							@endif
						</div>

						<div class="form-group col-md-12">
							<label for="bio">Pengalaman</label>
							
							@if (!empty($guru) )  
								<textarea class="form-control" id="pengalaman" name="pengalaman" rows="2" required>{{$guru->pengalaman}}</textarea>
							@else
								<textarea class="form-control" id="pengalaman" name="pengalaman" rows="2" required></textarea>
							@endif
						</div>

						<div class="form-group col-md-12">
							<label for="foto">Foto</label>
							<input type="file" class="form-control-file" id="foto" name="foto">
						</div>
					</div>

					<button type="submit" class="btn btn-primary submit-button">Submit</button>
				</form>
      </div>
		</div>
	</div>
</div>
</section>