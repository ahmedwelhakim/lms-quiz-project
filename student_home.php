<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('location:index.php');
}

//connect the server to the database
include("db/dbConnection.php");
include("db/dbFunctions.inc.php");
deleteQuestions($conn);
createQus($conn, 'What does HTML stand for', 'Home tool Markup language', 'Hyperlinks and Text Markup language', 'Hyper Text Markup language', 'none of the above', 1);
createQus($conn, 'look at the following selector: $("div"). What does it select?', 'The first divs element', 'All div elements', 'The last div element', 'none of the above', 1);
createQus($conn, 'Where is the correct place to insert a javascript?', 'the head section', 'The body section', 'Both the head and body', 'none of the above', 1);
createQus($conn, 'How do you create a function in javascript?', 'function myFunction()', 'function:myFunction()', 'function=myFunction()', 'none of the above', 1);
createQus($conn, 'Which class provides a responsive fixed width container?', 'container', 'container-fixed', 'container-fluid', 'none of these', 1);

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
        <h3> Your quiz </h3>
        <form action="quiz.php">
            <button id="btn">Quiz</button>
        </form>
    </div>
</body>

</html>