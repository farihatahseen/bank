<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Deposite Money</h1>
    <form action="processWithdraw.php" method="POST">
        <p>
            <label for="id">id:</label>
            <input type="text" name="id" id="id" required>
        </p>
        <p>
            <label for="amount">Enter Withdraw Amount:</label>
            <input type="text" name="amount" id="amount" required>
        </p>
        <p>
            <button>submit</button>
        </p>

    </form>
</body>

</html>