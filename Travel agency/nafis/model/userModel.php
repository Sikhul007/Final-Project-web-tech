<?php 
require('db.php');

function viewPlace(){
    $con = dbConnection();
    $sql = "select place from destination";
    $result = mysqli_query($con, $sql);
    $options= [];
    while($row = mysqli_fetch_assoc($result)){
        array_push($options, $row['place']);
    }
    return $options;
}

function viewhotel($h){
    $con = dbConnection();
    $sql = "select distinct hotelname from $h";
    $result = mysqli_query($con, $sql);
    $options= [];
    while($row = mysqli_fetch_assoc($result)){
        array_push($options, $row['hotelname']);
    }
    return $options;
 
}

function rent(){
  
$pl= $_SESSION['trip_data']['to'];
$ho= $_SESSION['hotel_data']['hotel'];
$rm= $_SESSION['hotel_data']['roomType'];


$con = dbConnection();
$sql = "select price from $pl where hotelname='$ho' && roomtype='$rm'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
return $row['price'];
}

function fee(){
  
    $tr= $_SESSION['transport_data']['transport'];
    $jb= $_SESSION['transport_data']['journeyby'];
      
    $con = dbConnection();
    $sql = "select price from $jb where name='$tr' ";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row['price'];
    }

function purchasedhistory(){
    $con = dbConnection();
    $sql = "select * from purchased_history";
    $result = mysqli_query($con, $sql);
    $history= [];
    while($row = mysqli_fetch_assoc($result)){
        $history[] = $row;
    }
    return $history;
}


function userpurchasedhistory($id){
    $con = dbConnection();
    $sql = "select * from purchased_history where userid = '$id'";
    $result = mysqli_query($con, $sql);
    $history= [];
    while($row = mysqli_fetch_assoc($result)){
        $history[] = $row;
    }
    return $history;
}





function to(){
    $con = dbConnection();
    $sql = "select * from offer";
    $result = mysqli_query($con, $sql);
    $array= [];
    while($row = mysqli_fetch_assoc($result)){
        array_push($array, $row['to']);
    }
    return $array;
}

function hotel(){
    $con = dbConnection();
    $sql = "select * from offer";
    $result = mysqli_query($con, $sql);
    $array= [];
    while($row = mysqli_fetch_assoc($result)){
        array_push($array, $row['hotel']);
    }
    return $array;
}

function people(){
    $con = dbConnection();
    $sql = "select * from offer";
    $result = mysqli_query($con, $sql);
    $array= [];
    while($row = mysqli_fetch_assoc($result)){
        array_push($array, $row['people']);
    }
    return $array;
}

function duration(){
    $con = dbConnection();
    $sql = "select * from offer";
    $result = mysqli_query($con, $sql);
    $array= [];
    while($row = mysqli_fetch_assoc($result)){
        array_push($array, $row['duration']);
    }
    return $array;
}

function transportation(){
    $con = dbConnection();
    $sql = "select * from offer";
    $result = mysqli_query($con, $sql);
    $array= [];
    while($row = mysqli_fetch_assoc($result)){
        array_push($array, $row['transportation']);
    }
    return $array;
}

function ammount(){
    $con = dbConnection();
    $sql = "select * from offer";
    $result = mysqli_query($con, $sql);
    $array= [];
    while($row = mysqli_fetch_assoc($result)){
        array_push($array, $row['ammount']);
    }
    return $array;
}

function offerid(){
    $con = dbConnection();
    $sql = "select offerid from offer";
    $result = mysqli_query($con, $sql);
    $array= [];
    while($row = mysqli_fetch_assoc($result)){
        array_push($array, $row['offerid']);
    }
    return $array;
}


function getofferdetails($id){
    $con = dbConnection();
    $sql = "select * from offer where offerid='$id'";
    $result = mysqli_query($con, $sql);
    $array= [];
    while($row = mysqli_fetch_assoc($result)){
        $array[] = $row;
    }
    return $array;
}


function getuserinfo(){
    $con = dbConnection();
    $sql = "select * from user";
    $result = mysqli_query($con, $sql);
    $data= [];
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
}


function busInfo(){
    $con = dbConnection();
    $sql = "select * from bus";
    $result = mysqli_query($con, $sql);
    $data= [];
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
}

function trainInfo(){
    $con = dbConnection();
    $sql = "select * from train";
    $result = mysqli_query($con, $sql);
    $data= [];
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
}

function planeInfo(){
    $con = dbConnection();
    $sql = "select * from plane";
    $result = mysqli_query($con, $sql);
    $data= [];
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
}


function packageInfo(){
    $con = dbConnection();
    $sql = "select * from offer";
    $result = mysqli_query($con, $sql);
    $data= [];
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
}


function destination(){
    $con = dbConnection();
    $sql = "select * from destination";
    $result = mysqli_query($con, $sql);
    $data= [];
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
}

