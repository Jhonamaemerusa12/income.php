<!DOCTYPE html>
<html>
<head>
    <title>Salary</title>
</head>
<body>
    <?php

        $RatePerHour = 100; 
        $TotalDaysWorked = 26;
        $HoursWorkedPerDay = 8;

        $TotalEarnings = $RatePerHour * $HoursWorkedPerDay * $TotalDaysWorked;
        $Deductions = 0; 

        if ($TotalEarnings <= 15000) {
            $TakeHomePay = $TotalEarnings;
        }
        elseif ($TotalEarnings <= 30000) {
            $Deductions = ($TotalEarnings - 15000) * 0.05; 
            $TakeHomePay = $TotalEarnings - $Deductions;
        }
        else {
            $Deductions = (15000 * 0.05) + (($TotalEarnings - 30000) * 0.10); 
            $TakeHomePay = $TotalEarnings - $Deductions;
        }


        echo "Hourly Pay: $" . $RatePerHour . "<br>";
        echo "Total Earnings: $" . $TotalEarnings . "<br>";
        echo "Take-Home Salary: $" . $TakeHomePay . "<br>";
    ?>
</body>
</html>
