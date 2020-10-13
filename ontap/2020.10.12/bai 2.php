<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Array</title>
        <style type="text/css">
            .container {
                width: 600px;
                margin: 0 auto;
            }
            .formRegister {
                height: 400px;
                border: 1px solid blue;
                padding: 10px 0px 10px 0px;
                text-align: center;
            }
            .register-btn {
                margin-top: 10px;
                font-size: 18px;
                background: #ccc;
                width: 25%;
                height: 12%;
                color: blue;
                cursor: pointer;
                border-radius: 50px;
            }
            input {
                margin-bottom: 10px;
                height: 30px;
                margin-left: 20px;
                width: 60%;
                margin-left: 20px;
            }
            label {
                margin-left: 20px;
                margin-right: 10px;
            }
            h1 {
                text-align: center;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <h1>Register</h1>
            <form action="" class="formRegister">
                <label>First name:</label>
                <input type="text" name="" placeholder="First name" /></br>
                <label>Last:</label>
                <input type="text" name="" placeholder="Last name" /></br>
                <label>Gender:</label>
                <input type="text" name="" placeholder="Gender" /></br>
                <label>Birthday:</label>
                <input type="text" name="" placeholder="Birthday" /></br>
                <label>Email:</label>
                <input type="text" name="" placeholder="Email" /></br>
                <label>Phone:</label>
                <input type="text" name="" placeholder="Phone" /></br>
                <label>Password:</label>
                <input type="password" name="" placeholder="Password" /></br>
                <button type="submit" class="register-btn">Submit</button>
            </form>
        </div>
    </body>
</html>