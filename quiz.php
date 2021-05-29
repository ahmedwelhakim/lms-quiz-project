<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('location:index.php');
}

include("db/dbConnection.php");
include("db/dbFunctions.inc.php");
if(checkSubmited($conn, $_SESSION['username']))
{
    header('location:index.php');
}
?>
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
                <a href="#"> My LMS</a>
            </div>
            <div class="nav-list"></div>
            <div class="nav-login">
                <ul class="nav-list">
                    <li>Welcome <?php echo ($_SESSION['username']); ?></li>
                
                </ul>
            </div>
        </nav>

        </nav>
    </div>
    <div class="main-body">
        <div class="quiz">
            <form action="checked.php" method="post">
                <?php
                for ($i = 1; $i < 6; $i++) {
                    $l = 1;

                    $ansid = $i;

                    $result1 = getQuestion($conn, $i);
                ?>
                    <br>
                    <div class="card">
                        <br>
                        <p class="card-header"> <?php echo $i . " : " . $result1['question'] . "<hr>"; ?> </p>
                        <?php
                        for ($z = 1; $z < 5; $z++) {
                            $mask = "choice";
                            $mask .= (string)$z;
                            if ($result1[$mask] == NULL) {
                            } else {
                        ?>
                                <div class="card-block">
                                    <input required type="radio" name="question<?php echo $i; ?>" id="<?php echo (string)($z); ?>" value="<?php echo $z; ?>"> <?php echo $result1[$mask]; ?>
                                    <br>
                                </div>


                        <?php
                            }
                        }
                        ?>
                        
                    <?php
                    $ansid = $ansid + $l;
                }
                    ?>
                    </div>

                    <br>
                    <div class="center">
                        <input type="submit" name="submit" Value="Submit" id="btn" class="btn-success" />
                    </div>
                    <br>
            </form>
        </div>
    </div>
</body>

</html>