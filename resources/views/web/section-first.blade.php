<div class="bg-img">
    <section class=" bg-opacity ">
    <div class="container-fluid pl-5">
        <div class="row">
            <div class="col-6 pt-5 pl-5">
                <div class=" rounded shadow-lg p-4  search-section-first">
                    <div class="text-section-first">
                       <b> FIND  HOTELS, RESORTS, MOTELS & MORE</b>
                        <p> Get the best prices on 2,000,000+ properties</p>
                    </div>
                <div class="wrapper pb-4"> 
                    <input type="text" 
                            class="text form-control input-height"
                            placeholder="Enter property name"
                            name="uname" required>  
                    <img src="/images/icons/bed.png" alt=""> 
                </div> 
                <div class="wrapper pb-4"> 
                    <input type="text" 
                            id="daterange"
                            class="text form-control input-height"
                            placeholder="Check in date   |   Check out date"
                            name="checkin-checkout" required>  
                    <img src="/images/icons/calendar.png" alt=""> 
                </div> 
                <div class="row">
                    <div class="col-md-8">
                    <div class="wrapper"> 
                    <input type="text"
                            id="add-people"
                            class="text form-control input-height bg-white"
                            placeholder="2 Adults  |  1 Room" readonly required>  
                            <img src="/images/icons/group.png" alt=""> 
                            <input type="hidden" name="people-room" id="selected-people-room" value="2-1">
                        </div> 
                        {{-- popup Select People --}}
                            <div class="popupSelectPeople d-none">
                                <div class="popuptext arrow-top" id="selectPeoplePopup">
                                    <input type="radio" name="selectpeople" id="selectCouplePair" checked> Couple/pair &emsp;
                                    <input type="radio" name="selectpeople" id="selectFamilyGroup"> Family (or) Group
                                    <div id="cp-group" class="d-block border rounded p-2 pt-3">
                                        <div class="form-group d-inline-block">
                                            <label for="">Adults</label>
                                            <input type="number" value="2" readonly style="width:60px;">
                                        </div>
                                        <div class="form-group d-inline-block">
                                            <label for="">Room</label>
                                            <input type="number" value="1" readonly style="width:60px;">
                                        </div>
                                        <button id="cp-btn-select" class="btn btn-sm btn-success">Select</button>
                                    </div>
                                    <div id="fg-group" class="d-none border rounded p-2 pt-3">
                                        <div class="form-group d-inline-block">
                                            <label for="">Adults</label>
                                            <input type="number" name="fg-adult" id="" value="2" style="width:60px;">
                                        </div>
                                        <div class="form-group d-inline-block">
                                            <label for="">Children</label>
                                            <input type="number" name="fg-child" id="" value="0" style="width:60px;">
                                        </div>
                                        <div class="form-group d-inline-block">
                                            <label for="">Rooms</label>
                                            <input type="number" name="fg-room" id="" value="1" style="width:60px;">
                                        </div>                                       
                                        <button id="fg-btn-select" class="btn btn-sm btn-success">Select</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btN form-control input-height text-white bg-puple"> <b class="roboto">SEARCH</b></button>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-6">
                <div class="listing-section-first rounded py-5 text-center align-middle">
                    <div class="pt-5">
                        <h1 class="playfair"><b class="text-white">Make Your </b><b class="text-warning">End-To-End</b><b class="text-white"> Property</b></h1>
                        <h4 class="text-white playfair py-4"> Help the guests to easily find out more your properties.</h4>
                        <p>200000+ Guests find your rooms</p>
                        <div>
                            <a href="#" class="btn btn-md btn-warning text-decoration-none roboto"><b class="text-white" style="font-size:20px;"> Get Free Listing </b> &emsp;<img src="/images/icons/right-arrow.png" alt=""></a>
                        </div>
                        </div>
                </div>  
            </div>
        </div>
    </div>
</section>
</div>

  
  @push('styles')
      <style>
          .popupSelectPeople {
    display: inline-block;
}
.popupSelectPeople .popuptext{
    border: 2px;
    background: #ffffff;
    visibility: hidden;
    width: 100%;
    text-align: center;
    padding: 10px 30px;
    position:relative;
    border-radius: 5px;
}
.popupSelectPeople .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
    position: absolute;
    top:80%;
    left:2%;
    }
.popuptext.arrow-top:after {
  content: " ";
  position: absolute;
  left: 25px;
  top: -15px;
  border-top: none;
  border-right: 15px solid transparent;
  border-left: 15px solid transparent;
  border-bottom: 15px solid #ffffff;
  z-index: 986;
}
      </style>
  @endpush
  @push('scripts')
      <script>
           var popup = document.getElementById('selectPeoplePopup');
          $(document).ready(function(){
              $('#add-people').on('focus',function(){
                 
                    var show=popup.classList.toggle('show');
                   if(show)
                    $('.popupSelectPeople').removeClass('d-none').addClass('d-inline-block')
                   else 
                   $('.popupSelectPeople').removeClass('d-inline-block').addClass('d-none')
                   if($('#selectFamilyGroup').prop("checked"))
                   fgSelect();
              });
              $('#selectFamilyGroup').on("click",function(){
                fgSelect();
              });
              $('#selectCouplePair').on("click",function(){
                $('#add-people').attr('placeholder',"2 Adults | 1 Room");
                $('#fg-group').removeClass("d-block").addClass("d-none");
                $('#cp-group').removeClass("d-none").addClass('d-block')
              });
              $('#fg-btn-select').on('click',function(){
                fgSelect();
                $('.popupSelectPeople').removeClass('d-inline-block').addClass('d-none')
                popup.classList.toggle('show');
              });
              $('#cp-btn-select').on('click',function(){
                $('.popupSelectPeople').removeClass('d-inline-block').addClass('d-none')
                popup.classList.toggle('show');
              });
            });
            function fgSelect() {
                $('#cp-group').removeClass("d-block").addClass('d-none')
                $('#fg-group').removeClass("d-none").addClass("d-block");
               
                var adult=$("input[name*='fg-adult']").val();
                var child=$("input[name*='fg-child']").val();
                var room=$("input[name*='fg-room']").val();
                $('#add-people').attr('placeholder',adult+" Adults | "+child+" Children | "+room+" Rooms");
            }
      </script>
  @endpush