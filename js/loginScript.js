function ajax_post() {
    let xhr = new XMLHttpRequest();
    let url = "process/login_process.php";
    let username = document.getElementById('user').value;
    let password = document.getElementById('pass').value;
    let sendVar = "username=" + username + "&password=" + password;
    xhr.open("POST", url);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            let return_data = xhr.responseText;
            if (return_data == 'student') {
                window.location.replace("student_home.php");
            } else if (return_data == 'proffessor') {
                window.location.replace("proffessor_home.php");
            } else {
                document.getElementById("status").innerHTML = return_data;
            }
        }
    }
    xhr.send(sendVar)
}