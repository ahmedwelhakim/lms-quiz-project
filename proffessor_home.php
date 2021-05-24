<!DOCTYPE html>
<html lang="en">

<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location:index.php');
}
if ($_SESSION['userJob'] == "student") {
    header('location:student_home.php');
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Professor Quiz Entry</title>

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
                <li>Welcome</li>
            </ul>
        </div>
    </nav>
</div>
<div class="main-body">
    <div class="quiz">
        <form action="quizCreation.php" method="post">
            <div class="card">
                <p class="card_header">
                    Quiz Settings
                </p>
                <label for="quizDate">Date</label>
                <input id="quizDate" type="date" required>
                <br>
                <label for="quizDuration">Quiz Duration (in minutes)</label>
                <input id="quizDuration" type="number" value="10" required>
            </div>
            <br>

            <!-- prefix mc: mc-   mc-q-    mc-ch-    mc-cor- -->
            <!-- prefix tf: tf-   tf-q-    tf-ch-    tf-cor- -->

            <div style="display: none" id="mc-" class="card">
                <input type="button" value="Remove question"
                       onclick="this.parentNode.parentNode.removeChild(this.parentNode);"/>
                <p class="card-header">CM</p>
                <div class="card-block">
                    Question <input type="text" name="mc-q-"><br>
                    Choice 1 <input type="text" name="mc-ch-" value="">
                    <br>Choice 2
                    <input type="text" name="mc-ch-" value="">
                    <br>Choice 3
                    <input type="text" name="mc-ch-" value="">
                    <br>Choice 4
                    <input type="text" name="mc-ch-" value="">
                    <br>
                </div>
                <br>
                Correct Answer:
                <div class="card-block">
                    <input type="radio" name="mc-cor-" value="1">1
                    <input type="radio" name="mc-cor-" value="2">2
                    <input type="radio" name="mc-cor-" value="3">3
                    <input type="radio" name="mc-cor-" value="4">4
                </div>
                <br>
            </div>

            <div style="display: none" id="tf-" class="card">
                <input type="button" value="Remove question"
                       onclick="this.parentNode.parentNode.removeChild(this.parentNode);"/>
                <p class="card-header">TF</p>
                <div class="card-block">
                    Question <input type="text" name="mc-q-">
                </div>
                <br>
                Correct Answer:
                <div class="card-block">
                    <input type="radio" name="tf-cor-" value="0">False
                    <input type="radio" name="tf-cor-" value="1">True
                </div>
                <br>
            </div>

            <input type="button" value="Add MC question" onclick="moreFields('mc-');"/>
            <input type="button" value="Add TF question" onclick="moreFields('tf-');"/>

    </div>

    <script src="js/addingformfields.js"></script>


    <br>
    <div class="center">
        <input type="submit" name="submit" Value="Submit" id="btn" class="btn-success"/>
    </div>
    <br>
    </form>
</div>
</div>


</body>

</html>