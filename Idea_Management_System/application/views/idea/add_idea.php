<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card shadow mb-3">
        <div class="card-header">
            Idea Form
        </div>

        <div class="card-body">
        	<form action="<?php echo site_url('idea/addidea') ?>" method="post" enctype="multipart/form-data" >
                <div class="form-group">
                    <label for="title">Idea Author*</label>
                    <input class="form-control" type="text" name="name" value="<?= $user['name']; ?>" readonly>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="department">Department</label>
                                <select class="form-control" id="department" name="department">
                                    <option value="Accounts">Accounts</option>
                                    <option value="Human Resource">Human Resource</option>
                                    <option value="IT">IT</option>
                                    <option value="Maintenence">Maintenence</option>
                                    <option value="Student Administration">Student Administration</option>
                                    <option value="Examinations">Examinations</option>
                                    <option value="Student Welfare">Student Welfare</option>
                                </select>
                        </div>                    
                    </div>
                </div>
                <div class="form-group">
                    <label for="title">Idea Title*</label>
                    <input class="form-control"
                    type="text" name="title" placeholder="Idea Title" value="<?= set_value('title'); ?>">
                    <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="description">Idea Description*</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Idea Description" rows="3"></textarea>
                    <?= form_error('description', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="category">Idea Category</label>
                    <select class="form-control" id="category" name="category">
                        <option value="Corona Virus">Corona Virus</option>
                        <option value="Health">Health</option>
                        <option value="Food Aid">Food Aid</option>
                        <option value="Economy">Economy</option>
                        <option value="Education">Education</option>
                        <option value="Agriculture">Agriculture</option>
                        <option value="Drugs">Drugs</option>
                        <option value="Criminal Acts">Criminal Acts</option>
                        <option value="Sexual Harassment">Sexual Harassment</option>
                        <option value="Natural Disasters">Natural Disasters</option>
                    </select>
                </div>
                <div class="form-group">
                <label for="file">Attachment</label>
                    <input class="form-control-file"
                    type="file" name="file" />
                    <div class="invalid-feedback">
                        <?php echo form_error('file') ?>
                    </div>
                </div>
                <!-- button save -->
                <input class="btn btn-success" type="submit" name="btn" value="Post" />
            </form>
        </div>

        <div class="card-footer small text-muted">
            * must be filled
        </div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->