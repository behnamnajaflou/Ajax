<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
            crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function (){
            var counter = 2;
            $("button").click(function (){
                counter = counter + 2 ;
                $("#content").load("more.php", {
                    newCounter : counter
                })
            });
        })
    </script>
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
    </div>
    <button>More..</button>
</body>
</html>
