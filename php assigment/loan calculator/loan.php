<html>
<head>
<title>Loan Calculator</title>
</head>
<body>
<form method="post">
<h2>Calculate your instalment</h2>
<table>
<tr>
<td>Loan capital</td><td><input type="text" name="capital" maxlength="7" size="7"></td>
</tr>
<tr>
<td>purpose of loan</td>
<td>
<select name="purpose">
<option>car</option>
<option>HOME</option>
<option>personal</option>
</select>
</td>

<tr>
<td>Time in years</td>
<td>
<select name="year">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
</select>
</td>
</tr>
<tr>
<td>Interest</td>
<td>
<select name="interest">
<option>1.00</option>
<option>1.25</option>
<option>1.50</option>
<option>1.75</option>
<option>2.00</option>
<option>2.25</option>
<option>2.50</option>
<option>2.75</option>
<option>3.00</option>
<option>3.25</option>
<option>3.50</option>
<option>3.75</option>
<option>4.00</option>
<option>4.25</option>
<option>4.75</option>
<option>5.00</option>
</select>
</td>
</tr>
<tr>
<td>Instalment</td>
<td>
<select name="instalment">
<option>Fixed</option>
<option>Annuity</option>
</select>
</td>
</tr>
</table>
<br />
<input type="submit" value="Calculate">
</form>
</body>
</html>
<?php 
if($_POST)
{
$purpose=$_POST['purpose'];
$capital=$_POST['capital']; 
$interest=$_POST['interest']; 
$year=$_POST['year']; 
$instalment=$_POST['instalment']; 

print "purpose $purpose<br>" ;
print "Capital $capital<br>"; 
print "Interest $interest<br>"; 
print "Instalment $instalment<br>"; 
print "Years $year<br>"; 

 
$months=$year * 12; 

 
if (strcmp($instalment,"Fixed")==0) 

{ 
 
    $fixedPayment=$capital / $months; 
    $interestRateForMonth=$interest / 12; 

 
    for ($i=0;$i<$months;$i++) 
    { 
 
        $interestForMonth=$capital / 100 * $interestRateForMonth; 

        $capital=$capital - $fixedPayment; 
 
        $paymentForMonth=$fixedPayment + $interestForMonth; 
 
        $month=$i+1; 
        printf("$month payment is %.2f<br>", $paymentForMonth); 
    }     
} 
 
else 
{ 
 
    $interest=$interest / 100; 
    $result=$interest / 12 * pow(1 + $interest / 12,$months) / (pow(1 + $interest / 12,$months) - 1) * $capital;     
    printf("Monthly pay is %.2f", $result); 
} 
}
?> 
