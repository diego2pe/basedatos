<?php

class PersonaBean {
    public $codperso;
    public $nombperso;
    public $apelliperso;
    public function getCodperso() {
        return $this->codperso;
    }

    public function getNombperso() {
        return $this->nombperso;
    }

    public function getApelliperso() {
        return $this->apelliperso;
    }

    public function setCodperso($codperso) {
        $this->codperso = $codperso;
    }

    public function setNombperso($nombperso) {
        $this->nombperso = $nombperso;
    }

    public function setApelliperso($apelliperso) {
        $this->apelliperso = $apelliperso;
    }

}