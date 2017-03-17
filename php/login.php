<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Log In</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <style>
        label{
            font-family: "Segoe UI";
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="post" action="GetUsuarios.php">
                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <input type="submit" value="Log In" class="btn btn-primary">
            </form>
        </div>
    </div>
    
    
</body>
</html>