<?php
$request = $_POST['SomeText'];
$result = $_GET['result'];
$item = $_GET['item'];
$type = array("apple" => "fruit", "pear" => "fruit", "cucumber" => "vegetable");


    
    if(isset($result)) {
        if($result == "true"){
        $response_array['result'] = $result; 
        $response_array['text'] = "Success!"; 
        }
        elseif ($result == "false") {
        $response_array['result'] = $result; 
        $response_array['text'] = "Failure!"; 
        }
        else {
        $response_array['result'] = $result; 
        $response_array['text'] = "OK"; 
        }
    }
    if(isset($item)) {
      foreach ($type as $key => $value) {
        if($key == $item){
            $response_array['item'] = $item;
            $response_array['type'] = $value;
           
    }}}
   
    if(isset($request)){
        if($request != ""){
        $response_array['status'] = 'success'; 
        $response_array['SomeText'] = $request; 
    }
    else {
        $response_array['status'] = 'error';  
    }}


echo json_encode($response_array);

?>