<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>homepage</title>

</head>

<body>
    <div class="nav-container">
        <nav id="nav">
            <div class="logo">
                My LMS
            </div>
            <div class="nav-list"></div>
            <div class="nav-login">
                <ul class="nav-list">
                    <li>Welcome <?php echo ($_SESSION['username']); ?></li>
                </ul>
            </div>
        </nav>
</body>

</html>