function deleteDestination($id){
    $con = dbConnection();
    $sql = "DELETE FROM destination WHERE id='$id'";
    $result = mysqli_query($con, $sql);
  
}





function adduser($name,$email,$gender,$dob,$password){
    $con = dbConnection();
    $sql = "INSERT INTO user( `name`, `email`, `gender`, `date of birth`, `password`) VALUES ('$name','$email','$gender','$dob','$password')";
    $result = mysqli_query($con, $sql);
}

function addservice($type,$name,$from,$to,$price){
    $con = dbConnection();
    $sql = "INSERT INTO $type(`name`, `from`, `to`, `price`) VALUES ('$name','$from','$to','$price')";
    $result = mysqli_query($con, $sql);
}


function addDestination($to){
    $con = dbConnection();
    $sql = "INSERT INTO destination(`place`) VALUES ('$to')";
    $result = mysqli_query($con, $sql);
}


function addpackage($to,$hotel,$roomtype,$roomnumber,$people,$duration,$transportation,$transport,$ammount){
    $con = dbConnection();
    $sql = "INSERT INTO offer( `to`, `hotel`, `room type`, `room number`, `people`, `duration`, `transportation`, `transport`, `ammount`) VALUES ('$to','$hotel','$roomtype','$roomnumber','$people','$duration','$transportation','$transport','$ammount')";
    $result = mysqli_query($con, $sql);
}




function deleteuser($id){
    $con = dbConnection();
    $sql = "delete from user where userid='$id'";
    $result = mysqli_query($con, $sql);
}


function deletebus($id){
    $con = dbConnection();
    $sql = "delete from bus where id='$id'";
    $result = mysqli_query($con, $sql);
}

function deletetrain($id){
    $con = dbConnection();
    $sql = "delete from train where id='$id'";
    $result = mysqli_query($con, $sql);
}

function deleteplane($id){
    $con = dbConnection();
    $sql = "delete from plane where id='$id'";
    $result = mysqli_query($con, $sql);
}



function deletepackage($id){
    $con = dbConnection();
    $sql = "delete from offer where offerid='$id'";
    $result = mysqli_query($con, $sql);
}

function changeprofilepath($filePath){
    $con = dbConnection();
    $sql = "UPDATE admin SET logo='$filePath' WHERE id='1'";
    $result = mysqli_query($con, $sql);
}


function logo(){
    $con = dbConnection();
    $sql = "select logo from adminc";
    $result = mysqli_query($con, $sql);
    $path= "";
    $row = mysqli_fetch_assoc($result);
    $path= $row['logo'];
    return $path;
}


function validpass($password) {

    if (strlen($password) < 8) {
        return false;
    }

    $contains_uppercase = false;
    $contains_lowercase = false;
    $contains_digit = false;
    $contains_special = false;
    $special_characters = array('!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '=', '+');


    for ($i = 0; $i < strlen($password); $i++) {
        $char = $password[$i];

        if (ctype_upper($char)) {
            $contains_uppercase = true;
        }
        
        elseif (ctype_lower($char)) {
            $contains_lowercase = true;
        }
        
        elseif (ctype_digit($char)) {
            $contains_digit = true;
        }
     
        elseif (in_array($char, $special_characters)) {
            $contains_special = true;
        }
    }

    return $contains_uppercase && $contains_lowercase && $contains_digit && $contains_special;
}



function validname($name){
    $contains_digit = false;
    $char = $name[0];
    
    if((ctype_digit($char))){
        $contains_digit = false;
        return $contains_digit;
    }
    elseif($char==" "){
        $contains_digit = false;
        return $contains_digit;
    }
    else{
        $contains_digit = true;
        return $contains_digit;
    }

}



function validemail($email){
    $con = dbConnection();
    $sql = "SELECT email FROM user WHERE email='$email'";
    $result = mysqli_query($con, $sql);

    $usedemail= false;
    $data= [];

    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    if (count($data)>0){
        $usedemail= true;
        return $usedemail;
    }
    else{
        $usedemail= false;
        return $usedemail;
    }

}


function validuser($email, $password){
    $con = dbConnection();
    $sql = "SELECT * FROM user WHERE email='$email' && password ='$password'";
    $result = mysqli_query($con, $sql);

    $user= false;
    $data= [];

    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    if (count($data)>0){
        $user= true;
        return $user;
    }
    else{
        $user= false;
        return $user;
    }

}





function registrationDataEntry($name,$email,$gender,$dob,$password){
    $con = dbConnection();
    $sql = "INSERT INTO user(`name`, `email`, `gender`, `date of birth`, `password`) VALUES ('$name','$email','$gender','$dob','$password')";
    $result = mysqli_query($con, $sql);
}



function validdestination($to){
    $con = dbConnection();
    $sql = "SELECT place FROM destination WHERE place='$to'";
    $result = mysqli_query($con, $sql);

    $used= false;
    $data= [];

    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    if (count($data)>0){
        $used= true;
        return $used;
    }
    else{
        $used= false;
        return $used;
    }

}





?>