<?php
class Vehiculo {
    protected $placa;
    protected $marca;
    protected $color;

    public function __construct($placa, $marca, $color) {
        $this->placa = $placa;
        $this->marca = $marca;
        $this->color = $color;
    }

    public function mostrarInformacion() {
        echo "Placa: $this->placa<br>";
        echo "Marca: $this->marca<br>";
        echo "Color: $this->color<br>";
    }

    public function getPlaca() {
        return $this->placa;
    }
}

class Carro extends Vehiculo {
    private $numPuertas;

    public function __construct($placa, $marca, $color, $numPuertas) {
        parent::__construct($placa, $marca, $color);
        $this->numPuertas = $numPuertas;
    }

    public function mostrarInformacion() {
        parent::mostrarInformacion();
        echo "Número de puertas: $this->numPuertas<br>";
    }
}

class Moto extends Vehiculo {
    private $cilindrada;

    public function __construct($placa, $marca, $color, $cilindrada) {
        parent::__construct($placa, $marca, $color);
        $this->cilindrada = $cilindrada;
    }

    public function mostrarInformacion() {
        parent::mostrarInformacion();
        echo "Cilindrada: $this->cilindrada<br>";
    }
}

class Espacio {
    private $piso;
    private $numero;
    private $ocupado;
    private $vehiculo;

    public function getVehiculo() {
        return $this->vehiculo;
    }
}

class Parqueadero {
    private $espacios =[];

    public function buscarVehiculo($placa) {
        foreach ($this->espacios as $espacio) {
            if ($espacio->getVehiculo() && $espacio->getVehiculo()->getPlaca() == $placa) {
                return $espacio->getVehiculo();
            }
        }
        return null;
    }
}

$parqueadero = new Parqueadero();
$vehiculo1 = new Carro("ABC123", "Toyota", "Rojo", 4);
$vehiculo2 = new Carro("CGZ456", "Audi", "Blanco", 5);
$vehiculo3 = new Carro("DFR789", "Acura", "Negro", 3);
$vehiculo4 = new Carro("FGH321", "Nissan", "Gris", 3);
$vehiculo5 = new Carro("AVG465", "Chevrolet", "Azul", 4);

$vehiculo1->mostrarInformacion();
$vehiculo2->mostrarInformacion();
$vehiculo3->mostrarInformacion();
$vehiculo4->mostrarInformacion();
$vehiculo5->mostrarInformacion();