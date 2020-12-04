<?php
// El Operador de Resolución de Ámbito  o en términos simples, el doble dos-puntos, permite acceder a elementos estáticos y constantes de una clase.

class MyClass {
    const CONST_VALUE = 'Un valor constante';

     public static function doubleColon() {
       	print "<p>Doble dos puntos</p>";
    }
}

$classname = 'MyClass';
print "<p>".$classname::CONST_VALUE."</p>"; 

print "<p>". MyClass::CONST_VALUE."</p>"; 

print "<p>". MyClass::doubleColon()."</p>"; 

?>