<?= $this->extend('base-layout/main.blade.php') ?>


<?= $this->section('content') ?>
    <div class="container-xlg pt-3 mx-4">
        <div class="row">
            <div class="col text-center my-3">
                <h1>About Us</h1>
                <p class="fs-6">Our Goal is to transform library administration by implementing cutting-edge solutions that improve productivity, accessibility, and structure. Our state of the are technology simplifies inventory management, borrower tracking, improving the efficiency and usability of library operations. Whether for private organizations, public libraries, or schools, we offer specialized solutions to support efficient resource management. Our goal is to equip libraries with the resources they require to promote education and information exchange in the digital era.</p>
            </div>
            <div class="col my-4 d-none d-lg-block">
                <img class="rounded-5 img-fluid " src="<?= base_url('images/libraryy.jpg') ?>">
            </div>
        </div>
    </div>
<?= $this->endSection() ?>