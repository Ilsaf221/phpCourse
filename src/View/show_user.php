<?php

require_once __DIR__ . '/view_user.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class='maine'>
            <div class='text'>
                <h1>Congratulations to you!</h1>
                <h2>You have successfully registered</h2>
                <div>
                    <h3>Your registration data:</h3>
                    <ul>
                        <li>First name: <?php echo htmlentities($user->getFirstName()) ?></li>
                        <li>Last name: <?php echo htmlentities($user->getLastName()) ?></li>
                        <li>Middle name: <?php echo htmlentities($user->getMiddleName()) ?></li>
                        <li>Gender: <?php echo htmlentities($user->getGender()) ?></li>
                        <li>Email: <?php echo htmlentities($user->getEmail()) ?></li>
                        <li>Phone: <?php echo htmlentities($user->getPhone()) ?></li>
                        <li>Avatatar Path: <?php echo htmlentities($user->getAvatarPath()) ?></li>
                    </ul>
                </div>  
            </div>    
        </div>    
    </body>
</html>