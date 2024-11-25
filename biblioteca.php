<?php
class Libro {
    private $titulo;
    private $autor;
    private $anioPublicacion;
    private $disponible;

    public function __construct($titulo, $autor, $anioPublicacion) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anioPublicacion = $anioPublicacion;
        $this->disponible = true; 
    }

    public function prestarLibro() {
        if ($this->disponible) {
            $this->disponible = false;
            echo "El libro '{$this->titulo}' ha sido prestado.<br>";
        } else {
            echo "El libro '{$this->titulo}' ya está prestado.<br>";
        }
    }

    public function devolverLibro() {
        $this->disponible = true;
        echo "El libro '{$this->titulo}' ha sido devuelto.<br>";
    }

    public function mostrarInformacion() {
        $estado = $this->disponible ? "Disponible" : "Prestado";
        echo "Título: {$this->titulo}<br>";
        echo "Autor: {$this->autor}<br>";
        echo "Año de Publicación: {$this->anioPublicacion}<br>";
        echo "Estado: {$estado}<br><br>";
    }
}

$libro1 = new Libro("Cien Años de Soledad", "Gabriel García Márquez", 1967);
$libro2 = new Libro("Don Quijote de la Mancha", "Miguel de Cervantes", 1605);
$libro3 = new Libro("El Principito", "Antoine de Saint-Exupéry", 1943);

echo "<h2>Información de los libros:</h2>";
$libro1->mostrarInformacion();
$libro2->mostrarInformacion();
$libro3->mostrarInformacion();

echo "<h2>Intentar prestar un libro ya prestado:</h2>";
$libro1->prestarLibro(); 
$libro1->prestarLibro(); 

echo "<h2>Devolver un libro y verificar su estado:</h2>";
$libro1->devolverLibro();
$libro1->mostrarInformacion();

echo "<h2>Demostración del uso de todos los métodos:</h2>";
$libro2->prestarLibro();
$libro2->mostrarInformacion();
$libro2->devolverLibro();
$libro2->mostrarInformacion();

$libro3->prestarLibro();
$libro3->mostrarInformacion();
$libro3->devolverLibro();
$libro3->mostrarInformacion();
?>
