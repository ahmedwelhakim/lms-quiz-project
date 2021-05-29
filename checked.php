<?php
session_start();
include("db/dbConnection.php");
include("db/dbFunctions.inc.php");
Submit($conn, $_SESSION['username']);
if (isset($_POST['question1'])) {



    $score = 0;
    $total_questions = 0;
    for ($i = 1; $i < sizeof($_POST); $i++) {
        $total_questions++;
        if (checkAns($conn, $i, $_POST["question" . $i])) {
            $score++;
        }
    }
}

function Checked($question_no, $qid)
{
    if ($_POST['question' . $question_no] == $qid) {
        echo 'checked';
    }
}
function isWrongCorrect($conn, $question_no, $ansid)
{
    if (checkAns($conn, $question_no, $ansid)) {
        echo 'class="correct"';
    } else if ($_POST['question' . $question_no] == $ansid) {
        echo 'class="wrong"';
    }
}


?>


<?php

if (!isset($_SESSION['username'])) {
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
                <a href="student_home.php"> My LMS</a>
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
        <div class="Score">
            <h3> Score : <?php echo $score; ?> out of <?php echo $total_questions; ?></h3>
        </div>
        <div class="quiz">
            <form>
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
                                    <input disabled <?php Checked($i, $z); ?> type="radio" name="question<?php echo $i; ?>" id="<?php echo (string)($z); ?>" value="<?php echo $z; ?>">
                                    <span <?php isWrongCorrect($conn, $i, $z) ?>>
                                        <?php echo $result1[$mask]; ?>
                                    </span>

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

                    <br>
            </form>
        </div>
    </div>
</body>

</html>