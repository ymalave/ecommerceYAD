<?php 
    class User extends Database
    {

        public function signup($POST)
        {
            $user = array();
            $user['userName'] = trim($POST['Name']);
            $user['phoneNumber'] = trim($POST['Phone']);
            $user['email'] = trim($POST['Email']);
            $user['password'] = trim($POST['Password']);
            $user['password'] = hash('sha1', $user['password']);
            $user['rank'] = "Costumer";

            $this->connect();
            //Insert Captured information to a database table
            $postQuery = "INSERT INTO `usuario`(`idusuario`,`userName`, `phoneNumber`, `email`, `password`, `rank`) VALUES (NULL,?,?,?,?,?)";
            $postStmt = $this->con->prepare($postQuery);
            //bind paramaters
            $rc = $postStmt->bind_param('sssss', $user['userName'], $user['phoneNumber'], $user['email'], $user['password'], $user['rank']);
            $rc = $postStmt->execute();
            //declare a varible which will be passed to alert function
            if ($postStmt) {
                header("location:".ROOT."login");
            } else {
                $err = "Please Try Again Or Try Later";
            }  
        }

        public function login($POST)
        {
            $user = array();
            $user['userName'] = trim($POST['userName']);
            $user['password'] = trim($POST['password']);
            $user['password'] = hash('sha1', $user['password']);
            $this->connect();
            $postQuery = "SELECT `idusuario`, `userName` FROM `usuario` WHERE (userName = ? AND password = ?)";
            $stmt = $this->con->prepare($postQuery); //sql to log in user
            $stmt->bind_param('ss',  $user['userName'], $user['password']); //bind fetched parameters
            $stmt->execute(); //execute bind 
            $stmt->bind_result($user['id'], $user['userName']); //bind result
            $rs = $stmt->fetch();
            if($rs)
            {
                $_SESSION['idusuario'] = $user['id'];
                $_SESSION['userName'] = $user['userName'];
                header("location:".ROOT."index");

            }else 
            {
                $err = "Incorrect Authentication Credentials ";
            }
        }

        public function check_login()
        {
            if(isset($_SESSION['idusuario']))
            {
                $this->connect();
                $postQuery = "SELECT * FROM usuario WHERE idusuario = ".$_SESSION['idusuario']."";
                $result = $this->con->query($postQuery);
                if($result)
                {
                    $data = $result->fetch_all(MYSQLI_ASSOC);
                    if(is_array($data) && count($data) > 0)
                    {
                        return $data;
                    }
                }
                return false;
                

            }
        }
    }
