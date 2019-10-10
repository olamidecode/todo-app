<?php

if(isset($_POST["addTask"])){
    $_SESSION["id"]= $user_id;
    $_POST["add"] = $task;
    $_POST["date"] = $date;

    //Insert into database.
    require 'config/conn.php';

    //prepare insert statement
    $sql = "INSERT INTO  list_table(list_item, list_item_due_date,user_id) VALUES (:list_item, :list_item_due_date, :user_id)";

    if($stmt = $pdo->prepare($sql)){

        //bind parameters to the prepared statements
        $stmt->bindParam(":list_item",$param_list_item,PDO::PARAM_STR);
        $stmt->bindParam(":list_item_due_date",$param_list_item_due_date,PDO::PARAM_STR);
        $stmt->bindParam(":user_id",$param_userId,PDO::PARAM_INT);

        //set the parameters
        $param_list_item = $task;
        $param_list_item_due_date = $date;
        $param_userID = $user_id;

        //execute the prepared statement
        if($stmt->execute()){

        }
        else{
            echo "didnt execute";
        }


    }
    unset($stmt);
    unset($pdo);

} else{
    echo  "Please press add task";
}





?>