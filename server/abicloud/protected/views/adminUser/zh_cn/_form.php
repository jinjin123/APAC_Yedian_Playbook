<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'category-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => false,
    'htmlOptions' => array('class' => 'form-horizontal')
        ));
?>

<fieldset>
    <legend><?php echo Yii::t('user', 'Fields with {required} are required to {operate} user.', array('{required}' => '<span class="required">*</span>', '{operate}' => Yii::t('user', ($model->isNewRecord ? 'create' : 'update')))) ?></legend>

    <?php if (Yii::app()->user->id != $model->id) { ?>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'username', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php echo $form->textField($model, 'username', array('size' => 60, 'maxlength' => 255)); ?>
                <?php echo $form->error($model, 'username'); ?>
            </div>
        </div>
    <?php } ?>

    <div class="control-group">
        <?php echo $form->labelEx($model, 'email', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'email'); ?>
        </div>
    </div>

    <div class="control-group">
        <?php echo $form->labelEx($model, 'password', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'password'); ?>
        </div>
    </div>

    <?php if ($model->isNewRecord) { ?>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'password_repeat', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php echo $form->passwordField($model, 'password_repeat', array('size' => 60, 'maxlength' => 255)); ?>
                <?php echo $form->error($model, 'password_repeat'); ?>
            </div>
        </div>
    <?php } ?>

    <?php if (Yii::app()->user->id != $model->id) { ?>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'role', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php echo $form->dropDownList($model, 'role', User::getUserRoleOptions()); ?>
                <?php echo $form->error($model, 'role'); ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'status', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php echo $form->dropDownList($model, 'status', $model->getStatusOptions()); ?>
                <?php echo $form->error($model, 'status'); ?>
            </div>
        </div>
    <?php } ?>

    <div class="form-actions">
        <button type="submit" name="yt0" class="btn btn-primary"><?php echo Yii::t('user', ($model->isNewRecord ? 'Create' : 'Save Changes')) ?></button>
        <button type="reset" class="btn"><?php echo Yii::t('user', 'Reset') ?></button>
    </div>

</fieldset>
<?php $this->endWidget(); ?>
