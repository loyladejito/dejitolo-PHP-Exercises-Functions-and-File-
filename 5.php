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
      <div class="card-header text-center bg-info text-white"><h1 class="card-title">5. CALCULATE FACTORIAL OF A NUMBER</h1></div>
        <div class="card-body">
          <h3 class="card-text">
            <form method="POST">
              <label><b style="font-size: 18px">Enter a number: </b></label>
                <input type="text" name="number" value =""><br>
                <input type="submit" name="submit" value="Submit" class="btn btn-primary" style="font-size: 18px"><br><hr>
                 
                 <?php
                    function Factorial($number){
                      $factorial = 1;

                      for ($i = 1; $i <= $number; $i++){
                        $factorial =$factorial * $i;
                      }

                    return $factorial; 
                    }

                    if(isset($_POST['number'])){
                      $number = $_POST['number'];
                      
                      if ($number >= 0){
                        echo '<br>'. '<h5> The factorial of the number <b style= "color: magenta;">'. $number .
                        '</b> is <b style= "color: magenta;">' . Factorial($number) . '</b></h5>';
                      }else
                        echo "<br><h5><b style= 'color: magenta;'>" . (abs($_POST['number']) . "</b> is an absolute number of <b style= 'color: magenta;''> $number</b>");
                    }
                  ?>
           
            </form>
          </h3>
        </div>
      
    </div>
  </div>
</body>
</html>