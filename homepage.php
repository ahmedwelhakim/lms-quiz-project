<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('location:index.php');
}

//connect the server to the database
include("db/dbConnection.php");
include("db/dbFunctions.inc.php");
createQus($conn, 'What does HTML stand for?','Home tool Markup language','Hyperlinks and Text Markup language','Hyper Text Markup language','none of the above','Home tool Markup language');
createQus($conn, 'look at the following selector: $("div"). What does it select?','The first divs element','All div elements','The last div element','none of the above','The first divs element');
createQus($conn, 'Where is the correct place to insert a javascript?','the head section','The body section','Both the head and body','none of the above','the head section');
createQus($conn, 'How do you create a function in javascript?','function myFunction()','function:myFunction()','function=myFunction()','none of the above','function myFunction()');
createQus($conn, 'Which class provides a responsive fixed width container?','container','container-fixed','container-fluid','none of these','container');

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
                My LMS
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

                    $result1= getQuestion($conn, $i);
                ?>
                        <br>
                        <div class="card">
                            <br>
                            <p class="card-header"> <?php echo $i . " : " . $result1['question']."<hr>"; ?> </p>
                            <?php
                            $z = 1;
                            for ($z = 1; $z < 5; $z++) {
                                $mask = "choice";
                                $mask .=(string)$z;
                            ?>
                                <div class="card-block">
                                    <input type="radio" name="quizcheck[<?php echo $ansid; ?>]" id="<?php echo (String)($z); ?>" value="<?php echo (String)($i+$z); ?>"> <?php echo $result1[$mask]; ?>
                                    <br>
                                </div>
                    <?php
                                }
                            $ansid = $ansid + $l;
                        }
                    ?>
                            </div>

                            <br>
                            <input type="submit" name="submit" Value="Submit" class="btn btn-success m-auto d-block" /> <br>
            </form>
        </div>
    </div>
</body>

</html>
