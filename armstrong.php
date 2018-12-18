



<?php 
 $s=153;
$renum=0;
$sum=0;
echo "$s";
while ($s>0)
 {
	$renum=$renum*10+$s%10;
	$s=(int)($s/10);
	$sum=$sum+$renum*$renum*$renum;

}

if ($sum==$s)

 {
	echo "The no is armstrong no.";
} 
else
 {
	echo "The no is not armstrong no.";
}


 ?>



























