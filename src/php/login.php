<?php
    $title = 'SimpleJobHunter | Daftar Masuk Segera!';
    $style = '<link rel="stylesheet" href="../css/login.css">';
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
                <h1 class="display-3">SimpleLogin</h1>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="pswd" required>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
                <a href="#" class="lead form-inline mb-3 text-light text-decoration-none">You doesn't have account yet?</a>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
    </main>
<?php $content = ob_get_clean(); ?>

<?php include '../template.php' ?>