<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OcupacionSeeder extends Seeder
{
	public function run()
	{
		$data = [
			array('PERSONAOCUPACIONID' => 1, 'PERSONAOCUPACIONDESCR' => 'ABOGADO'),
			array('PERSONAOCUPACIONID' => 2, 'PERSONAOCUPACIONDESCR' => 'ACOMODADOR DE AUTOS'),
			array('PERSONAOCUPACIONID' => 3, 'PERSONAOCUPACIONDESCR' => 'ACTOR'),
			array('PERSONAOCUPACIONID' => 4, 'PERSONAOCUPACIONDESCR' => 'ACTRIZ'),
			array('PERSONAOCUPACIONID' => 5, 'PERSONAOCUPACIONDESCR' => 'ACTUARIO'),
			array('PERSONAOCUPACIONID' => 6, 'PERSONAOCUPACIONDESCR' => 'ACUACULTOR'),
			array('PERSONAOCUPACIONID' => 7, 'PERSONAOCUPACIONDESCR' => 'ADMINISTRADOR'),
			array('PERSONAOCUPACIONID' => 8, 'PERSONAOCUPACIONDESCR' => 'AGIOTISTA'),
			array('PERSONAOCUPACIONID' => 9, 'PERSONAOCUPACIONDESCR' => 'AGRICULTOR'),
			array('PERSONAOCUPACIONID' => 10, 'PERSONAOCUPACIONDESCR' => 'AGRONOMO'),
			array('PERSONAOCUPACIONID' => 11, 'PERSONAOCUPACIONDESCR' => 'ALBAÑIL'),
			array('PERSONAOCUPACIONID' => 12, 'PERSONAOCUPACIONDESCR' => 'ALFARERO'),
			array('PERSONAOCUPACIONID' => 13, 'PERSONAOCUPACIONDESCR' => 'ALMACENISTA'),
			array('PERSONAOCUPACIONID' => 14, 'PERSONAOCUPACIONDESCR' => 'ALQUILADOR'),
			array('PERSONAOCUPACIONID' => 15, 'PERSONAOCUPACIONDESCR' => 'AMA DE CASA'),
			array('PERSONAOCUPACIONID' => 16, 'PERSONAOCUPACIONDESCR' => 'AMA DE LLAVES'),
			array('PERSONAOCUPACIONID' => 17, 'PERSONAOCUPACIONDESCR' => 'ANALISTA'),
			array('PERSONAOCUPACIONID' => 18, 'PERSONAOCUPACIONDESCR' => 'ANIMADOR'),
			array('PERSONAOCUPACIONID' => 19, 'PERSONAOCUPACIONDESCR' => 'ANTROPOLOGO'),
			array('PERSONAOCUPACIONID' => 20, 'PERSONAOCUPACIONDESCR' => 'ARBITRO'),
			array('PERSONAOCUPACIONID' => 21, 'PERSONAOCUPACIONDESCR' => 'ARQUEOLOGO'),
			array('PERSONAOCUPACIONID' => 22, 'PERSONAOCUPACIONDESCR' => 'ARQUITECTO'),
			array('PERSONAOCUPACIONID' => 23, 'PERSONAOCUPACIONDESCR' => 'ARRENDADOR'),
			array('PERSONAOCUPACIONID' => 24, 'PERSONAOCUPACIONDESCR' => 'ARTESANO'),
			array('PERSONAOCUPACIONID' => 25, 'PERSONAOCUPACIONDESCR' => 'ASESOR'),
			array('PERSONAOCUPACIONID' => 26, 'PERSONAOCUPACIONDESCR' => 'AUDITOR'),
			array('PERSONAOCUPACIONID' => 27, 'PERSONAOCUPACIONDESCR' => 'AUXILIAR'),
			array('PERSONAOCUPACIONID' => 28, 'PERSONAOCUPACIONDESCR' => 'AVIADOR'),
			array('PERSONAOCUPACIONID' => 29, 'PERSONAOCUPACIONDESCR' => 'BAILARIN'),
			array('PERSONAOCUPACIONID' => 30, 'PERSONAOCUPACIONDESCR' => 'BARRENDERO'),
			array('PERSONAOCUPACIONID' => 31, 'PERSONAOCUPACIONDESCR' => 'BEISBOLISTA'),
			array('PERSONAOCUPACIONID' => 32, 'PERSONAOCUPACIONDESCR' => 'BIBLIOTECARIO'),
			array('PERSONAOCUPACIONID' => 33, 'PERSONAOCUPACIONDESCR' => 'BIBLIOTECONOMO'),
			array('PERSONAOCUPACIONID' => 34, 'PERSONAOCUPACIONDESCR' => 'BIOLOGO'),
			array('PERSONAOCUPACIONID' => 35, 'PERSONAOCUPACIONDESCR' => 'BOLERO'),
			array('PERSONAOCUPACIONID' => 36, 'PERSONAOCUPACIONDESCR' => 'BOMBERO'),
			array('PERSONAOCUPACIONID' => 37, 'PERSONAOCUPACIONDESCR' => 'BOTANICO'),
			array('PERSONAOCUPACIONID' => 38, 'PERSONAOCUPACIONDESCR' => 'BOTONES'),
			array('PERSONAOCUPACIONID' => 39, 'PERSONAOCUPACIONDESCR' => 'BUZO'),
			array('PERSONAOCUPACIONID' => 40, 'PERSONAOCUPACIONDESCR' => 'CABALLERANGO'),
			array('PERSONAOCUPACIONID' => 41, 'PERSONAOCUPACIONDESCR' => 'CABARETERA'),
			array('PERSONAOCUPACIONID' => 42, 'PERSONAOCUPACIONDESCR' => 'CADETE'),
			array('PERSONAOCUPACIONID' => 43, 'PERSONAOCUPACIONDESCR' => 'CAJERO'),
			array('PERSONAOCUPACIONID' => 44, 'PERSONAOCUPACIONDESCR' => 'CAMARERO'),
			array('PERSONAOCUPACIONID' => 45, 'PERSONAOCUPACIONDESCR' => 'CAMPESINO'),
			array('PERSONAOCUPACIONID' => 46, 'PERSONAOCUPACIONDESCR' => 'CANTINERO'),
			array('PERSONAOCUPACIONID' => 47, 'PERSONAOCUPACIONDESCR' => 'CAPATAZ'),
			array('PERSONAOCUPACIONID' => 48, 'PERSONAOCUPACIONDESCR' => 'CAPTURISTA'),
			array('PERSONAOCUPACIONID' => 49, 'PERSONAOCUPACIONDESCR' => 'CARGADOR'),
			array('PERSONAOCUPACIONID' => 50, 'PERSONAOCUPACIONDESCR' => 'CARNICERO'),
			array('PERSONAOCUPACIONID' => 51, 'PERSONAOCUPACIONDESCR' => 'CARPINTERO'),
			array('PERSONAOCUPACIONID' => 52, 'PERSONAOCUPACIONDESCR' => 'CARROCERO'),
			array('PERSONAOCUPACIONID' => 53, 'PERSONAOCUPACIONDESCR' => 'CARTERO'),
			array('PERSONAOCUPACIONID' => 54, 'PERSONAOCUPACIONDESCR' => 'CATADOR'),
			array('PERSONAOCUPACIONID' => 55, 'PERSONAOCUPACIONDESCR' => 'CAZADOR'),
			array('PERSONAOCUPACIONID' => 56, 'PERSONAOCUPACIONDESCR' => 'CERRAJERO'),
			array('PERSONAOCUPACIONID' => 57, 'PERSONAOCUPACIONDESCR' => 'CHOFER'),
			array('PERSONAOCUPACIONID' => 58, 'PERSONAOCUPACIONDESCR' => 'CIRQUERO'),
			array('PERSONAOCUPACIONID' => 59, 'PERSONAOCUPACIONDESCR' => 'COBRADOR'),
			array('PERSONAOCUPACIONID' => 60, 'PERSONAOCUPACIONDESCR' => 'COCINERO'),
			array('PERSONAOCUPACIONID' => 61, 'PERSONAOCUPACIONDESCR' => 'COMERCIANTE'),
			array('PERSONAOCUPACIONID' => 62, 'PERSONAOCUPACIONDESCR' => 'COMPOSITOR'),
			array('PERSONAOCUPACIONID' => 63, 'PERSONAOCUPACIONDESCR' => 'CONDUCTOR DE MAQUINARIA'),
			array('PERSONAOCUPACIONID' => 64, 'PERSONAOCUPACIONDESCR' => 'CONSERJE'),
			array('PERSONAOCUPACIONID' => 65, 'PERSONAOCUPACIONDESCR' => 'CONTADOR'),
			array('PERSONAOCUPACIONID' => 66, 'PERSONAOCUPACIONDESCR' => 'CONTRATISTA'),
			array('PERSONAOCUPACIONID' => 67, 'PERSONAOCUPACIONDESCR' => 'COSTURERA'),
			array('PERSONAOCUPACIONID' => 68, 'PERSONAOCUPACIONDESCR' => 'CRONISTA'),
			array('PERSONAOCUPACIONID' => 69, 'PERSONAOCUPACIONDESCR' => 'CUIDADOR'),
			array('PERSONAOCUPACIONID' => 70, 'PERSONAOCUPACIONDESCR' => 'CURTIDOR'),
			array('PERSONAOCUPACIONID' => 71, 'PERSONAOCUPACIONDESCR' => 'DECORADOR(A)'),
			array('PERSONAOCUPACIONID' => 72, 'PERSONAOCUPACIONDESCR' => 'DEMOGRAFO'),
			array('PERSONAOCUPACIONID' => 73, 'PERSONAOCUPACIONDESCR' => 'DEPORTISTA'),
			array('PERSONAOCUPACIONID' => 74, 'PERSONAOCUPACIONDESCR' => 'DERMATOLOGO'),
			array('PERSONAOCUPACIONID' => 75, 'PERSONAOCUPACIONDESCR' => 'DESCONOCIDA'),
			array('PERSONAOCUPACIONID' => 76, 'PERSONAOCUPACIONDESCR' => 'DESEMPLEADO'),
			array('PERSONAOCUPACIONID' => 77, 'PERSONAOCUPACIONDESCR' => 'DETECTIVE'),
			array('PERSONAOCUPACIONID' => 78, 'PERSONAOCUPACIONDESCR' => 'DIBUJANTE'),
			array('PERSONAOCUPACIONID' => 79, 'PERSONAOCUPACIONDESCR' => 'DIRECTIVO'),
			array('PERSONAOCUPACIONID' => 80, 'PERSONAOCUPACIONDESCR' => 'DIRIGENTE'),
			array('PERSONAOCUPACIONID' => 81, 'PERSONAOCUPACIONDESCR' => 'DISEÑADOR(A)'),
			array('PERSONAOCUPACIONID' => 82, 'PERSONAOCUPACIONDESCR' => 'ECOLOGO'),
			array('PERSONAOCUPACIONID' => 83, 'PERSONAOCUPACIONDESCR' => 'EDUCADORA'),
			array('PERSONAOCUPACIONID' => 84, 'PERSONAOCUPACIONDESCR' => 'EJECUTIVO'),
			array('PERSONAOCUPACIONID' => 85, 'PERSONAOCUPACIONDESCR' => 'EJIDATARIO'),
			array('PERSONAOCUPACIONID' => 86, 'PERSONAOCUPACIONDESCR' => 'ELECTRICISTA'),
			array('PERSONAOCUPACIONID' => 87, 'PERSONAOCUPACIONDESCR' => 'EMPACADOR'),
			array('PERSONAOCUPACIONID' => 88, 'PERSONAOCUPACIONDESCR' => 'EMPLEADO'),
			array('PERSONAOCUPACIONID' => 89, 'PERSONAOCUPACIONDESCR' => 'ENFERMERO(A)'),
			array('PERSONAOCUPACIONID' => 90, 'PERSONAOCUPACIONDESCR' => 'ENTRENADOR'),
			array('PERSONAOCUPACIONID' => 91, 'PERSONAOCUPACIONDESCR' => 'ESCULTOR'),
			array('PERSONAOCUPACIONID' => 92, 'PERSONAOCUPACIONDESCR' => 'ESTILISTA'),
			array('PERSONAOCUPACIONID' => 93, 'PERSONAOCUPACIONDESCR' => 'ESTUDIANTE'),
			array('PERSONAOCUPACIONID' => 94, 'PERSONAOCUPACIONDESCR' => 'ETNOLOGO'),
			array('PERSONAOCUPACIONID' => 95, 'PERSONAOCUPACIONDESCR' => 'FARMACEUTICO'),
			array('PERSONAOCUPACIONID' => 96, 'PERSONAOCUPACIONDESCR' => 'FARMACOLOGO'),
			array('PERSONAOCUPACIONID' => 97, 'PERSONAOCUPACIONDESCR' => 'FICHERA'),
			array('PERSONAOCUPACIONID' => 98, 'PERSONAOCUPACIONDESCR' => 'FISICO'),
			array('PERSONAOCUPACIONID' => 99, 'PERSONAOCUPACIONDESCR' => 'FLORISTA'),
			array('PERSONAOCUPACIONID' => 100, 'PERSONAOCUPACIONDESCR' => 'FOTOGRAFO'),
			array('PERSONAOCUPACIONID' => 101, 'PERSONAOCUPACIONDESCR' => 'FUNC. SECTOR SOCIAL'),
			array('PERSONAOCUPACIONID' => 102, 'PERSONAOCUPACIONDESCR' => 'FUTBOLISTA'),
			array('PERSONAOCUPACIONID' => 103, 'PERSONAOCUPACIONDESCR' => 'GANADERO'),
			array('PERSONAOCUPACIONID' => 104, 'PERSONAOCUPACIONDESCR' => 'GERENTE'),
			array('PERSONAOCUPACIONID' => 105, 'PERSONAOCUPACIONDESCR' => 'GLOBERO'),
			array('PERSONAOCUPACIONID' => 106, 'PERSONAOCUPACIONDESCR' => 'GRANADERO'),
			array('PERSONAOCUPACIONID' => 107, 'PERSONAOCUPACIONDESCR' => 'GUARDIA'),
			array('PERSONAOCUPACIONID' => 108, 'PERSONAOCUPACIONDESCR' => 'GUIA'),
			array('PERSONAOCUPACIONID' => 109, 'PERSONAOCUPACIONDESCR' => 'HERRERO'),
			array('PERSONAOCUPACIONID' => 110, 'PERSONAOCUPACIONDESCR' => 'INDUSTRIAL'),
			array('PERSONAOCUPACIONID' => 111, 'PERSONAOCUPACIONDESCR' => 'INGENIERO'),
			array('PERSONAOCUPACIONID' => 112, 'PERSONAOCUPACIONDESCR' => 'JARDINERO'),
			array('PERSONAOCUPACIONID' => 113, 'PERSONAOCUPACIONDESCR' => 'JORNALERO'),
			array('PERSONAOCUPACIONID' => 114, 'PERSONAOCUPACIONDESCR' => 'JOYERO'),
			array('PERSONAOCUPACIONID' => 115, 'PERSONAOCUPACIONDESCR' => 'JUBILADO'),
			array('PERSONAOCUPACIONID' => 116, 'PERSONAOCUPACIONDESCR' => 'LANCHERO'),
			array('PERSONAOCUPACIONID' => 117, 'PERSONAOCUPACIONDESCR' => 'LOCUTOR'),
			array('PERSONAOCUPACIONID' => 118, 'PERSONAOCUPACIONDESCR' => 'MAESTRO(A)'),
			array('PERSONAOCUPACIONID' => 119, 'PERSONAOCUPACIONDESCR' => 'MALABARISTA'),
			array('PERSONAOCUPACIONID' => 120, 'PERSONAOCUPACIONDESCR' => 'MAQUILADOR'),
			array('PERSONAOCUPACIONID' => 121, 'PERSONAOCUPACIONDESCR' => 'MARINERO'),
			array('PERSONAOCUPACIONID' => 122, 'PERSONAOCUPACIONDESCR' => 'MASAJISTA'),
			array('PERSONAOCUPACIONID' => 123, 'PERSONAOCUPACIONDESCR' => 'MATEMATICO'),
			array('PERSONAOCUPACIONID' => 124, 'PERSONAOCUPACIONDESCR' => 'MAYORDOMO'),
			array('PERSONAOCUPACIONID' => 125, 'PERSONAOCUPACIONDESCR' => 'MECANICO'),
			array('PERSONAOCUPACIONID' => 126, 'PERSONAOCUPACIONDESCR' => 'MECANOGRAFO(A)'),
			array('PERSONAOCUPACIONID' => 127, 'PERSONAOCUPACIONDESCR' => 'MEDICO'),
			array('PERSONAOCUPACIONID' => 128, 'PERSONAOCUPACIONDESCR' => 'MENSAJERO'),
			array('PERSONAOCUPACIONID' => 129, 'PERSONAOCUPACIONDESCR' => 'MESERO'),
			array('PERSONAOCUPACIONID' => 130, 'PERSONAOCUPACIONDESCR' => 'MILITAR'),
			array('PERSONAOCUPACIONID' => 131, 'PERSONAOCUPACIONDESCR' => 'MIMO'),
			array('PERSONAOCUPACIONID' => 132, 'PERSONAOCUPACIONDESCR' => 'MINERO'),
			array('PERSONAOCUPACIONID' => 133, 'PERSONAOCUPACIONDESCR' => 'MODELO'),
			array('PERSONAOCUPACIONID' => 134, 'PERSONAOCUPACIONDESCR' => 'MODISTA'),
			array('PERSONAOCUPACIONID' => 135, 'PERSONAOCUPACIONDESCR' => 'MOZO'),
			array('PERSONAOCUPACIONID' => 136, 'PERSONAOCUPACIONDESCR' => 'MUSICO'),
			array('PERSONAOCUPACIONID' => 137, 'PERSONAOCUPACIONDESCR' => 'NAVEGANTE'),
			array('PERSONAOCUPACIONID' => 138, 'PERSONAOCUPACIONDESCR' => 'NIÑERA'),
			array('PERSONAOCUPACIONID' => 139, 'PERSONAOCUPACIONDESCR' => 'NINGUNA'),
			array('PERSONAOCUPACIONID' => 140, 'PERSONAOCUPACIONDESCR' => 'NO CATALOGADA'),
			array('PERSONAOCUPACIONID' => 141, 'PERSONAOCUPACIONDESCR' => 'NOTARIO'),
			array('PERSONAOCUPACIONID' => 142, 'PERSONAOCUPACIONDESCR' => 'NUTRIOLOGO'),
			array('PERSONAOCUPACIONID' => 143, 'PERSONAOCUPACIONDESCR' => 'OBRERO'),
			array('PERSONAOCUPACIONID' => 144, 'PERSONAOCUPACIONDESCR' => 'OCEANOLOGO'),
			array('PERSONAOCUPACIONID' => 145, 'PERSONAOCUPACIONDESCR' => 'ODONTOLOGO'),
			array('PERSONAOCUPACIONID' => 146, 'PERSONAOCUPACIONDESCR' => 'OFTALMOLOGO'),
			array('PERSONAOCUPACIONID' => 147, 'PERSONAOCUPACIONDESCR' => 'OPERADOR'),
			array('PERSONAOCUPACIONID' => 148, 'PERSONAOCUPACIONDESCR' => 'PALETERO'),
			array('PERSONAOCUPACIONID' => 149, 'PERSONAOCUPACIONDESCR' => 'PANADERO'),
			array('PERSONAOCUPACIONID' => 150, 'PERSONAOCUPACIONDESCR' => 'PAYASO'),
			array('PERSONAOCUPACIONID' => 151, 'PERSONAOCUPACIONDESCR' => 'PEDAGOGO'),
			array('PERSONAOCUPACIONID' => 152, 'PERSONAOCUPACIONDESCR' => 'PEON'),
			array('PERSONAOCUPACIONID' => 153, 'PERSONAOCUPACIONDESCR' => 'PERIODISTA'),
			array('PERSONAOCUPACIONID' => 154, 'PERSONAOCUPACIONDESCR' => 'PERITO'),
			array('PERSONAOCUPACIONID' => 155, 'PERSONAOCUPACIONDESCR' => 'PESCADOR'),
			array('PERSONAOCUPACIONID' => 156, 'PERSONAOCUPACIONDESCR' => 'PESPUNTADOR'),
			array('PERSONAOCUPACIONID' => 157, 'PERSONAOCUPACIONDESCR' => 'PILOTO'),
			array('PERSONAOCUPACIONID' => 158, 'PERSONAOCUPACIONDESCR' => 'PINTOR(A)'),
			array('PERSONAOCUPACIONID' => 159, 'PERSONAOCUPACIONDESCR' => 'PLOMERO'),
			array('PERSONAOCUPACIONID' => 160, 'PERSONAOCUPACIONDESCR' => 'POLICIA'),
			array('PERSONAOCUPACIONID' => 161, 'PERSONAOCUPACIONDESCR' => 'PORTERO'),
			array('PERSONAOCUPACIONID' => 162, 'PERSONAOCUPACIONDESCR' => 'PRESTAMISTA'),
			array('PERSONAOCUPACIONID' => 163, 'PERSONAOCUPACIONDESCR' => 'PROFESIONAL'),
			array('PERSONAOCUPACIONID' => 164, 'PERSONAOCUPACIONDESCR' => 'PROFESOR(A)'),
			array('PERSONAOCUPACIONID' => 165, 'PERSONAOCUPACIONDESCR' => 'PROGRAMADOR'),
			array('PERSONAOCUPACIONID' => 166, 'PERSONAOCUPACIONDESCR' => 'PROMOTOR'),
			array('PERSONAOCUPACIONID' => 167, 'PERSONAOCUPACIONDESCR' => 'PROSTITUTA'),
			array('PERSONAOCUPACIONID' => 168, 'PERSONAOCUPACIONDESCR' => 'PROVEEDOR'),
			array('PERSONAOCUPACIONID' => 169, 'PERSONAOCUPACIONDESCR' => 'PSICOLOGO'),
			array('PERSONAOCUPACIONID' => 170, 'PERSONAOCUPACIONDESCR' => 'PSIQUIATRA'),
			array('PERSONAOCUPACIONID' => 171, 'PERSONAOCUPACIONDESCR' => 'PUBLICISTA'),
			array('PERSONAOCUPACIONID' => 172, 'PERSONAOCUPACIONDESCR' => 'QUIMICO'),
			array('PERSONAOCUPACIONID' => 173, 'PERSONAOCUPACIONDESCR' => 'RECEPCIONISTA'),
			array('PERSONAOCUPACIONID' => 174, 'PERSONAOCUPACIONDESCR' => 'REPORTERO'),
			array('PERSONAOCUPACIONID' => 175, 'PERSONAOCUPACIONDESCR' => 'REPOSTERO'),
			array('PERSONAOCUPACIONID' => 176, 'PERSONAOCUPACIONDESCR' => 'SACERDOTE'),
			array('PERSONAOCUPACIONID' => 177, 'PERSONAOCUPACIONDESCR' => 'SASTRE'),
			array('PERSONAOCUPACIONID' => 178, 'PERSONAOCUPACIONDESCR' => 'SECRETARIA'),
			array('PERSONAOCUPACIONID' => 179, 'PERSONAOCUPACIONDESCR' => 'SERVIDOR PUBLICO ESTATAL'),
			array('PERSONAOCUPACIONID' => 180, 'PERSONAOCUPACIONDESCR' => 'SERVIDOR PUBLICO ESTATAL'),
			array('PERSONAOCUPACIONID' => 181, 'PERSONAOCUPACIONDESCR' => 'SERVIDOR PUBLICO MUNICIPAL'),
			array('PERSONAOCUPACIONID' => 182, 'PERSONAOCUPACIONDESCR' => 'SIRVIENTE(A)'),
			array('PERSONAOCUPACIONID' => 183, 'PERSONAOCUPACIONDESCR' => 'SOBRECARGO'),
			array('PERSONAOCUPACIONID' => 184, 'PERSONAOCUPACIONDESCR' => 'SOCIOLOGO'),
			array('PERSONAOCUPACIONID' => 185, 'PERSONAOCUPACIONDESCR' => 'SOLDADOR'),
			array('PERSONAOCUPACIONID' => 186, 'PERSONAOCUPACIONDESCR' => 'SOLDADOR'),
			array('PERSONAOCUPACIONID' => 187, 'PERSONAOCUPACIONDESCR' => 'SUPERVISOR'),
			array('PERSONAOCUPACIONID' => 188, 'PERSONAOCUPACIONDESCR' => 'TAPICERO'),
			array('PERSONAOCUPACIONID' => 189, 'PERSONAOCUPACIONDESCR' => 'TAQUIGRAFO(A)'),
			array('PERSONAOCUPACIONID' => 190, 'PERSONAOCUPACIONDESCR' => 'TAQUILLERO'),
			array('PERSONAOCUPACIONID' => 191, 'PERSONAOCUPACIONDESCR' => 'TAXISTA'),
			array('PERSONAOCUPACIONID' => 192, 'PERSONAOCUPACIONDESCR' => 'TECNICO'),
			array('PERSONAOCUPACIONID' => 193, 'PERSONAOCUPACIONDESCR' => 'TELEFONISTA'),
			array('PERSONAOCUPACIONID' => 194, 'PERSONAOCUPACIONDESCR' => 'TELEGRAFISTA'),
			array('PERSONAOCUPACIONID' => 195, 'PERSONAOCUPACIONDESCR' => 'TOPOGRAFO(A)'),
			array('PERSONAOCUPACIONID' => 196, 'PERSONAOCUPACIONDESCR' => 'TORERO'),
			array('PERSONAOCUPACIONID' => 197, 'PERSONAOCUPACIONDESCR' => 'TORNERO'),
			array('PERSONAOCUPACIONID' => 198, 'PERSONAOCUPACIONDESCR' => 'TRABAJADOR EN SERVICIOS FUNERARIOS'),
			array('PERSONAOCUPACIONID' => 199, 'PERSONAOCUPACIONDESCR' => 'TRACTORISTA'),
			array('PERSONAOCUPACIONID' => 200, 'PERSONAOCUPACIONDESCR' => 'VEDETTE'),
			array('PERSONAOCUPACIONID' => 201, 'PERSONAOCUPACIONDESCR' => 'VELADOR'),
			array('PERSONAOCUPACIONID' => 202, 'PERSONAOCUPACIONDESCR' => 'VENDEDOR'),
			array('PERSONAOCUPACIONID' => 203, 'PERSONAOCUPACIONDESCR' => 'VENDEDOR AMBULANTE'),
			array('PERSONAOCUPACIONID' => 204, 'PERSONAOCUPACIONDESCR' => 'VETERINARIO'),
			array('PERSONAOCUPACIONID' => 205, 'PERSONAOCUPACIONDESCR' => 'VIGILANTE'),
			array('PERSONAOCUPACIONID' => 206, 'PERSONAOCUPACIONDESCR' => 'VOCERO'),
			array('PERSONAOCUPACIONID' => 207, 'PERSONAOCUPACIONDESCR' => 'ZAPATERO'),
			array('PERSONAOCUPACIONID' => 208, 'PERSONAOCUPACIONDESCR' => 'ZOOLOGO'),
			array('PERSONAOCUPACIONID' => 209, 'PERSONAOCUPACIONDESCR' => 'AGENTE ADUANAL'),
			array('PERSONAOCUPACIONID' => 998, 'PERSONAOCUPACIONDESCR' => 'DESEMPLEADO'),
			array('PERSONAOCUPACIONID' => 999, 'PERSONAOCUPACIONDESCR' => 'OTRA'),
		];
		$this->db->table('OCUPACION')->insertBatch($data);
	}
}
