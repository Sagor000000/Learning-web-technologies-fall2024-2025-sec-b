function validateForm() {
   
    let name = document.getElementById("name").value;
    let age = document.getElementById("age").value;
    let role = document.getElementById("role").value;

 
    if (name === "") {
        alert('Please enter name.');
        return false;
    } else if (name.split(' ').length < 1) {
        alert('Name must contain at least one words.');
        return false;
    }

    if (age === "") {
        alert('Please enter age.');
        return false;
    } else if (age < 18) {
        alert('Age must be 18 or above.');
        return false;
    }

    if (role === "") {
        alert('Please enter role.');
        return false;
    }

    return true;
}
