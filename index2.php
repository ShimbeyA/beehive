
<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Beehive Prototype Home</title>
  <meta charset="UTF-8">
  <!--<meta name="author" content="Scarlett Johansson">-->
</head>
 <body>

    <form action="connect.php" method="post">
    Hive Name: <input type="text" name="hive_id" value="<?php echo $hive_id;?>"><br><br>
    Observation date : <input type="text" name="collection_date" value="<?php echo $collection_date;?>">
    <br><br>
    Sample Period: <input type="text" name="sample_period" value="<?php echo $sample_period;?>"><br><br>
    Mite Count : <input type="text" name="mite_count" value="<?php echo $mite_count;?>"><br><br>

    <input type="submit">
    </form>

 </body>
</html>
