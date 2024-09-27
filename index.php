<?php
require_once 'Parqueadero.php';

$parqueadero = new Parqueadero();

$parqueadero->agregarVehiculo('ABC123', 'Toyota', 'Roja', 'Juan Torres', '12345678', '09:00', '12:00', 1, 5);

$vehiculo = $parqueadero->buscarVehiculo('ABC123');
if ($vehiculo) {
    echo "Vehículo encontrado en el piso " . $vehiculo['piso'] . ", lugar " . $vehiculo['lugar'] . ": " . $vehiculo['marca'] . " " . $vehiculo['color'] . "\n";
} else {
    echo "Vehículo no encontrado.\n";
}

$valor = $parqueadero->calcularValor('ABC123');
echo "Valor a pagar: $" . $valor . " USD\n";
?>
