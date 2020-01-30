<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $post->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $post->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Posts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="posts form content">
            <?= $this->Form->create($post, ['type' => 'file']) ?>
            <fieldset>
                <legend><?= __('Edit Post') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('content');
                ?>
            </fieldset>
            <fieldset>
                <legend>Images</legend>
                <?php
                foreach ($post->get('uploads') as $upload) {
                    echo "<p>" . $upload->get('id') . ' | ' . $upload->get('filename') . "</p>";
                    echo $this->Html->image('/files/uploads/filename/' . $upload->get('path') . '/square_' . $upload->get('filename'));
                }
                echo $this->Form->control('uploads.' . count($post->get('uploads')) . '.filename', ['type' => 'file']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
