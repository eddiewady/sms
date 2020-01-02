<?php
    include '../dbConnection/connection.php'; 
    $target_dir = "../images/uploaded/";
    $target_file = $_FILES["photo"]["name"];
    $targetFilePath = $target_dir.$target_file;
    $imageFileType = strtolower(pathinfo($targetFilePath,PATHINFO_EXTENSION));
    $uploadOk = 1;
if($_POST){
    //including database connection

    try{
        $query = "INSERT INTO students set photo=:photo, fname=:fname, mname=:mname,". 
        " lname=:lname, gender=:gender, class=:class, section=:section, address=:address,".
        " date_of_birth=:dob, place_of_birth=:pob,phone=:phone,email=:email, joined=:joined";
        if($con){
            $stmt = $con->prepare($query);
            echo "connection established!";
        }
        else{
            echo "not succeeded!";
        }

        //allowed types
        $allowTypes = array('jpg', 'png', 'jpeg');
        if(in_array($imageFileType, $allowTypes)){
            //upload to server
            if(move_uploaded_file($_FILES['photo']['tmp_name'], $targetFilePath)){
                $photo=$target_file;
            }
        }
        //posted variables;
        $fname = htmlspecialchars(strip_tags($_POST['fname']));    
        $mname = htmlspecialchars(strip_tags($_POST['mname']));
        $lname = htmlspecialchars(strip_tags($_POST['lname']));
        $gender = htmlspecialchars(strip_tags($_POST['gender']));
        $class = htmlspecialchars(strip_tags($_POST['class']));
        $section = htmlspecialchars(strip_tags($_POST['section']));
        $address = htmlspecialchars(strip_tags($_POST['address']));
        $dob = htmlspecialchars(strip_tags($_POST['dob']));
        $pob = htmlspecialchars(strip_tags($_POST['pob']));
        $phone = htmlspecialchars(strip_tags($_POST['phone']));
        $email = htmlspecialchars(strip_tags($_POST['email']));
        $joined = date('Y-m-d H:i:s');

        //bindig parameters
        $stmt->bindParam(':photo',$target_file);
        $stmt->bindParam(':fname',$fname);
        $stmt->bindParam(':mname',$mname);
        $stmt->bindParam(':lname',$lname);
        $stmt->bindParam(':gender',$gender);
        $stmt->bindParam(':class',$class);
        $stmt->bindParam(':section',$section);
        $stmt->bindParam(':address',$address);
        $stmt->bindParam(':dob',$dob);
        $stmt->bindParam(':pob',$pob);
        $stmt->bindParam(':phone',$phone);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':joined',$joined);

        //query execution
        if($stmt->execute()){
            echo "
            <div class='ui-alart-box'>".
                "<div class='icon-color-alart'>".
                    "<div class='alert icon-alart bg-light-green2' role='alert'>".
                        "<i class='far fa-hand-point-right bg-light-green3'></i>".
                        "Student added successfully!".
                    "</div>".
                "</div>".
            "</div>";
        }
        else{
            echo "<div class='alert icon-alart bg-light-red'>Unscesseful</div>";
        }
    }
    catch(PDOException $exception){
        die('ERROR: '.$exception->getMessage());
    }
    
}