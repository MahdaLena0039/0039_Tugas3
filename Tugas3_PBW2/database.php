<?php 
    class Database{
        // properti
        public $host = "localhost";
        public $username = "root";
        public $password = "";
        public $database = "db_php_0039";
        public $connect;

        function __construct()
        {
            $this->connect = mysqli_connect($this->host, $this->username, $this->password);
            mysqli_select_db($this->connect, $this->database);
        }

        function tampilData(){
            $data = mysqli_query($this->connect, "SELECT * FROM tb_users_0039");
            $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
            return $rows;
        }

        function tambahData($nama, $jns_kelamin, $alamat, $nohp, $gambar){
            mysqli_query($this->connect, "INSERT INTO tb_users_0039 VALUES (NULL, '$nama', '$jns_kelamin', '$alamat', '$nohp', '$gambar')");
        }

        function editData($id){
            $data = mysqli_query($this->connect, "SELECT * FROM tb_users_0039 WHERE id=$id");
            $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
            return $rows;
        }

        function updateData($id, $nama, $jns_kelamin, $alamat, $nohp, $gambar){
            mysqli_query($this->connect, "UPDATE `tb_users_0039` SET `nama` = '$nama', `jns_kelamin` = '$jns_kelamin', `alamat` = '$alamat', `nohp` = '$nohp', `gambar` = '$gambar' WHERE `tb_users_0039`.`id` = '$id'");
        }

        function hapusData($id){
            mysqli_query($this->connect, "DELETE FROM `tb_users_0039` WHERE `tb_users_0039`.`id` = '$id'");
        }

        

    }

?>