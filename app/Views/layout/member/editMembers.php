<?= $this->extend('base-layout/main.blade.php') ?>

<?= $this->section('content') ?>
<div class="container-xlg pt-3 mx-4 p-5">
    <div class="row d-flex justify-content-center">
        <div class="col col-md-9 col-lg-8">
            <div class="card">
                <h5 class="card-header">Edit Member</h5>
                <div class="card-body">
                    <div class="row">
                        <form action="/members/update/<?= $members['member_id'] ?>" method="POST">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label fw-bold">Firstname</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="firstname" value="<?= $members['firstname'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label fw-bold">Lastname</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="lastname" value="<?= $members['lastname'] ?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label fw-bold">Address</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="address" value="<?= $members['address'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label fw-bold">Phone no.</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="phoneNumber" value="<?= $members['phone_number'] ?>">
                                </div>
                            </div>
                            <a href="/members" class="btn btn-danger ms-4">Back</a>
                            <button type="submit" class="btn btn-primary m-4">Update Details</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>