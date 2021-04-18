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
  <div class="container d-flex justify-content-center text-center">
    <div class="card border-primary mb-3 mt-5" style="max-width: 35rem;">
      <div class="card-header text-center bg-info text-white"><h1 class="card-title">4. TEST LOYALTY OF A NAME</h1></div>
        <div class="card-body">
          <h3 class="card-text">

            <?php
              function testLoyalty($name){
                $matchLetter =  preg_match_all('/[ean]/i',$name,$matches);
                $prod = $matchLetter * (strlen($name));

                if(($matchLetter >= 3) and ($prod % 6 == 0)){
                  echo '<br><br>';
                  echo $name." <==  "."Loyal";
                }else{   
                  echo $name." <== "."Di sure";
                }
              }

              testLoyalty("VICTORIANO");       
              testLoyalty("ELEASSARR");
            ?>
            
          </h3>
        </div>
      
    </div>
  </div>
</body>
</html>