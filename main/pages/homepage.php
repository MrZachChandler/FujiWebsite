<!DOCTYPE HTML>
<HTML>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fuji Sushi Bar | Auburn AL</title>

    <!--build:css css/main.min.css-->
    <link rel="stylesheet" href="../../bower_components/normalize-css/normalize.css">
    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/nav.css" type="text/css">
    <link rel="stylesheet" href="../css/homepage.css" type="text/css">
    <!--endbuild-->

    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>

  </head>
  <body>

    <?php include '../includes/nav.php' ?>

    <section class="jumbo"></section>

    <section class="specials-etc">
      <div class="container-fluid">
        <div class="row gutter-10">
          <div class="col-md-12">
            <div class="whats-new">
              <h1>What&apos;s New</h1>
              <hr />
              <p>Sushami Rolls with a hint of sashami.</p>
            </div>
          </div>
        </div>
        <div class="row gutter-10">
          <div class="col-md-4">
            <div class="call-to-action" id="dine-in">
              <h1 class="text-center">Dine In</h1>
              <hr />
              <p>No reservations needed for groups under 10.</p>
              <a href="" class="btn btn-default">Location</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="call-to-action">
              <h1 class="text-center">Pick Up</h1>
              <hr />
              <p>
                Give us a call and we&apos;ll have it ready in 15 minutes.
              </p>
              <a href="tel:334-887-7766" class="btn btn-default">Call now</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="call-to-action" id="delivery">
              <h1 class="text-center">Delivery</h1>
              <hr />
              <p>We&apos;ve partnered with Tiger Town to Go. (Delivery Prices may vary)</p>
              <a href="https://www.tigertowntogo.com/r/656/restaurants/delivery/Japanese/Fuji-Sushi-Auburn" class="btn btn-default">Order Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="contact">
      <div class="container-fluid">
        <div class="row contact-row">
          <div class="col-md-6 map-col">
            <div id="fuji-panel">
              <h1>Fuji Sushi Bar</h1>
              <h5 id="address"></h5>
              <div class="row rating-row">
                <div class="col-lg-2">
                  <p id="google-rating"></p>
                </div>
                <div class="col-lg-6">
                  <div class="star-ratings-css">
                    <div class="star-ratings-css-top">
                      <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <p><span id="number-reviews"></span> reviews</p>
                </div>
              </div>
            </div>
            <div id="map"></div>
          </div>
          <div class="col-md-6 contact-col">
            <div class="contact-container">
              <h1>Quick Info</h1>
              <hr />
              <h5>Hours</h5>
              <p>
                <span>Monday-Thursday</span> 11:00am to 2:30pm and 4:30pm to 10:00pm
              </p>
              <p>
                <span>Friday</span> 11:00am to 2:30pm and 4:30pm to 11:00pm
              </p>
              <p>
                <span>Saturday-Sunday</span> 12:00pm to 10:00pm
              </p>
              <hr />
              <h5>Address</h5>
              <div class="row">
                <div class="col-lg-9">
                  <p>1499 S College St, Auburn, AL 36832</p>
                </div>
                <div class="col-lg-3">
                  <a href="https://www.google.com/maps/dir//32.5793295,-85.4958647/@32.57933,-85.495865,16z?hl=en-US" class="btn btn-primary">Map It!</a>
                </div>
              </div>
              <hr />
              <h5>Phone</h5>
              <div class="row">
                <div class="col-lg-9">
                  <p>(334) 887 7766</p>
                </div>
                <div class="col-lg-3">
                  <a href="tel:334-887-7766" class="btn btn-primary">Call</a>
                </div>
              </div>
            </div>
          </div>


        </section>

        <!--build:js /js/main.min.js -->

        <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../js/homepage.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfn2aFd3KwmE6NQ13H7lcuCv0JMRDqoIU&libraries=places&callback=initMap"></script>
        <!-- endbuild -->
      </body>

    </HTML>
