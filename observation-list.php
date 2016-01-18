
<!DOCTYPE html>
<html lang="en">
<head>
        <title>Beehive Prototype Home</title>
        <meta charset="UTF-8">
        <meta name="author" content="Morgan Freeman">
</head>
<body>
    <table>
        <?php foreach ($bsList as $row): ?>
            <tr>
                <td><?php echo $row['hive_name']; ?></td>
                <td><?php echo $row['collection_date']; ?></td>
                <td><?php echo $row['sample_period']; ?></td>
                <td><?php echo $row['mite_count']; ?></td>
            
            </tr>;
        <?php endforeach; ?>
    </table>
  
</body>
</html>


