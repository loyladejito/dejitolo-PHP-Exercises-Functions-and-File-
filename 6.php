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
            <form method="POST">
              <label><b style="font-size: 18px">Enter a number: </b></label>
                <input type="text" name="number" value ="<?php ?>"><br>
                <input type="submit" name="submit" value="Submit" class="btn btn-primary" style="font-size: 18px"><br><hr>
                  
                  <?php  
                    if(isset($_POST['submit'])){
                      $num = $_POST['number'];
                      $primeNum = 0;
                     
                      for($number = 2; $number < $num; $number++){
                        $primeNum = 0;

			                  if(($num % $number)==0){
			                    break;	
                        }
                        
                        $primeNum = 1;
                      }	

                      if($primeNum == 1){
			                  echo "$num is a Prime Number";
                      }else{
			                  echo "$num is not a Prime number";	
                      }
                    }
                  ?> 

          </h3>
        </div>
      
    </div>
  </div>
</body>
</html>