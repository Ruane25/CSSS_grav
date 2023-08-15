<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/csss1/user/pages/01.home/default.md',
    'modified' => 1692026538,
    'size' => 3243,
    'data' => [
        'header' => [
            'title' => 'Home',
            'body_classes' => 'title-center title-h1h2',
            'login' => [
                'visibility_requires_access' => false
            ]
        ],
        'frontmatter' => 'title: Home
body_classes: \'title-center title-h1h2\'
login:
    visibility_requires_access: false',
        'markdown' => '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../styles/badger.css">
<div class="container mt-3 mb-3" style="margin: 0 auto 0 auto !important;">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/user/pages/01.home/banner1.jpg" class="d-block w-100" alt="SkySkrapers"/>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Innovative</h5>
                    <p>We changed the way the world views technology</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/user/pages/01.home/banner2.jpg" class="d-block w-100" alt="Castle">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Inspiring</h5>
                    <p>We are actively inspiring the many professionals in our industry</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/user/pages/01.home/banner3.jpg" class="d-block w-100" alt="JungleLake">
                <div class="carousel-caption d-none d-md-block" style="color: black">
                    <h5>Genius</h5>
                    <p>This one speaks for itself</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/user/pages/01.home/banner4.jpg" class="d-block w-100" alt="LakeLouise">
                <div class="carousel-caption d-none d-md-block" style="color: white">
                    <h5>Amazing</h5>
                    <p>Our designs are absolutely incredible</p>
                </div>
            </div>
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
</div>'
    ]
];
