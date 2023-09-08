---
title: Home
body_classes: 'title-center title-h1h2'
login:
    visibility_requires_access: false
media_order: '4k pattern.jpg,banner1.jpg,banner2.jpg,banner3.jpg,banner4.jpg,bannerpattern.png'
process:
    markdown: true
    twig: true
---

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container mt-3 mb-3" style="margin: 0 auto 0 auto !important; padding-top: 2%">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            {% set foo = 1 %} 
            {% for image in page.media.images %}           
              {% if foo == 1 %}
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" aria-label="Slide 1" aria-current="true" class="active"></button>
              {% else %}
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ foo-1 }}" aria-label="Slide {{ foo }}"></button>
              {% endif %}
              {% set foo = foo+1 %}
            {% endfor %}
        </div>
        <div class="carousel-inner">
            {% set foo = 1 %} 
            {% for image in page.media.images %}
              <div class="carousel-item{% if foo == 1 %} active{% endif %}">
                  <img src="{{ image.url }}" class="d-block w-100" alt="SkySkrapers"/>
                  <div class="carousel-caption d-none d-md-block">
                      <div class="topHeader">
                          <h2>~Comp Sci Student Society purpose~</h2>
                          <p> Encourage and strengthen community between students of computer science and other students, the Department of Computer Science, and potential employers, 
                              as well as to spread information about computer science and technology through lectures, seminars, publications, and events. 
                          </p>
                      </div>
                  </div>
              </div>
              {% set foo = foo+1 %}
            {% endfor %}
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="promotion mt-4">
        <h2> We hope you consider becoming a member, make sure to check out our office! **Spinks S338** </h2>
        <h1> What we offer </h1>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body" style="height: 113px">
                    <h5 class="card-title">Memberships</h5>
                    <p class="card-text">Membership is free! Sign up by using the "Become a Member" tab above!</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body" style="height: 113px">
                    <h5 class="card-title">Snacks</h5>
                    <p class="card-text">Our office has snacks for sale! Check us out @ Spinks S338</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Lockers</h5>
                    <p class="card-text">Come see us in our office to buy a locker on Spinks 3rd floor. Full are $20, half are $10</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Sports</h5>
                    <p class="card-text">We are doing Summer Rec! Join our CoRec Soccer team and represent the CS department!</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<style>
    .topHeader{
    background-color: #0000009e;
    padding: 1%;
    border-radius: 18px;
    }
</style>