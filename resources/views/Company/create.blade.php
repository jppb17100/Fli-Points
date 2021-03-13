<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Monster Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/green.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    
<![endif]-->
</head>

<style>
    body {
        background-color: # eeeeee;
    }

    .container {
        text-align: center;
        max-width: 60%;
        background-color: red;
        padding: 3%;
    }

    h1 {
        color: #14707b;
        text-align: center;
        margin: 5%;
    }

    p {
        font-family: verdana;
        font-size: 20px;
    }
</style>

<body>
    <h1>Adicionar Empresa</h1>
    <div class="container">
        <form method="get">

            <div class="form-group row">
                <label for="idcompany" class="col-form-label">Nome Empresa:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="idcompany" />
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-form-label">E-mail:</label>
                <div class="col-sm-11">
                    <input type="email" class="form-control" name="email" />
                </div>
            </div>

            <div class="form-group row">
                <label for="telephone" class="col-form-label"> telephone: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="telephone" />
                </div>
            </div>

            <div class="form-group row">
                <label for="fantasy_name" class="col-form-label">Fantasy Name: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="fantasy_name" />
                </div>
            </div>

            <div class="form-group row">
                <label for="street" class="col-form-label">Street: </label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" name="street" />
                </div>
            </div>

            <div class="form-group row">
                <label for="number" class="col-form-label"> number: </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="number" />
                </div>

                <label for="postal_cod" class="col-form-label"> postal_cod: </label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="postal_cod" />
                </div>
            </div>

            <div class="form-group row">
                <label for="neighborhood" class="col-form-label">neighborhood: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="neighborhood" />
                </div>
            </div>

            <div class="form-group row">
                <label for="state" class="col-form-label"> state: </label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="state" />
                </div>
 
                <label for="country" class="col-form-label"> country: </label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="country" />
                </div>
            </div>

            <div class="form-group row">
                <label for="admin_email" class="col-form-label"> admin_email:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="admin_email" />
                </div>
            </div>

            <div class="form-group row">
                <label for="admin_telefone" class="col-form-label"> admin_telefone: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="admin_telefone" />
                </div>
            </div>

            <div class="form-group row">
                <label for="id_empresa" class="col-form-label"> id_empresa: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_empresa" />
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-form-label"> password: </label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" />
                </div>
            </div>

            <input type="submit" class="btn btn-success" value="Enviar" />

        </form>
    </div>
</body>

</html>