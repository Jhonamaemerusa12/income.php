<!DOCTYPE html>
<html>
<head>
    <title>Salary Calculation</title>
</head>
<body>
    <?php

        $RatePerHour = 90; 
        $TotalDaysWorked = 26;
        $HoursWorkedPerDay = 8;

        $TotalEarnings = $RatePerHour * $HoursWorkedPerDay * $TotalDaysWorked;
        $TaxAmount = 0; 

        if ($TotalEarnings > 15000 && $TotalEarnings <= 30000) {
            $TaxAmount = ($TotalEarnings - 15000) * 0.05; 
        }
        elseif ($TotalEarnings > 30000) {
            $TaxAmount = (15000 * 0.05) + (($TotalEarnings - 30000) * 0.10); 
        }


        $TotalWithTax = $TotalEarnings + $TaxAmount;


        echo "Hourly Pay: $" . number_format($RatePerHour, 2) . "<br>";
        echo "Total Earnings (before tax): $" . number_format($TotalEarnings, 2) . "<br>";
        echo "Tax Amount (added separately): $" . number_format($TaxAmount, 2) . "<br>"; 
        echo "Total with Tax Added: $" . number_format($TotalWithTax, 2) . "<br>";
    ?>
</body>
</html>
    