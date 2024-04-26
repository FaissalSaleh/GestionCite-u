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
           <div class="col-lg-12 offset-lg-1">
                        <div class="ft-newslatter mt-2" style="display:flex;flex-direction: row;">
                            <!-- <h4> Residence </h4> -->
                            <p style="margin-right:500px;" >.</p>
                            <form action="#" class="fn-form"style="display:flex;flex-direction: row;">
                                <input id="search_user" type="text" placeholder="Search...">
                                <button id="submit_search" type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                       
                          <ul class="list-group col-3" id="list_user" style="position:absolute;left:750px;">
                              
                          </ul>
                    </div>
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
 
          <div class="row mt-3">
              <!--================Home Banner Area form-residence =================-->
      
  <!--================End Home Banner Area show-detail-block show-detail-chambre =================-->
    @include('layout.show-res')
    @include('layout.show-detail-block')
  <!--================Booking Area =================-->
  
  <!--================End Booking Area =================-->
          </div>



        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('layout.footer')