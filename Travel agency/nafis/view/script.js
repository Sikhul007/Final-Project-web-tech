function login() {
    let email = document.getElementById('email1').value;
    let password = document.getElementById('password1').value;
    let checkbox = document.getElementById('checkbox1').checked; 

    if (email === "" || password === "") {
        alert('Email or password cannot be empty');
        return false; 
    } else if (!email.includes('@') || !email.endsWith('.com')) {
        alert('Email must contain "@" and end with ".com"');
        return false; 
    }

    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", '../../controller/auth/checkLogin.php', true); 
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('email=' + email + '&password=' + password + '&checkbox=' + checkbox);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText === "valid") {
                window.location.href = "homepage.php"; 
            } else {
                alert('Email or password incorrect');

            }
        }
    }

    return false;
}



function registration(){
    let name = document.getElementById('name1').value;
    let email = document.getElementById('email2').value;
    let genderlist = document.getElementsByName('gender1');
    let gender;
    let dob = document.getElementById('date1').value;
    let password = document.getElementById('pass1').value;
    let repassword = document.getElementById('pass2').value;

    let isSelected = false;
    let num=['0','1', '2', '3', '4', '5', '6', '7', '8', '9'];
    let allowedChars = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '.', '-','0','1', '2', '3', '4', '5', '6', '7', '8', '9', ' '];
    let special_characters = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '=', '+'];
    let hasUppercase = false;
    let hasLowercase = false;
    let hasNumber = false;
    let hasSpecialChar = false;



   
    

    if(name==="" || email==="" || password==="" || repassword==="" || dob==="" ){
        alert('Please fill all the information');
        return false;
    }


    for (let i = 0; i < 2; i++) {
        if (genderlist[i].checked) {
            isSelected = true;
            gender = genderlist[i].value;
            break;
        }
    }
    if (!isSelected) {
        alert('Please select a gender');
        return false;
    }

    if(name.length <2 ){
        alert('Name length must be at least 2');
        return false;
    }

    if(num.includes(name.charAt(0))){
        alert('Name can not be start with numbers');
        return false;
    }

    for (var i = 0; i < name.length; i++) {
        if (!allowedChars.includes(name.charAt(i))) {
            alert('Name can contain only a-z, A-Z, dot(.), or dash(-)');
            return false;
    }
    }

    if(!email.includes('@') || !email.endsWith('.com')){
        alert('Email must contain @  and  .com');
        return false;
    }

    if(password.length<8){
        alert('Password must be at least 8 characters');
        return false;
    }

    if(password!=repassword){
        alert('password and repasswrod does not match');
        return false;
    }


    for(var i = 0; i < password.length; i++) {
        var char = password.charAt(i);
        if (/[A-Z]/.test(char)) {
            hasUppercase = true;
        } else if (/[a-z]/.test(char)) {
            hasLowercase = true;
        } else if (/[0-9]/.test(char)) {
            hasNumber = true;
        } else if (special_characters.includes(char)) {
            hasSpecialChar = true;
        }
    }

    if(!hasUppercase || !hasLowercase || !hasNumber || !hasSpecialChar) {
        alert('Password must contain uppercase and lowercase characters and special characters');
        return false;
    }

    let user ={
        'name': name,
        'email': email,
        'gender': gender,
        'dob': dob,
        'password': password
    }

    let data = JSON.stringify(user);

    let xhttps = new XMLHttpRequest();
    
    xhttps.open("POST", '../../controller/auth/checkRegistration.php', true);
    xhttps.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttps.send('data='+data);
   
    xhttps.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText === "valid") {
                alert('Account created successfully');
                window.location.href = "login.php"; 
            } 
            else if(this.responseText === "invalid") {
                alert('This email is already in use');
            }
           
        }
    }

return false;

    
}





function emptydestination(){
    let destination = document.getElementById('destination').value;

    if(destination===""){
        alert('Please fill all the information');
        return false;
    }
    

    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", '../../controller/admin/addDestination.php', true); 
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('destination=' + destination);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText === "valid") {
                window.location.href = "adminview.php"; 
            } else {
                alert('This place is already exixts');
            }
        }
    }

    return false;
    
    
}



function addpackagebyadmin(){
    let to = document.getElementById('to').value;
    let hotel = document.getElementById('hotel').value;
    let roomType = document.getElementById('roomType').value;
    let roomNumber = document.getElementById('roomNumber').value;
    let people = document.getElementById('people').value;
    let duration = document.getElementById('duration').value;
    let trasnportation = document.getElementById('trasnportation').value;
    let transport = document.getElementById('transport').value;
    let ammount = document.getElementById('ammount').value;

    if(to==="" || hotel==="" || roomType==="" || roomNumber==="" ||people===""||duration==="" || trasnportation==="" || transport==="" || ammount===""){
        alert('Please fill all the information');
        return false;
    }

    if(isNaN(ammount)==true){
        alert('ammount can contain only numbers');
        return false;
    }

    

    return true;


}


function serviceaddbyadmin(){
    let type = document.getElementById('type').value;
    let name = document.getElementById('name1').value;
    let from = document.getElementById('from').value;
    let to = document.getElementById('to').value;
    let price = document.getElementById('price').value;

    if(type==="" || name==="" || from==="" || to==="" || price==="" ){
        alert('Please fill all the information');
        return false;
    }

    if(isNaN(price)==true){
        alert('price can contain only numbers');
        return false;
    }

    if(from===to){
        alert('from and to cannot be same');
        return false;
    }


    return true;
}



function samedestination(destination) {
    let from = document.getElementById('from1').value;
    let date = document.getElementById('date1').value;

    if(from==="" || date===""){
        alert('Please fill all the information');
        return false;
    }

    if(from===destination){
        alert('tour place and start point cannot be same');
        return false;
    }


    return true;

}



function customplan(){
    let from = document.getElementById('from').value;
    let to = document.getElementById('to').value;
    let date = document.getElementById('date').value;

    if(from==="" || date==="" || to===""){
        alert('Please fill all the information');
        return false;
    }
    if(from===to){
        alert('from and to cannot be same');
        return false;
    }
    return true;
}


function customhotel(){
    let hotel = document.getElementById('hotel').value;
    let days = document.getElementById('days').value;
    let people = document.getElementById('people').value;
    let roomType = document.getElementById('roomType').value;
    let roomNumber = document.getElementById('roomNumber').value;

    if(hotel==="" || days==="" ||people==="" || roomType==="" || roomNumber===""){
        alert('Please fill all the information');
        return false;
    }
    return true;
}


function customtransport(){
    let journeyby = document.getElementById('journeyby').value;
    let transport = document.getElementById('transport').value;
    let date1 = document.getElementById('date1').value;
    let people = document.getElementById('people').value;

    if(journeyby==="" || transport==="" || date1==="" || people===""){
        alert('Please fill all the information');
        return false;
    }
    return true;
}
