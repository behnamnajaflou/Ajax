<?php
include 'db.php';
$counter = $_POST['newCounter'];
$query = "select * from post limit $counter";
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
