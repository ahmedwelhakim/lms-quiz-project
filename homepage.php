<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('location:index.php');
}

//connect the server to the database
include("db/dbConnection.php");

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

                    $sql1 = "SELECT * FROM `questions` WHERE `qid` = $i ";
                    $result1 = mysqli_query($conn, $sql1);
                    if (mysqli_num_rows($result1) > 0) {
                        while ($row1 = mysqli_fetch_assoc($result1)) {
                ?>
                            <br>
                            <div class="card">
                                <br>
                                <p class="card-header"> <?php echo $i . " : " . $row1['question']."<hr>"; ?> </p>

                                <?php
                                $sql = "SELECT * FROM answers WHERE ans_id = $i ";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>

                                        <div class="card-block">
                                            <input type="radio" name="quizcheck[<?php echo $ansid; ?>]" id="<?php echo $row['ans_id']; ?>" value="<?php echo $row['aid']; ?>"> <?php echo $row['answer']; ?>
                                            <br>
                                        </div>
                    <?php

                                    }
                                }
                                $ansid = $ansid + $l;
                            }
                        }
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