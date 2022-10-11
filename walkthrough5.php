<!--Student name : Binye Liu-->
<!--Student id : 101370671-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab5 Walkthrough</title>
</head>
<body>
    <form method="GET">
        Enter your user id: <input type="text" name="userid">
        <input type="submit">
    </form>
    <?php
        // Practice with our header() function
        $userid = filter_input(INPUT_GET,"username",FILTER_SANITIZE_INT);
        echo $userid;
        if($userid > 100){
//            header("Location:https://www.google.com/?userid=$userid");
            header("Location:./strating.php/?userid=$userid");
        }
    ?>
</body>
</html>