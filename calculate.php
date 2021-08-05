<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body>
    <!-- in this case we can use get method but if this calculate money or important data we must use post method
because post are more secure i used post method-->
    <div class="w-50 m-auto p-3">
        <form action="handle-calculate.php" method="post">
            <input type="number" name="num1" placeholder="num1" class="form-control my-3" require>
            <input type="number" name="num2" placeholder="num2" class="form-control my-3" require>
            <select name="operation" class="form-control my-3" require>
                <option value="add">add</option>
                <option value="sub">sub</option>
                <option value="mul">mul</option>
                <option value="div">div</option>
            </select>
            <button type="submit" class="btn btn-primary" name="submit">submit</button>
        </form>

        <h4 class="mt-3 text-center">result is : <?php
                        if (isset($_REQUEST["result"])) {
                            echo $_REQUEST["result"];
                        }
                        ?></h4>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>