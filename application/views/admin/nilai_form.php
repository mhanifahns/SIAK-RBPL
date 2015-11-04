<div class="container">
<h2>Nilai</h2>
<hr>
<?php echo form_open($form_action, array('id'=>'myform', 'class'=>'form-horizontal', 'role'=>'form')) ?>

    <?php echo form_hidden('id', $values->id);?>
 

    <h3 class="bg-success">A. Nilai Rapot Siswa</h3>

    <!-- Nilai Bahasa Indonesia -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style(array('nil_bin_1', 'nil_bin_2', 'nil_bin_3', 'nil_bin_4', 'nil_bin_5'))?>">
        <label for="nil_bin_1" class="col-sm-3 control-label">Bahasa Indonesia</label>
        <div class="col-sm-1">
            <?php echo form_input('nil_bin_1', $values->nil_bin_1, 'id="nil_bin_1" class="form-control" placeholder="Bin 1" maxlength="3"') ?>            
        </div>
        <div class="col-sm-1">
            <?php echo form_input('nil_bin_2', $values->nil_bin_2, 'id="nil_bin_2" class="form-control" placeholder="Bin 2" maxlength="3"') ?>            
        </div>
        <div class="col-sm-1">
            <?php echo form_input('nil_bin_3', $values->nil_bin_3, 'id="nil_bin_3" class="form-control" placeholder="Bin 3" maxlength="3"') ?>            
        </div>
        <div class="col-sm-1">
            <?php echo form_input('nil_bin_4', $values->nil_bin_4, 'id="nil_bin_4" class="form-control" placeholder="Bin 4" maxlength="3"') ?>            
        </div>
        <div class="col-sm-1">
            <?php echo form_input('nil_bin_5', $values->nil_bin_5, 'id="nil_bin_5" class="form-control" placeholder="Bin 5" maxlength="3"') ?>            
        </div>

        <!-- Form validation error Bahasa Indonesia -->
        <?php if (form_error('nil_bin_1') || form_error('nil_bin_2') || form_error('nil_bin_3') || form_error('nil_bin_4') || form_error('nil_bin_5')) : ?>
            <div class="col-sm-9 col-sm-offset-3">                
                <?php echo form_error('nil_bin_1', '<span class="help-block">', '</span>');?>
            </div>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nil_bin_2', '<span class="help-block">', '</span>');?>
            </div>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nil_bin_3', '<span class="help-block">', '</span>');?>
            </div>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nil_bin_4', '<span class="help-block">', '</span>');?>
            </div>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nil_bin_5', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- Nilai Bahasa Inggris -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style(array('nil_bing_1', 'nil_bing_2', 'nil_bing_3', 'nil_bing_4', 'nil_bing_5'))?>">
        <label for="nil_bing_1" class="col-sm-3 control-label">Bahasa Inggris</label>
        <div class="col-sm-1">
            <?php echo form_input('nil_bing_1', $values->nil_bing_1, 'id="nil_bing_1" class="form-control" placeholder="Bing 1" maxlength="3"') ?>            
        </div>
        <div class="col-sm-1">
            <?php echo form_input('nil_bing_2', $values->nil_bing_2, 'id="nil_bing_2" class="form-control" placeholder="Bing 2" maxlength="3"') ?>            
        </div>
        <div class="col-sm-1">
            <?php echo form_input('nil_bing_3', $values->nil_bing_3, 'id="nil_bing_3" class="form-control" placeholder="Bing 3" maxlength="3"') ?>            
        </div>
        <div class="col-sm-1">
            <?php echo form_input('nil_bing_4', $values->nil_bing_4, 'id="nil_bing_4" class="form-control" placeholder="Bing 4" maxlength="3"') ?>            
        </div>
        <div class="col-sm-1">
            <?php echo form_input('nil_bing_5', $values->nil_bing_5, 'id="nil_bing_5" class="form-control" placeholder="Bing 5" maxlength="3"') ?>            
        </div>

        <!-- Form validation error Bahasa Inggris -->
        <?php if (form_error('nil_bing_1') || form_error('nil_bing_2') || form_error('nil_bing_3') || form_error('nil_bing_4') || form_error('nil_bing_5')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nil_bing_1', '<span class="help-block">', '</span>');?>
            </div>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nil_bing_2', '<span class="help-block">', '</span>');?>
            </div>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nil_bing_3', '<span class="help-block">', '</span>');?>
            </div>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nil_bing_4', '<span class="help-block">', '</span>');?>
            </div>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nil_bing_5', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- Nilai Matematika -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style(array('nil_mat_1', 'nil_mat_2', 'nil_mat_3', 'nil_mat_4', 'nil_mat_5'))?>">
        <label for="nil_bing_1" class="col-sm-3 control-label">Matematika</label>
        <div class="col-sm-1">
            <?php echo form_input('nil_mat_1', $values->nil_mat_1, 'id="nil_mat_1" class="form-control" placeholder="Mat 1" maxlength="3"') ?>            
        </div>
        <div class="col-sm-1">
            <?php echo form_input('nil_mat_2', $values->nil_mat_2, 'id="nil_mat_2" class="form-control" placeholder="Mat 2" maxlength="3"') ?>            
        </div>
        <div class="col-sm-1">
            <?php echo form_input('nil_mat_3', $values->nil_mat_3, 'id="nil_mat_3" class="form-control" placeholder="Mat 3" maxlength="3"') ?>            
        </div>
        <div class="col-sm-1">
            <?php echo form_input('nil_mat_4', $values->nil_mat_4, 'id="nil_mat_4" class="form-control" placeholder="Mat 4" maxlength="3"') ?>            
        </div>
        <div class="col-sm-1">
            <?php echo form_input('nil_mat_5', $values->nil_mat_5, 'id="nil_mat_5" class="form-control" placeholder="Mat 5" maxlength="3"') ?>            
        </div>

        <!-- Form validation error Matematika -->
        <?php if (form_error('nil_mat_1') || form_error('nil_mat_2') || form_error('nil_mat_3') || form_error('nil_mat_4') || form_error('nil_mat_5')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nil_mat_1', '<span class="help-block">', '</span>');?>
            </div>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nil_mat_2', '<span class="help-block">', '</span>');?>
            </div>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nil_mat_3', '<span class="help-block">', '</span>');?>
            </div>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nil_mat_4', '<span class="help-block">', '</span>');?>
            </div>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nil_mat_5', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <!-- Nilai WEB -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style(array('nil_web_1', 'nil_web_2', 'nil_web_3', 'nil_web_4', 'nil_web_5'))?>">
        <label for="nil_bing_1" class="col-sm-3 control-label">WEB</label>
        <div class="col-sm-1">
            <?php echo form_input('nil_web_1', $values->nil_web_1, 'id="nil_web_1" class="form-control" placeholder="WEB 1" maxlength="3"') ?>
        </div>
        <div class="col-sm-1">
            <?php echo form_input('nil_web_2', $values->nil_web_2, 'id="nil_web_2" class="form-control" placeholder="WEB 2" maxlength="3"') ?>
        </div>
        <div class="col-sm-1">
            <?php echo form_input('nil_web_3', $values->nil_web_3, 'id="nil_web_3" class="form-control" placeholder="WEB 3" maxlength="3"') ?>
        </div>
        <div class="col-sm-1">
            <?php echo form_input('nil_web_4', $values->nil_web_4, 'id="nil_web_4" class="form-control" placeholder="WEB 4" maxlength="3"') ?>
        </div>
        <div class="col-sm-1">
            <?php echo form_input('nil_web_5', $values->nil_web_5, 'id="nil_web_5" class="form-control" placeholder="WEB 5" maxlength="3"') ?>
        </div>

        <!-- Form validation error WEB -->
        <?php if (form_error('nil_web_1') || form_error('nil_web_2') || form_error('nil_web_3') || form_error('nil_web_4') || form_error('nil_web_5')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nil_web_1', '<span class="help-block">', '</span>');?>
            </div>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nil_web_2', '<span class="help-block">', '</span>');?>
            </div>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nil_web_3', '<span class="help-block">', '</span>');?>
            </div>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nil_web_4', '<span class="help-block">', '</span>');?>
            </div>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nil_web_5', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div> <!-- Nilai WEB end -->

    <!-- Nilai SENI -->
    <div class="form-group form-group-sm has-feedback <?php set_validation_style(array('nil_seni_1', 'nil_seni_2', 'nil_seni_3', 'nil_seni_4', 'nil_seni_5'))?>">
        <label for="nil_bing_1" class="col-sm-3 control-label">SENI</label>
        <div class="col-sm-1">
            <?php echo form_input('nil_seni_1', $values->nil_seni_1, 'id="nil_seni_1" class="form-control" placeholder="SENI 1" maxlength="3"') ?>
        </div>
        <div class="col-sm-1">
            <?php echo form_input('nil_seni_2', $values->nil_seni_2, 'id="nil_seni_2" class="form-control" placeholder="SENI 2" maxlength="3"') ?>
        </div>
        <div class="col-sm-1">
            <?php echo form_input('nil_seni_3', $values->nil_seni_3, 'id="nil_seni_3" class="form-control" placeholder="SENI 3" maxlength="3"') ?>
        </div>
        <div class="col-sm-1">
            <?php echo form_input('nil_seni_4', $values->nil_seni_4, 'id="nil_seni_4" class="form-control" placeholder="SENI 4" maxlength="3"') ?>
        </div>
        <div class="col-sm-1">
            <?php echo form_input('nil_seni_5', $values->nil_seni_5, 'id="nil_seni_5" class="form-control" placeholder="SENI 5" maxlength="3"') ?>
        </div>

        <!-- Form validation error SENI -->
        <?php if (form_error('nil_seni_1') || form_error('nil_seni_2') || form_error('nil_seni_3') || form_error('nil_seni_4') || form_error('nil_seni_5')) : ?>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nil_seni_1', '<span class="help-block">', '</span>');?>
            </div>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nil_seni_2', '<span class="help-block">', '</span>');?>
            </div>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nil_seni_3', '<span class="help-block">', '</span>');?>
            </div>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nil_seni_4', '<span class="help-block">', '</span>');?>
            </div>
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_error('nil_seni_5', '<span class="help-block">', '</span>');?>
            </div>
        <?php endif ?>
    </div>

    <hr>
    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-3">
            <?php echo form_button(array('content'=>'Simpan', 'type'=>'submit', 'class'=>'btn btn-primary', 'data-confirm'=>'Anda yakin akan menyimpan data ini?')) ?>
        </div>
    </div>

<?php echo form_close() ?>

</div>
