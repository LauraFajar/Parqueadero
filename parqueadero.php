<?php
class Parqueadero {
    private $vehiculos = [];

    public function agregarVehiculo($placa, $marca, $color, $nombre, $documento, $horaIngreso, $horaSalida, $piso, $lugar) {
        $this->vehiculos[$placa] = [
            'placa' => $placa,
            'marca' => $marca,
            'color' => $color,
            'nombre' => $nombre,
            'documento' => $documento,
            'horaIngreso' => $horaIngreso,
            'horaSalida' => $horaSalida,
            'piso' => $piso,
            'lugar' => $lugar
        ];
    }

    public function buscarVehiculo($placa) {
        return isset($this->vehiculos[$placa]) ? $this->vehiculos[$placa] : null;
    }

    public function calcularValor($placa) {
        if (isset($this->vehiculos[$placa])) {
            $vehiculo = $this->vehiculos[$placa];
            $horaIngreso = strtotime($vehiculo['horaIngreso']);
            $horaSalida = strtotime($vehiculo['horaSalida']);
            $horas = ($horaSalida - $horaIngreso) / 3600;
            return $horas * 2; 
        }
        return 0;
    }
}
?>
