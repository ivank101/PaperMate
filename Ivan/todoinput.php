<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Account</title>

    <!-- import script -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

</head>

<body>
    <div id="app">
        <!-- header navigation bar -->
        <div class="header">
            <ul class="navbar navbar-expand-sm bg-dark navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="allDoc.html">PaperMate</a>
                </div>
            </ul>
        </div>
        <div class="container-fluid">
            <!-- main -->
            <div class="main">
                <form action="todo.php" method="post">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-1"></div>
                        <div class="col-6">
                            <h2>New Todo</h2>
                            <br>
                            <div class="mb-3 mt-3">
                                <label for="Username" class="form-label">Todo</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Todo"
                                    name="name">
                            </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary btn-lg btn-danger">REGISTER</button>
                                </div>
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
                    <br>
                </form>
                <!-- footer -->
                <div class="mt-4 p-5 bg-secondary p-3 text-white rounded">
                    <h1>広告</h1>
                </div>
            </div>
        </div>
    </div>


    <script src="newAccount.js"></script>
</body>

</html>