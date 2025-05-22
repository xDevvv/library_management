<?= $this->extend('base-layout/main.blade.php') ?>

<?= $this->section('content') ?>
    <div class="container-xlg pt-3 mx-5 d-none d-lg-block">
        <div class="row">
            <h2 class="d-flex justify-content-center">RETURNED LOGS</h2>
            <table class="table table-responsive table-hover text-center text-capitalize">
                <thead>
                    <tr>
                        <th scope="col">Returned ID</th>
                        <th scope="col">Book ID</th>
                        <th scope="col">Member ID</th>
                        <th scope="col">Return Date</th>
                        <th>
                            <a href="borrowed" class="btn btn-outline-success">Borrowed Logs</a>
                        </th>
                    </tr>
                </thead>
                <tbody class="table-container">
                    <?php foreach ($returnedBooks as $returnedBook) : ?>
                        <tr>
                            <td class="return-id"><?= $returnedBook['return_id'] ?></td>
                            <td class="book-id"><?= $returnedBook['book_id'] ?></td>
                            <td class="member-id"><?= $returnedBook['member_id'] ?></td>
                            <td class="return-date"><?= $returnedBook['return_date'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container-xlg d-block d-lg-none pt-3 mx-5">
        <div class="row d-flex justify-content-center">
            <div class="container d-flex justify-content-around mb-3">
                <h2>Returned Logs</h2>
                <a href="/borrowed" class="btn btn-outline-success" scope="col">Borrowed Logs</a>
            </div>
            <?php foreach ($returnedBooks as $returnedBook) : ?>
                <div class="col-sm-6 mb-3 mb-sm-0 d-flex flex-column">
                    <div class="card flex-fill">
                        <div class="card-body flex-fill">
                            <h5 class="card-title">Return ID: <?= $returnedBook['return_id'] ?> </h5>
                            <p class="card-text">Book ID: <span><?= $returnedBook['book_id'] ?></span></p>
                            <p class="card-text">Member ID: <span><?= $returnedBook['member_id'] ?></span></p>
                            <p class="card-text">Return Date: <span><?= $returnedBook['return_date'] ?></span></p>
                        </div>
                        <a href="#" class="btn btn-outline-success">Return Book</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?= $this->endSection() ?>