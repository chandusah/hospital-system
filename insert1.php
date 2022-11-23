<!DOCTYP html>
<html>
    <head>
        <title>Insert Page Page</title>
    </head>
        <body>
            <center>
                <?php
        
                    $conn = mysqli_connect("localhost","root","","myclass");
                    $name =$_REQUEST['name'];
                    $lastname =$_REQUEST['lastname'];
                    $class =$_REQUEST['class'];
                    $collage =$_REQUEST['collage'];
                    $sql = "INSERT INTO student VALUES ('$name','$lastname','$class','$collage')";
                    mysqli_close($conn);
                ?>
            </center>
        </body>
</html>