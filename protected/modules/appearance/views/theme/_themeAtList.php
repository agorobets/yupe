<?php
/** @var $data YTheme */
?>
<div class="media">
    <div class="pull-left">
        <div>
            <?php if (null == $data->getScreenshot()): ?>
            <?php else : ?>
                <img src="<?= $data->resource($data->getScreenshot()); ?>" width="250" class="img-polaroid">
            <?php endif; ?>
        </div>
    </div>

    <div class="media-body">
        <h4 class="media-heading">
            <?=CHtml::encode($data->getTitle());?>
            <span class="label label-info"><?=CHtml::encode($data->getVersion());?></span>
            <?php if ($data->getParentTheme()) : ?>
                <small title="<?= Yii::t('AppearanceModule.messages', 'Родительская тема'); ?>">&larr;
                    <?=CHtml::encode($data->getParentTheme()->getTitle());?>
                </small>
            <?php endif; ?>
        </h4>

        <div>
            <?php if ($data->getIsBackend()) : ?>
                <span class="label"><?=Yii::t('AppearanceModule.messages', 'Для панели управления');?></span>
            <?php else : ?>
                <span class="label label-info"><?=Yii::t('AppearanceModule.messages', 'Для клиентской части');?></span>
            <?php endif; ?>
            <?php if ($data->getIsEnabled()) : ?>
                <span class="label label-success"><?= Yii::t('AppearanceModule.messages', 'Включена'); ?></span>
            <?php else : ?>
                <span class="label"><?=Yii::t('AppearanceModule.messages', 'Выключена');?></span>
            <?php endif; ?>
        </div>
        <div>
            <?=Yii::t('AppearanceModule.messages', 'Автор');?>: <?=CHtml::encode($data->getAuthors());?>
        </div>
        <p><?=CHtml::encode($data->getDescription());?></p>

        <div class="theme-actions">
            <?php if (!$data->getIsEnabled()) : ?>
                <a class="btn btn-small btn-success toggleTheme" data-theme-id="<?= $data->getName(); ?>">
                    <?=Yii::t('AppearanceModule.messages', 'Включить');?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>