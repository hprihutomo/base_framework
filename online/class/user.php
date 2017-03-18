<?php
    /**
     * Class User untuk melakukan login dan registrasi user baru
     */
    class User
    {

        private $db; //Menyimpan Koneksi database
        private $error; //Menyimpan Error Message

        // Contructor untuk class User, membutuhkan satu parameter yaitu koneksi ke databse
        function __construct($db_conn)
        {
            $this->db = $db_conn;

            // Mulai session
            session_start();
        }

        // Registrasi user baru
        public function register($nama, $email, $user, $password)
        {
            try
            {
                // buat hash dari password yang dimasukkan
                $hashPasswd = password_hash($password, PASSWORD_DEFAULT);

                //Masukkan user baru ke database
                $query = $this->db->prepare("INSERT INTO MSUSER(NAMAUSER, EMAIL, USERNAME, PASSWORD) VALUES(:nama, :email, :user, :pass)");
                $query->bindParam(":nama", $nama);
                $query->bindParam(":email", $email);
                $query->bindParam(":user", $user);
                $query->bindParam(":pass", $hashPasswd);
                //$query->bindParam(":kode", $kode);
                $query->execute();

                return true;
            }catch(PDOException $e){
                // Jika terjadi error
                if($e->errorInfo[0] == 23000){
                    //errorInfor[0] berisi informasi error tentang query sql yg baru dijalankan
                    //23000 adalah kode error ketika ada data yg sama pada kolom yg di set unique
                    $this->error = "Email sudah digunakan!";
                    return false;
                }else{
                    echo $e->getMessage();
                    return false;
                }
            }
        }

        //Login user
        public function login($username, $password)
        {
            try
            {
                // Ambil data dari database
                $query = $this->db->prepare("SELECT * FROM MSUSER WHERE USERNAME = :username");
                $query->bindParam(":username", $username);
                $query->execute();
                $data = $query->fetch();

                // Jika jumlah baris > 0
                if($query->rowCount() > 0){
                    // jika password yang dimasukkan sesuai dengan yg ada di database
                    if(password_verify($password, $data['PASSWORD'])){
                        $_SESSION['user_session'] = $data['IDUSER'];
                        return true;
                    }else{
                        $this->error = "Email atau Password Salah";
                        return false;
                    }
                }else{
                    $this->error = "Email atau Password Salah";
                    return false;
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        // Cek apakah user sudah login
        public function isLoggedIn(){
            // Apakah user_session sudah ada di session
            if(isset($_SESSION['user_session']))
            {
                return true;
            }
        }

        // Ambil data user yang sudah login
        public function getUser(){
            // Cek apakah sudah login
            if(!$this->isLoggedIn()){
                return false;
            }

            try {
                // Ambil data user dari database
                $query = $this->db->prepare("SELECT * FROM data_user WHERE IDUSER = :idUser");
                $query->bindParam(":idUser", $_SESSION['user_session']);
                $query->execute();
                return $query->fetch();
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }


        // Ambil error terakhir yg disimpan di variable error
        public function getLastError(){
            return $this->error;
        }
        public function tampil()
        {
            try {
            $sql = "SELECT * FROM MSUSER";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
                }
                catch(PDOException $e) {
                    echo $e->getMessage();
                    return false;
                }
        }

        public function getData($id)
        {
        try {
            $sql = "SELECT * FROM MSUSER WHERE idUser = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch();
            }
            catch(PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        // Logout user
        public function logout(){
            // Hapus session
            session_destroy();
            // Hapus user_session
            unset($_SESSION['user_session']);
            return true;
        }
    }

?>
