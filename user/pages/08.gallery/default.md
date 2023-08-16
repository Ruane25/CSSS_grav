---
title: Gallery
media_order: IMG_6262.JPG
---

<h1>Welcome to the Gallery</h1>
<!-- Gallery -->
<!-- src="/user/pages/08.gallery/filename.png"-->
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="/user/pages/08.gallery/1.JPG"
      class="w-100 shadow-1-strong rounded mb-4 img"
      alt="Boat on Calm Water"
      onclick="showmodal('1.JPG')"
    />

    <img
      src="/user/pages/08.gallery/2.JPG"
      class="w-100 shadow-1-strong rounded mb-4 img"
      alt="Wintry Mountain Landscape"
         onclick="showmodal('2.JPG')"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Waves at Sea"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Yosemite National Park"
    />
  </div>
</div>
<!-- Gallery -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="min-width: 70%">
    <div class="modal-content">
      <div class="modal-header" style="justify-content:end">
        <button type="button" class="close btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body row">
        <img
          id="modalimg"
          src="/user/pages/08.gallery/1.JPG"
          width="1000" 
          alt="Boat on Calm Water"
        />
          <!-- class="w-100 shadow-1-strong rounded mb-4" -->

  <button class="carousel-control-prev" type="button" onclick="prevImg()">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" onclick="nextImg()">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

      </div>
    </div>
  </div>
</div>
<script>
  function showmodal (filename){
    if (filename.trim().length == 0){
        $("#exampleModalCenter").modal('hide')
    }
    else {
        $("#modalimg").attr("src", "/user/pages/08.gallery/" + filename);
        $("#exampleModalCenter").modal('show')
        document.onkeydown = checkKey;
    }
        
  }
  function checkKey(e) {

    e = e || window.event;

    if (e.keyCode == '37') {
       prevImg()
    }
    else if (e.keyCode == '39') {
       nextImg()
    }

}
  function nextImg(){
    let curtemp = document.getElementById("modalimg").src; 
    let cur = curtemp.substring(curtemp.indexOf("/", 40)+1, curtemp.indexOf(".JPG"))
    cur = parseInt(cur)+1 > 2 ? 2 : parseInt(cur)+1
    $("#modalimg").attr("src", "/user/pages/08.gallery/" + (cur) + ".JPG");
  }
  function prevImg(){
    let curtemp = document.getElementById("modalimg").src; 
    let cur = curtemp.substring(curtemp.indexOf("/", 40)+1, curtemp.indexOf(".JPG"))
    cur = parseInt(cur)-1 < 1 ? 1 : parseInt(cur)-1
    $("#modalimg").attr("src", "/user/pages/08.gallery/" + (cur) + ".JPG");
  }
</script>
<style>
    .img:hover{
         cursor: pointer; 
        opacity: 50%;
    }
</style>