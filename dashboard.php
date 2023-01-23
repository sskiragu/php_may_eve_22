<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .top-nav{
            background-color: darkorange;
            padding: 14px 28px;
        }
        </style>
</head>
<body>
    <div class="top-nav">
        <a href="dashboard.php?id=profile">Profile</a>
        <a href="dashboard.php?id=users">View Users</a>
        <a href="dashboard.php?id=reports">Reports</a>
        <a href="dashboard.php?id=logout">Logout</a>
    </div>
    <div>
        <?php
            if(isset($_GET['id'])){
                $selected =  $_GET['id'];
                switch ($selected) {
                    case 'users':
                        include_once 'view.php';
                        break;
                    case 'profile':
                        include_once 'profile.php';
                        break;
                    
                    default:
                        # code...
                        break;
                }
            }
        ?>
    </div>
</body>
</html>