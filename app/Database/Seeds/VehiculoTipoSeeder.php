<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class VehiculoTipoSeeder extends Seeder
{
	public function run()
	{
		$data = [
			array('VEHICULOTIPOID' => '1', 'VEHICULOTIPODESCR' => 'CONVERTIBLE'),
			array('VEHICULOTIPOID' => '2', 'VEHICULOTIPODESCR' => 'COUPE'),
			array('VEHICULOTIPOID' => '3', 'VEHICULOTIPODESCR' => 'LIMOUSINE'),
			array('VEHICULOTIPOID' => '4', 'VEHICULOTIPODESCR' => 'SEDAN'),
			array('VEHICULOTIPOID' => '5', 'VEHICULOTIPODESCR' => 'SPORT'),
			array('VEHICULOTIPOID' => '6', 'VEHICULOTIPODESCR' => 'VAGONETA'),
			array('VEHICULOTIPOID' => '7', 'VEHICULOTIPODESCR' => 'COMBI'),
			array('VEHICULOTIPOID' => '9', 'VEHICULOTIPODESCR' => 'AUTO TANQUE'),
			array('VEHICULOTIPOID' => '10', 'VEHICULOTIPODESCR' => 'CABINA'),
			array('VEHICULOTIPOID' => '11', 'VEHICULOTIPODESCR' => 'CAJA'),
			array('VEHICULOTIPOID' => '12', 'VEHICULOTIPODESCR' => 'CASETA'),
			array('VEHICULOTIPOID' => '13', 'VEHICULOTIPODESCR' => 'JEEP'),
			array('VEHICULOTIPOID' => '14', 'VEHICULOTIPODESCR' => 'CELDILLAS'),
			array('VEHICULOTIPOID' => '15', 'VEHICULOTIPODESCR' => 'CHASIS'),
			array('VEHICULOTIPOID' => '16', 'VEHICULOTIPODESCR' => 'ESTACAS'),
			array('VEHICULOTIPOID' => '17', 'VEHICULOTIPODESCR' => 'MICROBUS'),
			array('VEHICULOTIPOID' => '18', 'VEHICULOTIPODESCR' => 'OMNIBUS'),
			array('VEHICULOTIPOID' => '19', 'VEHICULOTIPODESCR' => 'PANEL'),
			array('VEHICULOTIPOID' => '20', 'VEHICULOTIPODESCR' => 'PICK-UP'),
			array('VEHICULOTIPOID' => '21', 'VEHICULOTIPODESCR' => 'PIPA'),
			array('VEHICULOTIPOID' => '22', 'VEHICULOTIPODESCR' => 'PLATAFORMA'),
			array('VEHICULOTIPOID' => '23', 'VEHICULOTIPODESCR' => 'REDILAS CONVERTIBLES'),
			array('VEHICULOTIPOID' => '24', 'VEHICULOTIPODESCR' => 'REFRIGERADOR'),
			array('VEHICULOTIPOID' => '25', 'VEHICULOTIPODESCR' => 'TANQUE'),
			array('VEHICULOTIPOID' => '26', 'VEHICULOTIPODESCR' => 'TRACTOR'),
			array('VEHICULOTIPOID' => '27', 'VEHICULOTIPODESCR' => 'VANNETTE'),
			array('VEHICULOTIPOID' => '28', 'VEHICULOTIPODESCR' => 'VOLTEO'),
			array('VEHICULOTIPOID' => '29', 'VEHICULOTIPODESCR' => 'DOLLY'),
			array('VEHICULOTIPOID' => '30', 'VEHICULOTIPODESCR' => 'HABITACION'),
			array('VEHICULOTIPOID' => '31', 'VEHICULOTIPODESCR' => 'INDUSTRIAL'),
			array('VEHICULOTIPOID' => '32', 'VEHICULOTIPODESCR' => 'JAULA'),
			array('VEHICULOTIPOID' => '33', 'VEHICULOTIPODESCR' => 'TANQUES (S) O (R)'),
			array('VEHICULOTIPOID' => '34', 'VEHICULOTIPODESCR' => 'AMBULANCIA'),
			array('VEHICULOTIPOID' => '35', 'VEHICULOTIPODESCR' => 'CARROZA'),
			array('VEHICULOTIPOID' => '36', 'VEHICULOTIPODESCR' => 'EQUIPO ESPECIAL'),
			array('VEHICULOTIPOID' => '37', 'VEHICULOTIPODESCR' => 'GRUA'),
			array('VEHICULOTIPOID' => '38', 'VEHICULOTIPODESCR' => 'REVOLVEDORA'),
			array('VEHICULOTIPOID' => '39', 'VEHICULOTIPODESCR' => 'DEMOSTRADORA'),
			array('VEHICULOTIPOID' => '40', 'VEHICULOTIPODESCR' => 'MOTOS'),
			array('VEHICULOTIPOID' => '41', 'VEHICULOTIPODESCR' => 'AUTOBUS'),
			array('VEHICULOTIPOID' => '42', 'VEHICULOTIPODESCR' => 'VAN'),
			array('VEHICULOTIPOID' => '43', 'VEHICULOTIPODESCR' => 'MOTONETA'),
			array('VEHICULOTIPOID' => '44', 'VEHICULOTIPODESCR' => 'SEMI REMOLQUE'),
			array('VEHICULOTIPOID' => '45', 'VEHICULOTIPODESCR' => 'REMOLQUE'),
			array('VEHICULOTIPOID' => '46', 'VEHICULOTIPODESCR' => 'CAMION'),
			array('VEHICULOTIPOID' => '47', 'VEHICULOTIPODESCR' => 'CAMIONETA'),
			array('VEHICULOTIPOID' => '48', 'VEHICULOTIPODESCR' => 'CASA RODANTE'),
			array('VEHICULOTIPOID' => '49', 'VEHICULOTIPODESCR' => 'CISTERNAS'),
			array('VEHICULOTIPOID' => '50', 'VEHICULOTIPODESCR' => 'CONTENEDOR'),

		];
		$this->db->table('VEHICULOTIPO')->insertBatch($data);
	}
}
