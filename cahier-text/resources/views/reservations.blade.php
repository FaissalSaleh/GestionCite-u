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
      <div class="container" style="display:flex;flex-direction: row;">

        <div class="form-group col-10" style="position:relative;top:-100px;left: 50px;">
            <select class="form-control" id="residence">
              <option value="">select Residence</option>
              @foreach($residences as $r)
              <option value="{{$r->id}}">{{$r->name}}</option>
              @endforeach
            </select>
          </div>

         <!--  <div class="form-group col-3" style="position:relative;top:-100px;left: 50px;">
            <select class="form-control" id="block-block">
              <option value="">select Block</option>
              @foreach($blocks as $r)
              <option value="{{$r->id}}">{{$r->name}}</option>
              @endforeach
            </select>
          </div> -->

         <!--  <div class="form-group col-3" style="position:relative;top:-100px;left: 50px;">
            <select class="form-control" id="Chambre">
              <option value="">select Chambre</option>
              <option value="">+1</option>
            </select> 
          </div> -->
      </div>
    </section>
  <!--================Booking Area =================-->
          <!-- Rooms Section Begin -->
          @include('layout.show-reservation2')
          @include('layout.modal')
    <!-- Rooms Section End -->
  <!--================End Booking Area =================-->
          </div>



        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('layout.footer')