<?php
//connect the server to the databasege
include("db/dbConnection.php");
include("db/dbFunctions.inc.php");
?>
    <p id="timer"><?php echo getTimer($conn);?></p>
    <button onclick="startTimer()">start</button>
    <script src="js/implementTimer.js">
    </script>
<?php


//if ($_POST['counter'] > 200) $_POST['counter'] = 200;
//for ($qi = 1; $qi <= $_POST['counter']; $qi++) {
//    if (isset($_POST['mc-q-' . $qi])) {
//        $question = $_POST['mc-q-' . $qi];
//        $choice1 = $_POST['mc-ch-1-' . $qi];
//        $choice2 = $_POST['mc-ch-2-' . $qi];
//        $choice3 = $_POST['mc-ch-3-' . $qi];
//        $choice4 = $_POST['mc-ch-4-' . $qi];
//        $answer = $_POST['mc-cor-' . $qi];
//        createQus($conn, $question, $answer, $choice1, $choice2, $choice3, $choice4);
//    } else if (isset($_POST['tf-q-' . $qi])) {
//        $question = $_POST['tf-q-' . $qi];
//        $answer = $_POST['tf-cor-' . $qi];
//        createQus($conn, $question, $answer);
//    }
//}

//setSettings($conn, $_POST['quizDate'], $_POST['quizDuration']);