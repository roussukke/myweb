<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <!-- login -->
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col">
                <form method="post" action="">
                    <fieldset>
                        <legend>('Welcome to the Game CP please login with your game info')</legend>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input name="username" type="text" class="form-control" id="username"
                                placeholder="Enter your username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input name="password" type="password" class="form-control" id="password"
                                placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </fieldset>
                </form>
                <br>
                ('Don't have a game account? Get one <a href="%s">Here</a>)<br>
                ('Lost or forgot your password? Recover it <a href="%s">Here</a>')
            </div>
        </div>
    </div>
    <!-- end login-->
    <!-- register -->
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col">
                <form method="post" action="?action=verify&confirm_key=' . $confirm_key . '">
                    <fieldset>
                        <legend>Confirm</legend>
                        <div class="form-group">
                            <label>confirm_key:</label>
                            <input type="text" class="form-control" disabled="disabled" value="' . $confirm_key . '">
                            <p class="help-block">This is the confirmation key sent to your e-mail</p>
                        </div>
                        <div class="form-group">
                            <label>confirm_user:</label>
                            <input type="text" class="form-control" name="username" maxlength="16"
                                value="' . $username . '">
                            <p class="help-block">Enter the username you choose at registration</p>
                        </div>
                    </fieldset>
                    <legend>Choose a password</legend>
                    <div class="form-group">
                        <label>password:</label>
                        <input type="password" class="form-control" name="password" maxlength="24" value="">
                        <p class="help-block">Pick a valid password between %d and %d characters. Alphanumeric only.</p>
                    </div>
                    <div class="form-group">
                        <label>confirm_password:</label>
                        <input type="password" class="form-control" name="confirm_password" maxlength="24" value="">
                        <p class="help-block">Re-type your Password:</p>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="confirm">Confirm Account</button>
                    </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <!-- end register -->


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
</body>

</html>