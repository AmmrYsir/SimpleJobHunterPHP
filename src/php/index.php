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
                    <a class="nav-link" href="register.php">Sign In <span class="sr-only">(current)</span></a>
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
        <div class="table-responsive-sm p-2">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Job ID</th>
                        <th scope="col">Position</th>
                        <th scope="col">Company</th>
                        <th scope="col">Address</th>
                        <th scope="col">Salary Expected</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Web Developer</td>
                        <td>GATES IT Solution Sdn Bhd</td>
                        <td>Universiti Putra Malaysia, Block D-G-5, UPM-MTDC Technology Center III, Lebuh Silikon, 43400 Serdang, Selangor</td>
                        <td>RM2000-RM2500</td>
                        <td><a class="btn btn-success btn-sm" href="#">Apply</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Web Developer</td>
                        <td>GATES IT Solution Sdn Bhd</td>
                        <td>Universiti Putra Malaysia, Block D-G-5, UPM-MTDC Technology Center III, Lebuh Silikon, 43400 Serdang, Selangor</td>
                        <td>RM2000-RM2500</td>
                        <td><a class="btn btn-success btn-sm" href="#">Apply</a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Web Developer</td>
                        <td>GATES IT Solution Sdn Bhd</td>
                        <td>Universiti Putra Malaysia, Block D-G-5, UPM-MTDC Technology Center III, Lebuh Silikon, 43400 Serdang, Selangor</td>
                        <td>RM2000-RM2500</td>
                        <td><a class="btn btn-success btn-sm" href="#">Apply</a></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Web Developer</td>
                        <td>GATES IT Solution Sdn Bhd</td>
                        <td>Universiti Putra Malaysia, Block D-G-5, UPM-MTDC Technology Center III, Lebuh Silikon, 43400 Serdang, Selangor</td>
                        <td>RM2000-RM2500</td>
                        <td><a class="btn btn-success btn-sm" href="#">Apply</a></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Web Developer</td>
                        <td>GATES IT Solution Sdn Bhd</td>
                        <td>Universiti Putra Malaysia, Block D-G-5, UPM-MTDC Technology Center III, Lebuh Silikon, 43400 Serdang, Selangor</td>
                        <td>RM2000-RM2500</td>
                        <td><a class="btn btn-success btn-sm" href="#">Apply</a></td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Web Developer</td>
                        <td>GATES IT Solution Sdn Bhd</td>
                        <td>Universiti Putra Malaysia, Block D-G-5, UPM-MTDC Technology Center III, Lebuh Silikon, 43400 Serdang, Selangor</td>
                        <td>RM2000-RM2500</td>
                        <td><a class="btn btn-success btn-sm" href="#">Apply</a></td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Web Developer</td>
                        <td>GATES IT Solution Sdn Bhd</td>
                        <td>Universiti Putra Malaysia, Block D-G-5, UPM-MTDC Technology Center III, Lebuh Silikon, 43400 Serdang, Selangor</td>
                        <td>RM2000-RM2500</td>
                        <td><a class="btn btn-success btn-sm" href="#">Apply</a></td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Web Developer</td>
                        <td>GATES IT Solution Sdn Bhd</td>
                        <td>Universiti Putra Malaysia, Block D-G-5, UPM-MTDC Technology Center III, Lebuh Silikon, 43400 Serdang, Selangor</td>
                        <td>RM2000-RM2500</td>
                        <td><a class="btn btn-success btn-sm" href="#">Apply</a></td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>Web Developer</td>
                        <td>GATES IT Solution Sdn Bhd</td>
                        <td>Universiti Putra Malaysia, Block D-G-5, UPM-MTDC Technology Center III, Lebuh Silikon, 43400 Serdang, Selangor</td>
                        <td>RM2000-RM2500</td>
                        <td><a class="btn btn-success btn-sm" href="#">Apply</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <nav aria-label="Pagination" class="d-flex justify-content-center">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </main>
<?php $content = ob_get_clean(); ?>

<?php include '../template.php'; ?>