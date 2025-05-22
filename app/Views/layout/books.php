<?= $this->extend('base-layout/main.blade.php') ?>


<?= $this->section('content') ?>
<div class="container-xlg pt-3 mx-5">
    <!-- Modal -->
    <div class="modal fade" id="addBooksModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Book</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="add_book" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Author</label>
                            <input type="text" class="form-control" name="author">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Genre</label>
                            <input type="text" class="form-control" name="genre">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Book Image</label>
                            <input type="file" class="form-control" name="bookImage">
                        </div>
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example" name="availability">
                                <option value="Yes" selected>Available</option>
                                <option value="No">Not Available</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-none d-lg-block">
        <h2 class="d-flex justify-content-center">BOOKS TABLE</h2>
        <?php if (session()->getFlashdata('confirm')) : ?>
            <div class="alert alert-success alert-dismissible fade show w-100 text-center" role="alert">
                <?= session()->getFlashdata('confirm')  ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <table class="table table-responsive table-hover text-center text-capitalize">
            <thead>
                <tr>
                    <th scope="col">Book ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Availability</th>
                    <th>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBooksModal">
                            Add Book
                        </button>
                    </th>
                </tr>
            </thead>
            <tbody class="table-container">
                <?php foreach ($books as $book) : ?>
                    <tr>
                        <td class="book-id"><?= $book['book_id'] ?></td>
                        <td class="title"><?= $book['title'] ?></td>
                        <td class="author"><?= $book['author'] ?></td>
                        <td class="genre"><?= $book['genre'] ?></td>
                        <td class="availability"><?= $book['availability'] ?></td>
                        <td>
                            <a href="/book/edit/<?= $book['book_id'] ?>" class="btn btn-primary m-2">Edit</a>
                            <a href="/book/delete/<?= $book['book_id'] ?>" class="btn btn-danger m-2">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="container-xlg d-block d-lg-none pt-3 mx-2">
        <div class="container d-flex justify-content-">
            <h1>Books Table</h1>
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addBooksModal">
                Add Book
            </button>
        </div>
        <div class="row d-flex justify-content-center">
            <?php foreach ($books as $book) : ?>
                <div class="col-sm-6 mb-3 mb-sm-0 d-flex flex-column">
                    <div class="card flex-fill">
                        <div class="card-body flex-fill">
                            <h5 class="card-title">Book ID: <?= $book['book_id'] ?> </h5>
                            <p class="card-text">Title: <span><?= $book['title'] ?></span></p>
                            <p class="card-text">Author: <span><?= $book['author'] ?></span></p>
                            <p class="card-text">Genre: <span><?= $book['genre']  ?></span></p>
                            <p class="card-text">Availability: <span><?= $book['availability']  ?></span></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>