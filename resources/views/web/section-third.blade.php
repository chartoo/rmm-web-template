<div class="container py-4">
    <div class="row py-4">
        <div class="col-3 pr-1">
            <div class="bg-white border rounded p-3  text-center  pb-5 shadow">
                <h3 class="text-center append-border">
                    <b class="roboto ">Today's detals</b>
                    <hr class="border-half">
                    <br>
                </h3>
              
                <p class="text-justify pt-4 pb-3 playfair">
                   <i> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat culpa in dolorum aut labore dolore expedita.</i>
                </p>
                <a href="#" class="text-decoration-none"><h3><b class="text-primary" style="color:#6177EB;">See All </b><img src="/images/icons/right-arrow-blue.png" alt=""></h3></a>
            </div>
        </div>
        <div class="col-md-9 px-1">
            @include('web.section-deals');
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="text-center">
                <div class="circle circle-select pt-3 shadow">
                    <b class="roboto">Select</b> <br>
                    <small><i class="playfair">see more <br> detail</i></small>
                    <hr class="line">
                </div>
                
                <div class="circle circle-cupon pt-3 shadow">
                    <b class="roboto">Coupon</b><br>
                    <small><i class="playfair">to get <br> discount</i></small>
                <hr class="line">
                </div>
                <div class="circle circle-inquiry pt-3 shadow">
                    <b class="roboto">Inquiry</b><br>
                    <small><i class="playfair">submit with <br>your data</i></small>
                <hr class="line">
                </div>
                <div class="circle circle-confirm pt-3 shadow">
                    <b class="roboto">Confirm</b><br>
                    <small><i class="playfair">confirm & check your email</i></small>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script src="/js/deal-slick.js"></script>
@endpush