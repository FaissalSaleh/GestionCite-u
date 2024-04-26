<div>
   <div>
   <div id="header">
  <div class="section">
    <div>
      <div id="logo"><a href="/"><img src="images/logo.gif" alt=""></a></div>
      <div id="navigation">
        <ul class="secondary">
          <li><a href="themes.html">cahier de texte</a></li>
          <li><a href="accessories.html">partage</a></li>
          <li><a href="gallery.html">corbeille</a></li>
        </ul>
      </div>
    </div>
  </div>
  <span style="text-align: center;margin-left:500px;font-size: 30px;font-family: Arial;" class="text-secondary" >LISTE DE CAHIER DE Mr. {{session('prof')->nom}} </span> <button class="btn btn-outline-primary ml-5" data-toggle="modal" data-target="#exampleModal" >CREER</button>
  <div id="featured">
    <ul>
      @foreach($cahiers as $c)
      <li class="first">
        <h2>
          <a class="show-btn" 
          data-jour="{{date('d', strtotime($c->created_at))}}" 
          data-year="{{date('Y', strtotime($c->created_at))}}"  
          data-mois="{{date('m', strtotime($c->created_at))}}"  
          data-classe="{{$c->cour}}"  
          href="{{$c->titre}}">
          {{$c->id}}. {{$c->titre}} 
            <span 
            data-mois="{{date('m', strtotime($c->created_at))}}" 
            data-year="{{date('Y', strtotime($c->created_at))}}"  
            data-jour="{{date('d', strtotime($c->created_at))}}" 
            class="dtee" style="font-size: 12px" >{{$c->created_at}}
          </span> </a></h2>
        <div><span></span><a href="#"  ><img src="files/{{$c->img}}" alt=""></a></div>
        <a href="#" class="view"><span>View Themes...</span></a> 
      </li>
      @endforeach
    </ul>
  </div>
</div>

<div id="content">
  <div> <span class="background"></span>
    <div id="section">
      


    </div>
  </div>
</div>



<div id="footer">
  <p>Copyright &copy; <a href="#">Domain Name</a> - All Rights Reserved | Template By <a target="_blank" href="http://www.freewebsitetemplates.com/">FreeWebsiteTemplates.com</a></p>
</div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                <div class="page-content">
                  <div class="form-v6-content">
                    <div class="form-left">
                      <img src="images/signin-image.jpg" id="previewImg" alt="form">
                    </div>
                    <form class="form-detail" action="#" method="post" >
                      <h2>CREER UN CAHIER</h2>
                      <div class="form-row">
                        <input type="text"  id="t" class="input-text" placeholder="Title" required>
                      </div>
                      <div class="form-row">
                        <input type="text"  id="c" class="input-text" placeholder="Classe" required >
                      </div>
                      <div class="form-row">
                        <input type="file" onchange="previewFile(this);"  id="file" class="input-text" placeholder="File">
                      </div>
                     
                      <div class="form-row-last">
                        <input type="submit" id="register" class="register" value="Valider">
                      </div>
                    </form>
                  </div>
                </div>
          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>
    <input wire:model='file' id="p"  type="hidden" value="files.jpg" name="">


     <div class="bottom-sheet">
      <div class="overlay"></div>

      <div class="content">
        <div class="header">
          <div class="drag-icon">
            <span></span>
          </div>
        </div>

        <div class="body">
            <span id="" class="text-uppercase text-secondary" style="text-align: center;font-size:12px;font-family:Kristen ITC;"  >cahier de classe des  <em class="text-info" id="class" ></em> </span>
          <h5 id="per" class="text-uppercase" style="" ></h5>

          <ul class="nav nav-tabs" >
              <li class="nav-item" ><a class="nav-link active" style="font-family:Harrington;" href="">LUNDI</a></li>
              <li class="nav-item" ><a class="nav-link" style="font-family:Harrington;" href="">MARDI</a></li>
              <li class="nav-item" ><a class="nav-link" style="font-family:Harrington;" href="">MERCREDI</a></li>
              <li class="nav-item" ><a class="nav-link" style="font-family:Harrington;" href="">JEUDI</a></li>
              <li class="nav-item" ><a class="nav-link" style="font-family:Harrington;" href="">VENDREDI</a></li>
              <li class="nav-item" ><a class="nav-link" style="font-family:Harrington;" href="">SAMEDI</a></li>
          </ul>
          
          <div class="mt-4">
            <button class="mt-2 mb-2 btn btn-outline-primary" style="float:right;" data-toggle="modal" data-target="#exampleModalundi" id="activl">CREER UNE ACTIVITER</button>
              <table class="table table-bordered table-striped" >
                <thead>
                    <tr>
                        <th>Matiere</th>
                        <th>Jour</th>
                        <th>Contenu</th>
                    </tr>
                </thead>
                  <tbody>
                      <tr class="border-primary" >
                          <td>jhhh</td>
                          <td>jhhh</td>
                          <td>jhhh</td>
                      </tr>
                  </tbody>
              </table>
          </div>

        </div>
        
      </div>
    </div>
</div>



 <div class="modal fade" id="exampleModalundi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                <div class="page-content">
                  <div class="form-v6-content">
                    <div class="form-left">
                      <img src="images/signin-image.jpg" id="previewImg" alt="form">
                    </div>
                    <form class="form-detail" action="#" method="post" >
                      <h2>CREER UNE ACTIVITE</h2>
                      <div class="form-row">
                        <input type="text"  id="tl" class="input-text" placeholder="Title" required>
                      </div>
                      <div class="form-row">
                        <input type="text"  id="cl" class="input-text" placeholder="Cour" required >
                      </div>
                     
                      <div class="form-row-last">
                        <input type="submit" id="lundi" class="register" value="Creer">
                      </div>
                    </form>
                  </div>
                </div>
          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>

</div>
