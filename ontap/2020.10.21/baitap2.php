<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Array</title>
        <style type="text/css">
            .container {
                width: 800px;
                margin: 0 auto;
                border: 1px solid blue;
                padding-left: 15px;
                padding-bottom: 20px;
            }
            .formRegister {
                /* height: 550px; */
                
                padding: 10px 0px 10px 0px;
                text-align: center;
            }
            .register-btn {
                margin-top: 10px;
                font-size: 18px;
                background: #ccc;
                width: 20%;
                height: 15%;
                color: blue;
                cursor: pointer;
                border-radius: 50px;
            }
            input {
                margin-bottom: 10px;
                height: 30px;
                margin-left: 20px;
                width: 47%;
                margin-left: 20px;
            }
            label {
                margin-left: 20px;
                margin-right: 10px;
            }
            h1 {
                text-align: center;
            }
            span {
                margin-top: 10px;
                margin-bottom: 10px;
                color: red;
            }
            .gender {
                margin-left: 39px;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 60%;
            }
            .birthday{
                margin-left: 30px;
            }
            .email{
                margin-left: 48px;
            }
            .fone{
                margin-left: 46px;
            }
            .pass{
                margin-left: 25px;
            }
            #female{
                width: 3%;
                margin-bottom: 5px;
                height: 30px;
                margin-left: 43px;
                margin-right: 7px;
            }
            #male{
                width: 3%;
                margin-bottom: 5px;
                height: 30px;
                margin-left: 20px;
                margin-right: 7px;
            }
            .register-p {
                font-size: 16px;
            }
            #register-sp {
                font-weight: bold;
                color: currentColor;
            }
        </style>
    </head>

    <body>
        <?php
            session_start();
            $url = '/2020.10.21/baitap4.php';
            $messageError = [];
            $firstName = $lastName = $gender = $birthday = $email = $phone = $password  = "";
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                if($_POST['firstName'] == "") { 
                    $messageError[] = '* First Name Not Null';
                }else {
                    $firstName = $_POST['firstName'];
                    if(!preg_match("/^[a-zA-Z-' ]*$/", $firstName)){ // ham preg_match kiem tra gia tri nhap vao co phai la ky tu a-z, A-Z, hay khoang trong
                        $messageError[] = '* Only letters and white space allowed';
                    }
                }
                if($_POST['lastName'] == ""){
                    $messageError[] = '* Last Name Not Null';
                }else {
                    $lastName = $_POST['lastName'];
                }
                if($_POST['gender'] == "female"){
                    $gender = $_POST['gender'];
                }else{
                    if($_POST['gender'] == "male"){
                        $gender = $_POST['gender'];
                    }
                }
                if($_POST['birthday'] == ""){
                    $messageError[] = '* Birthday Not Null';
                }else {
                    // chi duoc nhap ngay thang 
                    if(preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-([0-9]{4})$/", $_POST['birthday'])){
                        // var_dump(preg_match());
                        $birthday = $_POST['birthday'];
                    }else{
                        $messageError[] = '* Birthday not format';
                    }
                }
                if($_POST['email'] == ""){
                    $messageError[] = '* Email Not Null';
                }else {
                    $email = $_POST['email'];
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ // ham filter_var co trong thu vien php, ap dung de kiem tra dinh dang cua email 
                        $messageError[] = '* Invalid email format';
                    }
                }
                if($_POST['phone'] == ""){
                    $messageError[] = '* Phone Not Null';
                }else {
                    if(preg_match("/^([0][1-9][0-9][1-9])([0-9]{3})([0-9]{3})$/", $_POST['phone'])){ // {3} to hop 3 phan phan tu giong nhau [0-9]
                        // var_dump(preg_match());
                        $phone = $_POST['phone'];
                    }else{
                        $messageError[] = '* Number phone not format';
                    }
                }
                if($_POST['password'] == ""){
                    $messageError[] = '* Password Not Null';
                }else {
                    $password = $_POST['password'];
                }

                if($_POST['register'] == 'submit' && count($messageError) == 0){
                    $_SESSION['firstName'] = $firstName;
                    $_SESSION['lastName'] = $lastName;
                    $_SESSION['email'] = $email;
                    $_SESSION['birthday'] = $birthday;
                    $_SESSION['gender'] = $gender;
                    header('location: '.$url);
                }

            }
        ?>
        <!--    -->
        <div class="container">
            <h1>Register</h1>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="formRegister" method="POST">
                <span>
                    <?php  
                        // in tat ca cac phan tu co trong mang
                        for($i = 0; $i < count($messageError); $i++){
                            echo $messageError[$i];
                            echo "<br>";
                        }
                        
                    ?>
                </span></br>
                <label>First name:</label>
                <input type="text" name="firstName" placeholder="First name" value="<?php echo $firstName;?>"/><br>
                <label>Last name:</label>
                <input type="text" name="lastName" placeholder="Last name" value="<?php echo $lastName;?>"/><br>
                <div class="gender">
                    <label>Gender:</label>
                    <input type="radio" name="gender" id="female" value="female" <?php if($_POST['gender'] == 'female') echo "checked"; ?>/> Female
                    <input type="radio" name="gender" id="male" value="male" <?php if($_POST['gender'] == 'male') echo "checked"; ?>/> Male
                </div>
                <br>
                <label>Birthday:</label>
                <input type="text" name="birthday" placeholder="Birthday" class="birthday" value="<?php echo $birthday;?>"/><br>
                <label>Email:</label>
                <input type="text" name="email" placeholder="Email" class="email" value="<?php echo $email;?>"/><br>
                <label>Phone:</label>
                <input type="text" name="phone" placeholder="Phone: 0909000000" class="fone" value="<?php echo $phone;?>"/><br>
                <label>Password:</label>
                <input type="password" name="password" placeholder="Password" class="pass" value="<?php echo $password;?>"/><br>
                <button type="submit" class="register-btn" name="register" value="submit">Submit</button></br>
            </form>
        </div>
    </body>
</html>