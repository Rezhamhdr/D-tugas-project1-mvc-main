<?php
include_once'book.php';

class model {
    public function getData()
    {
        return array(
            new book('pemprogaman PHP & Mysql','Bayu Priyambadha','UB Press','2011'),
            new book('pemprogaman Framework MVC dengan PHP','Widhy','UB Press','2011'),
            new book('Membangun aplikasi web dengan AJAX','Achmad Aryawan','UB Press','2012'),
            new book('kolaborasi PHP, MVC dan AJAX','Achmad Aryawan','UB Press','2012')  
        );
    }
}
?>