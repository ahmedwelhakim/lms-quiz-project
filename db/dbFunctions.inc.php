<?php
function checkAns($conn, $questionID, $ansId)
{
    $sql = "SELECT * FROM questions WHERE qid = ? AND answer = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql))
    {
        header("location: ../index.php?errpr=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $questionID, $ansId);
    mysqli_stmt_execute($stmt);
    if (mysqli_stmt_get_result($stmt))
    {
        return true;
    }
    else
    {
        return false;
    }
    mysqli_stmt_close($stmt);
}

function getQuestion($conn, $questionID)
{
    $sql = "SELECT * FROM questions WHERE qid = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql))
    {
        header("location: ../index.php?errpr=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $questionID);
    mysqli_stmt_execute($stmt);
    $result =mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result))
    {
        return $row;
    }
    else
    {
        return false;
    }
    mysqli_stmt_close($stmt);
}

function getAns($conn, $questionID)
{
    $sql = "SELECT * FROM questions WHERE qid = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql))
    {
        header("location: ../index.php?errpr=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $questionID);
    mysqli_stmt_execute($stmt);
    $result =mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result))
    {
        return $row["answer"];
    }
    else
    {
        return false;
    }
    mysqli_stmt_close($stmt);
}

function createQus($conn, $question, $choice1, $choice2, $choice3, $choice4, $ans)
{
    $sql = "INSERT INTO questions (question, choice1, choice2, choice3, choice4, answer) values (?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql))
    {
        header("location: ../index.php?errpr=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ssssss", $question, $choice1, $choice2, $choice3, $choice4, $ans);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $pwd, $job)
{
    $sql = "INSERT INTO users (userName, userPwd, userJob) values (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql))
    {
        header("location: ../registration.php?errpr=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $name, $hashedPwd, $job);
    mysqli_stmt_execute($stmt);
    echo"registeration successfull";
    mysqli_stmt_close($stmt);
    
}
    
function loginUser($conn, $name, $pwd)
{
    $sql = "SELECT * FROM users WHERE userName = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql))
    {
        header("location: ../login.php?errpr=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $name);
    mysqli_stmt_execute($stmt);

    $result =mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result))
    {
        if(password_verify($pwd, $row["userPwd"]))
        {
            $_SESSION['username'] = $row["userName"];
            
            echo ($row['userJob']);
        }
        else
        {
            echo("<b>Login Failed!</b> <br>please enter correct username and password");
        }
    }
    else
    {
        echo("<b>Login Failed!</b> <br>please enter correct username and password");
    }
    mysqli_stmt_close($stmt);
}
    
?>
