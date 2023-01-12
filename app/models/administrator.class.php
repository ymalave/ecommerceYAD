<?php
    class Administrator extends Database
    {
        public function readPayments()
        {
            $this->connect();
            $postQuery = "SELECT * FROM `pago`";
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

        public function readUsers()
        {
            $this->connect();
            $postQuery = "SELECT `idusuario`, `userName`, `phoneNumber`, `email` FROM `usuario`";
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
?>