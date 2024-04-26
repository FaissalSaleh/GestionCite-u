 @include('layout.header')
  <div class="container-scroller" id="content" style="display: none;" >
    <!-- partial:partials/_navbar.html -->

    <!-- partial -->
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <!-- partial:partials/_sidebar.html -->
     @include('layout.sidebar')
      <!-- partial -->
          <!-- <div class="row" style="border: 1px solid #eee;">
            <div class="col-sm-12 mb-4 mb-xl-0" style="display: flex;flex-direction: row;justify-content: space-between;">
              <h4 class="font-weight-bold text-dark">{{$user->username}}, welcome back!</h4>
   <ul class="navbar-nav navbar-nav-right" style="display:flex;flex-direction: row;">
           
        <li>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </li>
        </ul>
            </div>

          </div> -->
  
          <div class="row">
              <!--================Home Banner Area =================-->
            <div class="topbar" style="width: 100%;height: 40px;overflow: hidden;background-color:#0c4a55;">
                <div class="container">
                <div class="row">
                <div class="col-md-6 text-left">
                <p><i class="fa fa-time"></i> ICT UniversityDorm Admin. <span id="date"></span> <span id="heure"></span></p>
                </div>
                <div class="col-md-6 text-right">
                <ul class="list-inline">
                <li class="dropdown">
                      <input id="autocomplete" type="text" class="form-control" style="position:relative;top: -20px;" />
                </li>
               
                </ul>
                </div>
                </div>
                </div>
                </div>
  <!--================End Home Banner Area =================-->
    @include('layout.carousel')
    @include('layout.modal') 
    @include('layout.loader') 
  <!--================Booking Area =================-->
  
  <!--================End Booking Area =================-->
          </div>



        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('layout.footer')