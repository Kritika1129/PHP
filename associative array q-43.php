<html>
<?php 
/* First method to associate and create an array. */
$salaries = array(
    "roshan" => 2000,
    "twinkle" => 1000,
    "zara" => 500
);

echo "Salary of Roshan is " . $salaries['roshan'] . "<br />";
echo "Salary of Twinkle is " . $salaries['twinkle'] . "<br />";
echo "Salary of Zara is " . $salaries['zara'] . "<br />";

/* Second method to create an array. */
$salaries['roshan'] = "high";
$salaries['qadir'] = "medium";
$salaries['twinkle'] = "low";

echo "Salary of Roshan is " . $salaries['roshan'] . "<br />";
echo "Salary of Twinkle is " . $salaries['twinkle'] . "<br />";
echo "Salary of Zara is " . $salaries['zara'] . "<br />";
echo"this program is written by kritika erp-067";

?>
</html>
