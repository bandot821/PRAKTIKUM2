<?php
require_once './class_accout.php';

class AccountBank extends Account
{
    public function doTransfer($destination, $uangTranfer)
    {
        Account::withdraw($uangTranfer, false);
        $destination->deposit($uangTranfer, false);

        echo "Transfer sejumlah " .  number_format($uangTranfer, 2, ',', '.') . " dari $this->nama - $this->nomor ke $destination->nama - $destination->nomor sukses! </br>";
    }
}

$reyfa = new AccountBank('ABC0010', 'reyfa', 3450000);
$celvy = new AccountBank('ABC0011', 'celvy', 45000);
$febry = new AccountBank('ABC0012', 'febry', 235000);

$reyfa->deposit(1000000);
$reyfa->cetak();

$reyfa->doTransfer($celvy, 1000000);
$reyfa->cetak();

$reyfa->doTransfer($febry, 500000);
$reyfa->cetak();

$celvy->cetak();
$febry->cetak();

?>
