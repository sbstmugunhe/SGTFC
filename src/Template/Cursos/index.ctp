<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Cursos
    <div class="pull-right"><?= $this->Html->link(__('Novo Registo'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('Todos Registos') ?> </h3>
          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm"  style="width: 250px;">
                <input type="text" name="search" class="form-control" placeholder="<?= __('Pesquisar aqui...') ?>">
                <span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="submit"><?= __('Buscar') ?></button>
                </span>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('utilizadore_id') ?></th>
                <th><?= __('Acções') ?></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($cursos as $curso): ?>
              <tr>
                <td><?= $this->Number->format($curso->id) ?></td>
                <td><?= h($curso->name) ?></td>
                <td><?= $curso->has('utilizadore') ? $this->Html->link($curso->utilizadore->name, ['controller' => 'Utilizadores', 'action' => 'view', $curso->utilizadore->id]) : '' ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $curso->id], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('Editar'), ['action' => 'edit', $curso->id], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $curso->id], ['confirm' => __('Pretende apagar este registo?'), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <?php echo $this->Paginator->numbers(); ?>
          </ul>
        </div>
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
<!-- /.content -->
