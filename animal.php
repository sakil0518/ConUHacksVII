<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Generator</title>

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" //
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Welcome to Password
        Generator</h1>

    <div class="animal">
        <img src="https://cdn.pixabay.com/photo/2022/01/20/15/37/monkey-6952641_1280.jpg">
    </div>
    <div class="button">
        <button type="button" class="btn btn-outline-success">Generate</button>
    </div>

    <form method=POST>
        <div>
            <p style="text-align: center; margin-top: 1%; font-family: 'Montserrat';">Please enter the name of the
                animal in the following image
            </p>
            <input type="text" name="animal" id="animalname">
            
            <?php
              $key1 = rand (0, 11);
              switch($key1){
                case 0:
                  echo "<img src = \"img/animal/0.jpg\" width =\"400\" height = \"400\"\">";
                  break;
                case 1:
                  echo "<img src = \"img/animal/1.jpg\" width =\"400\" height = \"400\"\">";
                  break;
                case 2:
                  echo "<img src = \"img/animal/2.jpg\" width =\"400\" height = \"400\"\">";
                  break;
                case 3:
                  echo "<img src = \"img/animal/3.jpg\" width =\"400\" height = \"400\"\">";
                  break;
                case 4:
                  echo "<img src = \"img/animal/4.jpg\" width =\"400\" height = \"400\"\">";
                  break;
                case 5:
                  echo "<img src = \"img/animal/5.jpg\" width =\"400\" height = \"400\"\">";
                  break;
                case 6:
                  echo "<img src = \"img/animal/6.jpg\" width =\"400\" height = \"400\"\">";
                  break;
                case 7:
                  echo "<img src = \"img/animal/7.jpg\" width =\"400\" height = \"400\"\">";
                  break;
                case 8:
                  echo "<img src = \"img/animal/8.jpg\" width =\"400\" height = \"400\"\">";
                  break;
                case 9:
                  echo "<img src = \"img/animal/9.jpg\" width =\"400\" height = \"400\"\">";
                  break;
                case 10:
                  echo "<img src = \"img/animal/10.jpg\" width =\"400\" height = \"400\"\">";
                  break;
                case 11:
                  echo "<img src = \"img/animal/11.jpg\" width =\"400\" height = \"400\"\">";
                  break;
              }
              echo "<br/>"
             ?>
            <input type=text />

        </div>

</body>

</html>