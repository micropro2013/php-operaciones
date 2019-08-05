<html>
    <head>
        
    </head>
    
    <body>
        
        
    <center><h1>Operaciones en php</h1></center>
       <?php 
       require("controlador.php");      
       $insta = new controlador();
       echo("<h2>suma de 3 + 4 </h2>");
       echo("<h2>====>>>es igual a: -> ".$insta->suma(3, 4)."</h2><br><br>");
       
       echo("<h2>resta de 10 - 4 </h2>");
       echo("<h2>====>>>es igual a: -> ".$insta->resta(10, 4)."</h2><br><br>");
       
       echo("<h2>multiplicacion de 15 * 4 </h2>");
       echo("<h2>====>>>es igual a: -> ".$insta->multiplicacion(15, 4)."</h2><br><br>");
       
       echo("<h2>division de 15 * 3 </h2>");
       echo("<h2>====>>>es igual a: -> ".$insta->division(15, 3)."</h2><br><br>");
       ?>
        
        
        
    </body>
</html>

