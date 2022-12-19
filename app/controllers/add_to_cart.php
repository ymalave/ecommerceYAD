<?php
    //Clase para abrir nuestra página en Home (Principal)
    class Add_to_cart extends Controller
    {
        private $redired_to = '';

        public function index($id = '')
        {
            $this->set_redired();
            $id = esc($id);
            $producto = $this->load_model("Products");
            $product = $producto->read("SELECT * FROM producto WHERE idproducto = '".$id."'");
            
            if($product)
            {   
                $row = $product[0];
                if(isset($_SESSION['cart']))
                {
                    $ids = array_column($_SESSION['cart'], "id");
                    if(in_array($row['idproducto'], $ids))
                    {
                        $key = array_search($row['idproducto'], $ids);
                        $_SESSION['cart'][$key]['qty']++;
                    }
                    else
                    {
                        $arr = array();
                        $arr['id'] = $row['idproducto'];
                        $arr['qty'] = 1;

                        $_SESSION['cart'][] = $arr;
                    }
                }
                else
                {
                    $arr = array();
                    $arr['id'] = $row['idproducto'];
                    $arr['qty'] = 1;

                    $_SESSION['cart'][] = $arr; 
                }
            }
            header("location: " . ROOT . "cart");
            
        }

        public function add_quantity($id = '')
        {
            $this->set_redired();
            $id = esc($id); 
            if(isset($_SESSION['cart']))
            {
                foreach($_SESSION['cart'] as $key => $value)
                {
                    if($value['id'] == $id)
                    {
                        $_SESSION['cart'][$key]['qty']++;
                        break;
                    }
                }
            }
            $this->redired();
        }

        public function subtract_quantity($id = '')
        {
            $this->set_redired();
            $id = esc($id); 
            if(isset($_SESSION['cart']))
            {
                foreach($_SESSION['cart'] as $key => $value)
                {
                    if($value['id'] == $id)
                    {
                        $_SESSION['cart'][$key]['qty']--;
                        break;
                    }
                }
            }
            $this->redired();
        }

        public function remove($id = '')
        {
            $this->set_redired();
            $id = esc($id); 
            if(isset($_SESSION['cart']))
            {
                foreach($_SESSION['cart'] as $key => $value)
                {
                    if($value['id'] == $id)
                    {
                        unset($_SESSION['cart'][$key]);
                        $_SESSION['cart'] = array_values($_SESSION['cart']);
                        show($_SESSION['cart']);
                        break;
                    }
                }
            }
            $this->redired();
        }

        private function redired()
        {
            header("location: ". $this->redired_to);
            die;
        }

        private function set_redired()
        {
            if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != "")
            {
                $this->redired_to = $_SERVER['HTTP_REFERER'];
            }
            else
            {
                $this->redired_to = ROOT . "";
            }
        }
    }
?>