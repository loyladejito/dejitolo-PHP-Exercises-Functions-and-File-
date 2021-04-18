<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>

  <div class="container d-flex justify-content-center text-white text-center">
    <div class="card border-dark mb-3 mt-5" style="max-width: 35rem;">
      <div class="card-header bg-dark"><h1 class="card-title">7. REVERSE A STRING</h1></div>
        <div class="card-body text-dark">
          <h3 class="card-text text-center">

            <?php
              function reverseHalf($str){
                if (strlen($str) % 2 == 0){
                  echo "<h5>" . $str . "&nbsp;&nbsp; ==> &nbsp;&nbsp;' " . strrev(substr($str, -3, strlen($str) / 2)) . " '</h5>";
                }else{
                  echo "<h5>" . $str . "&nbsp;&nbsp;&nbsp; ==> &nbsp;&nbsp; ' " . strrev($str) . " '</h5><br>";
                }
              }
            
              reverseHalf("Paolul"); 
              reverseHalf("Billy");
            ?>
            
          </h3>
        </div>
      
    </div>
  </div>
</body>
</html>