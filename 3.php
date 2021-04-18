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
    <div class="card border-primary mb-3 mt-5 " style="max-width: 35rem;">
      <div class="card-header bg-dark"><h1 class="card-title">3. READ FILE AND DISPLAY LINE</h1></div>
        <div class="card-body text-dark">
          <h3 class="card-text text-center">

            <?php
              function randomLiner($fileName){
                $file =file($fileName);
                $fileName = strtolower(substr($fileName, 0, strpos($fileName,'.')));
                $matchLetter =  preg_match_all('/[aeiou]/i',$fileName,$matches);
                
                if($matchLetter % 2 == 0){
                  echo $file[5-1];
                }else if ($matchLetter % 2 != 0){      
                  echo $file[2-1];
                }else{
                  echo "No file exist";
                }
              }

              randomLiner('text.txt');
            ?>

          </h3>
        </div>

    </div>
  </div>
</body>
</html>