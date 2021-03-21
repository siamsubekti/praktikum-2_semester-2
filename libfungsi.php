<?php
    function lulus($_nilai) {
        
        if ($_nilai > 55) {
            $_nilai = 'LULUS';
        } else {
            $_nilai = 'TIDAK LULUS';
        }

        return $_nilai;
    }

    function grade($_grade) {

        if ($_grade <= 35) {
            $_grade = 'E';
        } else if ($_grade > 35 && $_grade <= 55) {
            $_grade = 'D';
        } else if ($_grade > 55 && $_grade <= 69) {
            $_grade = 'C';
        } else if ($_grade > 69 && $_grade <= 84) {
            $_grade = 'B';
        } else if ($_grade > 84 && $_grade <= 100) {
            $_grade = 'A';
        } else {
            $_grade = 'I';
        }

        return $_grade;
    }

    function predikat($_predikat) {
        switch($_predikat) {
            case 'E' :
                $_predikat = 'Sangat Kurang';
                break;
            case 'D' :
                $_predikat = 'Kurang';
                break;
            case 'C' :
                $_predikat = 'Cukup';
                break;
            case 'B' :
                $_predikat = 'Memuaskan';
                break;
            case 'A' :
                $_predikat = 'Sangat Memuaskan';
                break;
            case 'I' :
                $_predikat = 'Tidak ada';
                break;
        }

        return $_predikat;
    }
?>

