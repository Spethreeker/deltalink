<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home - Delta Link, LLC.</title>
    <?php include("head.inc");?>
    <style>
        .hero-body{
            -webkit-transition: all 1s ease;
            -moz-transition: all 1s ease;
            transition: all 1s ease;
        }
      .first-banner{
          background-image: url('images/banners/corn_field_banner.png');
          background-position: bottom;
          background-repeat: no-repeat;
          background-size: cover;
        }
        .second-banner{
            background: #232526; /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #232526, #414345); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #232526, #414345); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        @media screen and (min-width:768px) {
            #how-banner{
                padding-bottom: 0px;
            }
        }
    </style>
</head>
<body>
    <?php include("navbar.inc");?>
    <main>
        <section>
            <div class="hero">
                <div class="hero-body first-banner" id="first-banner">
                  <h1 class="title white-font is-2" style="font-weight: 400;">Internet access for rural areas.</h1>
                  <p class="subtitle white-font is-4">If you live out of town and you need Internet service,<br class="is-hidden-touch"/>  you've come to the right place.</p>
                  <a class="button is-outlined is-white" href="coverage.php">Can I Get Service?</a>
                </div>
            </div>
                <div class="hero second-banner">
                  <div class="hero-body" id="how-banner">
                    <div class="columns">
                       <div class="column is-1 is-hidden-touch"></div> 
                      <div class="column is-4 is-hidden-mobile">
                        <figure class="image is-2by3 has-text-centered">
                          <img src="images/airmaxx_dish.png" alt="Our internet service uses anntenaes such as this radio dish" style="max-width: 360px;">
                        </figure>
                      </div>
                      <div class="column">
                        <h1 class="title is-2 white-font"style="font-weight: 400;">How Our Internet Service Reaches You.</h1>
                        <p class="subtitle is-5 white-font"> Our internet service uses antenaes and radio dishes to reach where no other service providers can. We use
                                industry-leading technology and cutting-edge ideas to bring you the best possible service at the best price.</p>
                      </div>
                        
                    </div>
                  </div>
            </div>
            </div>
        </section>
        <section class="section gray_1">
                <h1 class="title is-2" style="font-weight: 400;">Why Choose Delta Link.</h1>
                <div class="columns">
                    <div class="column has-text-centered gray_1"><br>
                        <i class="fa fa-bolt fa-4x white-" aria-hidden="true"></i>
                        <h2 class="title is-3 has-text-centered">Fast</h2>
                        <p class="subtitle white-">Our internet service has the lowest latency in the Delta, meaning websites and videos load faster.                      
                        </p>
                    </div>
                    <div class="column has-text-centered gray_1 "><br>
                        <i class="fa fa-handshake-o fa-4x" aria-hidden="true"></i>
                        <h2 class="title is-3 has-text-centered">Reliable</h2>
                        <p class="subtitle white-">Satelite internet can go down in bad weather.<br> Ours doesn't mind the rain.</p>
                    </div>
                    <div class="column has-text-centered gray_1"><br>
                        <i class="fa fa-usd fa-4x white-" aria-hidden="true"></i>
                        <h2 class="title is-3 has-text-centered">Affordable</h2>
                        <p class="subtitle has-text-centered">Our internet service breaks speed limits.<br>Without breaking the bank.</p>
                    </div>
                </div>
        </section>
        <section class="section blue">
            <div class="columns">
            <div class="column is-1 is-hidden-touch"></div>
                <div class="column is-4">
                  <div class="has-text-centered">
                    <img class="image"src="images/map-coverage.PNG" alt="Coverage Map" style="width: 400px;">
                  </div>
                </div>
              <div class="column">
                <h1 class="title is-2 white-font" style="font-weight: 400;">Our Coverage Area</h1>
                <p class="subtitle is-5 white-font">Currently, we cover several parts of Bolivar and Sunflower county, and we are constantly expanding.</p>
                <a class="button is-outlined is-white" href="coverage.php">See if You're Covered</a>
              </div>
        </div>
        </section>
    </main>
    <?php include("footer.inc");?>
</body>
<script>
window.onload = function() {
    that = document.getElementById('first-banner');
    that.classList.add('first-banner');
};
</script>
</html>