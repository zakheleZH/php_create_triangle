<?php	
for ($i=1; $i<=30; $i++) 	   //outer loop    
{ 	 
for ($k=30; $k>$i; $k--)	 // inner loop
{	  
//print one space throgh html ;
echo " ";	  
}	
for($j=1;$j<=$i;$j++)	  
{	  	
echo "<font color='blue'>*</font>";	  // displaying the star
}	  	
echo "<br/>";	// putting the break between the lines
} 
?>