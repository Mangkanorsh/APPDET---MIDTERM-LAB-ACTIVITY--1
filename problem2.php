<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deans List Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <?php
    // Sample Students data for the table
        $students = array(
            array("LOPEZ, Norsh Daniel Francois", 1.5),
            array("BACOD, Christian", 1.25),
            array("DELA CRUZ, Mark Jonel", 1.75),
            array("GARCIA, Vince", 2.25),
            array("CALPE, Rommel", 2.50),
            array("ILAO, Neil Cymar", 2.75),
        );
    
    // Display table header
    echo "<table>";
    echo "<tr>
            <th>NAME</th>
            <th>GWA</th>
            <th>DEANS LISTER?</th>
        </tr>";
    
    // Display Students data
    foreach ($students as $student) {
        $name = $student[0];
        $gwa = number_format($student[1], 2); // Limit to 2 decimal places
        
    
    // Set Deans Lister status using if-else statement
        if ($student[1] <= 1.75) {
                $deansListerStatus = "Qualified";
        } else {
                $deansListerStatus = "Not Qualified";
        }
        
        
    // Display student row
        echo "<tr>
                <td>$name</td>
                <td>$gwa</td>
                <td>$deansListerStatus</td>
            </tr>";
    }
        
    echo "</table>";
    ?>
    
</body>
</html>