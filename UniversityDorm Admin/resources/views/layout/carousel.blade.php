<section class="white section" style="position:relative;top: -100px;" id="show">
    <div class="container">
    <div class="row course-list" id="list">
      @foreach($users as $u)
    <div class="col-md-3 col-sm-6 col-xs-12 first">
        <div class="shop-item-list entry">
            <div class="border border-success">
                <img style="width:100%;height: 160px;" src="http://127.0.0.1:8000/files/{{$u->photo}}" alt="">
                <div class="magnifier">
                </div>
            </div>

            <div class="shop-item-title clearfix  border border-success">
                <h4><a href="course-single.html">{{$u->name}}</a></h4>
                <div class="shopmeta">
                    <span class="pull-left">{{$u->filiere}}</span>
                    <div class="rating pull-right">
                          <span class="pull-right">{{$u->tel}}</span>
                    </div>
                </div>
            </div>

            <div class="visible-buttons">
                <a title="Detail user" href="" data-nom="{{$u->name}}"  data-id="{{$u->id}}" class="openModal2"><span class="fa fa-cart-arrow-down"></span></a>
                <a title="Read More" href="course-single.html"><span class="fa fa-search"></span></a>
            </div>
        </div>
    </div>
    @endforeach


    </div>

    </div>
</section>
    <!-- END .block-2 -->

