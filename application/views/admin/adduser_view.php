   <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
   <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li>
            <a href="<?php echo base_url('admin'); ?>"><i class="fa fa-fw fa-dashboard"></i> Admin </a>
        </li>
        <li>
            <a href="<?php echo base_url('time/viewTimeLogs'); ?>"><i class="fa fa-fw fa-clock-o"></i> Time Logs</a>
        </li>
        <li>
            <a href="<?php echo base_url('host/viewHost'); ?>"><i class="fa fa-fw fa-server"></i> Network</a>
        </li>
        <li class="active">
            <a href="#" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-users"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">
                <li>
                    <a href="<?php echo base_url('accounts/viewAdd'); ?>">Add</a>
                </li>
                <li>
                    <a href="<?php echo base_url('accounts/viewUsers'); ?>">View</a>
                </li>
            </ul>
        </li>
        
    </ul>
</div>
<!-- /.navbar-collapse -->
</nav>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <!-- Page Heading -->
            <div class="col-lg-12">
                <h1 class="page-header">
                    Users <small>Add</small>
                </h1>
              <!--   <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url('admin'); ?>">Admin</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-users"></i> Users
                    </li>
                </ol> -->
            </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-user-plus"></i> Fill up all fields </h3>
                    </div>
                    <div class="panel-body">
                        <div id="userInput">
                            <?php
                            echo form_open_multipart('accounts/addUser', "id='panel_add'");
                            ?>
                            <fieldset class="panel-body">
                                <?php
                                $txtFname = array(
                                    "name"=>"txtFirstName",
                                    "id"=>"txtFirstName",
                                    "style"=>"width:185px;",
                                    "class"=>"form-control",
                                    "placeholder"=>"First Name",
                                    "required"=>"required",
                                    "autofocus"=>"autofocus"
                                    );
                                $txtLname = array(
                                    "name"=>"txtLastName",
                                    "id"=>"txtLastName",
                                    "style"=>"width:185px;",
                                    "class"=>"form-control",
                                    "placeholder"=>"Last Name",
                                    "required"=>"required"
                                    );
                                $txtUsername = array(
                                    "name"=>"txtUsername",
                                    "id"=>"txtUsername",
                                    "style"=>"width:185px;",
                                    "class"=>"form-control",
                                    "placeholder"=>"Username",
                                    "required"=>"required"
                                    );
                                $txtPassword = array(
                                    "name"=>"txtPassword",
                                    "id"=>"txtPassword",
                                    "style"=>"width:185px;",
                                    "class"=>"form-control",
                                    "placeholder"=>"Password",
                                    "required"=>"required"
                                    );
                                $txtContact = array(
                                    "name"=>"txtContact",
                                    "id"=>"txtContact",
                                    "style"=>"width:185px;",
                                    "class"=>"form-control",
                                    "placeholder"=>"Contact No."
                                    );
                                    ?>
                                    <div style="overflow-x:auto;">
                                        <table class="table-condensed table-responsive">
                                            <tr>                                     
                                                <td> 
                                                    <div class="form-group">
                                                        <?php
                                                        echo form_input($txtFname, set_value("txtFirstName"));
                                                        ?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <?php
                                                        echo form_input($txtLname, set_value("txtLastName"));
                                                        ?>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <?php echo form_input($txtContact, set_value("txtContact")); ?>
                                                    </div>
                                                </td>
                                                <td>
                                                   <div class="form-group">
                                                    <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email" size="20" required> 
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <?php
                                                    echo form_input($txtUsername, set_value("txtUsername"));
                                                    ?>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <?php
                                                    echo form_password($txtPassword);
                                                    ?>
                                                </div>
                                            </td>                                           
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    Profile Picture
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="file" name="userImage" style="width:185px;"/>
                                                </div>
                                            </td>
                                        </tr>
                                       <!--  <tr>
                                            <td colspan="2">

                                            </td>
                                        </tr> -->
                                        <tr>
                                            <td>
                                             <div class="form-group">
                                                 <?php
                                                 echo form_reset("btnClear", "Clear", "class='btn btn-default btn-block'");
                                                 ?>

                                             </div>    
                                         </td>
                                         <td>
                                             <div class="form-group">
                                                <?php
                                                echo form_submit("btnSubmit", "Submit", "class='btn btn-primary btn-block'");
                                                ?>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <!-- overflow for table -->
                        </fieldset>
                        <?php echo form_close(); ?>
                    </div>
                </div>
                <!-- panel body -->
            </div>
            <!-- end panel -->
        </div>
        <!-- col details -->
    </div>
    <!-- /.row -->
</div>
<!-- end page container-fluid -->
</div> 
<!-- end page wrapper -->
