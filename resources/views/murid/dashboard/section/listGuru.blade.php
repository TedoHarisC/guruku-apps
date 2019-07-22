<section id="listGuru">
<div id="list" style="background-color:white">
    <div class="container">
        <div class="row about-extra">
          <div class="col-lg-12 wow fadeInUp pt-5 pt-lg-0">
            <h4>List Guru yang dipesan</h4><br/>
            
            <!-- Ini List nya -->
            <div class="row">
            @foreach ($pesan as $data)
                <!-- Ini core list -->
                <div class="col-md-9 col-lg-8 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box" style="background-color:#ddfaff">
                        <div class="icons"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
                        <h4 class="title"><a href="detailpesanan">{{$data->name}}</a></h4>
                        <p class="description"><i class="ion-ios-briefcase-outline" style="color: #d63636;"></i>{{$data->mata_pelajaran}} tingkat {{$data->tingkat_pendidikan}} kelas {{$data->kelas}}</p>
                        <p class="description"><i class="ion-ios-alarm-outline" style="color: #d63636;"></i>@foreach ($jadwals as $jadwal)@if($jadwal->pesanan_id == $data->id){{$jadwal->hari}} {{$jadwal->jam}},@endif @endforeach </p>
                        <p class="description"><i class="ion-ios-cart-outline" style="color: #d63636;"></i>{{$data->status}}</p>
                        <p class="description"><i class="ion-ios-pricetag-outline" style="color: #d63636;"></i>Rp. {{$data->biaya}}</p>
                        
                        @if($data->status == 'waiting' || $data->status == 'canceled')
                          <button type="button" class="waiting" data-toggle="modal"  disabled>Bayar</button>
                        @elseif ($data->status == 'accepted')
                          <button type="button" onclick="postSnap({{$data->id}})" class="accepted">Bayar</button>
                        @elseif ($data->status == 'paid')
                          <button type="button" id="pay-button"  class="paid">Paid</button>
                        @elseif ($data->status == 'finished' && $data->reviewed != 1)
                          <button type="button"  class="finished" data-id_guru="{{$data->id_user_guru}}" data-id_pesanan="{{$data->id}}" data-toggle="modal" data-target="#beriRating">Rating</button>
                        @endif
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="beriRating" tabindex="-1" role="dialog" aria-labelledby="beriRatingLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Beri penilaian</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form accept-charset="UTF-8" action="{{route('ratingstore')}}" method="post">
        @csrf
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
                    <input type="hidden" name="rating" class="rating-value" value="0">
                </div>
                </div>
          </div><br/>

          <input id="ratings-hidden" name="id_guru" type="hidden"> 
          <textarea class="form-control animated" cols="50" id="new-review" name="review" placeholder="Enter your review here..." rows="4"></textarea>

      </div>
      <div class="modal-footer">
        <input type="hidden" id="id_guru" name="guru_id" class="rating-value">
        <input type="hidden" id="id_pesanan" name="pesanan_id" class="rating-value">
        <button type="submit" class="btn btn-primary" style="width: 100%;">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
</section>

@push('js')
<script>
  $(document).ready(function() {

    $('button[data-toggle = modal]').click(function () {

      // init
      var data_guru_id = '';
      var data_pesanan_id = '';

      // check if null
      if (typeof $(this).data('id_pesanan') !== 'undefined') {

        data_guru_id = $(this).data('id_guru');
        data_pesanan_id = $(this).data('id_pesanan');

        console.log("terklik"+data_guru_id+"lala"+data_pesanan_id);
      }
      document.getElementById('id_guru').value= data_guru_id ; 
      document.getElementById('id_pesanan').value= data_pesanan_id ; 
    })
  });
</script>

{{-- SNAP CLIENT KEY --}}
<script src="https://app.midtrans.com/snap/snap.js" data-client-key="Mid-client-PO5jSOPXEfM7r9K7"></script>
{{-- SNAP INTEGRATION --}}
<script>
    function postSnap(val){

    var id = val;
    console.log(id);
      $.post("{{ route('snap') }}",
      {
        _method: 'POST',
        _token: '{{ csrf_token() }}',
        id_pesanan: id,
			success: function(result){
                console.log("result kok");
             }
        },
        function (data, status) {
            snap.pay(data.snap_token, {
                // Optional
                onSuccess: function (result) {
                  console.log("result kok",data);

                },
                // Optional
                onPending: function (result) {
                    // window.location.replace("http://skartistic2.com");
                },
                // Optional
                onError: function (result) {


                },
                // Optional
                onClose: function (result) {

                }

            });
        });
        return false;  
        

      }
    </script>
@endpush