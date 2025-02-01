

<html lang="en">
<head>
    <title>package</title>
    <link rel="stylesheet" href="../../assest/style.css" />
</head>
<body >

<div class="desktop">

<table width="100%" border="0">
        <tr>
            <td align="center">
                <h1 style="font-size:60px; color:aliceblue; "><u>Package Details</u></h1>
        </td>
</table>

<div class="container">


<?php

require('../../model/userModel.php');

$id=offerid();
$place=to();
$hotel=hotel();
$people=people();
$duration=duration();
$transportation=transportation();
$ammount=ammount();

$size=count($place);

for($i=0;$i<$size;$i++)
{
   
echo"<div class='items'>
    <label>$place[$i] Tour !!<br> for $people[$i] people!<br> Stay at $hotel[$i] for $duration[$i] days. Travel by $transportation[$i].<br> Only $ammount[$i] TK!</label>

    <form method='post' action='packageinfo.php'>
       <input type='hidden' name='offerid' value='".$id[$i]."'>
       <input type='submit' name='Book now!' value='Book now!'  ><br>
    </form>
</div>";

}

?>





</div>
</div>
</body>
</html>



