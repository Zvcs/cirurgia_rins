<?php

namespace src\rins;

const ABP = ['O-','O+','B-','B+','A-','A+', 'AB-', 'AB+'];
const ABM = ['O-','B-','A-', 'AB-'];
const AP = ['O-','O+','B-','B+','A-','A+'];
const AM = ['O-','B-','A-'];
const BP = ['O-','O+','B-','B+'];
const BM = ['O-','B-'];
const OP = ['O-','O+'];
const OM = ['O-'];

class Candidate
{
    private $name;
    private $gender;
    private $age;
    private $blood;
    private $weight;
    private $tall;

    public function __construct(string $name, string $gender, string $blood, int $age, int $weight, int $tall)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
        $this->blood = $blood;
        $this->weight = $weight;
        $this->tall = $tall;
    }


    private function calculateIMC(): string
    {
        $tallIMC = ($this->tall/100)** 2;
        $weightIMC = $this->weight;
        $IMC = $weightIMC / $tallIMC; 
        
        if($IMC < 20){
            return 'Reprovado! Candidato abaixo do peso';
        }

        if($IMC > 25){
            return 'Reprovado! Candidato acima do peso';
        }

        return 'Aprovado! Candidato com o IMC ideal';

    }

    private function olderAge(): string
    {

        if($this->age > 17){
            return 'Aprovado! Candidato maior de idade';
        }

        return 'Reprovado! Candidato menor de idade';
    }

    private function typeBlood(string $patientblood): string
    {
        switch ($patientblood){
            case 'AB+':
                if(in_array($this->blood, ABP)){
                    return 'Aprovado! Sangue compátível';
                }
             return 'Reprovado! Sangue incompatível';
            case 'AB-':
                if(in_array($this->blood, ABM)){
                    return 'Aprovado! Sangue compátível';
                }
            return 'Reprovado! Sangue incompatível';
            case 'A+':
                if(in_array($this->blood, AP)){
                    return 'Aprovado! Sangue compátível';
                }
             return 'Reprovado! Sangue incompatível';
            case 'A-':
                if(in_array($this->blood, AM)){
                    return 'Aprovado! Sangue compátível';
                }
            return 'Reprovado! Sangue incompatível';
            case 'B+':
                if(in_array($this->blood, BP)){
                    return 'Aprovado! Sangue compátível';
                }
            return 'Reprovado! Sangue incompatível';
            case 'B-':
                if(in_array($this->blood, BM)){
                    return 'Aprovado! Sangue compátível';
                }
             return 'Reprovado! Sangue incompatível';
             case 'O+':
                if(in_array($this->blood, OP)){
                    return 'Aprovado! Sangue compátível';
                }
             return 'Reprovado! Sangue incompatível';
             case 'O-':
                if(in_array($this->blood, OM)){
                    return 'Aprovado! Sangue compátível';
                }
             return 'Reprovado! Sangue incompatível';
        }

    }

    public function verifyBlood(string $patientblood): string
    {
        $message = $this->typeBlood($patientblood);
        return $message;
    }

    public function verifyAge(): string
    {
        $message = $this->olderAge();
        return $message;
    }

    public function verifyIMC(): string
    {
        $message = $this->calculateIMC();

        return $message;
    }

    public function candidateInformations(): string
    {
        $name = $this->name;
        $gender = $this->gender;
        $age = $this->age;
        $blood = $this->blood;
        $weight = $this->weight;
        $tall = $this->tall;

        $message = "Nome do candidato: {$name},
        Genero do candidato: {$gender},
        Idade do candidato: {$age} anos,
        Tipo Sanguineo do candidato: {$blood},
        Peso do candidato: {$weight}KG,
        Altura do candidato: {$tall}cm";

        return $message;

    }

}