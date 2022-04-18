<?php
    
    function kelulusan($_nilai) {
        if ($_nilai > 55 ){
            return 'LULUS';
        }else {
            return 'TIDAK LULUS';
        }
    }

    function grade($_nilai) {

        global $grade;

        if ($_nilai > 0 and $_nilai <= 35) {
            $grade = "E";
        } elseif ($_nilai > 35 and $_nilai <= 55) {
            $grade = "D";
        } elseif ($_nilai > 55 and $_nilai <= 69) {
            $grade = "C";
        } elseif ($_nilai > 69 and $_nilai <= 84) {
            $grade = "B";
        } elseif ($_nilai > 84 and $_nilai <= 100) {
            $grade = "A";
        } else {
            $grade = "I";
        }

        return $grade;
    }

    function predikat($grade) {

        switch ($grade) {
            case 'A':
                $predikat = "Sangat Memuaskan";
                break;
            case 'B':
                $predikat = "Memuaskan";
                break;
            case 'C':
                $predikat = "Cukup";
                break;
            case 'D':
                $predikat = "Kurang";
                break;
            case 'E':
                $predikat = "Sangat Kurang";
                break;
            default:
                $predikat = "Tidak Ada";
                break;
        }

        return $predikat;
    }
?>
