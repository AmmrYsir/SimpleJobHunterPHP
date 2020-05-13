<?php
    $title = 'SimpleJobHunter | Daftar Akaun Sekarang!';
    $style = '<link rel="stylesheet" href="../css/register.css">';
?>

<?php ob_start() ?>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><em class="fas fa-user-ninja"></em> SimpleJobHunter</a>
        </nav>
    </header>
    <main>
        <div class="container d-flex justify-content-center align-items-center">
            <form action="" class="p-5 rounded bg-dark text-white">
                <h1 class="display-3">SimpleRegister</h1>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        Your username must be 6-20 characters long, contain letters and numbers, and must not contain spaces.
                    </small>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        Your password must be 6-20 characters long, contain letters and numbers, and must not contain spaces.
                    </small>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="password">Retype Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        It must be similar to password above.
                    </small>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        Your email must be valid.
                    </small>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <button type="submit" class="btn btn-secondary btn-block">Register</button>
            </form>
        </div>
    </main>
<?php $content = ob_get_clean(); ?>

<?php include '../template.php' ?>