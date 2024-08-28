<?php
    $conn =mysqli_connect('localhost','root','123456','cubix');

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email       = $_POST['email'];
        $username    = $_POST['username'];
        $password    = $_POST['password'];
        $f_name      = $_POST['f_name'];
        $l_name      = $_POST['l_name'];
        $contact     = $_POST['contact'];
        $alt_contact = $_POST['alt_contact'];

        if($_FILES['photo']['name'] != ""){        
            $photo='images/'. $_FILES['photo']['name'];
            move_uploaded_file($_FILES['photo']['tmp_name'],$photo);    
        }else{
            $photo = null;
        }

        if($_FILES['photo_s']['name'] != ""){  
            $photo_s='images/'. $_FILES['photo_s']['name'];
            move_uploaded_file($_FILES['photo_s']['tmp_name'],$photo_s);
        }else{
            $photo_s = null;
        }
        
        $sql="insert into users values(null, '$email', '$username', '$password', '$f_name', '$l_name', '$contact', '$alt_contact', '$photo', '$photo_s')";
        $result=mysqli_query($conn,$sql);        
    
        if($result)	{
            //echo "Data inserted";
            //header("Location: index.php");
            $script = "<script>
                window.location = 'index.php#success';</script>";
            echo $script;
        }else{
            echo "Not inserted";
        }
    }
?>