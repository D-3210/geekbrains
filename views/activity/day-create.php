<div class="row">
    
    <div class="col-md-12">
        <h3>Добавление события</h3>
        
        <h5><?= $name ?></h5>
        
        <?php $form = yii\bootstrap\ActiveForm::begin([
        ]);?>
            <?= $form->field($model, 'type'); ?>
            <?= $form->field($model, 'description')->textarea(); ?>
        
            <div class="form-group">
                <button class="btn btn-info" type="submit">Сохранить</button>
            </div>
        <?php yii\bootstrap\ActiveForm::end([]);?>
    </div>
    
    
</div>
