<section class="bg-white">
<div class="container pb-5">
    <div class="row"> 
        <div class="col-6 pr-2 pt-3">
            <div class="border rounded shadow">
                <div class="row">
                    <div class="col-5">
                        <h3 class="text-center p-4 pt-5"><b> The best places for you</b></h3>
                    </div>
                    <div class="col-7 p-3">
                        <p class="p-5 pb-4  border-left">
                            Discover properties latest promotions, limited-time deals, exclusive offers, and much more.
                        </p>
                    </div>
                </div>
                
               
            </div>
        </div>
        <?php foreach ([1,2,3] as $key => $value) :?>
            <div class="col-6 pr-2 pt-3">
                <div class="border rounded shadow">
                    <div class="row p-0">
                        <div class="col-5 pr-0">
                            <img src="/images/hotel.jpg" alt="" width="100%" height="240">
                        </div>
                        <div class="col-7 py-2">
                            <div class="position-relative">
                                <h5 class="roboto py-1 mb-0 pb-0">Hotel Name</h5>
                                <div class="d-inline-block">
                                    <?php 
                                        for ($i=0; $i < 5; $i++) { 
                                        echo '<i class="fas fa-star text-warning"></i>' ;
                                        }
                                        
                                    ?>
                                </div>
                                <br>
                                <b><a href="#">Hlaing,</a><a href="#">Yangon</a></b>
                                <div class="position-absolute text-center" style="top:2px;right:5px;">
                                 <small><b>232</b>-<i>reviews</i></small>  
                                </div>
                            </div>
                            <div class="">
                                <?php
                                    for ($i=0; $i < 3; $i++) { 
                                        echo '<span class="border border-success mr-1 px-2 text-center text-success"><small class="py-1">Breakfast</small></span>';
                                    }
                                ?>
                            </div>
                            <p class="playfair">
                             {{substr("This helper also includes a third parameter so you change the ending on the trimmed string.",0,84).'...'}}  
                            </p>
                            <div class="position-relative">
                                <small><b>Price (MMK)</b></small> <br>
                                <span class="border rounded border-success p-1 px-2 d-inline-block text-success"><small><b>12000-75000</b></small></span>
                                
                                <div class="position-absolute text-center" style="top:0;right:0;">
                                    <small> <b>Up To</b></small> <br>
                                    <span class=" border rounded text-white text-center p-1 mr-2 px-4 bg-upto-discount"> <b>30% OFF</b></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
    </div>
    <div class="row">
        <div class="col-12 text-center pt-3"><button class="border-success bg-white px-3 px-2 rounded">Load More</button></div>
    </div>
</div>
</section>