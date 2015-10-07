<html>
    <head>
    <title>Simple Form validation</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="border: 1px solid #ccc;margin-top: 10px">
                <form class="form-horizontal" method="post" action="<?= base_url('index.php/form_validation') ?>">
                    <fieldset>
                        <!-- Form Name -->
                        <legend>User Form</legend>
                        <?php if ($this->session->flashdata('success')) { ?>
                            <div class="alert alert-success" role="alert">
                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                <span class="sr-only">Success:</span>
                                <?= $this->session->flashdata('success'); ?>
                            </div>
                        <?php } ?>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Name</label>  
                            <div class="col-md-4">
                                <input id="textinput" name="name" placeholder="" class="form-control input-md" type="text" value="<?= set_value('name') ?>">
                                <span class="help-block" style="color:red"><?= form_error('name'); ?></span>  
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Email</label>  
                            <div class="col-md-4">
                                <input id="textinput" name="email" placeholder="" class="form-control input-md" type="text" value="<?= set_value('email') ?>">
                                <span class="help-block" style="color:red"><?= form_error('email'); ?></span>  
                            </div>
                        </div>

                        <!-- Password input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="passwordinput">Password</label>
                            <div class="col-md-4">
                                <input id="passwordinput" name="password" placeholder="" class="form-control input-md" type="password" value="<?= set_value('password') ?>">
                                <span class="help-block" style="color:red"><?= form_error('password'); ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="passwordinput">Confirm Password</label>
                            <div class="col-md-4">
                                <input id="passwordinput" name="cpassword" placeholder="" class="form-control input-md" type="password" value="<?= set_value('cpassword') ?>">
                                <span class="help-block" style="color:red"><?= form_error('cpassword'); ?></span>
                            </div>
                        </div>

                        <!-- Multiple Radios -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="radios">Gender</label>
                            <div class="col-md-4">
                                <div class="radio">
                                    <label for="radios-0">
                                        <input name="radios" id="radios-0" value="1" checked="checked" type="radio">
                                        Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="radios-1">
                                        <input name="radios" id="radios-1" value="2" type="radio">
                                        Female
                                    </label>
                                </div>
                            </div>
                            <span class="help-block" style="color:red"><?= form_error('radios'); ?> </span>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton"></label>
                            <div class="col-md-4">
                                <input name="submit" value="Submit" type="submit" class="btn btn-success btn-small"/>
                            </div>
                        </div>

                    </fieldset>
                </form>     
            </div>

        </div>

    </body>
</html>