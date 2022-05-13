<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PersonaReligionSeeder extends Seeder
{
    public function run()
    {
        $data = [
            array('PERSONARELIGIONDESCR' => 'AMIGOS DEL HOMBRE'),
            array('PERSONARELIGIONDESCR' => 'AMOR Y VIDA'),
            array('PERSONARELIGIONDESCR' => 'ANABAPTISTA'),
            array('PERSONARELIGIONDESCR' => 'ANGLICANA'),
            array('PERSONARELIGIONDESCR' => 'APOSTOLICA'),
            array('PERSONARELIGIONDESCR' => 'ASOC CRISTIA D/JOVEN'),
            array('PERSONARELIGIONDESCR' => 'BAUTISTA'),
            array('PERSONARELIGIONDESCR' => 'BUDISMO'),
            array('PERSONARELIGIONDESCR' => 'CALVINISTA'),
            array('PERSONARELIGIONDESCR' => 'CATOLICA'),
            array('PERSONARELIGIONDESCR' => 'CHIITA'),
            array('PERSONARELIGIONDESCR' => 'CONFUCIANISMO'),
            array('PERSONARELIGIONDESCR' => 'CRISTIANA'),
            array('PERSONARELIGIONDESCR' => 'DARBYSTA'),
            array('PERSONARELIGIONDESCR' => 'DISCIPULOS DE GEROGE'),
            array('PERSONARELIGIONDESCR' => 'EVANGELISTA'),
            array('PERSONARELIGIONDESCR' => 'HINDUISMO'),
            array('PERSONARELIGIONDESCR' => 'IGLESIA DE JESUS '),
            array('PERSONARELIGIONDESCR' => 'IGLESIA REFORMADA'),
            array('PERSONARELIGIONDESCR' => 'ISLAMICA'),
            array('PERSONARELIGIONDESCR' => 'JUDIA'),
            array('PERSONARELIGIONDESCR' => 'LA CIENCIA CRISTIANA'),
            array('PERSONARELIGIONDESCR' => 'LUTERANOS'),
            array('PERSONARELIGIONDESCR' => 'MASONICA'),
            array('PERSONARELIGIONDESCR' => 'MAZDEISMO'),
            array('PERSONARELIGIONDESCR' => 'METODISTA'),
            array('PERSONARELIGIONDESCR' => 'MORMONA'),
            array('PERSONARELIGIONDESCR' => 'MUSULMANA'),
            array('PERSONARELIGIONDESCR' => 'NEO-ANTOINISMO'),
            array('PERSONARELIGIONDESCR' => 'ORTODOXA'),
            array('PERSONARELIGIONDESCR' => 'PENTECOSTISTA'),
            array('PERSONARELIGIONDESCR' => 'PIETISTA'),
            array('PERSONARELIGIONDESCR' => 'POLYTEISTA'),
            array('PERSONARELIGIONDESCR' => 'PRESBITERIANA'),
            array('PERSONARELIGIONDESCR' => 'PROTESTANTE'),
            array('PERSONARELIGIONDESCR' => 'RASTA FARI'),
            array('PERSONARELIGIONDESCR' => 'SAMARITANA'),
            array('PERSONARELIGIONDESCR' => 'SHINTO'),
            array('PERSONARELIGIONDESCR' => 'SIKHS'),
            array('PERSONARELIGIONDESCR' => 'TAOISMO'),
            array('PERSONARELIGIONDESCR' => 'TESTIGOS DE JEHOVA'),
            array('PERSONARELIGIONDESCR' => 'BRAHAMANISTA'),
            array('PERSONARELIGIONDESCR' => 'PAOISTA'),
            array('PERSONARELIGIONDESCR' => 'SINTOISTA'),
            array('PERSONARELIGIONDESCR' => 'NINGUNA'),

        ];
        $this->db->table('CATEGORIA_PERSONARELIGION')->insertBatch($data);
    }
}
