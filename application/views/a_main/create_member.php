<!-- Content area -->
<div class="content">
<div class="row">
<div class="col-lg-12">
<!-- 2 columns form -->
<form name = "create_member" method="POST" class="form-horizontal" action="Home/submitMember">

<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Create New Member</h5>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="reload"></a></li>
            </ul>
        </div>
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <fieldset>
                    <legend class="text-semibold"><i class="icon-reading position-left"></i> Personal details</legend>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Member name:</label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name = "first_name" placeholder="First name" class="form-control" >
                                </div>

                                <div class="col-md-6">
                                    <input type="text" name = "last_name" placeholder="Last name" class="form-control" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label"></label>
                        <div class="col-lg-9">
                            <input type="text" name = "other_name" class="form-control" placeholder="other names" >
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="col-lg-3 control-label">Phone Number:</label>
                        <div class="col-lg-9">
                            <input type="number" name = "phone_number" placeholder="0700000000" class="form-control" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-9">
                            <input type="email" name = "email"  placeholder="example@example.com" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Id Number:</label>
                        <div class="col-lg-9">
                            <input type="text" name = "id_number"  placeholder="12345678" class="form-control" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">DOB:</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="date" name="date" >
                        </div>
                    </div>

                </fieldset>
            </div>

            <div class="col-md-6">
                <fieldset>
                    <legend class="text-semibold"><i class="icon-truck position-left"></i> Next of kin details</legend>

                   <div class="form-group">
                        <label class="col-lg-3 control-label">Name:</label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name = "kin_first_name" placeholder="Kin First name" class="form-control" >
                                </div>

                                <div class="col-md-6">
                                    <input type="text" name = "kin_last_name" placeholder="Kin Last name" class="form-control" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label"></label>
                        <div class="col-lg-9">
                            <input type="text" name = "kin_other_name" class="form-control" placeholder="Kin Other names" >
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="col-lg-3 control-label">Phone Number:</label>
                        <div class="col-lg-9">
                            <input type="number" name = "kin_phone_number" placeholder="0700000000" class="form-control" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-9">
                            <input type="email" name = "kin_email"  placeholder="example@example.com" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Id Number:</label>
                        <div class="col-lg-9">
                            <input type="text" name = "kin_id_number"  placeholder="12345678" class="form-control" >
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>

        <div class="text-right">
            <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
        </div>
    </div>
</div>
</form>
<!-- /2 columns form -->
</div>
</div>
</div>