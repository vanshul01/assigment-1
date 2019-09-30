<html>
<head> 
<title>birthday</title>
	</head>
<body style="background-color:khaki;" >
    <marquee><h1 style="font-size:100%;">Fill the required entry</h1></marquee>
    <form method="post">
        <center>
        <table style="font-size: 100%">
            <tbody><tr>
			
                <td><b>Name:<b></td>
                <td> <input type="text" name="name"></td>
            </tr><br>
            <tr></tr>
            <tr>
                <td><b>Address<b></td>
                <td><input type="text" name ="addr"></td>
            </tr>
            <tr>
                <td><b>Phone no:<b></td>
                <td><input type="text" name="phone"></td>
            </tr><br>
            <tr></tr>
            <tr>
                <td><b>Email Address:<b></td>
                <td><input type="text" name="eaddr"></td>
            </tr><br>

            <tr></tr>
            <tr>
                <td><b>D.O.B<b></td>
                <td>
       <input style="font-size: 100%" type="date" id="start" name="dob" value="2018-07-22" min="1996-01-01" max="2018-12-31" >
                </td><br>
            </tr>
			<br>
			<br>
			<br>
			
			
			<table border="1"  width="70%" Height="50%">
<tr>
<th width="10%">S.NO</th>
<th width="10%">COST</th>
<th width="20%">PRODUCTS</th>
<th width="20">COUSTOMIZAION</th>
<th width="40%">CATALOG</th>
</tr>
<tr>
<td style="text-align:center;">1</td>
<td style="text-align:center;">1-POUND=300$ 
 2-POUND=600$</td>
<td style="text-align:center;"><form>
  <input type="radio" name="gender" value="choclate cake" checked>CHOCLOATE CAKE<br>
  <input type="radio" name="gender" value="pineapple cake">PINEAPPLE CAKE<br>
   </form></td>
<td style="text-align:center;"><form>
  <input type="radio" name="gender1" value="gender2" checked>1-POUND<br>
  <input type="radio" name="gender1" value="gender2">2-POUND<br>
   </form></td>
<td>
<center>
<img src="van.jpg" alt="example" width="100" Height="100">
</center>
</td>
</tr>
<tr>
<td style="text-align:center;">2</td>
<td style="text-align:center;">paneer patty=30$
aloo patty=20$</td>
<td style="text-align:center;">PATTY</td>
<td style="text-align:center;"><form>
  <input type="radio" name="gender3" value="paneer" checked>PANEER<br>
  <input type="radio" name="gender3" value="aloo">ALOO<br>
   </form></td>
<td>
<center>
<img src="patty.jpg" alt="example" width="100" Height="100">
</center>
</td>
</tr>
<tr>
<td style="text-align:center;">3</td>
<td style="text-align:center;">1/2 LITTER:40$
1LITTER=80$</td>
<td style="text-align:center;">SOFTDRINK</td>
<td style="text-align:center;"><form>
  <input type="radio" name="gender4" value="coke" checked>COKE<br>
  <input type="radio" name="gender4" value="sprite">SPRITE<br>
   </form></td>
<td>
<center>
<img src="cold.jpg" alt="example" width="100" Height="100">
</center>
</td>
</tr>
<tr>
<td style="text-align:center;">4</td>
<td style="text-align:center;">VEG=100$ABOVE
NONVEG=150$ABOVE</td>
<td style="text-align:center;">PIZZA</td>
<td style="text-align:center;"><form>
  <input type="radio" name="gender5" value="extrachees" checked>EXTRA CHEESS<br>
  <input type="radio" name="gender5" value="addon">ADDON TOPINGS<br>
   </form></td>
<td>
<center>
<img src="pizza.jpg" alt="example" width="100" Height="100">
</center>
</td>
</tr>
<tr>
<td style="text-align:center;">5</td>
<td style="text-align:center;">BIRTHDAYCAP=20$/P
CANDALS=40$
PARRTYPOPER=80$</td>
<td style="text-align:center;">DECORATION</td>
<td style="text-align:center;"><form>
  <input type="radio" name="gender6" value="birthdaycaps" checked>BIRTHDAYCAP<br>
  <input type="radio" name="gender6" value="candals">CANDALS<br>
  <input type="radio" name="gender6" value="parrtypoper">PARTTYPOPER<br>
   </form></td>
<td>
<center>
<img src="DECO.jpg" alt="example" width="100" Height="100">
</center>
</td>
</tr>
<tr>
			<td><input type="submit" value="submit"></td>
			</tr>
</table>
</center>
</body>
</html>

			<?php 
			if($_POST)
			{
				$n1=$_POST['name'];
				$n2=$_POST['addr'];
				$n3=$_POST['phone'];
				$n4=$_POST['eaddr'];
				$n5=$_POST['gender'];
				$n6=$_POST['gender2'];
				$n7=$_POST['gender3'];
				$n8=$_POST['gender4'];
				$n9=$_POST['gender5'];
				$n10=$_POST['gender6'];
				
			
			
			  echo "Name of the person =$n1\r\n<br>";
			     
			  echo "Address of the person =  $n2\r\n<br>";
			
			    echo "Phone no =    $n3\r\n<br>";
				
				 echo "Email address = $n4<br>";
				 
				 echo "the cake you choose =$n5";
				 echo "of $n6 pounds<br>";
				 echo "the patty you selected =$n7 <br>";
				 echo "the drink you choose =$n8 <br>";
				 echo "the pizza with $n9<br>";
				 echo "decoration martirail =$n10";
				 
			}

             ?>			
			