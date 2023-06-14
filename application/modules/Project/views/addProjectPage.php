<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Assign Tasks</h3>
                </div>
                <?php echo form_open('addProject'); ?>
                <div class="box-body">
                    <?php $msg = $this->session->flashdata('message'); if(!empty($msg)): ?>
                    <div class="alert alert-dismissible alert-success">
                        <?php echo $msg; ?>
                    </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="project_name">Project Name</label>
                        <?php echo form_input(['name' => 'project_name', 'class' => 'form-control', 'id' => 'project_name', 'placeholder' => 'Enter Project Name']); ?>
                        <?php echo form_error('project_name', '<div class="text-danger">', '</div>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="client_name">Client Name</label>
                        <?php echo form_input(['name' => 'client_name', 'class' => 'form-control', 'id' => 'client_name', 'placeholder' => 'Enter Client Name']); ?>
                        <?php echo form_error('client_name', '<div class="text-danger">', '</div>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="services_needed">Services Needed</label>
                        <?php echo form_textarea(['name' => 'services_needed', 'class' => 'form-control', 'id' => 'services_needed', 'placeholder' => 'Enter Services Needed', 'rows' => '4']); ?>
                    </div>

                    <div class="form-group">
                        <label for="project_status">Project Status</label>
                        <?php echo form_input(['name' => 'project_status', 'class' => 'form-control', 'id' => 'project_status', 'placeholder' => 'Enter Project Status']); ?>
                        <?php echo form_error('project_status', '<div class="text-danger">', '</div>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="due_date">Due Date</label>
                        <?php echo form_input(['name' => 'due_date', 'class' => 'form-control', 'id' => 'due_date', 'placeholder' => 'Enter Due Date']); ?>
                        <?php echo form_error('due_date', '<div class="text-danger">', '</div>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <?php echo form_input(['name' => 'address', 'class' => 'form-control', 'id' => 'address', 'placeholder' => 'Enter Address']); ?>
                        <?php echo form_error('address', '<div class="text-danger">', '</div>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="team_size">Team Size</label>
                        <?php echo form_input(['name' => 'team_size', 'class' => 'form-control', 'id' => 'team_size', 'placeholder' => 'Enter Team Size']); ?>
                        <?php echo form_error('team_size', '<div class="text-danger">', '</div>'); ?>
                    </div>
                </div>
                <div class="box-footer">
                    <?php echo form_submit('', 'Add Project', ['class' => 'btn btn-primary']); ?>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</section>
