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
    <div class="card border-light mb-3 mt-5" style="max-width: 35rem;">
      <div class="card-header text-center bg-success text-white"><h1 class="card-title">2. APPEND A LINE IN A FILE</h1></div>
        <div class="card-body">
          <p class="card-text">

            <?php
              function appendLine($filename){

                if (file_exists($filename)){
                  echo "<h3>File Opened!</h3><br>";
                  echo "<p>Please see 'text.txt' file to see change appended text</p>";
                  echo "<i style='font-family: fantasy;'>'I appended some texts.' </i>";

                  $file = fopen($filename, "a");
                  fwrite($file, " I appended some texts.");
                  fclose($file);
                }
              }

              appendLine("text.txt")
            ?>

          </p>
        </div>
      
    </div>
  </div>
</body>
</html>