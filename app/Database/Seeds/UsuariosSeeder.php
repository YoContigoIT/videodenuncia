<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuariosSeeder extends Seeder
{
	public function run()
	{
		$data = [
			array('ROLID' => '1', 'ZONAID' => '1', 'NOMBRE' => 'ABDIEL OTONIEL', 'APELLIDO_PATERNO' => 'FLORES', 'APELLIDO_MATERNO' => 'GONZALEZ', 'SEXO' => 'M', 'CORREO' => 'otoniel.f@yocontigo-it.com', 'PASSWORD' => '$2y$10$y4k.LQ27fEjQVghghbxKy.D2mexqDrbw7cmUPgVqa8xKxiS5ztDPu', 'USUARIOVIDEO' => '24', 'TOKENVIDEO' => '198429b7cc8a2a5733d97bc13153227dd5017555', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '1', 'ZONAID' => '1', 'NOMBRE' => 'ANDREA GUADALUPE', 'APELLIDO_PATERNO' => 'SOLORZANO', 'APELLIDO_MATERNO' => 'GUTIERREZ', 'SEXO' => 'F', 'CORREO' => 'andrea.solorzano@yocontigo-it.com', 'PASSWORD' => '$2y$10$y4k.LQ27fEjQVghghbxKy.D2mexqDrbw7cmUPgVqa8xKxiS5ztDPu', 'USUARIOVIDEO' => '25', 'TOKENVIDEO' => 'f3dae474c932a9641680211a8f13e59d1d38a145', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '1', 'ZONAID' => '1', 'NOMBRE' => 'SUPER', 'APELLIDO_PATERNO' => 'USUARIO', 'APELLIDO_MATERNO' => 'TEST', 'SEXO' => 'M', 'CORREO' => 'superusuairo@test.com', 'PASSWORD' => '$2y$10$y4k.LQ27fEjQVghghbxKy.D2mexqDrbw7cmUPgVqa8xKxiS5ztDPu', 'USUARIOVIDEO' => '26', 'TOKENVIDEO' => 'c6a4a36430d039664c709293716f36ace2f7380e', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '2', 'ZONAID' => '1', 'NOMBRE' => 'DIRECTOR', 'APELLIDO_PATERNO' => 'SEJAP', 'APELLIDO_MATERNO' => 'TEST', 'SEXO' => 'M', 'CORREO' => 'directorsejap@test.com', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '27', 'TOKENVIDEO' => 'f4c0280457b451e343be8ea9ebc5062e2fceff77', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '2', 'ZONAID' => '1', 'NOMBRE' => 'SONIA', 'APELLIDO_PATERNO' => 'LOPEZ', 'APELLIDO_MATERNO' => 'URREA', 'SEXO' => 'F', 'CORREO' => 'sonia.lopez@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '28', 'TOKENVIDEO' => '91f42fd54949636fa278e66e6a5509821ecb07f9', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '3', 'ZONAID' => '3', 'NOMBRE' => 'JOSUE JOFIEL', 'APELLIDO_PATERNO' => 'PADILLA', 'APELLIDO_MATERNO' => 'CAMPOS', 'SEXO' => 'M', 'CORREO' => 'josuej.padilla@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '40', 'TOKENVIDEO' => 'e485adb382aa8db2810f05cd3fac9f888706310f', 'MUNICIPIOID' => 1, 'OFICINAID' => 793),
			array('ROLID' => '3', 'ZONAID' => '3', 'NOMBRE' => 'ROBERTO IGNACIO', 'APELLIDO_PATERNO' => 'CASTRO', 'APELLIDO_MATERNO' => 'GALVEZ', 'SEXO' => 'M', 'CORREO' => 'robertoi.castro@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '45', 'TOKENVIDEO' => 'c07842fea064b08385e9ec27de5946a9dce3098f', 'MUNICIPIOID' => 1, 'OFICINAID' => 793),
			array('ROLID' => '3', 'ZONAID' => '3', 'NOMBRE' => 'VIANNEY', 'APELLIDO_PATERNO' => 'DUARTE', 'APELLIDO_MATERNO' => 'HIGUERA', 'SEXO' => 'F', 'CORREO' => 'vianney.duarte@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '46', 'TOKENVIDEO' => 'db295889f70a13b5e5c6b27bfd1f393a51e6029f', 'MUNICIPIOID' => 1, 'OFICINAID' => 793),
			array('ROLID' => '3', 'ZONAID' => '2', 'NOMBRE' => 'ALEJANDRO', 'APELLIDO_PATERNO' => 'DEL BOSQUE', 'APELLIDO_MATERNO' => 'PARDO', 'SEXO' => 'M', 'CORREO' => 'alejandro.bosque@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '32', 'TOKENVIDEO' => '1d16fb6e027429391085adf58ca0960a783b18a0', 'MUNICIPIOID' => 2, 'OFICINAID' => 409),
			array('ROLID' => '3', 'ZONAID' => '2', 'NOMBRE' => 'LIZETH YAZMIN', 'APELLIDO_PATERNO' => 'TORRES', 'APELLIDO_MATERNO' => 'ANDRADE', 'SEXO' => 'F', 'CORREO' => 'lizethy.torres@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '41', 'TOKENVIDEO' => '8bffa1a43d7fe29f60333c919d68bc228bee176e', 'MUNICIPIOID' => 2, 'OFICINAID' => 409),
			array('ROLID' => '3', 'ZONAID' => '2', 'NOMBRE' => 'OMAR', 'APELLIDO_PATERNO' => 'TOLEDO', 'APELLIDO_MATERNO' => 'GARCIA', 'SEXO' => 'M', 'CORREO' => 'omar.toledo@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '43', 'TOKENVIDEO' => '30d7e17636ac3458c25609d2eec1908b94a993dd', 'MUNICIPIOID' => 2, 'OFICINAID' => 409),
			array('ROLID' => '3', 'ZONAID' => '1', 'NOMBRE' => 'AGENTE', 'APELLIDO_PATERNO' => 'MINISTERIO PUBLICO', 'APELLIDO_MATERNO' => 'TEST', 'SEXO' => 'M', 'CORREO' => 'agentemp@test.com', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '31', 'TOKENVIDEO' => '250f6482ead5499d6641a9ccf86ee3ba29f580b4', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '3', 'ZONAID' => '1', 'NOMBRE' => 'BERNARDO', 'APELLIDO_PATERNO' => 'ORCI', 'APELLIDO_MATERNO' => 'VIESCA', 'SEXO' => 'M', 'CORREO' => 'bernardo.orci@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '33', 'TOKENVIDEO' => '7b2a0523176a9dd9f28b694b44de4d5a4edcff31', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '3', 'ZONAID' => '1', 'NOMBRE' => 'CESAR HUMBERTO', 'APELLIDO_PATERNO' => 'ACEBO', 'APELLIDO_MATERNO' => 'GUTIERREZ', 'SEXO' => 'M', 'CORREO' => 'cesarh.acebo@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '34', 'TOKENVIDEO' => 'a282154a464054841535b821b3b115c56afa5502', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '3', 'ZONAID' => '1', 'NOMBRE' => 'CINTYA MAGALY', 'APELLIDO_PATERNO' => 'GONZALEZ', 'APELLIDO_MATERNO' => 'REYES', 'SEXO' => 'F', 'CORREO' => 'cintyam.gonzalez@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '35', 'TOKENVIDEO' => '1fdec1fc5bb5170ac7d47542a506e0e72668a660', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '3', 'ZONAID' => '1', 'NOMBRE' => 'FERNANDO', 'APELLIDO_PATERNO' => 'TAPIA', 'APELLIDO_MATERNO' => 'TORRES', 'SEXO' => 'M', 'CORREO' => 'fernando.tapia@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '36', 'TOKENVIDEO' => '4f37d8c624292bd7a4eaed4c5d08562838cde1a6', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '3', 'ZONAID' => '1', 'NOMBRE' => 'ITZEL', 'APELLIDO_PATERNO' => 'VERDUGO', 'APELLIDO_MATERNO' => 'QUEZADA', 'SEXO' => 'F', 'CORREO' => 'itzela.verdugo@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '37', 'TOKENVIDEO' => 'efea09bd7bde0d5783422ece661367b7eeafb357', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '3', 'ZONAID' => '1', 'NOMBRE' => 'JOSE', 'APELLIDO_PATERNO' => 'CERVANTES', 'APELLIDO_MATERNO' => 'KIRK', 'SEXO' => 'M', 'CORREO' => 'jose.cervantes@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '38', 'TOKENVIDEO' => '7e68d87c3f767267089ce3f6cb0d813ee0ab7200', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '3', 'ZONAID' => '1', 'NOMBRE' => 'JOSE DE JESUS', 'APELLIDO_PATERNO' => 'GARCIA', 'APELLIDO_MATERNO' => 'ZAMORA', 'SEXO' => 'M', 'CORREO' => 'josej.garcia@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '39', 'TOKENVIDEO' => '652b226f69789741576360c1df3b58f3aa778b32', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '3', 'ZONAID' => '1', 'NOMBRE' => 'MARIO ALBERTO', 'APELLIDO_PATERNO' => 'RODRIGUEZ', 'APELLIDO_MATERNO' => 'CASTRO', 'SEXO' => 'M', 'CORREO' => 'marioal.rodriguez@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '42', 'TOKENVIDEO' => '48e3aad162ecf9293daef07ea508cf9a34e852e9', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '3', 'ZONAID' => '1', 'NOMBRE' => 'PATRICIA YANET', 'APELLIDO_PATERNO' => 'CALDERA', 'APELLIDO_MATERNO' => 'CAMPOS', 'SEXO' => 'F', 'CORREO' => 'patriciay.caldera@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '44', 'TOKENVIDEO' => '051bafddf4cd90e5d5cc588f1617fab18edcc1d2', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '3', 'ZONAID' => '1', 'NOMBRE' => 'VIOLETA', 'APELLIDO_PATERNO' => 'GAETA', 'APELLIDO_MATERNO' => 'AGUILAR', 'SEXO' => 'F', 'CORREO' => 'violeta.gaeta@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '51', 'TOKENVIDEO' => '5d073a9e3ae46a62826f5c98287854294d1adf10', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '3', 'ZONAID' => '1', 'NOMBRE' => 'YESIKA', 'APELLIDO_PATERNO' => 'GOMEZ', 'APELLIDO_MATERNO' => 'ATIENZO', 'SEXO' => 'F', 'CORREO' => 'yesika.gomez@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '52', 'TOKENVIDEO' => '205e8c6fb263ffb21025ed38f6925716d99e6378', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '4', 'ZONAID' => '3', 'NOMBRE' => 'CRUZ', 'APELLIDO_PATERNO' => 'CANO', 'APELLIDO_MATERNO' => 'JIMENEZ', 'SEXO' => 'M', 'CORREO' => 'cruz.cano@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '55', 'TOKENVIDEO' => 'f503c007e1e1261bf86b1aa5dfef3840b0f3efdd', 'MUNICIPIOID' => 1, 'OFICINAID' => 793),
			array('ROLID' => '4', 'ZONAID' => '2', 'NOMBRE' => 'BERNARDO', 'APELLIDO_PATERNO' => 'VINDIOLA', 'APELLIDO_MATERNO' => 'RODRIGUEZ', 'SEXO' => 'M', 'CORREO' => 'bernardo.vindiola@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '54', 'TOKENVIDEO' => '3fd714af8c4c826210a52678a535bf13a8317fb3', 'MUNICIPIOID' => 2, 'OFICINAID' => 409),
			array('ROLID' => '4', 'ZONAID' => '2', 'NOMBRE' => 'GIANELLA', 'APELLIDO_PATERNO' => 'ROMERO', 'APELLIDO_MATERNO' => 'CATELLARES', 'SEXO' => 'F', 'CORREO' => 'gianella.romero@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '57', 'TOKENVIDEO' => '22fe9c92597bc72706943ca8fc4acfa7cd0d6c07', 'MUNICIPIOID' => 2, 'OFICINAID' => 409),
			array('ROLID' => '4', 'ZONAID' => '1', 'NOMBRE' => 'AUXILIAR', 'APELLIDO_PATERNO' => 'MINISTERIO PUBLICO', 'APELLIDO_MATERNO' => 'TEST', 'SEXO' => 'M', 'CORREO' => 'auxiliarmp@test.com', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '53', 'TOKENVIDEO' => '570708ddc0b9ae852cac33bbe9871764fd54d75c', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '4', 'ZONAID' => '1', 'NOMBRE' => 'FRANCISCO DANIEL', 'APELLIDO_PATERNO' => 'COY', 'APELLIDO_MATERNO' => 'MARTINEZ', 'SEXO' => 'M', 'CORREO' => 'franciscod.coy@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '56', 'TOKENVIDEO' => 'e0ababe5883dc6ab8257e83348c43400862f0bef', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '5', 'ZONAID' => '1', 'NOMBRE' => 'AGENTE', 'APELLIDO_PATERNO' => 'EXTERNO', 'APELLIDO_MATERNO' => 'TEST', 'SEXO' => 'M', 'CORREO' => 'agenteexterno@test.com', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '58', 'TOKENVIDEO' => '25b46bb787fb209018ff3370f8981773de3adee1', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '6', 'ZONAID' => '1', 'NOMBRE' => 'CLAUDIA YADIRA', 'APELLIDO_PATERNO' => 'PAEZ', 'APELLIDO_MATERNO' => 'VALENZUELA', 'SEXO' => 'F', 'CORREO' => 'claudiay.paez@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '59', 'TOKENVIDEO' => '8691aab60bb31b2d05021d656a79b68b23789229', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '6', 'ZONAID' => '1', 'NOMBRE' => 'ENCARGADO', 'APELLIDO_PATERNO' => 'TURNO', 'APELLIDO_MATERNO' => 'TEST', 'SEXO' => 'M', 'CORREO' => 'encargadoturno@test.com', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '60', 'TOKENVIDEO' => '2ebc9c375b7e09e8ab0c742684d7c51c50b60384', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '6', 'ZONAID' => '1', 'NOMBRE' => 'FLOR MARBELLA', 'APELLIDO_PATERNO' => 'CRUZ', 'APELLIDO_MATERNO' => 'REA', 'SEXO' => 'F', 'CORREO' => 'florm.cruz@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '61', 'TOKENVIDEO' => 'e672fe645121ace81043e2b04bd0d5b52ac76c0f', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '7', 'ZONAID' => '1', 'NOMBRE' => 'COORDINADOR', 'APELLIDO_PATERNO' => 'TEST', 'APELLIDO_MATERNO' => 'TEST', 'SEXO' => 'M', 'CORREO' => 'coordinador@test.com', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '62', 'TOKENVIDEO' => '44c26de5c3096dc3577195d410debdcab08ba854', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '7', 'ZONAID' => '1', 'NOMBRE' => 'ISNA DANAHE', 'APELLIDO_PATERNO' => 'MEDEL', 'APELLIDO_MATERNO' => 'RODRIGUEZ', 'SEXO' => 'F', 'CORREO' => 'isnad.medel@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '63', 'TOKENVIDEO' => 'a5a6b3f3dc8bebd6c8d6c3bc103499e12c5c889c', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '8', 'ZONAID' => '1', 'NOMBRE' => 'FACILITADOR', 'APELLIDO_PATERNO' => 'TEST', 'APELLIDO_MATERNO' => 'TEST', 'SEXO' => 'M', 'CORREO' => 'facilitador@test.com', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '64', 'TOKENVIDEO' => 'fa4345d6d41a13db4ad8a5974a48561fb3465fb8', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '8', 'ZONAID' => '1', 'NOMBRE' => 'KARLA VANESSA', 'APELLIDO_PATERNO' => 'PARRA', 'APELLIDO_MATERNO' => 'PIZARRO', 'SEXO' => 'F', 'CORREO' => 'karlav.parra@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '65', 'TOKENVIDEO' => '45d98b62f4dc980246cb60a3b4edd6261a1eb24d', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '8', 'ZONAID' => '1', 'NOMBRE' => 'ROBERTO CARLOS', 'APELLIDO_PATERNO' => 'VAZQUEZ', 'APELLIDO_MATERNO' => 'SANCHEZ', 'SEXO' => 'M', 'CORREO' => 'robertoc.vazquez@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '66', 'TOKENVIDEO' => 'd598dcda5f2ffde70edccc9fbe3eb540b3dc7649', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '9', 'ZONAID' => '1', 'NOMBRE' => 'NOTIFICADOR', 'APELLIDO_PATERNO' => 'TEST', 'APELLIDO_MATERNO' => 'TEST', 'SEXO' => 'M', 'CORREO' => 'notificador@test.com', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '67', 'TOKENVIDEO' => '3f9f78c4d736dba2420fc1227033ed83c5d12268', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '9', 'ZONAID' => '1', 'NOMBRE' => 'ROSA MARÍA', 'APELLIDO_PATERNO' => 'MAYORQUÍN', 'APELLIDO_MATERNO' => 'MAYORQUÍN', 'SEXO' => 'F', 'CORREO' => 'rosam.mayorquin@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '68', 'TOKENVIDEO' => '5b0bf9994f412f3ca51021a2c0f55599fdf0b08f', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '10', 'ZONAID' => '3', 'NOMBRE' => 'LUIS KADZUO', 'APELLIDO_PATERNO' => 'KOTA', 'APELLIDO_MATERNO' => 'VILLAR', 'SEXO' => 'M', 'CORREO' => 'luisk.kota@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '70', 'TOKENVIDEO' => 'f42c444fb1eb92c8a5847e7c8e338cdab985133f', 'MUNICIPIOID' => 1, 'OFICINAID' => 793),
			array('ROLID' => '10', 'ZONAID' => '1', 'NOMBRE' => 'ANA LUISA', 'APELLIDO_PATERNO' => 'OLVERA', 'APELLIDO_MATERNO' => 'ALVAREZ', 'SEXO' => 'F', 'CORREO' => 'analu.olvera@fgebc.gob.mx', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '69', 'TOKENVIDEO' => '3c82cf15fa0121c2d55e33af840e8aa06dfc9067', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '10', 'ZONAID' => '1', 'NOMBRE' => 'SECRETARIO', 'APELLIDO_PATERNO' => 'ACUERDOS', 'APELLIDO_MATERNO' => 'TEST', 'SEXO' => 'M', 'CORREO' => 'secretarioacuerdos@test.com', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '71', 'TOKENVIDEO' => 'f6b5ef9d71b02ee14c289ce66aad3fd95416b2f7', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
			array('ROLID' => '11', 'ZONAID' => '1', 'NOMBRE' => 'INFORMATICA', 'APELLIDO_PATERNO' => 'TEST', 'APELLIDO_MATERNO' => 'TEST', 'SEXO' => 'M', 'CORREO' => 'informatica@test.com', 'PASSWORD' => '$2y$10$OkSCBt05oaEyz8htYZGP/erLWuGg/H0gVlux1LvbpbyE7/f.2e.Aa', 'USUARIOVIDEO' => '72', 'TOKENVIDEO' => '44d99444ee90ec4380a365814db13764bb3f9233', 'MUNICIPIOID' => 4, 'OFICINAID' => 924),
		];

		$this->db->table('USUARIOS')->insertBatch($data);
	}
}
