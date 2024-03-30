<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="POST">
            <input type="text" name="name">
            <input type="password" name="password">
            <input type="password" name="password_confirmation">
            <input type="submit">
        </form>
    </div>
    <?php
    if(isset($_POST["name"])&& isset($_POST["password"])&& isset($_POST["password_confirmation"])){
        $name = $_POST ['name'];
        $password = $_POST ['password'];
        $cPassword = $_POST ['password_confirmation'];
        if($password==$cPassword){
            echo $name . " თქვენ წარმატებით დარეგისტრირდით";
        } else {
            echo $name . " პაროლი და მისი
            კონფირმაცია არასწორია";
        }

    }


    ?>
</body>
</html>