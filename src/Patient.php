<?php

namespace src\rins;

class Patient
{
    private $name;
    private $gender;
    private $age;
    private $blood;
    private $weight;
    private $tall;

    public function __construct(string $name, string $gender, string $blood, int $age, float $weight, float $tall)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
        $this->blood = $blood;
        $this->weight = $weight;
        $this->tall = $tall;
    }

    public function getBlood(): string
    {
        return $this->blood;
    }

    private function olderAge(): string
    {

        if($this->age > 17){
            return 'Aprovado! Paciente maior de idade';
        }

        return 'Reprovado! Paciente menor de idade';
    }

    private function calculateIMC(): string
    {
        $tallIMC = ($this->tall/100)** 2;
        $weightIMC = $this->weight;
        $IMC = $weightIMC / $tallIMC; 
        
        if($IMC < 20){
            return 'Reprovado! Paciente abaixo do peso';
        }

        if($IMC > 25){
            return 'Reprovado! Paciente acima do peso';
        }

        return 'Aprovado! Paciente com o IMC ideal';

    }

    public function patientInformations(): string
    {
        $name = $this->name;
        $gender = $this->gender;
        $age = $this->age;
        $blood = $this->blood;
        $weight = $this->weight;
        $tall = $this->tall;

        $message = "Nome do paciente: {$name},
        Genero do paciente: {$gender},
        Idade do paciente: {$age} anos,
        Tipo Sanguineo do paciente: {$blood},
        Peso do paciente: {$weight}KG,
        Altura do paciente: {$tall}cm";

        return $message;

    }

    public function verifyIMC(): string
    {
        $message = $this->calculateIMC();

        return $message;
    }

    public function verifyAge(): string
    {
        $message = $this->olderAge();
        return $message;
    }
    
}