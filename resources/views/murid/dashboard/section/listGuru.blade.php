<section id="intro">
<div id="list" style="background-color:white">
    <div class="container">
        <div class="row about-extra">
          <div class="col-lg-12 wow fadeInUp pt-5 pt-lg-0">
            <h4>List Guru yang dipesan</h4>
            
            <!-- Ini List nya -->
            <div class="row">
                <!-- Ini core list -->
                <div class="col-md-9 col-lg-8 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box" style="background-color:#ddfaff">
                        <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
                        <h4 class="title"><a href="detailpesanan">Dio Jotaro</a></h4>
                        <p class="description"><i class="ion-ios-analytics-outline" style="color: #d63636;"></i>SD Bugangan 01</p>
                        <p class="description"><i class="ion-ios-alarm-outline" style="color: #d63636;"></i>Kamis, Sabtu, Jumat</p>
                        <button type="button" data-toggle="modal" data-target="#beriRating">Beri Nilai</button>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="beriRating" tabindex="-1" role="dialog" aria-labelledby="beriRatingLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form accept-charset="UTF-8" action="" method="post">
        <!-- Bintang -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="star-rating">
                    <span class="fa fa-star-o" data-rating="1"></span>
                    <span class="fa fa-star-o" data-rating="2"></span>
                    <span class="fa fa-star-o" data-rating="3"></span>
                    <span class="fa fa-star-o" data-rating="4"></span>
                    <span class="fa fa-star-o" data-rating="5"></span>
                    <input type="hidden" name="whatever1" class="rating-value" value="0">
                </div>
                </div>
            </div><br/>

            <input id="ratings-hidden" name="rating" type="hidden"> 
            <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="4"></textarea>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" style="width: 100%;">Save changes</button>
      </div>
    </div>
  </div>
</div>
</section>