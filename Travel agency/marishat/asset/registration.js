

function validateForm() {
    var nameInput = document.getElementsByName("user")[0].value.trim();
    var emailInput = document.getElementsByName("mail")[0].value.trim();
    var dobInput = document.getElementsByName("dob")[0].value.trim();
    var genderInput = document.querySelector('input[name="gender"]:checked');

    // Flag to track overall form validity
    var isValid = true;

    // Name validation
    if (nameInput === "") {
        alert("Name cannot be empty");
        isValid = false;
    } else {
        var words = nameInput.split(" ").filter(word => word !== "");
        if (words.length < 2) {
            alert("Name must contain at least two words");
            isValid = false;
        } else {
            for (var i = 0; i < words.length; i++) {
                var word = words[i];
                for (var j = 0; j < word.length; j++) {
                    var char = word[j];
                    if (!((char >= 'a' && char <= 'z') || (char >= 'A' && char <= 'Z') || char === '.' || char === '-')) {
                        alert("Name can only contain letters, dot (.), or dash (-), and must start with a letter");
                        isValid = false;
                        break;
                    }
                }
                if (!isValid) break;
            }
        }
    }

    




// Email validation
    if (emailInput === "") {
        alert("Email cannot be empty");
        isValid = false;
    } else {
        var atIndex = emailInput.indexOf('@');
        var dotIndex = emailInput.lastIndexOf('.');
    
        // Check if '@' exists and is not the first character
        if (atIndex < 1) {
            alert("Please enter a valid email address");
            isValid = false;
        } else {
            // Check if '.' exists after '@' and there's at least one character between them
            if (dotIndex < atIndex + 2 || dotIndex + 1 === emailInput.length) {
                alert("Please enter a valid email address");
                isValid = false;
            }
        }
    }
    






    // Date of Birth validation
    if (dobInput === "") {
        alert("Date of Birth cannot be empty");
        isValid = false;
    } else {
        var dobParts = dobInput.split("-");
        var day = parseInt(dobParts[2]);
        var month = parseInt(dobParts[1]);
        var year = parseInt(dobParts[0]);

        if (isNaN(day) || isNaN(month) || isNaN(year)) {
            alert("Please enter a valid date of birth");
            isValid = false;
        } else {
            if (day < 1 || day > 31) {
                alert("Day must be between 1 and 31");
                isValid = false;
            }
            if (month < 1 || month > 12) {
                alert("Month must be between 1 and 12");
                isValid = false;
            }
            if (year < 1900 || year > 2016) {
                alert("Year must be between 1900 and 2016");
                isValid = false;
            }
        }
    }

    // Gender validation
    if (!genderInput) {
        alert("Please select a gender");
        isValid = false;
    }


    let user = {
        'name': nameInput,
        'email': emailInput,
        'dob': dobInput,
        'gender': genderInput,
       
    };
    
    let data = JSON.stringify(user);
    
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", 'registrationcheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('data=' + data);
    
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let response = JSON.parse(this.responseText);
            
        }
    };


    return isValid;
    
}
