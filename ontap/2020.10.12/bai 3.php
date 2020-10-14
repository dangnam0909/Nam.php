<!DOCTYPE html>
<html>
<meta charset="UTF-8" />
<title>Math</title>
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
<body>
    <php

    ?>
    <div class="container">
        <h1>Calculator</h1>
        <form method='POST'>
            <label>Number1:</label>
            <input type="text" name="number1" placeholder="Enter number 1" /></br>
            <select name='operation'>
                <option value="plus">+</option>
                <option value="minus">-</option>
                <option value="human">*</option>
                <option value="invalid">/</option>
                <option value="power">^</option>
            </select></br>
            <label>Number2:</label>
            <input type="text" name="number1" placeholder="Enter number 2" /></br>
            <label>Result:</label>
            <input type="text" name="result" placeholder="result" class="result-ip"/></br>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</body>
</html>
