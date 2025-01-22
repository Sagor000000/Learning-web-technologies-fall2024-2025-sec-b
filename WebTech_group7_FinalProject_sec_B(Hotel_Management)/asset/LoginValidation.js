function validateLoginForm() {
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

    if (!username.trim()) {
        alert("Username cannot be empty.");
        return false;
    }

    let words = username.split(" ");
    if (words.length < 1) {
        alert("Username must contain at least one words.");
        return false;
    }

    if (password.trim().length < 4) {
        alert("Password must be at least 4 characters long.");
        return false;
    }

    return true;
}

function ajax(username, password) {
    if (!validateLoginForm()) {
        return; 
    }

    let data = {
        username: username,
        password: password
    };

    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/UserLoginCheck.php', true);
    xhttp.setRequestHeader("Content-Type", "application/json");

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            if (this.status == 200) {
                
                let response = JSON.parse(this.responseText);
                
                if (response.success) {
                    alert("Login successful!");
                } else {
                    alert("Login failed. Please check your credentials.");
                }
            } else {
                alert("Error: " + this.status);
            }
        }
    };

    xhttp.send(JSON.stringify(data));
}

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("loginForm").addEventListener("submit", function(event) {
        event.preventDefault(); 

        let username = document.getElementById("username").value;
        let password = document.getElementById("password").value;

        ajax(username, password);
    });
});
