function validateForm() {
    
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let mobile = document.getElementById("mobile").value;
    let password = document.getElementById("password").value;
    
    
    if (name === "") {
        alert('Please enter name.');
        return false;
    } else if (name.split(' ').length < 2) {
        alert('Name must contain at least two words.');
        return false;
    }


    
    if (email === "") {
        alert('Please enter your email.');
        return false;
    }

    
    if (email.indexOf('@') === -1) {
        alert('Email must contain "@" symbol.');
        return false;
    }

    
    if (email.indexOf('.') === -1) {
        alert('Email must contain "." symbol.');
        return false;
    }

    
    if (mobile === "") {
        alert('Please enter your mobile number.');
        return false;
    } else if (mobile.length !== 11) {
        alert('Please enter a valid 11-digit mobile number.');
        return false;
    }

    
    if (password === "") {
        alert('Please enter your password.');
        return false;
    } else if (password.length < 4) {
        alert('Password must be at least 4 characters long.');
        return false;
    }

    return true;
}
