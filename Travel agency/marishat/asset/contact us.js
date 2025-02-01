
function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;

    // Validation rules for name
    if (name.trim() == "") {
        alert("Name cannot be empty");
        return false;
    }
    if (!isValidName(name)) {
        alert("Name must contain at least two words, Name must start with a letter,Name can only contain letters, dots, dashes, and spaces");
        return false;
    }

    // Validation rules for email
    if (email.trim() == "") {
        alert("Email cannot be empty");
        return false;
    }
    if (!isValidEmail(email)) {
        alert("Invalid email address");
        return false;
    }

    

   
    if (message.trim() == "") {
        alert("message cannot be empty");
        return false;
    }
    return true;
}

//  validation function for name
function isValidName(name) {

var words = name.trim().split(/\s+/);


if (words.length < 2) {
    return false; 
}


if (!isLetter(name.charAt(0))) {
    return false; 
}


for (var i = 0; i < name.length; i++) {
    var char = name[i];
    if (!isAllowedCharacter(char)) {
        return false; 
    }
}

return true;
}

function isLetter(char) {

return (char >= 'A' && char <= 'Z') || (char >= 'a' && char <= 'z');
}

function isAllowedCharacter(char) {

return isLetter(char) || char === '.' || char === '-' || char === ' ';
}


//  validation function for email
function isValidEmail(email) {
    var atIndex = email.indexOf("@");
    var dotIndex = email.lastIndexOf(".");
    if (atIndex < 1 || dotIndex < atIndex + 2 || dotIndex + 2 >= email.length) {
        return false; 
    };


    let user = {
        'name': name,
        'email': email,
        'message': message,
    };
    
    let data = JSON.stringify(user);
    
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", 'contact us.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('data=' + data);
    
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let response = JSON.parse(this.responseText);
            
        }
    };


    return true;
}
