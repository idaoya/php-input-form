function checkPassword(form) { 
    var password1 = form.password1.value;
    var password2 = form.password2.value;

    // If Passwor1 is null
    if (password1 == '')
        alert("Please input Password");

    // If Password2 is null
    else if (password2 == '')
        alert("Please input Confirm Password");

    // If not the same, return false   
    else if (password1 != password2) {
        alert("\nPassword did not match: Please try again...");
        return false;
    }

    // If same, return true 
    else {
        alert("Password Match...")
        return true;
    }
} 

