<section id="intro">
<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
          <center><img src="{{ asset('landing') }}/img/sd.jpeg" class="img-responsive" alt=""></center>
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						Marcus Doe
					</div>
					<div class="profile-usertitle-job">
						Joined 24 Nov 2016
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul>
						<li>
							<a href="#">
							<ion-icon name="mail"></ion-icon>
							emailku@gmail.com </a>
						</li>
						<li>
							<a href="#">
							<ion-icon name="call"></ion-icon>
							08xxxxxxxx </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<ion-icon name="globe"></ion-icon>
							Indonesia </a>
						</li>
						<li>
							<a href="#">
							<ion-icon name="business"></ion-icon>
							Semarang </a>
						</li>
						<li>
							<a href="#">
							<ion-icon name="pin"></ion-icon>
							Street 69, 235, RK Puram </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
      <div class="profile-content">
					<label>Data Profil Guru</label>
					<form>
					<!--Sub entry left  -->
					<div class="sub-entry">
						<div class="form-group col-md-12">
							<label for="namaDepan">Nama Depan</label>
							<input type="text" class="form-control" id="namaDepan" name="namaDepan" value="Marcus">
						</div>

						<div class="form-group col-md-12">
							<label for="email">Alamat Email</label>
							<input type="email" class="form-control" id="email" aria-describedby="emailHelp" value="Doe@gmail.com">
						</div>

						<div class="form-group col-md-12">
							<label for="ipk">IPK</label>
							<input type="text" class="form-control" id="ipk" name="ipk" value="3.75">
						</div>
						
						<div class="form-group col-md-12">
							<label for="tingkatPendidikan">Tingkat Pendidikan</label>
							<input type="text" class="form-control" id="tingkatPendidikan" name="tingkatPendidikan" value="SD">
						</div>

						<div class="form-group col-md-12">
								<label for="jenisKelamin">Jenis Kelamin</label>
								<select class="form-control" id="jenisKelamin" name="jenisKelamin">
                    <option value="laki">Laki laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
						</div>

					<div class="form-group col-md-12">
    						<label for="bio">Bio</label>
    						<textarea class="form-control" id="bio" name="bio" rows="3"></textarea>
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
										<label for="password">Ulangi Password Baru</label>
										<input type="password" class="form-control" id="password">
									</div>
								

									<div class="form-group col-md-12">
										<label for="password">Password Baru</label>
										<input type="password" class="form-control" id="password">
									</div>
								
						</div>
					</div>

					<!-- Sub entry right -->
					<div class="sub-entry">
						<div class="form-group col-md-12">
								<label for="namaBelakang">Nama Belakang</label>
								<input type="text" class="form-control" id="namaBelakang" name="namaBelakang" value="Doe">
						</div>

						<div class="form-group col-md-12">
								<label for="contact">Nomor Telepon</label>
								<input type="text" class="form-control" id="nomorTelepon" name="nomorTelepon" value="08xxxxxxx">
						</div>

						<div class="form-group col-md-12">
								<label for="institusi">Institusi</label>
								<input type="text" class="form-control" id="institusi" name="institusi" value="Politeknik Negeri Semarang">
						</div>

						<div class="form-group col-md-12">
							<label for="programStudi">Program Studi</label>
							<input type="text" class="form-control" id="programStudi" name="programStudi" value="Matematika">
						</div>

						<div class="form-group col-md-12">
							<label for="foto">Foto</label>
							<input type="file" class="form-control-file" id="foto" name="foto" value="">
						</div>
					</div>

					<button type="submit" class="btn btn-primary submit-button">Submit</button>
				</form>
      </div>
		</div>
	</div>
</div>
</section>