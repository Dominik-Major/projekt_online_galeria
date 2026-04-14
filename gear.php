<?php
$config = require __DIR__ . "/config.php";
require_once __DIR__ . "/parts/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Photo Gallery">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="Dominik Major">
    <title>Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous">
    <!--custom css after bootstrap to ovverwrite certain styles-->
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/gear.css">
</head>
<body>
  <?php include "parts/navbar.php" ?>
    <main>
        <h1 class="text-center fw-semibold mt-5">MY CAMERA KIT</h1>
        <!--container for the accordions. Adds padding and controllable width of the entire element-->
        <div class="container w-50 py-5">
          <p class="text-center fs-5 mb-5">This section is dedicated to my camera gear. 
          From my everyday carry, to my setup on special occasions, 
          every piece is mentioned including camera bodies, lenses, accessories and some extra items of use.</p>
          <!--accordion section-->
          <div class="accordion border rounded-top">
            <div class="Q fs-3 fw-semibold">CAMERA 1 & LENSES</div>
            <div class="A">
              <!--1 row with image and description-->
              <div class="row align-items-center justify-content-center g-4">
                <div class="col-12 col-md-6 text-center">
                  <img src="img/gear/body_1.png" alt="Example Image" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                  <h2>NIKON D3300</h2>
                  <p>Release Date: January 7, 2014</p>
                  <p>An older model. This was my first ever DSLR camera, 
                    already a bit outdated by the time I bought it, 
                    however a brilliant and affordable entry level camera.</p>
                  <p>Price: 600€(new), 200-400€(used), discontinued</p>
                  <a href="https://allegro.sk/produkt/zrkadlovka-nikon-d3300-telo-objektiv-482ef34f-0660-4c98-ac16-
                  e1e391ced49f?offerId=17606543776&utm_feed=547ce2b2-2e28-4773-9707-
                  58218068540e&utm_source=google&utm_medium=freelisting" target="_blank" class="btn btn-dark">Available link</a>
                </div>
              </div>
              <div class="row align-items-center justify-content-center g-4">
                <div class="col-12 col-md-6 text-center">
                  <img src="img/gear/lens_1.webp" alt="Example Image" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                  <h2>NIKON NIKKOR AF-P DX 18-55mm f/3.5-5.6G VR</h2>
                  <p>Release Date: 2005(ver. 1)</p>
                  <p>A kit lens which usually comes with the camera body. A cheaper option than more specific, 
                    high end lenses, but an adequate choice regardless.</p>
                  <p>Price: 50-150€(used), discontinued</p>
                  <a href="https://www.mpb.com/en-eu/product/nikon-af-s-dx-nikkor-18-55mm-f-3-5-5-6g-vr/sku-3414921?utm_
                  source=google&utm_medium=cpc&utm_campaign=EU%7CGoogle%7CBuy%7CPmax%7CEN&gclsrc=aw.ds&gad_source=1&gad_
                  campaignid=20308286376&gbraid=0AAAAApa3MKsZX1WJP1cY6Uena2hXwZ2gm&gclid=CjwKCAiA3L_JBhAlEiwAlcWO558ADEWlRBCjn-
                  s8ZZBQ_rPQ3QQS82LfBG7yEgutqKmrzQYtS40RIRoC61AQAvD_BwE" target="_blank" class="btn btn-dark">Available link</a>
                </div>
              </div>
              <div class="row align-items-center justify-content-center g-4">
                <div class="col-12 col-md-6 text-center">
                  <img src="img/gear/lens_2.jpg" alt="Example Image" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                  <h2>Tamron 70 – 300 mm f/4,5 – 6,3 Di III RXD</h2>
                  <p>Release Date: 2014</p>
                  <p>A telephoto lens for with longer focal lenghts for those far shots.</p>
                  <p>Price: 120€(used), discontinued</p>
                  <a href="https://www.mpb.com/en-eu/product/tamron-
                  af-70-300-4-56-ld-macro-nikon-fit/sku-3517357" target="_blank" class="btn btn-dark">Available link</a>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion">
            <div class="Q fs-3 fw-semibold">CAMERA 2 & LENSES</div>
            <div class="A">
              <div class="row align-items-center justify-content-center g-4">
                <div class="col-12 col-md-6 text-center">
                  <img src="img/gear/body_2.webp" alt="Example Image" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                  <h2>Sony Alpha A6100</h2>
                  <p>Release Date: August, 2019</p>
                  <p>A mirrorless camera with more modern features, still in the affordable price range.</p>
                  <p>Price: 800€</p>
                  <a href="https://www.alza.sk/sony-alpha-a6100-telo-d12796561.htm?kampan=adwalz_alza_pla_all_poor-perfomers_poor-perfomers
                  _c_9209983_OS074b11_~164564303476~&gad_source=1&gad_campaignid=21455705738&gbraid=0AAAAAD2xsm6o6zpgRZhnOlsT1RnvRkIi2&gclid
                  =CjwKCAiA3L_JBhAlEiwAlcWO54gsvdBr7g87cf-B-FzYtBVvxHVGyIOZ2Eo5UmQ070Y6W2RTxHVaPBoC7XQQAvD_BwE" target="_blank" class="btn btn-dark">Available link</a>
                </div>
              </div>
              <div class="row align-items-center justify-content-center g-4">
                <div class="col-12 col-md-6 text-center">
                  <img src="img/gear/lens_3.jpg" alt="Example Image" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                  <h2>Sony E PZ 16 – 50 mm f/3,5 – 5,6 II</h2>
                  <p>Release Date: 2012</p>
                  <p>A kit lens which usually comes with the camera body. A cheaper option than more specific, 
                    high end lenses, but an adequate choice regardless.</p>
                  <p>Price: 150€</p>
                  <a href="https://allegro.sk/produkt/objektiv-sony-e-selp1650-ee3a7725-0e4a-4cfb-97d5-178d3214087c?o
                  fferId=17851496170&utm_feed=547ce2b2-2e28-4773-9707-58218068540e&utm_source=google&utm_medium=cpc&u
                  tm_campaign=SK%3EElectro%3EHome-electro%3E3P%3EPMAX&ev_campaign_id=21066407971&gad_source=1&gad_campaignid=2105
                  6448453&gbraid=0AAAAAqKvbIjlG8Bj-spO6J7wpIL_kF8BU&gclid=CjwKCAiA3L_JBhAlEiwAlcWO56YEYONKwObARJK-N8mvbuTRacAkGOgOVTRnZeA0sG4nNPaCVuqGyhoCy
                  owQAvD_BwE" target="_blank" class="btn btn-dark">Available link</a>
                </div>
              </div>
              <div class="row align-items-center justify-content-center g-4">
                <div class="col-12 col-md-6 text-center">
                  <img src="img/gear/lens_4.webp" alt="Example Image" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                  <h2>Sony 55 – 210 mm F4,5 – 6,3</h2>
                  <p>Release Date: 2011</p>
                  <p>A telephoto lens for with longer focal lenghts for those far shots.</p>
                  <p>Price: 270€</p>
                  <a href="https://www.alza.sk/sony-55-210-mm-f4-5-6-3-cierny-d530195.htm?kampan=adwdfv_digitalni-foto-video_pla_all_digitalne-foto-v
                  ideo_objektivy-a-filtre_c_9209983__OS030m1_v&gad_source=1&gad_campaignid=21459517418&gbraid=0AAAAAD2xsm4cND8IQNzm3hC9XUIOFEX_n&gclid=CjwKCAiA3L_JBhAlEiwAlcWO53PHlyQ_b
                  eRFFf568ufX3KLlme9J-57KrFo0j4mqBWd_i39ByUO8MxoC_JQQAvD_BwE" target="_blank" class="btn btn-dark">Available link</a>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion">
            <div class="Q fs-3 fw-semibold">EXTRAS</div>
            <div class="A">
              <div class="row align-items-center justify-content-center g-4">
                <div class="col-12 col-md-6 text-center">
                  <img src="img/gear/extra_1.webp" alt="Example Image" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                  <h2>Hama Star 62 Tripod</h2>
                  <p>Release Date: 2011</p>
                  <p>A good affordable, tripod. A must have for any situation.</p>
                  <p>Price: 50€</p>
                  <a href="https://allegro.sk/produkt/tripod-hama-star-62-160-cm-hnedy-0b03a901-75c8-4f26-bc13-18e0c3903df8?offerId=1
                  7671269929&utm_feed=547ce2b2-2e28-4773-9707-58218068540e&utm_source=google&utm_medium=cpc&utm_campaign=SK%3EElectro%3
                  EHome-electro%3E3P%3EPMAX&ev_campaign_id=21066407971&gad_source=1&gad_campaignid=21056448453&gbraid=0AAAAAqKvbIjlG8Bj-spO6J7wpIL_kF8BU&gclid=CjwKCAiA3L_JBh
                  AlEiwAlcWO5zLOJ60bCthJg-r0oAN2ieVtnAn09A1kDs8YqoDhP_236fU0WCrG2RoCRj4QAvD_BwE" target="_blank" class="btn btn-dark">Available link</a>
                </div>
              </div>
              <div class="row align-items-center justify-content-center g-4">
                <div class="col-12 col-md-6 text-center">
                  <img src="img/gear/extra_2.webp" alt="Example Image" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                  <h2>Vanguard VESTA Aspire 41 GY</h2>
                  <p>Release Date: 2018</p>
                  <p>A compact backpack that can store all the essentials.</p>
                  <p>Price: 50€</p>
                  <a href="https://www.alza.sk/vanguard-vesta-aspire-41-gy-d5745769.htm" target="_blank" class="btn btn-dark">Available link</a>
                </div>
              </div>
              <div class="row align-items-center justify-content-center g-4">
                <div class="col-12 col-md-6 text-center">
                  <img src="img/gear/extra_3.webp" alt="Example Image" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                  <h2>Iphone 15</h2>
                  <p>Release Date: 2023</p>
                  <p>For editing, posting, managing images. Also, with phone cameras getting better and better 
                    every year, sometimes a phone is all you need. The best camera is the one you have with you.
                  </p>
                  <p>Price: 700€</p>
                  <a href="https://www.alza.sk/iphone-15-128-gb-cierny-d7927612.htm" target="_blank" class="btn btn-dark">Available link</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </main>
    <?php include "parts/footer.php" ?>
    <!--Links to js files-->
    <script src="js/common.js"></script>
    <script src="js/gear.js"></script>
</body>
</html>