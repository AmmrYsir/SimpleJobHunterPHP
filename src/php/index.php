<?php 
    $title = 'SimpleJobHunter | Get that Job!';
    $style = '<link rel="stylesheet" href="../css/index.css">';

?>


<?php ob_start() ?>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><em class="fas fa-user-ninja"></em> SimpleJobHunter</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Sign In <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </nav>
        <section class="jumbotron jumbotron-fluid bg-dark text-light">
            <div class="container d-flex justify-content-center align-items-center flex-column">
                <h1 class="display-3">SimpleJobHunter</h1>
                <h1 class="display-4">Get the Job right now with one click!</h1>
            </div>
        </section>
    </header>
    <main>
        
    </main>
<?php $content = ob_get_clean(); ?>

<?php include '../template.php'; ?>