<?php

                try{
                //instantiate a database ]
                $hostname='localhost';
                $database_name= 'sassie_bee';
                $username= 'sassie_bees';
                $password='Dancers1';
                $db = new PDO("mysql:host=$hostname;dbname=$database_name",
                              $username, $password);
                 echo 'Connected to database';
                }
                catch(PDOException $e)
                {
                    echo $e->getMessage();
                    
                }
	
        // make mode available
        include 'model/beesampleModel.php';
        
        // create an instance
        $bsModel = new BeesampleModel($db);
        
        //get the list of beesamples
        
        $bsList = $bsModel->getAllObservation();
        
        //showing the view
        include 'view/observation-list.php';
        
        // close database connection
        $db= null;
        
        


?>