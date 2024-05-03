<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $paymentStatus = 1;

        $message = match ($paymentStatus) {
            1 => 'Payment was successful',
            2,3 => 'Payment was declined',
            4 => 'Payment is pending',
            default => 'Payment was unsuccessful',
            }
    ?>
</body>
</html>