<?php $marks=67;
if($marks>=90)
{
echo "<b>The student got A+</b>";}
else if($marks>=80 && $marks<90)
{
echo "<b>The student got A</b>";}
else if ($marks>=70 && $marks<80){
echo "<b>The Student got B</b>";}
else if ($marks>=60 && $marks<70)
{
echo "<b>The student got C</b>";}
else {echo "<b>The student got F</b>";}
?>