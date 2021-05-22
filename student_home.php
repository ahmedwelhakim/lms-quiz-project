<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('location:index.php');
}

//connect the server to the database
include("db/dbConnection.php");
include("db/dbFunctions.inc.php");
//createQus($conn, 'What does HTML stand for','Home tool Markup language','Hyperlinks and Text Markup language','Hyper Text Markup language','none of the above',1);
//createQus($conn, 'look at the following selector: $("div"). What does it select?','The first divs element','All div elements','The last div element','none of the above',1);
//createQus($conn, 'Where is the correct place to insert a javascript?','the head section','The body section','Both the head and body','none of the above',1);
//createQus($conn, 'How do you create a function in javascript?','function myFunction()','function:myFunction()','function=myFunction()','none of the above',1);
//createQus($conn, 'Which class provides a responsive fixed width container?','container','container-fixed','container-fluid','none of these',1);

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
                /** @var mysqli $conn */
                $questions = getQuestions($conn);
                $ansid = 1;


                foreach ($questions as $q) {
                    $l = 1;

                ?>
                        <br>
                        <div class="card">
                            <br>
                            <p class="card-header"> <?php echo $q['qid'] . " : " . $q['question']."<hr>"; ?> </p>
                            <?php
                            $z = 1;
                            for ($z = 1; $z < 5; $z++) {
                                $mask = "choice";
                                $mask .=(string)$z;
                            ?>
                                <div class="card-block">
                                    <input type="radio" name="quizcheck[<?php echo $ansid; ?>]" id="<?php echo (String)($z); ?>" value="<?php echo (String)($z); ?>"> <?php echo $q[$mask]; ?>
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
