 @include('layout.header')
  <div class="container-scroller" id="content" style="display: none;" >
    <!-- partial:partials/_navbar.html -->

    <!-- partial -->
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <!-- partial:partials/_sidebar.html -->
     @include('layout.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row" style="border: 1px solid #fff;z-index: 1000;background-color: #fff;border-radius: 10px;">
            <div class="col-sm-12 mb-4 mb-xl-0" style="display: flex;flex-direction: row;justify-content: space-between;z-index: 1000;background-color: #fff;border-radius: 10px;">
              <h4 class="font-weight-bold text-dark">{{$user->name}}, chambres!</h4>
   <ul class="navbar-nav navbar-nav-right" style="display:flex;flex-direction: row;">
           
        <li>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </li>
        </ul>
            </div>

          </div> 

          <div class="row mt-3">
              <!--================Home Banner Area =================-->
      
  <!--================End Home Banner Area =================-->
   <section class="section pb-4">
      <div class="container">
       
        <div class="row check-availabilty" id="next">
          <div class="block-32" data-aos="fade-up" data-aos-offset="-200">

            <form action="#">
              <div class="row">
                <!-- <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin_date" class="font-weight-bold text-black">Check In</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkin_date" class="form-control">
                  </div>
                </div> -->
               <!--  <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkout_date" class="font-weight-bold text-black">Check Out</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkout_date" class="form-control">
                  </div>
                </div> -->
                <div class="col-md-6 mb-3 mb-md-0 col-lg-12">
                  <div class="row">

                    <div class="col-md-4 mb-3 mb-md-0">
                      <label for="adults" class="font-weight-bold text-black">Residence :  <em id="r_r"></em> </label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="adults" class="form-control">
                          <option value=""></option>
                            @foreach($residences as $r)
                              <option value="{{$r->id}}-{{$r->name}}" data-r="{{$r->name}}" > {{$r->name}} </option>
                            @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-md-4 mb-3 mb-md-0">
                      <label for="children" class="font-weight-bold text-black">Bocks : <em id="r_b"></em> </label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="children" class="form-control">
                          <option value=""></option>
                          @foreach($blocks as $r)
                              <option value="{{$r->id}}-{{$r->name}}"> {{$r->name}} </option>
                            @endforeach
                        </select>
                      </div>
                    </div>

                     <div class="col-md-4 col-lg-3 align-self-end">
                      <button id="search_room" class="btn btn-primary text-white">Search</button>
                    </div>
                  </div>
                </div>
               
              </div>
            </form>
          </div>

          <input type="hidden" id="h_r" value="" name="">
          <input type="hidden" id="h_b" value="" name="">
        </div>
      </div>
    </section>
  <!--================Booking Area =================-->
      <!-- Home Room Section Begin -->
       @include('layout.show-chambres2')
    <!-- Home Room Section End -->
  <!--================End Booking Area =================-->
          </div>



        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('layout.footer')