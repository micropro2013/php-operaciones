<html>
    <head>
        
    </head>
    
    <body>
        
        
    <center><h1>Operaciones en php</h1></center>
       <?php 
       require("controlador.php");      
       $insta = new controlador();
       echo("<h2>suma de 3 + 4 </h2>");
       echo("<h2>====>>>es igual al".$insta->suma(3, 4)."</h2><br><br>");
       
       echo("<h2>resta de 10 + 4 </h2>");
       echo("<h2>====>>>es igual al".$insta->suma(10, 4)."</h2><br><br>");
       ?>
        
        
        
    </body>
</html>

