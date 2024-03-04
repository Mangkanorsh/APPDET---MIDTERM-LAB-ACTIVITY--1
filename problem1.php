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

<?php
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
echo    "</table>
        <h2>
            TOTAL GROSS PAY: $totalGrossPay <br> 
            TOTAL DEDUCTION : $totalDeduction <br>
            TOTAL NETPAY    : $totalNetPay
        </h2>";

?>

</body>
</html>
