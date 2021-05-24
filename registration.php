<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/19677acfad.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="nav-container">

        <nav id="nav">
            <div class="logo">
                <a href="index.php"> My LMS</a>
            </div>
            <div class="nav-list"></div>
            <div class="nav-login">
                <ul class="nav-list">
                    <li><a href="login.php">log in <i class="fas fa-sign-in-alt"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="body-container">
        <div class="main-body">
            <div id="frm">
                <h3>Registration Form</h3>
                <form method="post" action="javascript:void(0)">

                    <table class="frm-table">
                        <tr>
                            <td>
                                <label>User name</label>
                            </td>
                            <td>
                                <input type="text" id="user" name="user" class="text-box" placeholder="Username" required />
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <label>Password</label>
                            </td>
                            <td>
                                <input type="password" id="pass" name="password" class="text-box" placeholder="Password" required />


                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Type</label>
                            </td>
                            <td>
                                <input type="radio" id="student" name="type" value="student">
                                <label for="student">student</label>
                                <input type="radio" id="proffessor" name="type" value="proffessor">
                                <label for="proffessor">Proffessor</label><br>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input class="btn" type="submit" id="btn" value="sign up" onclick="ajax_post()" />

                            </td>
                        </tr>
                    </table>





                </form>
                <div id="status"></div>
            </div>
        </div>
    </div>
    <script src="js/regScript.js"></script>

</body>

</html>