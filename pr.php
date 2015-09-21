<html>
    
    <head>
        <style>
            table{color:red;
            background-color: blue;}
        </style>
    </head>
<body>

<?php

echo "<table border=0 cellspacing=6><tr>";


for($tabla=1; $tabla<=12; $tabla++) 
{

   /* echo "<table  border=1 cellspacing=0 cellpadding=2>";
     echo "<tr><th colspan=5> Tabla del $tabla </th></tr>";*/
    
    
     echo "<table  border=1>";
     echo "<tr><th colspan=5> Tabla del $tabla </th></tr>";
 
     for($i=1; $i<=12; $i++) 
     {
       echo "<tr><td align=center>$tabla</td>
                 <td align=center>x</td>
                 <td align=center>$i</td>
                 <td align=center>=</td>
                 <td align=center> ". ($tabla*$i) . "</td>
             </tr>";
     }
     echo "</table> <br/>";
     
  echo "</td>";
}
echo "</tr></table>";

?>
</body>   
</html>

            
       






