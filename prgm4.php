<html>
<head>
    <title>Program 12</title>
    <style>
        input {
            border: solid 2px;
            padding: 5px;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <h1>PHP - Calculate Electricity Bill</h1>

    <form method="post">
        <input type="number" width="10px" name="units" placeholder="Please enter no. of Units" />
        <input type="submit" name="unit-submit" value="Submit" />
    </form>

    <?php
    $result_str = $result = "";
    if (isset($_POST['unit-submit'])) {

        $units = $_POST['units'];
        if (!empty($units)) {

            $result = calculate_bill($units);
            $result_str = '<h2>Total amount of ' . $units . ' = ' . $result . '</h2>';
            echo $result_str;
        }
    }

    function calculate_bill($units)
    {
        $unit_cost_first = 3.50;
        $unit_cost_second = 4.00;
        $unit_cost_third = 5.20;
        $unit_cost_fourth = 6.50;

        if ($units <= 50) {
            $bill = $units * $unit_cost_first;
        } elseif ($units > 50 && $units <= 100) {

            $temp = 50 * $unit_cost_first;
            $remaining_units = $units - 50;
            $bill = $temp + ($remaining_units * $unit_cost_second);

        } elseif ($units > 100 && $units <= 200) {

            $temp = (50 * 3.5) + (50 * $unit_cost_second);
            $remaining_units = $units - 100;
            $bill = $temp + ($remaining_units * $unit_cost_third);

        } else {

            $temp = (50 * 3.5) + (50 * $unit_cost_second) + (100 * $unit_cost_third);
            $remaining_units = $units - 200;
            $bill = $temp + ($remaining_units * $unit_cost_fourth);
        }

        return number_format((float)$bill, 2, '.', '');
    }
    ?>
</body>
</html>
