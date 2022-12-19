<?php
    class Ajax_cart extends Controller
    {
        public function index()
        {

        }

        public function add_quantity($data = '')
        {
            $obj = json_decode($data);
            $obj->data_type = "add_quantity";
            $id = esc($obj->id);
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
        }

        public function subtract_quantity($data = '')
        {
            $obj = json_decode($data);
            $obj->data_type = "subtract_quantity";
            $id = esc($obj->id);
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
        }

        public function delete_item($data = '')
        {
            $obj = json_decode($data);
            $obj->data_type = "delete_item";
            $id = esc($obj->id); 
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
        }

        public function edit_quantity($data = '')
        {
            $obj = json_decode($data);
            $obj->data_type = "edit_quantity";
            $quantity = esc($obj->quantity);
            $id = esc($obj->id); 
            if(isset($_SESSION['cart']))
            {
                foreach($_SESSION['cart'] as $key => $value)
                {
                    if($value['id'] == $id)
                    {
                        $_SESSION['cart'][$key]['qty'] = (int)$quantity;
                        break;
                    }
                }
            }
            echo json_encode($obj);
        }
    }
?>