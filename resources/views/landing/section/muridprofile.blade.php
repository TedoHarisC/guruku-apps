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
					<label>Basic Details</label>
					<form>
					<!--Sub entry left  -->
					<div class="sub-entry">
						<div class="form-group col-md-12">
							<label for="firstName">Nama Depan</label>
							<input type="text" class="form-control" id="firstName" value="Marcus">
						</div>

						<div class="form-group col-md-12">
							<label for="email">Email Address</label>
							<input type="email" class="form-control" id="email" aria-describedby="emailHelp" value="Doe">
						</div>

						<div class="form-group col-md-12">
							<label for="SkypeID">Skype ID</label>
							<input type="text" class="form-control" id="skypeID" value="marcus_d@mail.com">
						</div>
						
						<div class="form-group col-md-12">
							<label for="pinCode">Pin Code</label>
							<input type="text" class="form-control" id="pinCode" value="324005">
						</div>

						<div class="form-group col-md-12">
							<label for="Address">Address</label>
							<input type="text" class="form-control" id="Address" value="street 69,235,RK Puram">
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
								<label for="lastName">Nama Belakang</label>
								<input type="text" class="form-control" id="lastName" value="Doe">
						</div>

						<div class="form-group col-md-12">
								<label for="contact">Contact No.</label>
								<input type="text" class="form-control" id="kontak" value="08xxxxxxx">
						</div>

						<div class="form-group col-md-12">
								<label for="country">Country</label>
								<input type="text" class="form-control" id="country" value="Indonesia">
						</div>

						<div class="form-group col-md-12">
								<label for="city">City</label>
								<input type="text" class="form-control" id="city" value="Semarang">
						</div>
					</div>
				
					<button type="submit" class="btn btn-primary submit-button">Submit</button>
				</form>
      </div>
		</div>
	</div>
</div>
</section>