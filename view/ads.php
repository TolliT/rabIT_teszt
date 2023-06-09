<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RabIT teszt feladat - Ad lista</title>
    <style>
        <?php include "../view/stylesheet.css"?>
    </style>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>AD ID</th>
        <th>USER ID</th>
        <th>USER NAME</th>
        <th>AD NAME</th>
    </tr>
    </thead>
    <tbody>
    <?php

    require('../controller/ad_controller.php');

    $ad_controller = new ad_controller();
    $ad_list = $ad_controller->get_ad_list();

    foreach ($ad_list as $ad) {
        echo '<tr>';
        echo '<td>' . $ad->get_id() . '</td>';
        echo '<td>' . $ad->get_userid() . '</td>';
        echo '<td>' . $ad->get_username() . '</td>';
        echo '<td>' . $ad->get_adname() . '</td>';
        echo '</tr>';
    }

    ?>
    </tbody>
</body>
</html>