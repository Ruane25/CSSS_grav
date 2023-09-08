---
title: Gallery
media_order: '1.JPG,2.JPG,3.JPG,5.JPG,6.JPG,8.JPG,11.JPG,4.JPG,12.JPG,7.JPG,9.JPG,15.JPG,14.JPG,10.JPG,13.JPG'
process:
    twig: true
    markdown: false
---

<h1>Welcome to the Gallery</h1>


  
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
  {% set foo = 1 %} 
  {% for image in page.media.images %}
    {% if (foo+2) is divisible by(3) %}
    <img
      src="/user/pages/08.gallery/{{ foo }}.JPG"
      class="w-100 shadow-1-strong rounded mb-4 img" 
      alt="Boat on Calm Water"
      onclick="showmodal({{ foo }})"
      id="{{ foo }}"
      />
      <!-- <p>{{ foo }}</p> -->
    {% endif %}
    {% set foo = foo+1 %}
  {% endfor %}
  </div>
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
  {% set foo = 1 %} 
  {% for image in page.media.images %}
    {% if (foo+1) is divisible by(3) %}
    <img
      src="/user/pages/08.gallery/{{ foo }}.JPG"
      class="w-100 shadow-1-strong rounded mb-4 img"
      alt="Boat on Calm Water"
      onclick="showmodal({{ foo }})"
      id="{{ foo }}"
      />
      <!-- <p>{{ foo }}</p> -->
    {% endif %}
    {% set foo = foo+1 %}
  {% endfor %}
  </div>
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
  {% set foo = 1 %} 
  {% for image in page.media.images %}
    {% if (foo) is divisible by(3) %}
    <img
      src="/user/pages/08.gallery/{{ foo }}.JPG"
      class="w-100 shadow-1-strong rounded mb-4 img"
      alt="Boat on Calm Water"
      onclick="showmodal({{ foo }})"
      id="{{ foo }}"
      />
      <!-- <p>{{ foo }}</p> -->
    {% endif %}
    {% set foo = foo+1 %}
  {% endfor %}
  </div>
</div>




<!-- Scripts for Modal (ones from theme don't seem to want to work -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="min-width: 34%">
        <div class="modal-content">
            <div class="modal-header" style="justify-content:end">
                <button type="button" class="btn-closer btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body row">
                <img
                    id="modalimg"
                    src="/user/pages/08.gallery/1.JPG"
                    width="1000" 
                    alt="Boat on Calm Water"
                    class="d-block"
                    />
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
    function showmodal (numid){ //close the modal or open it and inject the correct image
      // if (filename.trim().length == 0) $("#exampleModalCenter").modal('hide')
      // else {
          $("#modalimg").attr("src", `/user/pages/08.gallery/${numid}.JPG`);
          $("#modalimg").attr("name", numid);
          $("#exampleModalCenter").modal('show')
          document.onkeydown = checkKey;
      // }
    }
    function checkKey(e) { //make the arrow keys functional 
      e = e || window.event;
      if (e.keyCode == '37') prevImg()
      else if (e.keyCode == '39') nextImg()
    }

    function nextImg(){ //go to the next image 
      let max = {{ page.media.images| length }}; //this should reflect the last image available as an int (2.JPG is currently the last file)  
      let curtemp = document.getElementById("modalimg").name; 
      //let cur = curtemp.substring(curtemp.indexOf("/", 40)+1, curtemp.indexOf(".JPG"))
      let cur = parseInt(curtemp)+1 > max ? max : parseInt(curtemp)+1
      $("#modalimg").attr("src", `/user/pages/08.gallery/${cur}.JPG`);
      $("#modalimg").attr("name", cur);
    }

    function prevImg(){
      let curtemp = document.getElementById("modalimg").name; 
      //let cur = curtemp.substring(curtemp.indexOf("/", 40)+1, curtemp.indexOf(".JPG"))
      let cur = parseInt(curtemp)-1 < 1 ? 1 : parseInt(curtemp)-1
      $("#modalimg").attr("src", `/user/pages/08.gallery/${cur}.JPG`);
      $("#modalimg").attr("name", cur);
    }
</script>
<style>
    .img:hover{
    cursor: pointer; 
    opacity: 50%;
    }
</style>