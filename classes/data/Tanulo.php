<?php

namespace PHP_Tanulok\classes\data;

class Tanulo {
    private string $nev;
    private int $evfolyam;
    private string $osztaly;

    private ?string $telefonszam = null;
    private ?float $evvegiAtlag = null;

    public function __construct(string $nev, int $evfolyam, string $osztaly){
        $this->nev = $nev;
        $this->evfolyam = $evfolyam;
        $this->osztaly = $osztaly;
    }

    public function getNev() : string {
        return $this->nev;
    }

    public function getEvfolyam() : int {
        return $this->evfolyam;
    }

    public function getOsztaly() : string {
        return $this->osztaly;
    }

    public function getTelefonszam() : ?string {
        return $this->telefonszam;
    } 

    public function setTelefonszam(?string $telefonszam) : Tanulo {
        $this->telefonszam = $telefonszam;
        return $this;
    }

    public function getEvvegiAtlag() : ?float {
        return $this->evvegiAtlag;
    }

    public function setEvvegiAtlag(?float $evvegiAtlag) : Tanulo {
        $this->evvegiAtlag = $evvegiAtlag;
        return $this;
    }
}