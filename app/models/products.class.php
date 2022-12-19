<?php
    class Products extends Database
    {
        public function read($postQuery)
        {
            $this->connect();
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

        public function create($postQuery)
        {
            $this->connect();
            $result = $this->con->prepare($postQuery);
            
            if($result)
            {
                show("Logrado");
                return true;
            }
            return false;
            
        }
    }
?>