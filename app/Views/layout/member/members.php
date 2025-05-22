<?= $this->extend('base-layout/main.blade.php') ?>

<?= $this->section('content') ?>
<div class="container-xlg pt-3 p-4">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Members</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="add_member" method="POST">
                        <div class="mb-3">
                            <label for="studentId" class="form-label">Firstname</label>
                            <input type="text" class="form-control" name="firstname">
                        </div>
                        <div class="mb-3">
                            <label for="studentName" class="form-label">Lastname</label>
                            <input type="text" class="form-control" name="lastname">
                        </div>
                        <div class="mb-3">
                            <label for="studentSection" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address">
                        </div>
                        <div class="mb-3">
                            <label for="studentCourse" class="form-label">Phone Number</label>
                            <input type="number" maxlength="11" class="form-control" name="phoneNumber">
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
    <?php if (session()->getFlashdata('confirm')) : ?>
        <div class="alert alert-success alert-dismissible fade show w-100 text-center" role="alert">
            <?= session()->getFlashdata('confirm')  ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger alert-dismissible fade show w-100 text-center" role="alert">
            <?= session()->getFlashdata('error')  ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <div class="container-xlg d-flex justify-content-center d-none d-lg-block">
        <table class="table table-responsive table-hover text-center text-capitalize">
            <thead>
                <tr>
                    <th scope="col">Member ID</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone #</th>
                    <th scope="col">Membership Expiry Date</th>
                    <th scope="col">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Add Member
                        </button>
                    </th>
                </tr>
            </thead>
            <tbody class="table-container">
                <?php foreach ($members as $member) : ?>
                    <tr>
                        <td class="member-id"><?= $member['member_id'] ?></td>
                        <td class="firstname"><?= $member['firstname'] ?></td>
                        <td class="lastname"><?= $member['lastname'] ?></td>
                        <td class="address"><?= $member['address'] ?></td>
                        <td class="phone-number"><?= $member['phone_number'] ?></td>
                        <td class="expiration"><?= $member['membership_expiry_date'] ?></td>
                        <td>
                            <a href="/members/edit/<?= $member['member_id'] ?>" class="btn btn-primary m-2">Edit</a>
                            <a href="/members/delete/<?= $member['member_id'] ?>" class="btn btn-danger m-2">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="container-xlg d-block d-lg-none ">
        <div class="row d-flex justify-content-center">
            <div class="container d-flex justify-content-around mb-3">
                <h2>Borrowed Logs</h2>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add Member
                </button>
            </div>
            <?php foreach ($members as $member) : ?>
                <div class="col-sm-6 mb-3 mb-sm-0 d-flex flex-column">
                    <div class="card flex-fill">
                        <div class="card-body flex-fill">
                            <h5 class="card-title"><?= $member['firstname'] ?> <?= $member['lastname'] ?></h5>
                            <p class="card-text">Address: <span><?= $member['address'] ?></span></p>
                            <p class="card-text">Phone no. <span><?= $member['phone_number'] ?></span></p>
                            <p class="card-text">Membership Expiry Date: <span><?= $member['membership_expiry_date'] ?></span></p>
                        </div>
                        <a href="#" class="btn btn-outline-success">Edit Details</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>