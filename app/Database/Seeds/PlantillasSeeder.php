<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PlantillasSeeder extends Seeder
{
	public function run()
	{
		$data = [
			array(
				'ID' => '1', 'DESCRIPCION' => 'SOLICITUD DE PERITAJE', 'TITULO' => 'SOLICITUD DE PERITAJE',
				'PLACEHOLDER' => '<p style="text-align: center;"><b>SOLICITUD DE PERITAJE</b></p><p><span class="Apple-tab-span"> </span></p><p style="text-align: right;"><b>No. de Caso: [EXPEDIENTE_NUMERO]</b></p><p style="text-align: right;"><b></b></p><p style="text-align: left;">DIRECTOR DE SERVICIOS PERICIALES</p><p style="text-align: left;">Presente.-</p><p style="text-align: left;"></p><p style="text-align: justify;">Por este conducto, solicito se sirva designar a los peritos m&eacute;dicos que se requieran, a fin de que dictamine(n) respecto de la(s) siguiente(s) solicitud(es) pericial(es):</p><p style="text-align: justify;">[DETALLE_INTERVENCIONES]</p><p style="text-align: justify;"></p><p style="text-align: justify;">A(los) de nombre(s):</p><p style="text-align: justify;">[VICTIMAS_NOMBRE]</p><p style="text-align: justify;"></p><p style="text-align: justify;">Lo anterior con el objeto de esclarecer los hechos correspondientes a la Carpeta de Investigaci&oacute;n numero [EXPEDIENTE_NUMERO].</p><p style="text-align: justify;"></p><p style="text-align: justify;">Lo anterior con fundamento en el art&iacute;culo 256 del C&oacute;digo de Procedimientos Penales vigente en el Estado y dem&aacute;s relativos a la Ley Org&aacute;nica de la Procuradur&iacute;a General de Justicia del Estado de Baja California y su Reglamento.</p><p></p><p class="p1" style="text-align: center;">[DOCUMENTO_CIUDAD], BAJA CALIFORNIA, [DOCUMENTO_FECHA]</p><p class="p2" style="text-align: center;"></p><p class="p1" style="text-align: center;">[EXPEDIENTE_NOMBRE_DEL_RESPONSABLE]</p><p class="p1" style="text-align: center;">AGENTE DEL MINISTERIO P&Uacute;BLICO</p><p class="p1" style="text-align: center;">ADSCRITO AL CENTRO DE DENUNCIA TECNOL&Oacute;GICA<span class="Apple-converted-space">&nbsp;</span></p><p></p>',
				'TEXTO' => 'No. de Caso: [EXPEDIENTE_NUMERO] | Por este conducto, solicito se sirva designar a los peritos médicos que se requieran, a fin de que dictamine(n) respecto de la(s) siguiente(s) solicitud(es) pericial(es): [DETALLE_INTERVENCIONES]. A(los) de nombre(s): [VICTIMAS_NOMBRE]. Lo anterior con el objeto de esclarecer los hechos correspondientes a la Carpeta de Investigación numero [EXPEDIENTE_NUMERO]. Lo anterior con fundamento en el artículo 256 del Código de Procedimientos Penales vigente en el Estado y demás relativos a la Ley Orgánica de la Procuraduría General de Justicia del Estado de Baja California y su Reglamento.',
				'PLANTILLAJUSTICIAID' => '317',
				'CLASIFICACIONDOCTOID' => '227'
			),
			array(
				'ID' => '2', 'DESCRIPCION' => 'CONSTANCIA DE RECEPCION DE VIDEO DENUNCIA', 'TITULO' => 'CONSTANCIA DE RECEPCION DE VIDEO DENUNCIA',
				'PLACEHOLDER' => '<p style="text-align: center;"><strong>CONSTANCIA DE RECEPCI&Oacute;N DE VIDEO DENUNCIA</strong></p><p style="text-align: center;"></p><p style="text-align: justify;">En [DOCUMENTO_MUNICIPIO], Baja California, a los [DIA] d&iacute;as del mes de [MES] del a&ntilde;o [ANO], siendo las [HORA] horas con [MINUTOS] minutos, la/el suscrita (o) Licenciada(o) [EXPEDIENTE_NOMBRE_DEL_RESPONSABLE] (nombre del servidor p&uacute;blico), Agente del Ministerio P&uacute;blico adscrita(o) al Centro de Denuncia Tecnol&oacute;gica, hace constar que se inicia video denuncia interpuesta por la/el ciudadana (o) (VICTIMA Y/U OFENDIDO), quien manifesta en su entrevista que " [HECHO_NARRACION]", motivo por el que refiere es su deseo presentar denuncia/querella por el delito de [RELACION_DELITO], previsto en el art&iacute;culo [NUMERO_CODIGO_PENAL] del C&oacute;digo Penal [ORDENAMIENTO_LEGAL] en contra de [IMPUTADO_NOMBRE], por tanto se genera [TIPO_EXPEDIENTE] [EXPEDIENTE_NUMERO], misma que ser&aacute; remitida a la Direcci&oacute;n de Zona [ZONA_SEJAP] para su debida remisi&oacute;n. Lo anterior de conformidad con el Art&iacute;culo 20 inciso C de la Constituci&oacute;n Pol&iacute;tica de los Estados Unidos Mexicanos, Art&iacute;culo 131 fracci&oacute;n II del C&oacute;digo Nacional de Procedimientos Penales,&nbsp; as&iacute; como el Art&iacute;culo 22, fracci&oacute;n II y dem&aacute;s aplicables de la Ley Org&aacute;nica de la Fiscal&iacute;a General del Estado de Baja California. CONSTE.</p>',
				'TEXTO' => 'En [DOCUMENTO_MUNICIPIO], Baja California, a los [DIA] días del mes de [MES] del año [ANO], siendo las [HORA] horas con [MINUTOS] minutos, la/el suscrita (o) Licenciada(o) [EXPEDIENTE_NOMBRE_DEL_RESPONSABLE] (nombre del servidor público), Agente del Ministerio Público adscrita(o) al Centro de Denuncia Tecnológica, hace constar que se inicia video denuncia interpuesta por la/el ciudadana (o) (VICTIMA Y/U OFENDIDO), quien manifesta en su entrevista que " [HECHO_NARRACION]", motivo por el que refiere es su deseo presentar denuncia/querella por el delito de [RELACION_DELITO], previsto en el artículo [NUMERO_CODIGO_PENAL] del Código Penal [ORDENAMIENTO_LEGAL] en contra de [IMPUTADO_NOMBRE], por tanto se genera [TIPO_EXPEDIENTE] [EXPEDIENTE_NUMERO], misma que será remitida a la Dirección de Zona [ZONA_SEJAP] para su debida remisión. Lo anterior de conformidad con el Artículo 20 inciso C de la Constitución Política de los Estados Unidos Mexicanos, Artículo 131 fracción II del Código Nacional de Procedimientos Penales,  así como el Artículo 22, fracción II y demás aplicables de la Ley Orgánica de la Fiscalía General del Estado de Baja California. CONSTE.',
				'PLANTILLAJUSTICIAID' => '1763',
				'CLASIFICACIONDOCTOID' => '1646'
			),
			array(
				'ID' => '3', 'DESCRIPCION' => 'ORDEN DE PROTECCION (ALBERGUE TEMPORAL)', 'TITULO' => 'ORDEN DE PROTECCION (ALBERGUE TEMPORAL)',
				'PLACEHOLDER' => '<p></p><p style="text-align: right;"><b>EXPEDIENTE: [EXPEDIENTE_NUMERO]</b></p><p></p><p style="text-align: left;">DIRECCI&Oacute;N DE SEGURIDAD P&Uacute;BLICA MUNICIPAL</p><p style="text-align: left;">[DOCUMENTO_CIUDAD],BAJA CALIFORNIA</p><p style="text-align: left;">PRESENTE.-</p><p style="text-align: left;"></p><p style="text-align: justify;"><span class="Apple-tab-span"> </span><span class="Apple-tab-span"> </span>Por medio del presente, con fundamento en los art&iacute;culos 21, 22, 23, 24, 25, 26 de la Ley de Acceso a las Mujeres a una Vida Libre de Violencia para el Estado de Baja California, art. 8 Fracc. VII<span class="Apple-converted-space">&nbsp; </span>de la Ley de Atenci&oacute;n y protecci&oacute;n a la V&iacute;ctimas u Ofendido<span class="Apple-converted-space">&nbsp; </span>del Delito para el estado de Baja California,<span class="Apple-converted-space">&nbsp; </span>articulo 109 fracciones XVI, XVIII y XIX y art&iacute;culo 137<span class="Apple-converted-space">&nbsp; </span>en sus Fracc. IV, V, VI, VII, VIII, IX y X<span class="Apple-converted-space">&nbsp; </span>del C&oacute;digo Nacional de Procedimientos Penales vigente en el estado de Baja California, y como medida de protecci&oacute;n a la v&iacute;ctima, se solicita su apoyo para designar personal a su digno cargo para efectos de prestar auxilio inmediato a la v&iacute;ctima de nombre<span class="Apple-converted-space">&nbsp; [</span>VICTIMA_NOMBRE] de [VICTIMA_EDAD] , con tel&eacute;fono de contacto<span class="Apple-converted-space">&nbsp; [</span>VICTIMA_TELEFONO] , para ser trasladada a las instalaciones del <b>albergue temporal</b> de CAVIM de esta ciudad, lo anterior con la finalidad de salvaguardar en todo momento su integridad f&iacute;sica, ya que presento denuncia por el delito de<span class="Apple-converted-space">&nbsp; [</span>RELACION_DELITO] al imputado de nombre [IMPUTADO_NOMBRE]<span class="Apple-converted-space">&nbsp; </span>de [IMPUTADO_EDAD]. Sin m&aacute;s por el momento se agradecen las atenciones brindadas a la presente, solicitando sea informado a la Unidad de Investigaci&oacute;n correspondiente sobre las diligencias realizadas al respecto.</p><p></p><p style="text-align: center;">[DOCUMENTO_CIUDAD], BAJA CALIFORNIA, [DOCUMENTO_FECHA]</p><p style="text-align: center;"></p><p style="text-align: center;">[EXPEDIENTE_NOMBRE_DEL_RESPONSABLE]</p><p style="text-align: center;">AGENTE DEL MINISTERIO P&Uacute;BLICO</p><p style="text-align: center;">ADSCRITO AL CENTRO DE DENUNCIA TECNOL&Oacute;GICA<span class="Apple-converted-space">&nbsp;</span></p>',
				'TEXTO' => 'EXPEDIENTE: [EXPEDIENTE_NUMERO] | Por medio del presente, con fundamento en los artículos 21, 22, 23, 24, 25, 26 de la Ley de Acceso a las Mujeres a una Vida Libre de Violencia para el Estado de Baja California, art. 8 Fracc. VII  de la Ley de Atención y protección a la Víctimas u Ofendido  del Delito para el estado de Baja California,  articulo 109 fracciones XVI, XVIII y XIX y artículo 137  en sus Fracc. IV, V, VI, VII, VIII, IX y X  del Código Nacional de Procedimientos Penales vigente en el estado de Baja California, y como medida de protección a la víctima, se solicita su apoyo para designar personal a su digno cargo para efectos de prestar auxilio inmediato a la víctima de nombre  [VICTIMA_NOMBRE] de [VICTIMA_EDAD] , con teléfono de contacto  [VICTIMA_TELEFONO] , para ser trasladada a las instalaciones del albergue temporal de CAVIM de esta ciudad, lo anterior con la finalidad de salvaguardar en todo momento su integridad física, ya que presento denuncia por el delito de  [RELACION_DELITO] al imputado de nombre [IMPUTADO_NOMBRE]  de [IMPUTADO_EDAD]. Sin más por el momento se agradecen las atenciones brindadas a la presente, solicitando sea informado a la Unidad de Investigación correspondiente sobre las diligencias realizadas al respecto.',
				'PLANTILLAJUSTICIAID' => '1624',
				'CLASIFICACIONDOCTOID' => '1540'
			),
			array(
				'ID' => '4', 'DESCRIPCION' => 'ORDEN DE PROTECCION (RECOGER PERTENENCIAS)', 'TITULO' => 'ORDEN DE PROTECCION (RECOGER PERTENENCIAS)',
				'PLACEHOLDER' => '<p></p><p style="text-align: right;"><b>EXPEDIENTE: [EXPEDIENTE_NUMERO]</b></p><p></p><p style="text-align: left;">DIRECCI&Oacute;N DE SEGURIDAD P&Uacute;BLICA MUNICIPAL</p><p style="text-align: left;">[DOCUMENTO_CIUDAD],BAJA CALIFORNIA</p><p style="text-align: left;">PRESENTE.-</p><p style="text-align: left;"></p><p style="text-align: justify;">Por medio del presente, con fundamento en los art&iacute;culos 21, 22, 23, 24, 25, 26 de la Ley de Acceso a las Mujeres a una Vida Libre de Violencia para el Estado de Baja California, art. 8 Fracc. VII<span class="Apple-converted-space">&nbsp; </span>de la Ley de Atenci&oacute;n y protecci&oacute;n a la V&iacute;ctimas u Ofendido<span class="Apple-converted-space">&nbsp; </span>del Delito para el estado de Baja California,<span class="Apple-converted-space">&nbsp; </span>articulo 109 fracciones XVI, XVIII y XIX y art&iacute;culo 137<span class="Apple-converted-space">&nbsp; </span>en sus Fracc. IV, V, VI, VII, VIII, IX y X<span class="Apple-converted-space">&nbsp; </span>del C&oacute;digo Nacional de Procedimientos Penales vigente en el estado de Baja California, y como medida de protecci&oacute;n a la v&iacute;ctima, se solicita su apoyo para designar personal a su digno cargo para efectos de prestar auxilio inmediato a la victima de nombre<span class="Apple-converted-space">&nbsp; [</span>VICTIMA_NOMBRE] de [VICTIMA_EDAD] , con telefono de contacto<span class="Apple-converted-space">&nbsp; [</span>VICTIMA_TELEFONO] , para ser trasladada al domicilio ubicado [VICTIMA_DOMICILIO] y se encuentre en la posibilidad de <b>recoger pertenencias</b>, lo anterior con la finalidad de salvaguardar en todo momento su integridad f&iacute;sica, ya que presento denuncia por el delito de<span class="Apple-converted-space">&nbsp; [</span>RELACION_DELITO] al imputado de nombre [IMPUTADO_NOMBRE]<span class="Apple-converted-space">&nbsp; </span>de [IMPUTADO_EDAD]. Sin m&aacute;s por el momento se agradecen las atenciones brindadas a la presente, solicitando sea informado a la Unidad de Investigaci&oacute;n correspondiente sobre las diligencias realizadas al respecto.</p><p></p><p class="p1" style="text-align: center;">[DOCUMENTO_CIUDAD], BAJA CALIFORNIA, [DOCUMENTO_FECHA]</p><p class="p2" style="text-align: center;"></p><p class="p1" style="text-align: center;">[EXPEDIENTE_NOMBRE_DEL_RESPONSABLE]</p><p class="p1" style="text-align: center;">AGENTE DEL MINISTERIO P&Uacute;BLICO</p><p class="p1" style="text-align: center;">ADSCRITO AL CENTRO DE DENUNCIA TECNOL&Oacute;GICA</p>',
				'TEXTO' => 'EXPEDIENTE: [EXPEDIENTE_NUMERO] | Por medio del presente, con fundamento en los artículos 21, 22, 23, 24, 25, 26 de la Ley de Acceso a las Mujeres a una Vida Libre de Violencia para el Estado de Baja California, art. 8 Fracc. VII  de la Ley de Atención y protección a la Víctimas u Ofendido  del Delito para el estado de Baja California,  articulo 109 fracciones XVI, XVIII y XIX y artículo 137  en sus Fracc. IV, V, VI, VII, VIII, IX y X  del Código Nacional de Procedimientos Penales vigente en el estado de Baja California, y como medida de protección a la víctima, se solicita su apoyo para designar personal a su digno cargo para efectos de prestar auxilio inmediato a la victima de nombre  [VICTIMA_NOMBRE] de [VICTIMA_EDAD] , con telefono de contacto  [VICTIMA_TELEFONO] , para ser trasladada al domicilio ubicado [VICTIMA_DOMICILIO] y se encuentre en la posibilidad de recoger pertenencias, lo anterior con la finalidad de salvaguardar en todo momento su integridad física, ya que presento denuncia por el delito de  [RELACION_DELITO] al imputado de nombre [IMPUTADO_NOMBRE]  de [IMPUTADO_EDAD]. Sin más por el momento se agradecen las atenciones brindadas a la presente, solicitando sea informado a la Unidad de Investigación correspondiente sobre las diligencias realizadas al respecto.',
				'PLANTILLAJUSTICIAID' => '1622',
				'CLASIFICACIONDOCTOID' => '1541'
			),
			array(
				'ID' => '5', 'DESCRIPCION' => 'ORDEN DE PROTECCION (REALICEN RONDINES)', 'TITULO' => 'ORDEN DE PROTECCION (REALICEN RONDINES)',
				'PLACEHOLDER' => '<p></p><p style="text-align: right;"><b>EXPEDIENTE: [EXPEDIENTE_NUMERO]</b></p><p></p><p>DIRECCI&Oacute;N DE SEGURIDAD P&Uacute;BLICA MUNICIPAL</p><p>[DOCUMENTO_CIUDAD], BAJA CALIFORNIA</p><p>PRESENTE.-</p><p></p><p style="text-align: justify;">Por medio del presente, con fundamento en los art&iacute;culos 21, 22, 23, 24, 25, 26 de la Ley de Acceso a las Mujeres a una Vida Libre de Violencia para el Estado de Baja California, art. 8 Fracc. VII<span class="Apple-converted-space">&nbsp; </span>de la Ley de Atenci&oacute;n y protecci&oacute;n a la V&iacute;ctimas u Ofendido<span class="Apple-converted-space">&nbsp; </span>del Delito para el estado de Baja California,<span class="Apple-converted-space">&nbsp; </span>articulo 109 fracciones XVI, XVIII y XIX y art&iacute;culo 137<span class="Apple-converted-space">&nbsp; </span>en sus Fracc. IV, V, VI, VII, VIII, IX y X<span class="Apple-converted-space">&nbsp; </span>del C&oacute;digo Nacional de Procedimientos Penales vigente en el estado de Baja California, y como medida de protecci&oacute;n a la v&iacute;ctima, se solicita su apoyo para designar personal a su digno cargo para efectos de prestar auxilio inmediato a la victima de nombre<span class="Apple-converted-space">&nbsp; [</span>VICTIMA_NOMBRE] de [VICTIMA_EDAD] , a efectos de que <b>realicen rondines</b> de vigilancia por 72 horas en el domicilio ubicado en [VICTIMA_DOMICILIO] de esta ciudad, con tel&eacute;fono de contacto el [VICTIMA_TELEFONO], con la finalidad de salvaguardar en todo momento su integridad f&iacute;sica, ya que presento denuncia por el delito de<span class="Apple-converted-space">&nbsp; [</span>RELACION_DELITO] al imputado de nombre [IMPUTADO_NOMBRE]<span class="Apple-converted-space">&nbsp; </span>de [IMPUTADO_EDAD]. Sin m&aacute;s por el momento se agradecen las atenciones brindadas a la presente, solicitando sea informado a la Unidad de Investigaci&oacute;n correspondiente sobre las diligencias realizadas al respecto.</p><p></p><p></p><p class="p1" style="text-align: center;">[DOCUMENTO_CIUDAD], BAJA CALIFORNIA, [DOCUMENTO_FECHA]</p><p class="p2" style="text-align: center;"></p><p class="p1" style="text-align: center;">[EXPEDIENTE_NOMBRE_DEL_RESPONSABLE]</p><p class="p1" style="text-align: center;">AGENTE DEL MINISTERIO P&Uacute;BLICO</p><p class="p1" style="text-align: center;">ADSCRITO AL CENTRO DE DENUNCIA TECNOL&Oacute;GICA</p>',
				'TEXTO' => 'EXPEDIENTE: [EXPEDIENTE_NUMERO] | Por medio del presente, con fundamento en los artículos 21, 22, 23, 24, 25, 26 de la Ley de Acceso a las Mujeres a una Vida Libre de Violencia para el Estado de Baja California, art. 8 Fracc. VII de la Ley de Atención y protección a la Víctimas u Ofendido  del Delito para el estado de Baja California,  articulo 109 fracciones XVI, XVIII y XIX y artículo 137  en sus Fracc. IV, V, VI, VII, VIII, IX y X  del Código Nacional de Procedimientos Penales vigente en el estado de Baja California, y como medida de protección a la víctima, se solicita su apoyo para designar personal a su digno cargo para efectos de prestar auxilio inmediato a la victima de nombre  [VICTIMA_NOMBRE] de [VICTIMA_EDAD] , a efectos de que realicen rondines de vigilancia por 72 horas en el domicilio ubicado en [VICTIMA_DOMICILIO] de esta ciudad, con teléfono de contacto el [VICTIMA_TELEFONO], con la finalidad de salvaguardar en todo momento su integridad física, ya que presento denuncia por el delito de  [RELACION_DELITO] al imputado de nombre [IMPUTADO_NOMBRE]  de [IMPUTADO_EDAD]. Sin más por el momento se agradecen las atenciones brindadas a la presente, solicitando sea informado a la Unidad de Investigación correspondiente sobre las diligencias realizadas al respecto.',
				'PLANTILLAJUSTICIAID' => '1621',
				'CLASIFICACIONDOCTOID' => '1539'
			),
			array(
				'ID' => "6", 'DESCRIPCION' => 'CONSTANCIA DE EXTRAVIO', 'TITULO' => 'CONSTANCIA DE EXTRAVIO',
				'PLACEHOLDER' => '<p></p><p style="text-align: right; color: #000000;"><strong>FOLIO: [FOLIO_NUMERO]/[ANIO]</strong></p><p></p><p style="text-align: right; color: #000000;">&nbsp;</p><p style="text-align: justify; color: #000000;">El C. AGENTE DEL MINISTERIO P&Uacute;BLICO <br /><strong>[NOMBRE_AGENTE_FIRMA]</strong></p><p style="text-align: justify; color: #000000;">&nbsp;</p><p style="text-align: justify; color: #000000;">HACE CONSTAR QUE EN EL CONTROL DE REPORTES QUE SE LLEV&Oacute; A CABO EN ESTA OFICINA, HA QUEDADO LA PERDIDA DE: <strong>[NOMBRE_CERTIFICADO]</strong>, OCURRIENDO BAJO LAS SIGUIENTES CIRCUNSTANCIAS.</p><p></p><p style="text-align: justify; color: #000000;">MANIFIESTA EL COMPARECIENTE HABER EXTRAVIADO EL ORIGINAL DE <strong>[NOMBRE_CERTIFICADO]</strong>, N&Uacute;MERO: <strong>[NO_DOCUMENTO]</strong>, A NOMBRE DE: <strong>[NOMBRE_DUENO]</strong>.</p><p></p><table class="t1" style="border-collapse: collapse; margin-left: auto; margin-right: auto; word-wrap: break-word; width: 100%;" bordercolor="#000000"><tbody><tr style="border: 2px solid black; margin: 0;"><td style="border: 2px solid black; margin: 0; padding: 5px; width: 25%;">COMPARECIENTE</td><td style="border: 2px solid black; margin: 0; padding: 5px;"><strong>[NOMBRE_COMPARECIENTE]</strong></td></tr><tr style="border: 2px solid black; margin: 0;"><td style="border: 2px solid black; margin: 0; padding: 5px; width: 25%;">DOMICILIO</td><td style="border: 2px solid black; margin: 0; padding: 5px;"><strong>[DOMICILIO_COMPARECIENTE]</strong></td></tr><tr style="border: 2px solid black; margin: 0;"><td style="border: 2px solid black; margin: 0; padding: 5px; width: 25%;">LUGAR DE EXTRAV&Iacute;O</td><td style="border: 2px solid black; margin: 0; padding: 5px;"><strong>[LUGAR_EXTRAVIO]</strong></td></tr><tr style="border: 2px solid black; margin: 0;"><td style="border: 2px solid black; margin: 0; padding: 5px; width: 25%;">FECHA DE EXTRAV&Iacute;O</td><td style="border: 2px solid black; margin: 0; padding: 5px;"><strong>[FECHA_EXTRAVIO]</strong></td></tr><tr style="border: 2px solid black; margin: 0;"><td style="border: 2px solid black; margin: 0; padding: 5px; width: 25%;">DESCRIPCI&Oacute;N</td><td style="border: 2px solid black; margin: 0; padding: 5px;"><strong>[DESCRIPCION_EXTRAVIO]</strong></td></tr></tbody></table><p></p><p style="text-align: justify; color: #000000;">SE EXPIDE LA PRESENTE CONSTANCIA EN LA CIUDAD DE: <strong>[NOMBRE_CIUDAD]</strong> A LOS <strong>[DIA]</strong> D&Iacute;AS DEL MES DE <strong>[MES]</strong> DEL A&Ntilde;O <strong>[ANIO_FIRMA]</strong> A LAS <strong>[HORA]</strong>; LA CUAL NO SUSTITUYE EL DOCUMENTO ORIGINAL NI VALIDA LA PREEXISTENCIA DEL DOCUMENTO U OBJETO</p><p></p><p style="text-align: center; color: #000000;"><strong>[NOMBRE_AGENTE_FIRMA]</strong><br />AGENTE DEL MINISTERIO P&Uacute;BLICO ADSCRITO AL SISTEMA<br />ESTATAL DE JUSTICIA ALTERNATIVA PENAL</p><p></p><div><p style="text-align: center; color: #000000; background-color: #959393; padding: 10px;"><span style="color: #ffffff;"><strong>DATOS FIRMA ELECTR&Oacute;NICA</strong></span></p></div><div style="display: flex; flex-direction: row; flex-wrap: wrap;"><div style="width: 75%; float: left;"><br /><p style="text-align: left;"><strong>IDENTIFICADOR ELECTR&Oacute;NICO:</strong> [NUMEROIDENTIFICADOR]</p><p style="text-align: left;"><strong>AGENTE DEL MINISTERIO P&Uacute;BLICO:</strong> [NOMBRE_AGENTE_FIRMA]</p><p style="text-align: left;"><strong>RFC AGENTE DEL MINISTERIO P&Uacute;BLICO:</strong> [RFCFIRMA_FIRMA]</p><p style="text-align: left;"><strong>NO. DE CERTIFICACI&Oacute;N DE FIRMA ELECTR&Oacute;NICA: </strong>[NCERTIFICADOFIRMA]</p><p style="text-align: left;"><strong>FECHA DE FIRMA:</strong> [FECHAFIRMA]</p><p style="text-align: left;"><strong>HORA DE FIRMA:</strong> [HORAFIRMA]</p><p style="text-align: left;"><strong>LUGAR DE FIRMA:</strong> [LUGARFIRMA]</p><p style="text-align: left;">&nbsp;</p></div><div style="width: 25%; float: right; word-wrap: break-word;"><br /><p style="text-align: center;">[CODIGO_QR_1]</p><p style="text-align: center;">[URL]</p></div></div><div style="display: flex; flex-direction: row; flex-wrap: wrap; word-wrap: break-word;"><div style="width: 30%;"><p style="text-align: justify;"><strong>FIRMA ELECTR&Oacute;NICA</strong></p></div><div style="width: 100%;"><p style="text-align: justify;">[FIRMAELECTRONICA]</p></div></div><div style="float: left;"><p style="text-align: left;">[CODIGO_QR_2]</p></div>',
				'TEXTO' => 'El C.AGENTE DEL MINISTERIO PÚBLICO [NOMBRE_AGENTE_FIRMA]|HACE CONSTAR QUE EN EL CONTROL DE REPORTES QUE SE LLEVÓ A CABO EN ESTA OFICINA, HA QUEDADO LA PERDIDA DE: [NOMBRE_CERTIFICADO], OCURRIENDO BAJO LAS SIGUIENTES CIRCUNSTANCIAS|MANIFIESTA EL COMPARECIENTE HABER EXTRAVIADO EL ORIGINAL DE [NOMBRE_CERTIFICADO], NÚMERO: [NO_DOCUMENTO], A NOMBRE DE: [NOMBRE_DUENO]|COMPARECIENTE [NOMBRE_COMPARECIENTE]|DOMICILIO [DOMICILIO_COMPARECIENTE]|LUGAR DE EXTRAVÍO [LUGAR_EXTRAVIO]|FECHA DE EXTRAVÍO [FECHA_EXTRAVIO]|DESCRIPCION [DESCRIPCION_EXTRAVIO]|SE EXPIDE LA PRESENTE CONSTANCIA EN LA CIUDAD DE: [NOMBRE_CIUDAD] A LOS [DIA] DÍAS DEL MES DE [MES] DEL AÑO [ANIO_FIRMA] A LAS [HORA]; LA CUAL NO SUSTITUYE EL DOCUMENTO ORIGINAL NI VALIDA LA PREEXISTENCIA DEL DOCUMENTO U OBJETO',
				'PLANTILLAJUSTICIAID' => NULL,
				'CLASIFICACIONDOCTOID' => NULL
			),
			array(
				'ID' => "7", 'DESCRIPCION' => 'ACEPTACION DE PROCESO EN JUSTICIA ALTERNATIVA CNPP', 'TITULO' => 'ACEPTACION DE PROCESO EN JUSTICIA ALTERNATIVA CNPP',
				'PLACEHOLDER' => '<p class="p1" style="text-align: center;"><b>ACEPTACI&Oacute;N DE SERVICIO (SOLICITANTE)</b></p><p class="p1" style="text-align: center;"><b></b></p><p class="p2" style="text-align: right;"><b>EXPEDIENTE</b>: [EXPEDIENTE_NUMERO]/RAC/SEJAP</p><p class="p2" style="text-align: right;"></p><p class="p3" style="text-align: justify;">En [DOCUMENTO_CIUDAD], Baja California, a [DOCUMENTO_FECHA], (&eacute;l) (la) C. <span class="Apple-converted-space">[</span>VICTIMA_NOMBRE] quien se identifica con: [VICTIMA_TIPO_IDENTIFICACION], con n&uacute;mero [VICTIMA_NUMERO_IDENTIFICACION], con domicilio en [VICTIMA_DOMICILIO], Tel&eacute;fono casa: [VICTIMA_TELEFONO], Cel. [VICTIMA_TELEFONO_CELULAR], Trabajo [VICTIMA_TELEFONO_CELULAR], edad [VICTIMA_EDAD], Oficio [VICTIMA_OCUPACION], Nacionalidad [VICTIMA_NACIONALIDAD], Estado Civil [VICTIMA_ESTADO_CIVIL], manifiesto: Que entiendo y acepto los servicios que me ofrece el CENTRO DE DENUNCIA TECNOL&Oacute;GICA; con la finalidad de llevar a cabo el procedimiento de mediaci&oacute;n, ACEPTO participar voluntariamente al mismo, para abordar un conflicto con: [IMPUTADO_NOMBRE]. Asimismo, manifiesto que se me ha informado acerca de los derechos, obligaciones, caracter&iacute;sticas y reglas del procedimiento, mismos que se encuentran establecidos en la Ley Nacional de Mecanismos Alternativos de Soluci&oacute;n de Controversias en Materia Penal y C&oacute;digo Nacional de Procedimientos Penales, habiendo recibido a dem&aacute;s copia simple del presente documento; De igual forma manifiesto mi obligaci&oacute;n<span class="Apple-converted-space">&nbsp; </span>de INFORMAR INMEDIATAMENTE CUANDO DESEE dar por concluido el Procedimiento Alterno, seg&uacute;n el art&iacute;culo 32 de la Ley Nacional de Mecanismos Alternativos de Soluci&oacute;n de Controversias en Materia Penal.</p><p class="p4"></p><p class="p4" style="text-align: center;">[VICTIMA_NOMBRE]</p><p class="p4" style="text-align: center;"><strong>ACEPTO</strong></p><p class="p4" style="text-align: center;"></p><p class="p5"></p>',
				'TEXTO' => 'En [DOCUMENTO_CIUDAD], Baja California, a [DOCUMENTO_FECHA], (él) (la) C. [VICTIMA_NOMBRE] quien se identifica con: [VICTIMA_TIPO_IDENTIFICACION], con número [VICTIMA_NUMERO_IDENTIFICACION], con domicilio en [VICTIMA_DOMICILIO], Teléfono casa: [VICTIMA_TELEFONO], Cel. [VICTIMA_TELEFONO_CELULAR], Trabajo [VICTIMA_TELEFONO_CELULAR], edad [VICTIMA_EDAD], Oficio [VICTIMA_OCUPACION], Nacionalidad [VICTIMA_NACIONALIDAD], Estado Civil [VICTIMA_ESTADO_CIVIL], manifiesto: Que entiendo y acepto los servicios que me ofrece el CENTRO DE DENUNCIA TECNOLÓGICA; con la finalidad de llevar a cabo el procedimiento de mediación, ACEPTO participar voluntariamente al mismo, para abordar un conflicto con: [IMPUTADO_NOMBRE]. Asimismo, manifiesto que se me ha informado acerca de los derechos, obligaciones, características y reglas del procedimiento, mismos que se encuentran establecidos en la Ley Nacional de Mecanismos Alternativos de Solución de Controversias en Materia Penal y Código Nacional de Procedimientos Penales, habiendo recibido a demás copia simple del presente documento; De igual forma manifiesto mi obligación  de INFORMAR INMEDIATAMENTE CUANDO DESEE dar por concluido el Procedimiento Alterno, según el artículo 32 de la Ley Nacional de Mecanismos Alternativos de Solución de Controversias en Materia Penal.',
				'PLANTILLAJUSTICIAID' => 1614,
				'CLASIFICACIONDOCTOID' => 1508
			),
		];

		$this->db->table('PLANTILLAS')->insertBatch($data);
	}
}
