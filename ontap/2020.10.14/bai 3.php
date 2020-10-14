<!DOCTYPE html>
<html>
    <header>
        <meta charset="UTF-8" />
        <title>Calculator</title>
        <style type="text/css">
            .container {
                width: 300px;
                height: 300px;
                text-align: center;
                border: 1px solid blue;
                padding-bottom: 10px;
            }
            input {
                width: 100px;
                height: 20px;
                margin-bottom: 10px;
                margin-left: 10px;
            }
            select {
                width: 40px;
                margin-bottom: 10px;
                margin-left: 10px;
            }
            .submit-btn {
                margin-top: 10px;
                font-size: 15px;
                background: #ccc;
                width: 25%;
                height: 10%;
                color: blue;
                cursor: pointer;
                border-radius: 20px;
            }
            .result-ip {
                margin-left: 29px;
            }
        </style>
    </header>
    <body>
        <div class="container">
            <h1>Calculator</h1>
            <form action="baitap6.php" method='POST'>
                <label>Number1:</label>
                <input type="text" name="number1" placeholder="Enter number 1" /></br>
                <select name='operation'>
                    <option value="plus">+</option>
                    <option value="minus">-</option>
                    <option value="human">*</option>
                    <option value="share">/</option>
                    <option value="power">^</option>
                </select></br>
                <label>Number2:</label>
                <input type="text" name="number2" placeholder="Enter number 2" /></br>
                <button type="submit" class="submit-btn" name="enter" value = "enter">Submit</button>
            </form>
        </div>
    </body>
</html>
