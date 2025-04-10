<?php
// Alexander Adonai Molina Rodríguez - 242310131 - Ing. Informática - POO
class Perro {
    private $nombre;
    private $raza;

    public function __construct($nombre, $raza) {
    $this->nombre = $nombre;
    $this->raza = $raza;
    }

    public function ladra($sonido) {
    return "Guau, " . $sonido;
    }

    public function ladraBajo($sonido) {
    return "guau, " . $sonido;
    }

    public function ladraAlto($sonido) {
    return "GUAU, " . $sonido;
    }

    public function mostrarDatos() {
    return "<p>Nombre: " . $this->nombre . "</p><p>Raza: " . $this->raza . "</p>";
    }

    public function getNombre() {
    return $this->nombre;
    }
}

// Alexander Adonai Molina Rodríguez - 242310131 - Ing. Informática - POO
    // Aplicación
    $perro1 = new Perro("Aullador", "Sabueso");
    $perro2 = new Perro("Gruñón", "Pitbull");
    $perro3 = new Perro("Ladrador", "Retriever");

    echo "<div>";
    echo "<h2>" . $perro1->getNombre() . "</h2>";
    echo $perro1->mostrarDatos();
    echo "<p>" . $perro1->getNombre() . " dice: " . $perro1->ladra("Auuuuuuuuuuuuu") 
    . "</p>";
    echo "</div>";

    echo "<div>";
    echo "<h2>" . $perro2->getNombre() . "</h2>";
    echo $perro2->mostrarDatos();
    echo "<p>" . $perro2->getNombre() . " dice: " . $perro2->ladraBajo("¡GRRR!") . "</p>";
    echo "</div>";

    echo "<div>";
    echo "<h2>" . $perro3->getNombre() . "</h2>";
    echo $perro3->mostrarDatos();
    echo "<p>" . $perro3->getNombre() . " dice: " 
    . $perro3->ladraAlto("¡YIP! ¡YIP! ¡YIP! ¡YIP!") . "</p>";
    echo "</div>";

?>