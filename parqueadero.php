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

$vehiculoBuscado = $parqueadero->buscarVehiculo("ABC123");
if ($vehiculoBuscado) {
    $vehiculoBuscado->mostrarInformacion();
} else {
    echo "Vehículo no encontrado.";
}