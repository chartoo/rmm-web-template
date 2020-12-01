<div class=" slider deal-slick px-0">
    <?php foreach ([1,2,3,4,5] as $key => $value) :?>
    <div class="pl-1" style="width:33%;">
        <div class="border rounded shadow " style="font-size:11px;">
            <div class="img-discount">
                <img src="/images/deal1.jpg"  class="rounded-top" alt="">
                <div class="discount pt-2 text-right">
                    <b class="text-white p-2 bg-upto-discount" style="font-size:14px;">20% OFF</b><br>
                    <b class="bg-white text-warning px-2">Availabel - 2</b>
                </div>
            </div>
            <div class="py-2 p-1 pl-3">
            <div class="row">
                <div class="col-2 text-right px-0">Hotel : </div>
                <div class="col-5 px-1"> <b class="purple roboto"> Name Hotel</b></div>
                <div class="col-md-5 px-0 ">Rating :
                    <?php 
                        for ($i=0; $i < 5; $i++) { 
                           echo '<i class="fas fa-star text-warning"></i>' ;
                        }
                        
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-2 text-right px-0">Type : </div>
                <div class="col-10 px-1"> <b class="roboto"> Delux</b></div>
            </div>
            <div class="row">
                <div class="col-2 text-right px-0">Address : </div>
                <div class="col-5 px-1"> <i class="roboto text-judstify"> 23st , BoMinYaung St, Yangon Myanmar</i></div>
                <div class="col-5 text-right px-0 pr-3">
                    <a href="#" class="btn btn-sm bg-puple text-white rounded-0" style="font-size:10px;"><b>Get Coupon </b> <img src="/images/icons/right-arrow.png" class="d-inline" width="15px" alt=""></a>
                </div>
            </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<div class="row border bg-light rounded-0 py-1 mt-2 mx-1">
    <div class="col-4 text-right">
        {{-- <i class="fas fa-step-backward" id="custom-prev-slick-slide"  data-toggle="tooltip" data-placement="top" title="Previous Slide"></i> &emsp; --}}
        <i class="fas fa-chevron-left slick-next slick-arrow cursor-pointer" id="custom-prev-slick" data-toggle="tooltip" data-placement="top" title="Previous One"></i>
    </div>
    <div class="col-4 text-center">
       <b><i id="deail-slider-count">  3-6 rooms / 30 rooms</i></b>
    </div>
    <div class="col-4 text-left">
        <i class="fas fa-chevron-right hover-pointer cursor-pointer" id='custom-next-slick' data-toggle="tooltip" data-placement="top" title="Next One"></i> &emsp;
        {{-- <i class="fas fa-step-forward" id="custom-next-slick-slide"  data-toggle="tooltip" data-placement="top" title="Next Slide"></i> --}}
    </div>
</div>