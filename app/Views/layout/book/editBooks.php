<?= $this->extend('base-layout/main.blade.php') ?>

<?= $this->section('content') ?>
<div class="container-xlg pt-3 mx-4 p-5">
    <div class="row d-flex justify-content-center">
        <div class="col col-md-9 col-lg-8">
            <div class="card">
                <h5 class="card-header">Edit Book</h5>
                <div class="card-body">
                    <div class="row">
                        <form action="/book/update/<?= $books['book_id'] ?>" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Title</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="<?= $books['title'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label fw-bold">Author</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="author" value="<?= $books['author'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Genre</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="genre" value="<?= $books['genre'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Book Image</label>
                                <input type="file" class="form-control" id="exampleFormControlInput1" name="bookImage" value="<?= $books['book_img'] ?>">
                            </div>
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example" name="availability">
                                    <option value="Yes" selected>Available</option>
                                    <option value="No">Not Available</option>
                                </select>
                            </div>
                            <a href="/books" class="btn btn-danger ms-4">Back</a>
                            <button type="submit" class="btn btn-primary m-4">Update Details</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>