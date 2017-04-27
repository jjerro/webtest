<?php

    /**
    * The admins class
    * It contains all action and behaviours admins may have
    */
    class Admins
    {

        private $dbh = null;

        public function __construct($db)
        {
            $this->dbh = $db->dbh;
        }

        /*
        public function loginAdmin($username, $password)
        {
            //Un-comment this to see a cryptogram of a password 
            // echo session::hashPassword($password);
            // die;
            $request = $this->dbh->prepare("SELECT username, password FROM admins WHERE username = ?");
            if($request->execute( array($username) ))
            {
                // This is an array of objects.
                // Remember we setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); in config/dbconnection.php
                $data = $request->fetchAll();

                // But if things are right, the array should contain only one object, the corresponding user
                // so, we can do this
                $data = $data[0];

                return session::passwordMatch($password, $data->password) ? true : false;

            }else{
                return false;
            }

        } */
        

        /**
         * Check if the admin username is unique
         * If though we've set this criteria in our database,
         * It's good to make sure the user is not try that
         * @param   $username The username
         * @return Boolean If the username is already usedor not
         * 
         */
        public function adminExists( $username )
        {
            $request = $this->dbh->prepare("SELECT username FROM admins WHERE username = ?");
            $request->execute([$username]);
            $Admindata = $request->fetchAll();
            return sizeof($Admindata) != 0;
        }

        /**
         * Compare two passwords
         * @param String $password1, $password2 The two passwords
         * @return  Boolean Either true or false
         */

        public function ArePasswordsSame( $password1, $password2 )
        {
            return strcmp( $password1, $password2 ) == 0;
        }


        /**
         * Create a new row of admin
         * @param String $username New admin username
         * @param String $password New Admin password
         * @return Boolean The final state of the action
         * 
         */

        public function addNewAdmin($username, $password, $namalengkap, $nip, $image)
        {

            $request = $this->dbh->prepare("INSERT INTO admins (username, password, namalengkap, nip, image) VALUES(?,?,?,?,?) ");

                // Do not forget to encrypt the pasword before saving
            return $request->execute([$username, session::hashPassword($password), $namalengkap, $nip, $image]);


        }
             

        /**
         * Create a new row of product
         * 
         *//*
 public function addNewProduct($name, $price, $expiry, $description)
        {
            $request = $this->dbh->prepare("INSERT INTO products (product_name, product_price, product_expires_on, product_description, created_on) VALUES(?,?,?,?,?) ");

            // Do not forget to encrypt the pasword before saving
            return $request->execute([$name, $price, $expiry, $description, time()]);
        }
        */


        public function addNewProduct($jenis, $nama, $nolama, $nobaru, $nofoto, $tempatsimpan, $gedung, $ruangan, $rak, $box, $lemari,  $panjang, $lebar, $tinggi,  $tebal, $rumbai, $diameterdalam, $diameterluar, $bahan, $teknik, $fungsi, $riwayat, $kondisi, $deskripsi)
        {
            $request = $this->dbh->prepare("INSERT INTO collection ( jenis_koleksi, nama_benda, no_lama, no_baru, no_foto,tempat_simpan, gedung, ruangan, rak, idbox, lemari, panjang, lebar, tinggi, tebal, rumbai, diameter_dalam, diameter_luar, bahan, teknik, fungsi, riwayat, kondisi, deskripsi) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");

            // Do not forget to execute the query
            return $request->execute([$jenis, $nama, $nolama, $nobaru, $nofoto, $tempatsimpan, $gedung, $ruangan, $rak, $box, $lemari,  $panjang, $lebar, $tinggi,  $tebal, $rumbai, $diameterdalam, $diameterluar, $bahan, $teknik, $fungsi, $riwayat, $kondisi, $deskripsi]);
        }


    

    /**
         * Edit a product
         */

        public function updateProduct($id, $jenis, $nama, $nolama, $nobaru, $nofoto, $tempatsimpan, $gedung, $ruangan, $rak, $box, $lemari,  $panjang, $lebar, $tinggi,  $tebal, $rumbai, $diameterdalam, $diameterluar, $bahan, $teknik, $fungsi, $riwayat, $kondisi, $deskripsi, $image)
        {
            $request = $this->dbh->prepare("UPDATE collection SET idcol = ?, jenis_koleksi = ?, nama_benda = ?, no_lama = ?, no_baru = ?, no_foto = ?, tempat_simpan = ?, gedung = ?, ruangan = ?, rak = ?, idbox = ?, lemari = ?, panjang = ?, lebar = ?, tinggi = ?, tebal = ?, rumbai = ?, diameter_dalam = ?, diameter_luar = ?, bahan = ?, teknik = ?, fungsi = ?, riwayat = ?, kondisi = ?, deskripsi = ?, image = ? WHERE idcol =$id");

            // Do not forget to encrypt the pasword before saving
            return $request->execute([$id, $jenis, $nama, $nolama, $nobaru, $nofoto, $tempatsimpan, $gedung, $ruangan, $rak, $box, $lemari,  $panjang, $lebar, $tinggi,  $tebal, $rumbai, $diameterdalam, $diameterluar, $bahan, $teknik, $fungsi, $riwayat, $kondisi, $deskripsi, $image]);
        }

        /**
         * Fetch products
         */

        public function fetchProducts($limit = 100)
        {
            $request = $this->dbh->prepare("SELECT * FROM collection  ORDER BY idcol ASC LIMIT $limit");
            if ($request->execute()) {
                return $request->fetchAll();
            }
            return false;
        }


        /**
         *  Fetch one product
         */

        public function getAProduct($id)
        {
            if (is_int($id)) 
            {
                $request = $this->dbh->prepare("SELECT * FROM collection WHERE idcol = ?");
                if ($request->execute([$id])) {
                    return $request->fetchAll();
                }
                return false;
            }
            return false;
        }

        /**
         * Delete a product
         */
        public function deleteProduct($id)
        {
            $request = $this->dbh->prepare("DELETE FROM collection WHERE idcol = ?");
            return $request->execute([$id]);
        }



        public function fetchAdmin($limit = 100)
        {
            $request = $this->dbh->prepare("SELECT * FROM admins  ORDER BY idadmins ASC LIMIT $limit");
            if ($request->execute()) {
                return $request->fetchAll();
            }
            return false;
        }


        /**
         *  Fetch one Admin
         */

        public function getAnAdmin($id)
        {
            if (is_int($id)) 
            {
                $request = $this->dbh->prepare("SELECT * FROM admins WHERE idadmins = ?");
                if ($request->execute([$id])) {
                    return $request->fetchAll();
                }
                return false;
            }
            return false;
        }

        /**
         * Delete a product
         */
        public function deleteAdmin($id)
        {
            $request = $this->dbh->prepare("DELETE FROM admins WHERE idadmins = ?");
            return $request->execute([$id]);
        }

          /**
         * Edit a product
         */

        public function updateAdmin($id, $namalengkap, $nip, $image, $tentang, $nokontak)
        {
            $request = $this->dbh->prepare("UPDATE admins SET idadmins = ?, namalengkap = ?, nip = ?, image = ?, tentang = ?, no_kontak = ? WHERE idadmins =$id");

            // Do not forget to encrypt the pasword before saving
            return $request->execute([$id, $namalengkap, $nip, $image, $tentang, $nokontak]);
        }
    }

