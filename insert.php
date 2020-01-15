<?php
$con = mysqli_connect ('127.0.0.1','root','');
if(!$con)
{
    echo 'not connected';

}
if(!mysqli_select_db($con,'loginsystem'))
{
    echo'error';

}
$age=$_POST('age');
$gender=$_POST('gender');
$location=$_POST('location');
$income=$_POST('income');
$education=$_POST('education');
$language=$_POST('language');
$sql="INSERT INTO survey(age,gender,location,income,educaton,language)VALUES('$age','$gender','$location','$income','$education','$language')";
if(!mysqli_query($con,$sql))
{
echo'not inserted';


}

else
{
    echo'inserted';
}
header("refresh:2;url= survey.html");





?>