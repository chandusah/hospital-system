<!DOCTYP html>
<html>
    <head>
        <title>Insert Page Page</title>
</head>
<body>
    <center>
        <?php
        $conn = mysqli_connect("localhost","root","","myclass");
        if ($conn === false) {
            die("ERROR: Could not connect.".mysqli_connect_error());
             }
             $name =$_REQUEST['name'];
             $email =$_REQUEST['email'];
             $phone =$_REQUEST['phone'];
             $gender =$_REQUEST['gender'];
             $sql = "INSERT INTO student VALUES ('$name','$email','$phone','$gender')";

             if (mysqli_query($conn,$sql))  {
                echo"<h3>data stored in a database successfully</h3>";

                echo nl2br("\n$name\n $email\n $phone\n $gender");
             } else{
                    echo "ERROR: Sorry $sql." .mysqli_close($conn);
                    }
                mysqli_close($conn);
            ?>
        </center>
    </body>
</html>