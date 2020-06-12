<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


  </head>

<body>
  <ul>
    <div class="container-fluid">
    <?php
    $data = file_get_contents("https://api.thecatapi.com/v1/breeds?limit=10");
    $dataj = json_decode($data);
    ?>
    <?php foreach ($dataj as $i => $value) : ?>
      <?php
      $urlstring = "https://api.thecatapi.com/v1/images/search?breed_id=" . $dataj[$i]->id;
      $cats = json_decode(file_get_contents($urlstring));
      ?>
        
        <a href="<?php echo "/breed.php?name=" . $cats[0]->breeds[0]->name; ?>">
          <div>
            <?php echo $dataj[$i]->name; ?>
            <br>
            <img src="<?php echo $cats[0]->url ?>" width="100" , height="100" , box-shadow="3px #fffer"> </img> <br>
          </div>
        </div>
    </div>
      </a>
      <!-- <a href="<?php echo "/breed.php?name=" . $cats[0]->breeds[0]->name; ?>">
      
      <img src="<?php echo $cats[0]->url ?>" width="100" , height="100"" class="d-block w-100" alt="...">

      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">

          </div>
          
        </div>
      </div>
      </a> -->

    <?php endforeach ?>
  </ul>
</body>

</html>