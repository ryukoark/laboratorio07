<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


    $paymentStatus = 'paid';
    
    switch ($paymentStatus) {
        case 'paid':
            echo 'Payment was successful';
            break;
        case 'declined':
        case 'rejected':
            echo 'Payment was declined';
            break;
        case 'pending' :
            echo 'Payment is pending';
            break;
        default:
            echo 'Payment was unsuccessful';
            break;
    }
    ?>
</body>
</html>