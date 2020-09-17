<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Area;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(

            [
                'area' => 'Cardiólogo',
                'description' => 'Los cardiólogos son médicos que se especializan en el diagnóstico y tratamiento de las enfermedades del corazón y los vasos sanguíneos: el aparato cardiovascular.',
                'slug' => 'cardiologos',
                'color' => '#440022'

            ],

            [
                'area' => 'Cirujano Plástico ',
                'description' => 'La cirugía plástica es la especialidad médica que tiene por objeto la corrección y mejoramiento de anormalidades de origen congénito, adquirido, tumoral o involutiva que requieran reparación o reposición de la forma corporal y su función.',
                'slug' => 'cirujanos-plastico',
                'color' => '#445500'
            ],

            [
                'area' => 'Dermatólogo',
                'description' => 'Los dermatólogos es el especialista que estudia la estructura y función de la piel, así como las enfermedades que la afectan, su diagnóstico, prevención y tratamiento.',
                'slug' => 'dermatologos',
                'color' => '#445500'
            ],

            [
                'area' => 'Endocrinólogos',
                'description' => 'Un endocrinólogo es un médico especializado en las enfermedades de las hormonas, del metabolismo y en los problemas nutricionales. ',
                'slug' => 'endocrinologos',
                'color' => '#445500'
            ],

            [
                'area' => 'Gastroenterólogo',
                'description' => 'Los gastroenterólogos se ocupan de las enfermedades del aparato digestivo y órganos asociados, cómo: esófago, estómago, hígado y vías biliares, páncreas, intestino delgado, colon y recto.',
                'slug' => 'gastroenterologos',
                'color' => '#445500'
            ],

            [
                'area' => 'Ginecólogo',
                'description' => 'Los ginecólogos son los médicos especialistas en atender el sistema reproductor femenino, por lo tanto, los ginecólogos atienden las cuestiones vinculadas al útero, la vagina y los ovarios.',
                'slug' => 'ginecologos',
                'color' => '#445500'
            ],

            [
                'area' => 'Medico Internista',
                'description' => 'Los médicos especialistas en Medicina Interna o internistas aplican sus conocimientos científicos y experiencia clínica en el diagnóstico, el tratamiento y el cuidado del adulto en toda su amplitud, desde la salud a la enfermedad compleja.',
                'slug' => 'internistas',
                'color' => '#445500'
            ],

            [
                'area' => 'Neurocirujanos',
                'description' => 'Los neurocirujanos realizan el manejo quirúrgico de determinadas enfermedades del sistema nervioso central, periférico y vegetativo, incluyendo sus estructuras vasculares.',
                'slug' => 'neurocirujanos',
                'color' => '#445500'
            ],

            [
                'area' => 'Neurólogo',
                'description' => 'El Neurólogo es un médico que se ha especializado en el estudio de las enfermedades y trastornos que afectan al sistema nervioso.',
                'slug' => 'neurologos',
                'color' => '#445500'
            ],

            [
                'area' => 'Oftalmólogo',
                'description' => 'Especializado en el cuidado de los ojos y la visión. Los oftalmólogos tienen de 12 a 13 años estudios de medicina y especialización.',
                'slug' => 'oftamologos',
                'color' => '#445500'
            ],

            [
                'area' => 'Otorrinos',
                'description' => 'Un otorrinolaringólogo es un médico entrenado en el manejo y tratamiento, tanto médico como quirúrgico, de pacientes con enfermedades y alteraciones del oído, nariz, garganta y estructuras relacionadas de la cabeza y del cuello.',
                'slug' => 'otorrinos',
                'color' => '#445500'
            ],

            [
                'area' => 'Pediatras',
                'description' => 'Rama de la medicina que se especializa en el cuidado de la salud de los niños, desde el momento del nacimiento hasta la adolescencia.',
                'slug' => 'pediatras',
                'color' => '#445500'
            ],

            [
                'area' => 'Psiquiatra',
                'description' => 'Es psiquiatra es el médico especialista que puede diagnosticar y tratar una gran cantidad de enfermedades” mentales” con terapia, medicamento o con una combinación de ambos.',
                'slug' => 'psiquiatras',
                'color' => '#445500'
            ],

            [
                'area' => 'Reumatólogo',
                'description' => 'El reumatólogo está especializado en tratar un conjunto de enfermedades diversas y complejas que afectan al aparato locomotor, pero que también pueden afectar a otros órganos y tejidos como la piel, los ojos, el sistema nervioso, entre otros.',
                'slug' => 'reumatologos',
                'color' => '#445500'
            ],

            [
                'area' => 'Traumatólogos',
                'description' => 'Los traumatólogos se encargan del cuidado, corrección, estudio de las extremidades del cuerpo humano, además de su estructura ósea; en general también estudian los factores congénitos y genéticos de las deformaciones de la estructura ósea humana.',
                'slug' => 'traumatologos',
                'color' => '#445500'
            ],

            [
                'area' => 'Anestesiólogo',
                'description' => 'El anestesiólogo se ocupa del alivio del dolor y el cuidado global del paciente quirúrgico antes, durante y después de la cirugía',
                'slug' => 'anestesiologos',
                'color' => '#445500'
            ],

            [
                'area' => 'Angiólogo',
                'description' => 'Es el especialista que se encarga de tratar las enfermedades de los vasos del sistema circulatorio (venas y arterias) y del sistema linfático; incluyendo la anatomía de los vasos sanguíneos (como arterias, venas, capilares) y la de los linfáticos.',
                'slug' => 'angiologos',
                'color' => '#445500'
            ],

            [
                'area' => 'Genetistas',
                'description' => 'gene',
                'slug' => 'genetistas',
                'color' => '#445500'
            ],

            [
                'area' => 'Geriatra',
                'description' => 'El geriatra se ocupa de los problemas y enfermedades de los adultos mayores, cómo prevenirlas y manejarlas, y del proceso de envejecer.',
                'slug' => 'geriatra',
                'color' => '#445500'
            ],

            [
                'area' => 'Med. Gral',
                'description' => 'medico general',
                'slug' => 'med-general',
                'color' => '#445500'
            ],

            [
                'area' => 'Nefrólogo',
                'description' => 'Es el especialista en tratar los riñones y sus funciones. Tiene como campo la prevención, el diagnóstico y el tratamiento de las enfermedades del riñón y sus consecuencias.',
                'slug' => 'nefrologo',
                'color' => '#445500'
            ],

            [
                'area' => 'Neumólogo',
                'description' => 'La neumología es la especialidad médica encargada del estudio de las enfermedades del aparato respiratorio y centra su campo de actuación en el diagnóstico, tratamiento y prevención de las enfermedades del pulmón, la pleura y el mediastino.',
                'slug' => 'neumologo',
                'color' => '#445500'
            ],

            [
                'area' => 'Rehabilitologo',
                'description' => 'reha',
                'slug' => 'rehabilitologo',
                'color' => '#445500'
            ],

            [
                'area' => 'Urólogo',
                'description' => 'Se ocupa del diagnóstico y tratamiento de las enfermedades morfológicas renales y de las del aparato urinario y retroperitoneo que afectan a ambos sexos; así como de las enfermedades del aparato genital masculino, sin límite de edad.',
                'slug' => 'urologos',
                'color' => '#445500'
            ],

            [
                'area' => 'Cirujano Dentista',
                'description' => 'Los dentistas es el profesional encargado de la salud oral. No solo se centra en los dientes, sino también en los diversos órganos que componen la cavidad oral.',
                'slug' => 'ciru-dentista',
                'color' => '#445500'
            ],

            [
                'area' => 'Endodoncista',
                'description' => 'Un endodoncista es un dentista experto en los tratamientos de endodoncia, también llamados de conductos radiculares.',
                'slug' => 'endodoncistas',
                'color' => '#445500'
            ],

            [
                'area' => 'Implantólogo',
                'description' => 'Un implantólogo se encarga de que sus pacientes logren tener sus dientes con todas las exigencias estéticas. Esto puesto que no se nota el implante. De igual forma permite que su vida bucal sea mas cómoda.',
                'slug' => 'implantologia',
                'color' => '#445500'
            ],

            [
                'area' => 'Odontopediatra',
                'description' => 'La odontopediatría es la rama de la odontología encargada de tratar a los niños.',
                'slug' => 'odontopediatras',
                'color' => '#445500'
            ],

            [
                'area' => 'Ortodoncista',
                'description' => 'Los ortodoncistas se encargan de la corrección de los dientes y huesos posicionados incorrectamente. ',
                'slug' => 'ortodoncista',
                'color' => '#445500'
            ],

            [
                'area' => 'Periodoncista',
                'description' => 'El periodoncista es un odontólogo o dentista especializado en la prevención, diagnóstico y tratamiento de la enfermedad periodontal (encías).',
                'slug' => 'periodoncistas',
                'color' => '#445500'
            ],

            [
                'area' => 'Psicólogos',
                'description' => 'Los psicólogos estudian la conducta humana, entendiendo dentro de este concepto cuestiones relacionadas con el aprendizaje, procesos de pensamiento, emociones, comportamientos.',
                'slug' => 'psicologos',
                'color' => '#445500'
            ],

            [
                'area' => 'Nutriólogos',
                'description' => 'El Nutriólogo es el profesional de la salud capacitado para evaluar el estado de nutrición de los individuos, las comunidades y/o grupos de población.',
                'slug' => 'nutriologos',
                'color' => '#445500'
            ],

            [
                'area' => 'Enfermería',
                'description' => 'Los enfermeros  proporcionan atención de cabecera y cuidado directo a los pacientes  ',
                'slug' => 'enfermeras',
                'color' => '#445500'
            ],

            [
                'area' => 'Region Salud',
                'description' => 'Region Salud',
                'slug' => 'regionsalud',
                'color' => '#445500'
            ],

        );


        Area::insert($data);
    }
}
