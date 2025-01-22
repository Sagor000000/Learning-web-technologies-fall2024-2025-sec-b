function validateSignupForm() {
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    let email = document.getElementById('email').value;
    let dob = document.getElementById('dob').value;
    let gender = document.querySelector('input[name="gender"]:checked');
    let blood_group = document.getElementById('blood_group').value;

    if (!username || !password || !email || !dob || !gender || !blood_group) {
        alert("Please fill in all the required fields.");
        return false;
    }

    if (!email.includes('@') || !email.includes('.')) {
        alert("Email must be valid.");
        return false;
    }

    let dobDate = new Date(dob);
    let currentDate = new Date();
    if (dobDate >= currentDate) {
        alert("Invalid date of birth. Please enter a date in the past.");
        return false;
    }

    let validBloodGroups = ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'];
    if (!validBloodGroups.includes(blood_group)) {
        alert("Invalid blood group. Please select from the provided options.");
        return false;
    }

    if (!gender) {
        alert("Please select a gender.");
        return false;
    }
    gender = gender.value;

    let words = username.split(' ');
    
    let firstWord = words[0];
    if (!firstWord) {
        alert("Username must start with a letter.");
        return false;
    }

    let firstChar = firstWord.charAt(0);
    if (!(firstChar >= 'a' && firstChar <= 'z') && !(firstChar >= 'A' && firstChar <= 'Z')) {
        alert("Username must start with a letter.");
        return false;
    }
   
    if (words.length < 2) {
        alert("Username must contain at least two words.");
        return false;
    }
    
    if (words.length < 2) {
        alert("User Name must be at least 2 characters.");
        return false;
    }

    if (password.length < 4) {
        alert("Password must be at least 4 characters.");
        return false;
    }

    return true;
}
function ajax() {
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    let email = document.getElementById('email').value;
    let dob = document.getElementById('dob').value;
    let gender = document.querySelector('input[name="gender"]:checked');
    let blood_group = document.getElementById('blood_group').value;


    let xhttp = new XMLHttpRequest();
   
    //xhttp.open('POST', '../controller/signupCheck.php', true);
    xhttp.open('POST', '../controller/SignUpCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    xhttp.send('username='+username);
    xhttp.send('gender='+gender);
    
    xhttp.send('dob='+dob);
    xhttp.send('email='+email);
    xhttp.send('blood_group='+blood_group);
    xhttp.send('password='+password);
    

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
        }
    }
}


