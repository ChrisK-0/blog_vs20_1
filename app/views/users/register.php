<?php require_once APPROOT . '/views/inc/header.php'; ?>
<div class="row">
    <div class="cold-md-6 mx-auto">
        <div class="card card-outline-secondary mt-5">
            <div class="card-header">
                <h3 class="mb-0">Sign up</h3>
                <p class="mt-2">Please fill the fields below to register</p>
            </div>
            <div class="cad-body">
                <form role="form" class="form">
                    <div class="form-group">
                        <label for="name">Name<sup>*</sup></label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Full name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email<sup>*</sup></label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password<sup>*</sup></label>
                        <input type="text" id="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Password<sup>*</sup></label>
                        <input type="text" id="confirm_password" name="confirm_password" class="form-control"
                               placeholder="Confirm password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-lg float-right" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once APPROOT . '/views/inc/footer.php'; ?>
