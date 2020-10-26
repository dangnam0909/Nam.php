<html>
    <header>
        <title>DangKyThanhCong</title>
    </header>
    <?php
        session_start();
        // session_destroy();
        $firstName = $_SESSION['firstName'];
        $lastName = $_SESSION['lastName'];
        $email = $_SESSION['email'];
        $birthday = $_SESSION['birthday'];
        $gender = $_SESSION['gender'];
        if($gender == 'female'){
            $gender1 = 'Mr.';
        }else{
            $gender1 = 'Ma dam.';
        }

        // var_dump($_SESSION);

        // var_dump($_POST);
        // var_dump($_SESSION);
        // $_SESSION['firstName'] = $_POST['firstName'];
        // if(isset($_SESSION['firstName'])){
        //     $firstName3 = $_SESSION['firstName'];
        // }
        
        // $_SESSION['lastName'] = $_POST['lastName'];
        // $_SESSION['email'] = $_POST['lastName'];
        // $_SESSION['birthday'] = $_POST['lastName'];
        // $_SESSION['gender'] = $_POST['lastName'];
        // $firstNameSS = $_SESSION['firstName'];
        // $firstName = $_POST['firstName'];
        // if($firstNameSS == $firstName){
        //     echo $firstNameSS;
        // }
        // print_r($firstName3);
        
    ?>
    <body>
        <div>
            <p>Full Name: <?php echo $gender1.' '.$lastName.' '.$firstName; ?></p>
            <p>Email: <?php echo $email; ?></p>
            <h1>Register Seccessfuly!</h1>
            <p>Welcome: <?php echo $lastName.' '.$firstName;?></p>
            <p>Ngay Sinh: <?php echo $birthday;?></p>
            <p>Email: <?php echo $email; ?></p>
        </div>
    </body>
</html>