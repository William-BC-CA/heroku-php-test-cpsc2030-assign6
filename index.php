<?php 
  $my_name = "William Chan";
  $description = "I use computers.";
  $favourite_animals = ["cheetahs", "fish", "rhinos", "cougars"];

  function the_developer_profile(){
    echo "<div>";

    global $my_name;
    global $description;
    global $favourite_animals;

    echo "<h2>Developer Profile: $my_name</h2>";
    echo "<p>Description: $description</p>";
    // echo "<p>His favourite animals are " . $favourite_animals . "</p>";
    echo "<p>His favourite animals are ";
    // https://www.w3schools.com/php/php_looping_foreach.asp
    $counter = 0;
    foreach ($favourite_animals as $animals){
      if ($counter == count($favourite_animals) - 1){
        echo "and $animals.</p>";
      }
      else {
        echo "$animals, ";
      }
      $counter++; // https://www.php.net/manual/en/language.operators.increment.php
    }
    echo "</div>";
  }

  function the_color_form(){
    echo "<div class = 'page-color'>";
    echo "<form method = 'POST' action = 'a6.php'>";
    echo "<input type = 'color' name = 'lecolor'>";
    echo "Which color do you prefer for the text of this page? <input type = 'submit'></input>";
    echo "</form>";
    echo "</div>";
    // $couleur = $_POST['lecolor'];
  }

  function get_color(){
    if (isset($_POST['lecolor'])){
      echo $_POST['lecolor'];
    }
    else {
      return "black";
    }
  }
?>
<!DOCTYPE html>
<html style="color: <?php get_color();?>">
  <head>
    <meta charset="utf-8">
    <title>Assigment 6: Hello PHP World!</title>

    <!--<link rel="stylesheet" href="style.css">-->
    <!--<link rel="stylesheet" href="icomoon/style.css">-->

  </head>
  <body>

    <header>
        <h1>Hello PHP World!</h1>
        <div class="subtitle">
          An Introduction to Server-Side Scripting.
        </div>

        <?php
          the_developer_profile();
          the_color_form();
        ?>

    </header>

    <main>
    
    </main>

  </body>
</html>
