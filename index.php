<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax</title>
</head>
<body>
    <div id="content">
        <?php
        include 'db.php';
        $query = "select * from post limit 2";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)){
                echo "<p>";
                echo $row['title'];
                echo "<br>";
                echo $row['description'];
                echo "</p>";
            }
        }else{
            echo "there is no any record";
        }
        ?>
        <button id="btn">More..</button>
    </div>
</body>
</html>
