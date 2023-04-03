<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 2-Soal 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="container">
    <form action="" method="post">
        <div class="mb-3"> 
            <label for="name1" class="form-label">Nama 1</label>
            <input type="text" id="name1" name="name1">
        </div>

        <div class="mb-3"> 
            <label for="name2" class="form-label">Nama 2</label>
            <input type="text" id="name2" name="name2">
        </div>

        <div class="mb-3"> 
            <label for="name3" class="form-label">Nama 3</label>
            <input type="text" id="name3" name="name3">
        </div>

        <div class="mb-3"> 
            <button type="urutkan" class="btn btn-primary">Urutkan</button>
        </div>
    </form>

    <?php   
        if(isset($_POST['name1']) && isset($_POST['name2']) && isset($_POST['name3'])){
            $arrName = array($_POST['name1'], $_POST['name2'], $_POST['name3']);
            echo "<h2>Output</h2>";
            if($arrName[0] < $arrName[1] && $arrName[0] < $arrName[2]){
                if($arrName[1] < $arrName[2]){
                    echo $arrName[0] . "<br>";
                    echo $arrName[1] . "<br>";
                    echo $arrName[2] . "<br>";
                }else{
                    echo $arrName[0] . "<br>";
                    echo $arrName[2] . "<br>";
                    echo $arrName[1] . "<br>";
                }
            }else if($arrName[1] < $arrName[0] && $arrName[1] < $arrName[2]){
                if($arrName[0] < $arrName[2]){
                    echo $arrName[1] . "<br>";
                    echo $arrName[0] . "<br>";
                    echo $arrName[2] . "<br>";
                }else{
                    echo $arrName[1] . "<br>";
                    echo $arrName[2] . "<br>";
                    echo $arrName[0] . "<br>";
                }
            }else{
                if($arrName[0] < $arrName[1]){
                    echo $arrName[2] . "<br>";
                    echo $arrName[0] . "<br>";
                    echo $arrName[1] . "<br>";
                }else{
                    echo $arrName[2] . "<br>";
                    echo $arrName[1] . "<br>";
                    echo $arrName[0] . "<br>";
                }
            }
        }
    ?>