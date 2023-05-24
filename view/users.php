<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
            <th>USER ID</th>
            <th>USER NAME</th>
            </tr>
        </thead>
    <tbody>
        <?php

        require('../controller/user_controller.php');

        $user_controller = new user_controller();
        $user_list = $user_controller->get_user_list();

        foreach($user_list as $user){
            echo '<tr>';
            echo '<td>' . $user->get_id() . '</td>';
            echo '<td>' . $user->get_name() . '</td>';
            echo '</tr>';
        }

        ?>
    </tbody>
    </table>
</body>
</html>