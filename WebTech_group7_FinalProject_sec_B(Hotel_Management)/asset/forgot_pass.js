function chngpassValidate() {
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let confirm_password = document.getElementById('confirm_password').value;
 
    if (email === "" || password === "" || confirm_password === "") {
        alert("All fields are required.");
        return false;
    }
 
   
 
    if (password.length < 4) {
        alert("Password must be at least 4 characters.");
        return false;
    }
 
    if (password !== confirm_password) {
        alert("Passwords do not match.");
        return false;
    }
 
    return true;
}
 
function ajax() {
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let confirm_password = document.getElementById('confirm_password').value;
 
 
    let xhttp = new XMLHttpRequest();
   
    //xhttp.open('POST', '../controller/signupCheck.php', true);
    xhttp.open('POST', '../controller/UserForgotPassCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   
   
    xhttp.send('email='+email);
   
    xhttp.send('password='+password);
    xhttp.send('confirm_password='+confirm_password);
 
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
        }
    }
}
 
 
 
 