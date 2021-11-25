<?php
    header("Content-disposition: attachment; filename=../Guía del alumnado UF1.pdf");
    header("Content-type: application/pdf");
    readfile("../Guía del alumnado UF1.pdf");
?>