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
    <div class="card border-warning mb-3 mt-5" style="max-width: 35rem;">
      <div class="card-header text-center bg-info text-white"><h1 class="card-title">1. NTH LINE OF A TEXT FILE</h1></div>
        <div class="card-body">
          <h3 class="card-text">

            <?php
              function fileLine($filename, $lineNumber){
                $file1 = fopen($filename, 'r');
                $file2 = file($filename);
                echo $file2[$lineNumber - 1];
                fclose($file1);
              }
              
              fileLine("text.txt", 6);
            ?>

          </h3>
        </div>
      
    </div>
  </div>
</body>
</html>