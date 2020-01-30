<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Upload $upload
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $upload->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $upload->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Uploads'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="uploads form content">
            <?= $this->Form->create($upload) ?>
            <fieldset>
                <legend><?= __('Edit Upload') ?></legend>
                <?php
                    echo $this->Form->control('filename');
                    echo $this->Form->control('path');
                    echo $this->Form->control('post_id', ['options' => $posts]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
