<?php
/* @var $this MusicchartsController */
/* @var $model Musiccharts */
/* @var $form CActiveForm */
?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'musiccharts-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => false,
    //'htmlOptions' => array('class' => 'form-horizontal')
    'htmlOptions' => array('enctype' => 'multipart/form-data', 'class' => 'form-horizontal')
        ));
?>

<fieldset>
    <legend><?php echo Yii::t('Musiccharts', 'Fields with {required} are required to {operate} musiccharts.', array('{required}' => '<span class="required">*</span>', '{operate}' => Yii::t('site', ($model->isNewRecord ? 'create' : 'update')))) ?></legend>
    
    <div class="control-group">
	<?php echo $form->labelEx($model,'name', array('class' => 'control-label')); ?>
        <div class="controls">
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
        </div>
    </div>

    <div class="control-group">
	<?php echo $form->labelEx($model,'description', array('class' => 'control-label')); ?>
        <div class="controls">
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'description'); ?>
        </div>
    </div>

    <?php if ($model->isNewRecord) { ?>
        <div class="control-group">
            <?php echo $form->labelEx($model,'bpic_file', array('class' => 'control-label', 'label' => Yii::t('Musiccharts','Upload Bpic Url'))); ?>
            <div class="controls">
                    <input class="input-file uniform_on" id="ytFiles_bpic_file" name="Musiccharts[bpic_file]" type="file">
                    <?php echo $form->error($model,'bpic_file'); ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo $form->labelEx($model,'spic_file', array('class' => 'control-label', 'label' => Yii::t('Musiccharts','Upload Spic Url'))); ?>
            <div class="controls">
                    <input class="input-file uniform_on" id="ytFiles_spic_file" name="Musiccharts[spic_file]" type="file">
                    <?php echo $form->error($model,'spic_file'); ?>
            </div>
        </div>
    <?php } else { ?>
        <div class="control-group">
            <?php echo $form->labelEx($model,'bpic_filename', array('class' => 'control-label', 'label' => Yii::t('Musiccharts','Exists Bpic Url'))); ?>
            <div class="controls">
                    <?php echo $form->textField($model,'bpic_filename',array('size'=>60,'maxlength'=>255)); ?>
                    <?php echo $form->error($model,'bpic_filename'); ?>
            </div>
        </div>

        <div class="control-group">
            <?php echo $form->labelEx($model,'bpic_file', array('class' => 'control-label', 'label' => Yii::t('Musiccharts','Update Bpic Url'))); ?>
            <div class="controls">
                    <input class="input-file uniform_on" id="ytFiles_bpic_file" name="Musiccharts[bpic_file]" type="file">
                    <?php //echo $form->textField($model,'bpic_url',array('size'=>60,'maxlength'=>255)); ?>
                    <?php echo $form->error($model,'bpic_file'); ?>
            </div>
        </div>

        <div class="control-group">
            <?php echo $form->labelEx($model,'spic_filename', array('class' => 'control-label', 'label' => Yii::t('Musiccharts','Exists Spic Url'))); ?>
            <div class="controls">
                    <?php echo $form->textField($model,'spic_filename',array('size'=>60,'maxlength'=>255)); ?>
                    <?php echo $form->error($model,'spic_filename'); ?>
            </div>
        </div>

        <div class="control-group">
            <?php echo $form->labelEx($model,'spic_file', array('class' => 'control-label', 'label' => Yii::t('Musiccharts','Update Spic Url'))); ?>
            <div class="controls">
                    <input class="input-file uniform_on" id="ytFiles_spic_file" name="Musiccharts[spic_file]" type="file">
                    <?php //echo $form->textField($model,'spic_url',array('size'=>60,'maxlength'=>255)); ?>
                    <?php echo $form->error($model,'spic_file'); ?>
            </div>
        </div>
    <?php } ?>
    <div class="control-group">
	<?php echo $form->labelEx($model,'status', array('class' => 'control-label')); ?>
        <div class="controls">
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
        </div>
    </div>
    
    <div class="form-actions">
        <button type="submit" name="yt0" class="btn btn-primary"><?php echo Yii::t('site', ($model->isNewRecord ? 'Create' : 'Save Changes')) ?></button>
        <button type="reset" class="btn"><?php echo Yii::t('site', 'Reset') ?></button>
    </div>
</fieldset>
<?php $this->endWidget(); ?>

