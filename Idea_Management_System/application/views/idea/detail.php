<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card col-md-8 shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('idea') ?>"><i class="fas fa-arrow-left"></i> Back</a></h6>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="name">Author's Name</label>
                <input class="form-control" type="text" name="name" value="<?= $idea['name']; ?>" readonly>
            </div>
            
            <div class="form-group">
                <label for="department">Department</label>
                <input class="form-control" type="text" name="department" value="<?= $idea['department']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="title">Idea Title</label>
                <input class="form-control" type="text" name="title" value="<?= $idea['title']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="description">Idea Description*</label>
                <textarea class="form-control" id="description" name="description" rows="3" readonly><?= $idea['description']; ?></textarea>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="type">Idea Category</label>
                        <input class="form-control" type="text" name="category" value="<?= $idea['category']; ?>" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date_posted">Posted On</label>
                        <input class="form-control" type="text" name="date_posted" value="<?= date('d F Y' , $idea['date_posted']); ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <a target="_blank" class="badge badge-primary" style="font-size:16px;" href="<?= base_url('assets/img/idea/').$idea['file']; ?>"><i class="fas fa-image"></i> Check Attachment</a>
            </div>
            <div>
                <a class="fas fa-thumbs-up badge badge-primary" style="font-size:14px;" href="#"> Like </a>
                <a class="fas fa-thumbs-down badge badge-danger" style="font-size:14px;" href="#"> Dislike </a>
                <a class="fas fa-comments badge badge-success" style="font-size:14px;" href="#"> Comment </a>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->