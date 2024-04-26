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

          <div class="row" style="border: 1px solid #eee;">
            <div class="col-sm-12 mb-4 mb-xl-0" style="display: flex;flex-direction: row;justify-content: space-between;">
              <h4 class="font-weight-bold text-dark">{{$user->name}}, welcome back!</h4>
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
    @include('layout.carousel')
  <!--================Booking Area =================-->
  
  <!--================End Booking Area =================-->
          </div>



        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('layout.footer')