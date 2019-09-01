<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    






<!-- /* Question 1 : Write a PHP script to display names and the salaries amounts,
 within a table. ou should use `echo ` to generate your table. */
//////////////////////// Your Code Here ///////////////////// -->

<?php
$counter=0;
$names=array("hadeel","raghade");
$salaries_amounts=array("first","sec");

while($counter<2){
echo " $names[$counter].$salaries_amounts[$counter].<br/>";
$counter++;
}


?>
<br/>


<!-- /*Question 2 : Write a PHP script which displays the capital and country name from the below array 
$c. as unordered list after sorting the array list by countries names  */
//////////////////////// Your Code Here ///////////////////// -->
<?php
$countries = array( "Italy"=>"Rome",
              "Luxembourg"=>"Luxembourg",
               "Belgium"=> "Brussels",
               "Denmark"=>"Copenhagen",
               "Finland"=>"Helsinki",
               "France" => "Paris",
               "Slovakia"=>"Bratislava" ) ;

            //    print_r($countries);
            //    foreach ($countries as $key => &$val) {}
                
            //     var_dump($arr1);

                while (list($key, $value) = each($countries)) { 
                    echo "$key => $value \r\n"; 
                }
                ?>
<br/>

<!-- /*Question 3 : Write a script to build the following stars pattern, using a nested for loop.

*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
*

*/ -->
<?php
$stars="";
$star= "*";
for($i=0;$i<5;$i++){
    for($y=0;$y<5;$y++){
        $stars= $stars.$star;
        echo $stars ."\t\n";
    }
    echo $stars;
    for($z=5;$z>1;$z--){
        $stars= $stars-$star;
        echo $stars."\t\n" ;

    }
}

?>
<br/>

<!-- /*Question 4 : Write a PHP script to calculate the difference between two dates.
Input : 1981-11-04, 2013-09-04
Output : 31 years, 10 months, 11 days
*/ -->

<?php
$date1 =date("04,11,1981");             

$date2 =date("04,9,2013");

$diff =abs($date2-$date1);
echo $diff;


?>
<br/>

<!-- 
/*Question 5 : Create a simple HTML form that accept the user name after submitting display
 the name using PHP echo statement under the form. */ -->
<?php
$username="Hadeel Fleifel";

echo $username;

?>

 </body>
</html>