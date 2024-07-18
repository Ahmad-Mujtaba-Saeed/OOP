<?php
    include_once 'config/database.php';
    $obj = new Query();
    $data = array(
        'name' => 'Ahmad Mujtaba',
        'email' => 'ahmadmujtabap70@gmail.com',
        'phone' => '03107562128'
    );
    
    $result = $obj->insertData('users',$data);

    $result = $obj->getData('users','name');
    if($result->num_rows >0){
        while($row = $result->fetch_assoc()){
            echo '<pre>';
            print_r($row);
        }
    }

    // $id = 1;
    // $result = $obj->deleteData('users','id',$id);
    // if($result){
    //     echo "done";
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP programming</title>
</head>
<body>
    
</body>
</html>