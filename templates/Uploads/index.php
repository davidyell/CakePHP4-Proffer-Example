<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Upload[]|\Cake\Collection\CollectionInterface $uploads
 */
?>
<div class="uploads index content">
    <?= $this->Html->link(__('New Upload'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Uploads') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('filename') ?></th>
                    <th><?= $this->Paginator->sort('path') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('post_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($uploads as $upload): ?>
                <tr>
                    <td><?= $this->Number->format($upload->id) ?></td>
                    <td><?= h($upload->filename) ?></td>
                    <td><?= h($upload->path) ?></td>
                    <td><?= h($upload->created) ?></td>
                    <td><?= h($upload->modified) ?></td>
                    <td><?= $upload->has('post') ? $this->Html->link($upload->post->title, ['controller' => 'Posts', 'action' => 'view', $upload->post->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $upload->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $upload->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $upload->id], ['confirm' => __('Are you sure you want to delete # {0}?', $upload->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
