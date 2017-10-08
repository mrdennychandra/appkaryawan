<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <?= validation_errors(); ?>
        <form method="POST" action="<?= base_url("login/cek") ?>">
            <fieldset>
                <legend>Login</legend>
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password">
                </div>
                <div>
                    <input type="submit" name="submit" value="Login">
                </div>
            </fieldset>
        </form>
    </body>
</html>
