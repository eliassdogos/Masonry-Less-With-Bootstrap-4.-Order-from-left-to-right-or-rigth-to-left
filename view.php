<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Title of the document</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>


  <div class="container">
    <div class="row bg-info mt-4">
      <h1>
GRID DIRECTIONS WITHOUT JSCRIPT OR MASONRY</h1>
    </div>
  </div>
  <hr />
  <div class="container">
    <div class="row">
      <h3>Normal Echo Loop from left to right with col-4 bootstrap divs</h3>

      <?php for ($x=0; $x<=10;$x++) {
    ?>
      <div class="col-4 mx-4 my-2">
        WhatEver Content number
        <strong>  <?=$x; ?></strong>
      </div>
      <?php
}  ?>
    </div>
  </div>
  <hr />



  <div class="container">
    <div class="row">
      <h3>Same variables With right to left direction with col-4 bootstrap divs<br/>First Column => evens Element id <br />Second Column odd Element Id</h3>


      <?php  // if ($x % 2 == 0) { //code }
        ?>




      <div class="row  col-6">
        <?php  for ($x=0; $x<=10;$x++) {
            if ($x % 2 != 0) {
                ?>

        <div class="col-12 bg-warning my-2 ">
          Content Number <strong><?=$x?></strong><br />
        </div>

        <?php
            }
        }?>
      </div>

      <div class="row  col-6">

        <?php  for ($x=0; $x<=10;$x++) {
            if ($x % 2 == 0) {
                ?>

        <div class="col-12 bg-primary my-2 ">
          Content Number <strong><?=$x?></strong><br />
        </div>

        <?php
            }
        }?>
      </div>


    </div>

  </div>

<hr />

  <div class="container">
    <div class="row">
            <h3>Same variables With top to bottom from left to right direction with col-4 bootstrap divs<br/><br/></h3>

<?php $totalelements=13; $elements_first=round($totalelements/2);$elements_second=$totalelements-$elements_first;
echo $elements_first."<br />";
echo $elements_second."<br />";
//2 columns?>


      <div class="row  col-6">
        <?php  for ($x=0; $x<=$elements_first;$x++) {
    ?>

        <div class="col-12 bg-warning my-2 ">
          Content Number <strong><?=$x?></strong><br />
        </div>

        <?php
}?>

      </div>

      <div class="row  col-6">

        <?php  for ($x=$elements_first+1; $x<=$totalelements;$x++) {
        ?>
        <div class="col-12 bg-primary my-2 ">
          Content Number <strong><?=$x?></strong><br />
        </div>

        <?php
    }?>

      </div>

    </div>
    </div>






</body>

</html>