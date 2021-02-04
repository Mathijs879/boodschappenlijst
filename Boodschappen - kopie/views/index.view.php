<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/boodschappen.css">
    <title>Boodschappenlijst</title>
</head>
<body>
<h1>Boodschappenlijst</h1>
    <table>
        <tr>
            <th>Product</th>
            <th>Prijs</th>
            <th>Aantal</th>
            <th>Subtotaal</th>
        </tr>
        <?php
            foreach($groceries as $grocery) {
                echo "<tr>
                    <td>".$grocery->name."</td>
                    <td>".$grocery->price."</td>
                    <td>".$grocery->number."</td>
                    <td>".$grocery->getSubTotal()."</td>
                </tr>";
            } 

            
        ?>
        <tr>
            <td colspan="3">Totaal</td>
            <td><?php echo $total ?></td>
        </tr>
    </table>


</body>
</html>