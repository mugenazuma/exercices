
<!DOCTYPE html>
<html>
<body>
<h1 align=center>Multiplication table</h1>
<table align=border width=500 height=500>

<?php


for($i=0;$i<=12;++$i)
{
    echo('<tr>');
    for($j=0;$j<=12;++$j)
{
    echo('<td>'.$i*$j.'</td>');
}
echo('</tr>');
}
?>

</body>
</html>