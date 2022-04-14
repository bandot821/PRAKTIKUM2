<?php
require_once 'class_bank.php';

class AccountBank extends Account
{
    public $customer;
    const biaya_admin = 6500;

    function __construct($norek, $customer, $saldo)
    {
        parent::__construct($norek, $saldo);
        $this->customer = $customer;
    }

    function transfer($tujuan, $duit)
    {
        $tujuan->deposit($duit);
        $this->withdraw($duit);
        $this->withdraw(self::biaya_admin);
    }

    function cetak()
    {
        echo "<br/>Nomor Rekening : $this->nomor";
        echo "<br/>Rekening Atas Nama : $this->customer";
        echo "<br/>Saldo Anda Sebesar Rp. " . number_format($this->saldo, 2, ",", ".");
    }
}

?>
