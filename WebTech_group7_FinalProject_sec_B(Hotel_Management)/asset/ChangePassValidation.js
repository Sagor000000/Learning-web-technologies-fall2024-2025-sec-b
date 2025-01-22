function validateChangePasswordForm() {
    
    let currentPassword = document.getElementById("current_password").value;
    let newPassword = document.getElementById("new_password").value;
    let confirmNewPassword = document.getElementById("confirm_new_password").value;

    
    if (currentPassword === "") {
        alert('Please enter your current password.');
        return false;
    }

    
    if (newPassword === "") {
        alert('Please enter a new password.');
        return false;
    }

   
    if (confirmNewPassword === "") {
        alert('Please confirm your new password.');
        return false;
    }

    
    if (newPassword !== confirmNewPassword) {
        alert('New password and confirm password do not match.');
        return false;
    }

    
    if (newPassword === currentPassword) {
        alert('New password must be different from the current password.');
        return false;
    }

   
    if (newPassword.length < 5) {
        alert('New password must be at least 5 characters long.');
        return false;
    }

    return true;
}
