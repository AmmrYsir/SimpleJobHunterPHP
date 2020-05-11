<?php 
    $title = 'SimpleJobHunter | Get that Job!';
    $style = '<link rel="stylesheet" href="../css/index.css">';

?>


<?php ob_start() ?>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand" href="#">SimpleJobHunter</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Sign In <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </nav>
    </header>
<?php $content = ob_get_clean(); ?>

<?php include '../template.php'; ?>