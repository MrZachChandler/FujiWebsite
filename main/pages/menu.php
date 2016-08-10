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
    <link rel="stylesheet" href="../css/menu.css" type="text/css">
    <!--endbuild-->

    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>

  </head>
  <body>
    <?php include '../includes/nav.php'?>

    <?php
    try {

      require_once('../includes/dbConnect.php');

      $stmt = $conn->prepare("SELECT * FROM Menu");
      $stmt->execute();
      //echo var_dump($stmt->fetch(PDO::FETCH_ASSOC));


      $results = array();

      while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        array_push($results, array(
          'id' => $row['id'],
          'title' => $row['title'],
          'description' => $row['description'],
          'price' => '$'.$row['price'],
          'category' => $row['category']
        ));
      }

      $lunchSpecials = array();
      $appetizers = array();
      $soupsSalads = array();
      $dinnerEntrees = array();
      $signatureDishes = array();
      $riceDishes = array();
      $nigiri = array();
      $sashimi = array();
      $sushiCombos = array();
      $smallRolls = array();
      $chefSpecialRolls = array();
      $sideDishes = array();
      $sushiRolls = array();
      $sweetTreats = array();
      $teriyakiCombos = array();
      $katsu = array();

      for ($i = 0; $i < count($results); $i++) {
        switch ($results[$i]['category']) {
          case 'Lunch Specials':
          array_push($lunchSpecials, array(
            'title' => $results[$i]['title'],
            'description' => $results[$i]['description'],
            'price' => $results[$i]['price'],
          ));
          break;
          case 'Appetizers':
          array_push($appetizers, array(
            'title' => $results[$i]['title'],
            'description' => $results[$i]['description'],
            'price' => $results[$i]['price'],
          ));
          break;
          case 'Soups and Salads':
          array_push($soupsSalads, array(
            'title' => $results[$i]['title'],
            'description' => $results[$i]['description'],
            'price' => $results[$i]['price'],
          ));
          break;
          case 'Dinner Entrees':
          array_push($dinnerEntrees, array(
            'title' => $results[$i]['title'],
            'description' => $results[$i]['description'],
            'price' => $results[$i]['price'],
          ));
          break;
          case 'Signature Dishes':
          array_push($signatureDishes, array(
            'title' => $results[$i]['title'],
            'description' => $results[$i]['description'],
            'price' => $results[$i]['price'],
          ));
          break;
          case 'Rice Dishes':
          array_push($riceDishes, array(
            'title' => $results[$i]['title'],
            'description' => $results[$i]['description'],
            'price' => $results[$i]['price'],
          ));
          break;
          case 'Nigiri':
          array_push($nigiri, array(
            'title' => $results[$i]['title'],
            'description' => $results[$i]['description'],
            'price' => $results[$i]['price'],
          ));
          break;
          case 'Sashimi':
          array_push($sashimi, array(
            'title' => $results[$i]['title'],
            'description' => $results[$i]['description'],
            'price' => $results[$i]['price'],
          ));
          break;
          case 'Sushi Combo':
          array_push($sushiCombos, array(
            'title' => $results[$i]['title'],
            'description' => $results[$i]['description'],
            'price' => $results[$i]['price'],
          ));
          break;
          case 'Small Rolls':
          array_push($smallRolls, array(
            'title' => $results[$i]['title'],
            'description' => $results[$i]['description'],
            'price' => $results[$i]['price'],
          ));
          break;
          case 'Chef Special Rolls':
          array_push($chefSpecialRolls, array(
            'title' => $results[$i]['title'],
            'description' => $results[$i]['description'],
            'price' => $results[$i]['price'],
          ));
          break;
          case 'Side Dishes':
          array_push($sideDishes, array(
            'title' => $results[$i]['title'],
            'description' => $results[$i]['description'],
            'price' => $results[$i]['price'],
          ));
          break;
          case 'Sushi Rolls':
          array_push($sushiRolls, array(
            'title' => $results[$i]['title'],
            'description' => $results[$i]['description'],
            'price' => $results[$i]['price'],
          ));
          break;
          case 'Sweet Treats':
          array_push($sweetTreats, array(
            'title' => $results[$i]['title'],
            'description' => $results[$i]['description'],
            'price' => $results[$i]['price'],
          ));
          break;
          case 'Teriyaki and Tempura Combinations':
          array_push($teriyakiCombos, array(
            'title' => $results[$i]['title'],
            'description' => $results[$i]['description'],
            'price' => $results[$i]['price'],
          ));
          break;
          case 'Katsu and Donburi Entrees':
          array_push($katsu, array(
            'title' => $results[$i]['title'],
            'description' => $results[$i]['description'],
            'price' => $results[$i]['price'],
          ));
          break;
        }
      }

      ?>

      <div class="container-fluid menu">
        <div class="row menu-row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                  <h4 class="glyphicon glyphicon-plane"></h4><br/>Lunch Specials
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-road"></h4><br/>Appetizers
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-home"></h4><br/>Soups and Salads
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-cutlery"></h4><br/>Dinner Entrees
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Signature Dishes
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Rice Dishes
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Nigiri
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Sashimi
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Sushi Combo
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Small Rolls
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Chef Special Rolls
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Side Dishes
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Sushi Rolls
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Sweet Treats
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Teriyaki and Tempura Combinations
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Katsu and Donburi Entrees
                </a>
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
              <!-- lunch specials section -->
              <div class="bhoechie-tab-content active">
                <h3>Lunch Specials</h3>
                <section class="menu-pic" id="lunch-specials-pic"></section>
                <ul class="list-group menu-items">
                  <?php
                    foreach($lunchSpecials as $lunchSpecial):
                   ?>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-9 title-col">
                          <h5 class="title"><?php echo $lunchSpecial['title'] ?></h5>
                      </div>
                      <div class="col-lg-3 price-col">
                          <h5 class="price"><?php echo $lunchSpecial['price'] ?></h5>
                      </div>
                    </div>
                    <p><?php echo $lunchSpecial['description'] ?></p>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <!-- appetizers section -->
              <div class="bhoechie-tab-content">
                <h3>Appetizers</h3>
                <section class="menu-pic" id="appetizers-pic"></section>
                <ul class="list-group menu-items">
                    <?php
                      foreach($appetizers as $appetizer):
                     ?>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-lg-9 title-col">
                            <h5 class="title"><?php echo $appetizer['title'] ?></h5>
                        </div>
                        <div class="col-lg-3 price-col">
                            <h5 class="price"><?php echo $appetizer['price'] ?></h5>
                        </div>
                      </div>
                      <p><?php echo $appetizer['description'] ?></p>
                    </li>
                    <?php endforeach; ?>
                  </ul>
              </div>
              <div class="bhoechie-tab-content">
                <h3>Soups and Salads</h3>
                <section class="menu-pic" id="soups-salads-pic"></section>
                <ul class="list-group menu-items">
                  <?php
                    foreach($soupsSalads as $soupSalad):
                   ?>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-9 title-col">
                          <h5 class="title"><?php echo $soupSalad['title'] ?></h5>
                      </div>
                      <div class="col-lg-3 price-col">
                          <h5 class="price"><?php echo $soupSalad['price'] ?></h5>
                      </div>
                    </div>
                    <p><?php echo $soupSalad['description'] ?></p>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="bhoechie-tab-content">
                <h3>Dinner Entrees</h3>
                <section class="menu-pic" id="dinner-entrees-pic"></section>
                <ul class="list-group menu-items">
                  <?php
                    foreach($dinnerEntrees as $dinnerEntree):
                   ?>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-9 title-col">
                          <h5 class="title"><?php echo $dinnerEntree['title'] ?></h5>
                      </div>
                      <div class="col-lg-3 price-col">
                          <h5 class="price"><?php echo $dinnerEntree['price'] ?></h5>
                      </div>
                    </div>
                    <p><?php echo $dinnerEntree['description'] ?></p>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="bhoechie-tab-content">
                <h3>Signature Dishes</h3>
                <section class="menu-pic" id="signature-dishes-pic"></section>
                <ul class="list-group menu-items">
                  <?php
                    foreach($signatureDishes as $signatureDish):
                   ?>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-9 title-col">
                          <h5 class="title"><?php echo $signatureDish['title'] ?></h5>
                      </div>
                      <div class="col-lg-3 price-col">
                          <h5 class="price"><?php echo $signatureDish['price'] ?></h5>
                      </div>
                    </div>
                    <p><?php echo $signatureDish['description'] ?></p>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="bhoechie-tab-content">
                <h3>Rice Dishes</h3>
                <section class="menu-pic" id="rice-dishes-pic"></section>
                <ul class="list-group menu-items">
                  <?php
                    foreach($riceDishes as $riceDish):
                   ?>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-9 title-col">
                          <h5 class="title"><?php echo $riceDish['title'] ?></h5>
                      </div>
                      <div class="col-lg-3 price-col">
                          <h5 class="price"><?php echo $riceDish['price'] ?></h5>
                      </div>
                    </div>
                    <p><?php echo $riceDish['description'] ?></p>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="bhoechie-tab-content">
                <h3>Nigiri</h3>
                <section class="menu-pic" id="nigiri-pic"></section>
                <ul class="list-group menu-items">
                  <?php
                    foreach($nigiri as $singleNigiri):
                   ?>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-9 title-col">
                          <h5 class="title"><?php echo $singleNigiri['title'] ?></h5>
                      </div>
                      <div class="col-lg-3 price-col">
                          <h5 class="price"><?php echo $singleNigiri['price'] ?></h5>
                      </div>
                    </div>
                    <p><?php echo $singleNigiri['description'] ?></p>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="bhoechie-tab-content">
                <h3>Sashimi</h3>
                <section class="menu-pic" id="sashimi-pic"></section>
                <ul class="list-group menu-items">
                  <?php
                    foreach($sashimi as $singleSashimi):
                   ?>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-9 title-col">
                          <h5 class="title"><?php echo $singleSashimi['title'] ?></h5>
                      </div>
                      <div class="col-lg-3 price-col">
                          <h5 class="price"><?php echo $singleSashimi['price'] ?></h5>
                      </div>
                    </div>
                    <p><?php echo $singleSashimi['description'] ?></p>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="bhoechie-tab-content">
                <h3>Sushi Combinations</h3>
                <section class="menu-pic" id="sushi-combos-pic"></section>
                <ul class="list-group menu-items">
                  <?php
                    foreach($sushiCombos as $sushiCombo):
                   ?>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-9 title-col">
                          <h5 class="title"><?php echo $sushiCombo['title'] ?></h5>
                      </div>
                      <div class="col-lg-3 price-col">
                          <h5 class="price"><?php echo $sushiCombo['price'] ?></h5>
                      </div>
                    </div>
                    <p><?php echo $sushiCombo['description'] ?></p>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="bhoechie-tab-content">
                <h3>Small Rolls</h3>
                <section class="menu-pic" id="small-rolls-pic"></section>
                <ul class="list-group menu-items">
                  <?php
                    foreach($smallRolls as $smallRoll):
                   ?>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-9 title-col">
                          <h5 class="title"><?php echo $smallRoll['title'] ?></h5>
                      </div>
                      <div class="col-lg-3 price-col">
                          <h5 class="price"><?php echo $smallRoll['price'] ?></h5>
                      </div>
                    </div>
                    <p><?php echo $smallRoll['description'] ?></p>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="bhoechie-tab-content">
                <h3>Chef Special Rolls</h3>
                <section class="menu-pic" id="chef-special-rolls-pic"></section>
                <ul class="list-group menu-items">
                  <?php
                    foreach($chefSpecialRolls as $chefSpecialRoll):
                   ?>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-9 title-col">
                          <h5 class="title"><?php echo $chefSpecialRoll['title'] ?></h5>
                      </div>
                      <div class="col-lg-3 price-col">
                          <h5 class="price"><?php echo $chefSpecialRoll['price'] ?></h5>
                      </div>
                    </div>
                    <p><?php echo $chefSpecialRoll['description'] ?></p>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="bhoechie-tab-content">
                <h3>Side Dishes</h3>
                <section class="menu-pic" id="side-dishes-pic"></section>
                <ul class="list-group menu-items">
                  <?php
                    foreach($sideDishes as $sideDish):
                   ?>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-9 title-col">
                          <h5 class="title"><?php echo $sideDish['title'] ?></h5>
                      </div>
                      <div class="col-lg-3 price-col">
                          <h5 class="price"><?php echo $sideDish['price'] ?></h5>
                      </div>
                    </div>
                    <p><?php echo $sideDish['description'] ?></p>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="bhoechie-tab-content">
                <h3>Sushi Rolls</h3>
                <section class="menu-pic" id="sushi-rolls-pic"></section>
                <ul class="list-group menu-items">
                  <?php
                    foreach($sushiRolls as $sushiRoll):
                   ?>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-9 title-col">
                          <h5 class="title"><?php echo $sushiRoll['title'] ?></h5>
                      </div>
                      <div class="col-lg-3 price-col">
                          <h5 class="price"><?php echo $sushiRoll['price'] ?></h5>
                      </div>
                    </div>
                    <p><?php echo $sushiRoll['description'] ?></p>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="bhoechie-tab-content">
                <h3>Sweet Treats</h3>
                <section class="menu-pic" id="sweet-treats-pic"></section>
                <ul class="list-group menu-items">
                  <?php
                    foreach($sweetTreats as $sweetTreat):
                   ?>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-9 title-col">
                          <h5 class="title"><?php echo $sweetTreat['title'] ?></h5>
                      </div>
                      <div class="col-lg-3 price-col">
                          <h5 class="price"><?php echo $sweetTreat['price'] ?></h5>
                      </div>
                    </div>
                    <p><?php echo $sweetTreat['description'] ?></p>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="bhoechie-tab-content">
                <h3>Teriyaki and Tempura Combinations</h3>
                <section class="menu-pic" id="teriyaki-combos-pic"></section>
                <ul class="list-group menu-items">
                  <?php
                    foreach($teriyakiCombos as $teriyakiCombo):
                   ?>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-9 title-col">
                          <h5 class="title"><?php echo $teriyakiCombo['title'] ?></h5>
                      </div>
                      <div class="col-lg-3 price-col">
                          <h5 class="price"><?php echo $teriyakiCombo['price'] ?></h5>
                      </div>
                    </div>
                    <p><?php echo $teriyakiCombo['description'] ?></p>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="bhoechie-tab-content">
                <h3>Katsu and Donburi Entrees</h3>
                <section class="menu-pic" id="katsu-pic"></section>
                <ul class="list-group menu-items">
                  <?php
                    foreach($katsu as $singleKatsu):
                   ?>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-9 title-col">
                          <h5 class="title"><?php echo $singleKatsu['title'] ?></h5>
                      </div>
                      <div class="col-lg-3 price-col">
                          <h5 class="price"><?php echo $singleKatsu['price'] ?></h5>
                      </div>
                    </div>
                    <p><?php echo $singleKatsu['description'] ?></p>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
  }
  catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
  }

  ?>

  <!--build:js /js/main.min.js -->
  <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../js/menu.js"></script>
  <!-- endbuild -->
</body>

</HTML>
