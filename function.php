<?php
    $conn=new mysqli("localhost","root","","iwtdb");
    if($conn->connect_error){
        die("Connection error".$conn->connect_error);

    }else{
       if (isset($_POST["submit"])) {
            if ($_POST["submit"] == "add") {
                add();
            }else if($_POST["submit"]=="edit"){
                edit();
            }else{
                delete();
            }
       }
    }


    function add(){
        global $conn;

        $name = $_POST["name"];
        $filename = $_FILES["file"]["name"];
        $tmpName = $_FILES["file"]["tmp_name"];

        $newfilename = uniqid()."-".$filename;

        move_uploaded_file($tmpName,'uploads/'.$newfilename);
        $query ="INSERT INTO users VALUES('','$name','$newfilename')";
        mysqli_query($conn,$query);

        echo "<script> alert('added successfully'); document.location.href = 'index.php'; </script>";

    }
    function edit(){
        
    }
    function delete(){
        
    }
?>