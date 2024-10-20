<?php
    if(isset($_POST['submit']) && $_POST['submit'] == "izmeni" && $_POST['id_predmeta']
    && isset($_POST['predmet'] )
    && isset($_POST['katedra'] )
    && isset($_POST['sala'] )
    && isset($_POST['datum'] )){
        $prijava = new Prijava($_POST['id_predmeta'], $_POST['predmet'], $_POST['katedra'],$_POST['sala'], $_POST['datum']);
        $status = Prijava::update($prijava, $conn);
       
        if ($status) {
            echo "Uspesna izmena";
        } else {
            echo "Neuspesna izmena";
               
        }
}
?>