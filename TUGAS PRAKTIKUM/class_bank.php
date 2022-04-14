<?php
    class Account{
        public $nomor;
        public $saldo;

        function __construct($norek, $saldo)
        {
            $this->nomor = $norek;
            $this->saldo = $saldo;
        }

        function deposit($duit){
            $this->saldo += $duit;
        }

        function withdraw($narik){
            $this->saldo -= $narik;
        }
    }
?>
