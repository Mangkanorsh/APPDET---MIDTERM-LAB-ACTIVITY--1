<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Table</title>
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

<!-- Problem 1 -->
<?php
echo "<center><h1> MIDTERM LAB ACTIVITY #1<br>
HTML Table Tags and PHP Variables, Echo/Print Construct & Control
Structures</h1></center>";

echo "<br><h1>Problem 1</h1>";

// Sample data for the table
$employees = array(
    array("LOPEZ, Norsh Daniel Francois", "Manager", 20000.00, 0.10),
    array("BACOD, Christian", "Supervisor", 15000.00, 0.075),
    array("DELA CRUZ, Mark Jonel", "Staff", 10000.00, 0.05),
    array("GARCIA, Vince", "Staff", 8500.00, 0.05),
    array("CALPE, Rommel", "Staff", 5000.00, 0),
    array("ILAO, Neil Cymar", "Staff", 10000.00, 0.05),

);

// Initialize total variables
$totalGrossPay = 0;
$totalDeduction = 0;
$totalNetPay = 0;

// Display table header
echo "<table>";
echo "<tr>
        <th>NAME</th>
        <th>POSITION</th>
        <th>GROSS PAY</th>
        <th>DEDUCTION</th>
        <th>NET PAY</th>
    </tr>";

// Display employee data and calculate totals
foreach ($employees as $employee) {
    $name = $employee[0];
    $position = $employee[1];
    $grossPay = $employee[2];
    $deductionPercentage = $employee[3];



    // Calculate actual deduction amount
    $deduction = $deductionPercentage * $grossPay;

    // Calculate net pay
    $netPay = $grossPay - $deduction;

    // Update total variables
    $totalGrossPay += $grossPay;
    $totalDeduction += $deduction;
    $totalNetPay += $netPay;

    // Display employee row
    echo "<tr>
            <td>$name</td>
            <td>$position</td>
            <td>$grossPay</td>
            <td>$deduction</td>
            <td>$netPay</td>
        </tr>";
}

// Display total row
echo "</table>";
echo "<h3>";
echo "TOTAL GROSS PAY : $totalGrossPay <br>";
echo "TOTAL DEDUCTION : $totalDeduction <br>";
echo "TOTAL NETPAY: $totalNetPay";
echo  "</h3>";

?>

<!-- problem 2 -->
<?php

echo "<br><hr><h1>Problem 2</h1>";
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
        $nameStudent = $student[0];
        $gwa = number_format($student[1], 2); // Limit to 2 decimal places
        
    
    // Set Deans Lister status using if-else statement
        if ($student[1] <= 1.75) {
                $deansListerStatus = "Qualified";
        } else {
                $deansListerStatus = "Not Qualified";
        }
        
        
    // Display student row
        echo "<tr>
                <td>$nameStudent</td>
                <td>$gwa</td>
                <td>$deansListerStatus</td>
            </tr>";
    }
        
    echo "</table>";
    ?>

</body>
</html>
