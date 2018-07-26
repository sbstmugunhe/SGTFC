<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Propostas
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
                <th><?= $this->Paginator->sort('areaspesquisa_id') ?></th>
                <th><?= $this->Paginator->sort('estado') ?></th>
                <th><?= $this->Paginator->sort('Data') ?></th>
                <th><?= __('Acções') ?></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($propostas as $proposta): ?>
              <tr>
                <td><?= $this->Number->format($proposta->id) ?></td>
                <td><?= h($proposta->name) ?></td>
                <td><?= $proposta->has('areaspesquisa') ? $this->Html->link($proposta->areaspesquisa->name, ['controller' => 'Areaspesquisas', 'action' => 'view', $proposta->areaspesquisa->id]) : '' ?></td>
                <td><span class="label label-danger"><?= h($proposta->estado) ?></span></td>
                <td><?= h($proposta->modified) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $proposta->id], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('Editar'), ['action' => 'edit', $proposta->id], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $proposta->id], ['confirm' => __('Pretende apagar este registo?'), 'class'=>'btn btn-danger btn-xs']) ?>
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
