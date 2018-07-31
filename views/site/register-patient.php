<div class="container"><?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Patient */
/* @var $form ActiveForm */
$this->title = 'Register New Patient';
$this->params['breadcrumbs'][] = $this->title;
?></div>
<h1><?= Html::encode($this->title) ?></h1> </br>
<div class="register-patient">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name') ?>
    <?= $form->field($model, 'middle_name') ?>
    <?= $form->field($model, 'last_name') ?>
    <?= $form->field($model, 'birthdate') ?>
    <?= $form->field($model, 'sex') ?>
    <?= $form->field($model, 'civil_status') ?>
    <?= $form->field($model, 'place_of_birth') ?>
    <?= $form->field($model, 'nationality') ?>
    <?= $form->field($model, 'religion') ?>
    <?= $form->field($model, 'province') ?>
    <?= $form->field($model, 'zip') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'phone_no') ?>
    <?= $form->field($model, 'unitno_address') ?>
    <?= $form->field($model, 'house_bldng_no') ?>
    <?= $form->field($model, 'bldng_name') ?>
    <?= $form->field($model, 'street') ?>
    <?= $form->field($model, 'subdv_vill') ?>
    <?= $form->field($model, 'barangay') ?>
    <?= $form->field($model, 'city') ?>
    
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- register-patient -->
