
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ejemplo nuevos controles</title>
</head>
<body>
    
    <form action="nuevo.php" method="post">
    <table  style=" margin: auto">
        
        <tr style="text-align: center;">
              <td colspan="4" > CRUD MARCA </td>  
                 
        </tr>  
        <tr>
            <td> </td>  
            <td>CODIGO MARCA </td>   
            <td> <input type="text" name="codigo"/></td>   
            <td> </td>    
        </tr>  
          <tr>
            <td> </td>  
            <td>NOMBRE MARCA </td>   
            <td><input type="text" name="nombre"/> </td>   
            <td> </td>     
          <tr>
            <td> </td>  
            <td>FECHA REGISTRO </td>   
            <td> <input type="date" name="reg"/></td>   
            <td> </td>    
        </tr>  
          <tr>
            <td> </td>  
            <td>FECHA ACTUALIZACION </td>   
            <td><input type="date" name="act"/> </td>   
            <td> </td>    
        </tr>  
          <tr>
            <td> </td>  
            <td> FLAG ACTIVO </td>   
            <td>
                <SELECT NAME="selCombo" > 
<OPTION VALUE="">Seleccione</OPTION>
<OPTION VALUE="1">1</OPTION>
<OPTION VALUE="2">2</OPTION>

</SELECT> </td>   
            <td></td>    
        </tr>    
        <tr>
            <td colspan="4" style="text-align: center" >
           <input type="submit" value="Grabar">       
                
            </td>   
            
            
        </tr>
        
        
    </table>
 
</form>
</body>
</html>




<?php


