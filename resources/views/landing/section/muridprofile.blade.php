<section id="intro">
<div class="container">
	<div class="row profile" style="margin-top: -80px; margin-bottom: -10px">
		<div class="col-md-12">
			<div class="alert alert-danger alert-dismissible show wow fadeInUp" role="alert">
            	<a href="" class="alert-link">Gagal mengganti password</a>
            	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                	<span aria-hidden="true">&times;</span>
            	</button>
			</div>
		</div>
	</div>
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic" style="text-align:center">
				@if (!empty($murid->foto) ) 
					<img src="{{ asset($murid->foto) }}" class="img-responsive" alt="">
				@else
					<img src="{{ asset('landing') }}/img/sd.jpeg" class="img-responsive" alt="foto profil">
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
							@if (!empty($murid->telp) )  
								{{$murid->telp}}
							@else
								-
							@endif
							</a>
						</li>
						<li>
							<a href="#" target="_blank">
							<ion-icon name="globe"></ion-icon>
							Indonesia </a>
						</li>
						<li>
							<a href="#">
							<ion-icon name="business"></ion-icon>
							@if (!empty($murid->asal_sekolah) )  
								{{$murid->asal_sekolah}}
							@else
								-
							@endif
							</a>
						</li>
						<li>
							<a href="#">
							<ion-icon name="pin"></ion-icon>
							@if (!empty($murid->alamat) )  
								{{$murid->alamat}}
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
					<label>Basic Details</label>
					<form action="{{route('postprofiles')}}" method="POST" enctype="multipart/form-data">
					@csrf
					<!--Sub entry left  -->
					<div class="sub-entry">
						<div class="form-group col-md-12">
							<label for="namaDepan">Nama </label>
							<input type="text" class="form-control" id="namaDepan" name="name" 
							@if (!empty($murid)) 
								value="{{$user->name}}"
							@else
								value="{{$user->name}}"
							@endif required>
						</div>
						
						<div class="form-group col-md-12">
							<label for="email">Alamat Email</label>
							<input type="email" class="form-control" id="email" aria-describedby="emailHelp" 
							@if (!empty($user))
								value="{{$user->email}}"
							@else
								value="{{$user->email}}"
							@endif required>
						</div>

						<div class="form-group col-md-12">
							<label for="Address">Alamat</label>
							@if (!empty($murid))  
								<textarea class="form-control" id="alamat" name="alamat" rows="2" required>{{$murid->alamat}}</textarea>
							@else
								<textarea class="form-control" id="alamat" name="alamat" rows="2" required></textarea>
							@endif
						</div>
						
						<div class="form-group col-md-12">
							<label for="jenisKelamin">Jenis Kelamin</label>
							<select class="form-control" id="jenisKelamin" name="jk" required>
								@if ((!empty($murid) ) && ($murid->jk == 'laki'))
									<option  disabled>Pilih</option>
									<option value="laki" selected>Laki laki</option>
									<option value="perempuan">Perempuan</option>
								@elseif (( !empty($murid) ) && ($murid->jk == 'perempuan'))
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
							<div class="row">
									<label>Change Password</label>
									<label class="switch">
										<input type="checkbox" id="myCheck" onclick="myFunction()">
										<div class="slider round"></div>
									</label>
							</div>
						</div>

						<div id="text" style="display:none">
								<div class="form-group col-md-12">
									<label for="password">Password Lama</label>
									<input type="password" class="form-control" id="password" value="tedo12345">
								</div>

								<div class="form-group col-md-12">
									<label for="password">Password Baru</label>
									<input type="password" class="form-control" id="password">
								</div>

								<div class="form-group col-md-12">
									<label for="password">Ulangi Password Baru</label>
									<input type="password" class="form-control" id="password">
								</div>
						</div>
					</div>

					<!-- Sub entry right -->
					<div class="sub-entry">
						<div class="form-group col-md-12">
							<label for="nomorTelepon">Nomor Telepon</label>
							<input type="text" class="form-control" id="telp" name="telp" 
							@if (!empty($murid))  
								value="{{$murid->telp}}"
							@else
							@endif>
						</div>

						<div class="form-group col-md-12">
							<label for="asalSekolah">Asal Sekolah</label>
							<input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" 
							@if (!empty($murid))  
								value="{{$murid->asal_sekolah}}"
							@else
							@endif required>
						</div>

						<div class="form-group col-md-12">
							<label for="asalSekolah">Program Studi</label>
							<input type="text" class="form-control" id="programstudi" name="programstudi" 
							@if (!empty($murid))  
								value="{{$murid->programstudi}}"
							@else
							@endif required>
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