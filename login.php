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
                    <li><a href="registration.php"> sign up <i class="fas fa-user-plus"></i></a></li>
                </ul>
            </div>
        </nav>

    </div>
    <div class="body-container">
        <div class="main-body">
            <div id="frm">

                <h3>Login Form</h3>
                <form method="post" action="javascript:void(0)">
                    <table class="frm-table">
                        <tr>
                            <td><label>User name</label></td>

                            <td><input type="text" id="user" name="user" class="text-box" placeholder="Username" required /></td>
                        </tr>
                        <tr>
                            <td><label>Password</label></td>


                            <td>
                                <input type="password" id="pass" name="password" class="text-box" placeholder="Password" required />
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input class='btn' type="submit" onclick="ajax_post()" id="btn" value="login" />
                            </td>
                        </tr>
                    </table>

                </form>
                <div id="status">

                </div>
            </div>
        </div>



    </div>
    <script src="js/loginScript.js"></script>


</body>

</html>