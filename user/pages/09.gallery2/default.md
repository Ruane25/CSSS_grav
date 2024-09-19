---
title: Gallery2
process:
    twig: true
    markdown: false
media_order: banner2.jpg
---

<!-- <div class=row>
        {% for image in page.media.images %}
            <div class=col> 
                <img src="{{ image.url }}">
            </div>
        {% endfor %}
</div> -->

<div id="cardRow" class="row" style="padding-top: 2%">
    {% for image in page.media.images %}
        <div class="col-lg-3 col-md-6 col-sm-12" id="Bulbasaur">
            <div class="card">
                <img src="{{ image.url }}" class="card-img-top" alt="...">
            </div>
        </div>
    {% endfor %}
</div>