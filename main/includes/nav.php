<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../pages/homepage.php"><img src="../img/FujiLogoTransparentBG.png" alt="Dispute Bills">
      </a>
    </div>
    <div id="navbar3" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="../pages/menu.php">Menu</a></li>
        <li><a href="../pages/location.php">Location</a></li>
        <li><a href="#">Employment</a></li>
        <!-- <div id="sign"><div class="message" id="Open"><span class="Neon" id="N">O</span><span class="Neon" id="E">P</span><span class="Neon" id="O">E</span><span class="Neon" id="N2">N</span></div></div>         -->
      </ul>
      <div class="nav navbar-nav navbar-right">
        <div class="open">

          <p><i class="fa fa-circle" aria-hidden="true"></i>Open Now | </p>
        </div>
        <div class="closed">
          <p><i class="fa fa-circle" aria-hidden="true"></i>Closed | </p>
        </div>
      </div>
    </div>
    <!--/.nav-collapse -->
  </div>
  <!--/.container-fluid -->
  <script>
  //for displaying whether the restaurant is open or closed.
  // getDay() returns 0-6 for the day with 0 as sunday
  var d = new Date();
  var day = d.getDay();
  var time = d.getHours() + d.getMinutes() / 100;

  // monday through thursday
  if (day >= 1 && day <= 4) {
    if (time >= 11 && time <= 14.30) {
      $(".open").show();
      $(".closed").hide();

      // $("#Open").removeClass("off"); $("#sign").removeClass("off");
    }
    else if (time >= 16.30 && time <= 22) {
      $(".open").show();
      $(".closed").hide();

      // $("#Open").removeClass("off"); $("#sign").removeClass("off");
    }
    else {
      $(".open").hide();
      $(".closed").show();

      // $("#Open").addClass("off"); $("#sign").addClass("off");
    }
  }
  // friday
  else if (day === 5) {
    if (time >= 11 && time <= 14.30) {
      $(".open").show();
      $(".closed").hide();

      // $("#Open").removeClass("off"); $("#sign").removeClass("off");
    }
    else if (time >= 16.30 && time <= 23) {
      $(".open").show();
      $(".closed").hide();

      // $("#Open").removeClass("off"); $("#sign").removeClass("off");
    }
    else {
      $(".open").hide();
      $(".closed").show();

      // $("#Open").addClass("off"); $("#sign").addClass("off");
    }
  }
  // sunday and saturday
  else {
    if (time >= 12 && time <= 22) {
      $(".open").show();
      $(".closed").hide();

      // $("#Open").removeClass("off"); $("#sign").removeClass("off");
    }
    else {
      $(".open").hide();
      $(".closed").show();

      //$("#Open").addClass("off"); $("#sign").addClass("off");
    }
  }
</script>
</nav>
