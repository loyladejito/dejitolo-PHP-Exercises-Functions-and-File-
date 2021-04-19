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
    <div class="card border-dark mb-3 mt-5 " style="max-width: 35rem;">
      <div class="card-header bg-dark"><h1 class="card-title">6. CHECK PRIME NUMBER</h1></div>
        <div class="card-body text-dark">
          <h3 class="card-text text-center">
                  
                  <?php  
                    function checkPrime($num){
                      for($x = 2; $x < $num; $x++){
                        if($num % $x ==0){
                          return 0;
                        }
                      }
                      return $num;
                    }
                    
                    $n = checkPrime(31);
                    if ($n == 0)   
                    echo  "$n is not a Prime Number.\n";
                    else
                    echo  "$n is a Prime Number.\n";
                  ?> 
		  
          </h3>
        </div>
      
    </div>
  </div>
</body>
</html>
