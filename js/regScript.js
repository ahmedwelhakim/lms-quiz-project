function ajax_post() {
    let xhr = new XMLHttpRequest();
    let url = "process/registration_process.php";
    let username = document.getElementById('user').value;
    let password = document.getElementById('pass').value;

    let type;
    if (document.getElementById('student').checked) {
        type = document.getElementById('student').value;
    } else {
        type = document.getElementById('proffessor').value;
    }
    let sendVar = "username=" + username + "&password=" + password + "&type=" + type;

    xhr.open("POST", url);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            let return_data = xhr.responseText;
            if (return_data == 'success') {
                window.location.replace("login.php");
            } else {
                document.getElementById("status").innerHTML = return_data;
            }
        }
    }
    if (username == "" || password == "" || type == "") {
        document.getElementById("status").innerHTML = "please fill all the data";
    } else {
        xhr.send(sendVar);
    }

}