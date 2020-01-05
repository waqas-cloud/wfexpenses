<?php /** @var $this SettingsController */?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">General Settings</h1>
    </div>


    <div class="row mb-3">

        <div class="col">
            <?php $this->renderPartial('tabs_menu');?>
        </div>
    </div>

    <div class="row">

        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">General Settings</h6>
                </div>
                <div class="card-body" style="min-height: 350px;">

                    <div class="row">

                        <div class="col-6">
                            <h6>App Settings</h6>
                            <ul class="list-group">
                                <li class="list-group-item">Update default account
                                    <span class="float-right">
                                        <a id="update-default-account" href="javascript:void(0);" class="btn btn-sm btn-primary">Update</a>
                                    </span>
                                </li>
                                <li class="list-group-item">Manage Categories
                                    <span class="float-right">
                                        <a id="manage-account-categories" href="javascript:void(0);" class="btn btn-sm btn-primary">Manage</a>
                                    </span>
                                </li>
                            </ul>

                            <br>
                            <h6>API Settings</h6>
                            <ul class="list-group">
                                <li class="list-group-item">Update default account
                                    <span class="float-right">
                                        <a href="" class="btn btn-sm btn-primary">Update</a>
                                    </span>
                                </li>
                            </ul>
                        </div>


                        <div class="col-6">
                            <h6>User Settings</h6>
                            <ul class="list-group">
                                <li class="list-group-item">Update your password
                                    <span class="float-right">
                                        <a id="update-account-password" href="javascript:void(0);" class="btn btn-sm btn-primary">Update</a>
                                    </span>
                                </li>
                                <li class="list-group-item">Update your account information
                                    <span class="float-right">
                                        <a id="update-account-info" href="javascript:void(0);" class="btn btn-sm btn-primary">Update</a>
                                    </span>
                                </li>
                            </ul>

                            <br>
                            <h6>Delete your account</h6>
                            <ul class="list-group">
                                <li class="list-group-item">Deleting your account will remove all you data.
                                    <span class="float-right">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-danger">Delete account</a>
                                    </span>
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<?php $this->renderPartial('settings_modals');?>
<?php echo Utils::pageSettings([
    'accountId' => Utils::getCurrentUserId(),
]);?>

