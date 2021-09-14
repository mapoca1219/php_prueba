<?php

/**
 * controlador utilidades
 */
class UtilitiesController
{
	public function calculateNumbers()
	{
        require 'Views/Layout.php';
        require 'Views/Utilities/Numbers.php';
        require 'views/Scripts.php';
	}

	public function calculateResistance()
	{
    	require 'Views/Layout.php';
        require 'Views/Utilities/Resistance.php';
        require 'views/Scripts.php';
	}

	public function save()
	{
		if (isset($_POST['valor'])) {
			$valor = $_POST['valor'];
			$utilidad = $_POST['utilidad'];
			$iva = $_POST['iva'];
			$valorV = ($valor * $utilidad)/100;
            $valorVenta = $valorV+$valor;
            $valorVen = ($valorVenta*$iva)/100;
            $valorVenF = $valorVen+$valorVenta;
            $ganancia = $valorVenF-$valor;
            require 'Views/Layout.php';
            require 'Views/Utilities/Numbers.php';
            require 'views/Scripts.php';
		}
	}

	public function saveResistance()
	{
		if (isset($_POST['banda1'])) {
			$banda1 = $_POST['banda1'];
			$banda2 = $_POST['banda2'];
			$banda3 = $_POST['banda3'];
            $banda = $banda1.''.$banda2;
			$ohmio = $banda*$banda3;
			require 'Views/Layout.php';
        	require 'Views/Utilities/Resistance.php';
        	require 'views/Scripts.php';
		}
	}
}