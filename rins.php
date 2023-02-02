<?php

namespace src;

use src\rins\Patient;
use src\rins\Candidate;

require 'vendor/autoload.php';

$paciente = new Patient(
    'Lohane Vêkanandre Sthephany Smith Bueno de HA HA HA de Raio Laser bala de Icekiss',
    'Feminino',
    'A+',
    '21',
    '71',
    '172'
);

$canditado1 = new Candidate(
    'Carlos Rato Roberto Massa Júnior',
    'Masculino',
    'AB+',
    '22',
    '72',
    '175'
);

$canditado2 = new Candidate(
    'Kassandra Portadora da Águia',
    'Feminino',
    'O+',
    '22',
    '67',
    '160'
);

$canditado3 = new Candidate(
    'Arthur Morgan',
    'Masculino',
    'O-',
    '17',
    '80',
    '159'
);

$sanguePaciente = $paciente->getBlood();
$infoPaciente = $paciente->patientInformations();
$pesoPaciente = $paciente->verifyIMC();
$idadePaciente = $paciente->verifyAge();

$infoCandidato1 = $canditado1->candidateInformations();
$infoCandidato2 = $canditado2->candidateInformations();
$infoCandidato3 = $canditado3->candidateInformations();

$pesoCandidato1 = $canditado1->verifyIMC();
$pesoCandidato2 = $canditado2->verifyIMC();
$pesoCandidato3 = $canditado3->verifyIMC();

$idadeCandidato1 = $canditado1->verifyAge();
$idadeCandidato2 = $canditado2->verifyAge();
$idadeCandidato3 = $canditado3->verifyAge();

$sangueCandidato1 = $canditado1->verifyBlood($sanguePaciente);
$sangueCandidato2 = $canditado2->verifyBlood($sanguePaciente);
$sangueCandidato3 = $canditado3->verifyBlood($sanguePaciente);


echo($infoPaciente . PHP_EOL . $pesoPaciente . PHP_EOL . $idadePaciente . PHP_EOL);
echo('--------------------------------------------------------------------------------------' . PHP_EOL);
echo($infoCandidato1 . PHP_EOL);
echo($pesoCandidato1 . PHP_EOL . $idadeCandidato1 . PHP_EOL . $sangueCandidato1. PHP_EOL);
echo('--------------------------------------------------------------------------------------' . PHP_EOL);
echo($infoCandidato2 . PHP_EOL);
echo($pesoCandidato2 . PHP_EOL . $idadeCandidato2 . PHP_EOL . $sangueCandidato2. PHP_EOL);
echo('--------------------------------------------------------------------------------------' . PHP_EOL);
echo($infoCandidato3 . PHP_EOL);
echo($pesoCandidato3 . PHP_EOL . $idadeCandidato3 . PHP_EOL . $sangueCandidato3. PHP_EOL);
echo('--------------------------------------------------------------------------------------' . PHP_EOL);