<?php
try{
    //instantiate a database ]
    $hostname='localhost';
    $database_name= 'sassie_bee';
    $username= 'sassie_bees';
    $password='Dancers1';
   $dbh = new PDO("mysql:host=$hostname;dbname=$database_name",
                  $username, $password);
   echo 'Connected to database';
}
catch(PDOException $e)
    {
        echo $e->getMessage();
        
    }
 
 echo $_POST['hive_id'];
 echo $_POST['collection_date'];
 echo $_POST['sample_period'];
 echo $_POST['mite_count'];
 
 
 $query= "INSERT INTO bee_samples( hive_id, collection_date,sample_period, mite_count)
            VALUES(:hive_id, :collection_date, :sample_period, :mite_count)";
 //prepare statement
 $statement= $dbh->prepare($query);
 //bind parameters
 $statement->bindParam(':hive_id', $_POST['hive_id'], PDO::PARAM_STR);
  $statement->bindParam(':collection_date', $_POST['collection_date'], PDO::PARAM_STR);
   $statement->bindParam(':sample_period', $_POST['sample_period'], PDO::PARAM_INT);
    $statement->bindParam(':mite_count', $_POST['mite_count'], PDO::PARAM_INT);
    
    //excute
    $success= $statement->execute();
    if($success){
        echo "good job!!";
    }
   

?>