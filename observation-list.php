
<!DOCTYPE html>
<html lang="en">
<head>
        <title>Beehive Prototype Home</title>
        <meta charset="UTF-8">
        <meta name="author" content="Morgan Freeman">
         
	    
</head>
<body>
     <link href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.css"
          rel="stylesheet">
    <table id="example" align="center" cellspacing="3" cellpadding="3" width = "100%">
		
        <tr>
          <th>Hive name </th>
          <th>Collection date</th>
          <th>Sample period</th>
          <th>Mite count</th>
        </tr>
        
        
        <?php
        foreach ($bsList as $row){
            
           echo '<tr>';
           
              echo ' <td>', $row['hive_id'],'</td>';
              echo ' <td>', $row['collection_date'],'</td>';
              echo ' <td>', $row['sample_period'],'</td>';
              echo ' <td>', $row['mite_count'],'</td>';
                
            echo '</tr>';
        }
         ?>
    </table>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
    <script src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    
	
			  <script>
			      $("#btnHide").click(function()
				    {
					  $("tr").hide();
					  $(this).hide();
					 // $("#showButton").show();
				    });
				  
				  $('#example').DataTable();
				  
			  </script>	

  
</body>
</html>


