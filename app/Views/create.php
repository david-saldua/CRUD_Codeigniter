<div class="card card-primary rounded-0">
    <div class="card-header">
        <h4 class="text-muted">
            <i class="far fa-plus-square">Add New Contact Details</i>
        </h4>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <form action="<?= base_url('main/save')?>" method="POST" id="create-form">
                <input type="hidden" name="id">
                <div class="mb-3">
                    <label for="" class="control-label">Fullname (first name, middle name, last name)</label>
                    <div class="input-group">
                        <input type="text" autofocus class="form-control form-control-border" id="firstname" name="firstname" value ="<?= !empty($request->getPost('firstName')) ? $request->getPost('firstName') : '' ?>" required="required" placeholder ="First Name">
                        <input type="text" autofocus class="form-control form-control-border" id="middlename" name="middlename" value ="<?= !empty($request->getPost('middleName')) ? $request->getPost('middleName') : '' ?>" required="required" placeholder ="Middle Name (optional)">
                        <input type="text" class="form-control form-control-border" id="lastname" name="lastname" value="<?= !empty($request->getPost('lastName') ? $request->getPost('lastName') : '' ) ?>" required="required" placeholder="Last Name">
                    </div>
                </div>
                <div class="mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="gender" class="control-label">Gender</label>
                    <select name="gender" id="gender" class="form-select form-select-border" required>
                        <option ></option>
                    </select>

                </div>
            </form>
        </div>
    </div>
</div>