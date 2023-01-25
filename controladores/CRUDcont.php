<?php
class ControladorCRUD{
    public function ctrAdd(){
        if(!empty($_REQUEST['action_type']) && $_REQUEST['action_type'] == 'add'){ 
            $redirectURL = 'index.php?pagina=add'; 
            $tblName = 'usuarios';
            $postData = $statusMsg = $valErr = '';
            // Get user's input 
            $postData = $_POST; 
            $name = !empty($_POST['name'])?trim($_POST['name']):''; 
            $email = !empty($_POST['email'])?trim($_POST['email']):''; 
            $phone = !empty($_POST['phone'])?trim($_POST['phone']):''; 
             
            // Validate form fields 
            if(empty($name)){ 
                $valErr .= 'Please enter your name.<br/>'; 
            } 
            if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){ 
                $valErr .= 'Please enter a valid email.<br/>'; 
            } 
            if(empty($phone)){ 
                $valErr .= 'Please enter your phone no.<br/>'; 
            } 
             
            // Check whether user inputs are empty 
            if(empty($valErr)){ 
                // Insert data into the database 
                $userData = array( 
                    'name' => $name, 
                    'email' => $email, 
                    'phone' => $phone 
                ); 
                
                $insert = new ModeloCRUD();
                $insert->insert($tblName, $userData); 
                 
                if($insert){ 
                    $status = 'success'; 
                    $statusMsg = 'User data has been added successfully!'; 
                    $postData = ''; 
                     
                    $redirectURL = 'index.php'; 
                }else{ 
                    $statusMsg = 'Something went wrong, please try again after some time.'; 
                } 
            }else{ 
                $statusMsg = '<p>Please fill all the mandatory fields:</p>'.trim($valErr, '<br/>'); 
            } 
             
            // Store status into the SESSION 
            $sessData['postData'] = $postData; 
            $sessData['status']['type'] = $status; 
            $sessData['status']['msg'] = $statusMsg; 
            $_SESSION['sessData'] = $sessData;

            // Redirect to the home/add/edit page 
            header("Location: $redirectURL");
        }
    }
    static public function ctrShow(){
        $tblName = 'usuarios';
        $datos = new ModeloCRUD();
        $respuesta = $datos->getRows($tblName,array('order_by'=>'id DESC'));
        return $respuesta;
    }
}