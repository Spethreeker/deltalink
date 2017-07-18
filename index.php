<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home - Delta Link, LLC.</title>
    <?php include("head.inc");?>
    <style>
      .first-banner{
          background-image: url('images/banners/corn_field_banner.png');
          background-position: bottom;
          background-repeat: no-repeat;
          background-size: cover;
          
      }
    </style>
</head>
<body>
    <?php include("navbar.inc");?>
    <main>
        <section>
            <div class="hero">
                <div class="hero-body first-banner">
                  <h1 class="title white-font is-2">Internet access for rural areas.</h1>
                  <p class="subtitle white-font is-4">If you live out of town and you need Internet service, you've come to the right place.</p>
                  <a class="button is-outlined is-white" href="coverage.php">See if you're covered!</a>
                </div>
            </div>
                <div class="hero gray_3">
                  <div class="hero-body">
                      <div class="columns">
                    <div class="column is-hidden-mobile">
                            <img src="images/airmaxx_dish.png" alt="Our internet service uses anntenaes such as this radio dish"/>
                    </div>
                    <div class="column">
                        <h1 class="title is-2 white-font">How Our Internet Reaches You</h1>
                        <p class="subtitle is-5 white-font"> Our wireless uses anntenaes and radio dishes to reach where no other service providers can. We use
                            industry-leading products and cutting-edge ideas to bring you the best service possible.</p>
                    </div>
                      </div>
                  </div>
            </div>
            </div>
        </section>
        <section class="section has-text-centered gray_1">
                <h1 class="title is-2 has-text-centered">Why Choose Us</h1>
                <div class="columns">
                    <div class="column has-text-centered green"><br>
                        <i class="fa fa-bolt fa-5x white-font" aria-hidden="true"></i>
                        <h2 class="title has-text-centered white-font">Low Latency</h2>
                        <p class="subtitle white-font">Our internet has the lowest latency in the Delta.</p>
                    </div>
                    <div class="column  green"><br>
                        <i class="fa fa-handshake-o fa-5x white-font" aria-hidden="true"></i>
                        <h2 class="title has-text-centered white-font">Dependable</h2>
                        <p class="subtitle white-font">Always ready when you need it</p>
                    </div>
                    <div class="column green"><br>
                        <i class="fa fa-usd fa-5x white-font" aria-hidden="true"></i>
                        <h2 class="title has-text-centered white-font">Low Cost</h2>
                        <p class="subtitle has-text-centered white-font">Better deals at better prices</p>
                    </div>
                </div>
            
        </section>
        <section class="section brown">
            <div class="columns">
              <div class="column">
                <h1 class="title is-2 white-font">Our Coverage Area</h1>
                  <p class="subtitle is-5 white-font">We cover a large part of the Delta, but what we cannot cover is what is inside the town. If we try to provide
                    to those in town, the signal is more likely to be interrupted causing it to have a weak signal. We provide
                    to those out in the country.</p>
              </div>
                <div class="column">
            <p class="subtitle is-3 white-font has-text-centered">Areas</p>
            <div class="has-text-centered">
                <img src="images/map-coverage.PNG" alt="Coverage Map">
            </div>
            </div>
        </div>
        </section>
    </main>
    <?php include("footer.inc");?>
</body>

</html>