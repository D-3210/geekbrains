<div class="row">
    
    <div class="col-md-12">
        <h3>Добавление события</h3>
        
        <h5><?= $name ?></h5>
        
        <?php $form = yii\bootstrap\ActiveForm::begin([
        ]);?>
            <?= $form->field($model, 'title'); ?>
            <?= $form->field($model, 'description')->textarea(); ?>
            <?= $form->field($model, 'date_start')->input('date'); ?>
            <?= $form->field($model, 'date_finish')->input('date'); ?>
            <?= $form->field($model, 'author'); ?>
            <?= $form->field($model, 'is_blocked')->checkbox(); ?>
        
            <div class="form-group">
                <button class="btn btn-info" type="submit">Сохранить</button>
            </div>
        <?php yii\bootstrap\ActiveForm::end([]);?>
    </div>
    
    
</div>
