<html>
    <h1>Hola Mundo</h1>
<?php
	echo "Texto";
	echo "<p>Cadena" . " de " . "Texto</p>";
	echo "Calculos";
	echo 5 * 5;
	echo "Variables";
	//comentario
	$miNombre = "Alejandro";
	$miEdad = 50;
	echo $miNombre;
        $items =  50;   // Si la condici�n de la l�nea 9 es verdadera, se ejecutar� el c�digo que est� entre las llaves.
        if($items > 5) {
          echo "Conseguis 10% de descuento";
        }
?>
    <p><?php
    $i = 5;
    
    switch ($i) {
        case 0:
            echo '$i es 0.';
            break;
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo '$i est� en alg�n lado entre  1 y 5.';
            break;
        case 6:
        case 7:
            echo '$i es 6 o 7.';
            break;
        default:
            echo '$i es igual o mayor que 8';
    }
    ?> 
    </p>
    <p>
      <?php
       $amigos = array("Dany", "Daniel", "Tomas");
       echo $amigos[0];
       $amigos[0]="pepe";
       echo $amigos[0];
       //borrar un elemento de array
       unset ($amigos[1]);
      ?>
    </p>    
    <p>
      <?php
        // Muestra usando echo los primeros cinco n�meros pares
        for ($i = 2; $i < 11; $i = $i + 2) {
          echo $i;
        }
      ?>
    </p>
    
          <ul>
        <?php
          $lenguajes = array("JavaScript",
          "HTML/CSS", "PHP",
          "Python", "Ruby");
        
          foreach ($lenguajes as $lenguaje) {
              echo "<li>$lenguaje</li>";
          }
        
          unset($lenguajes);
        ?>
      </ul>
</html>