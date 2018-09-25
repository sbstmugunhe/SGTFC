<section class="content-header">
  <h1>
    <?php echo __('Trabalho'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Voltar'), ['action' => 'index'], ['escape' => false])?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header with-border">
                <i class="fa fa-info"></i>
                <h3 class="box-title"><?php echo __('Informação'); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                                                                                                        <dt><?= __('Proposta') ?></dt>
                                <dd>
                <?= $trabalho->has('proposta') ? $trabalho->proposta->name : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Estudocaso') ?></dt>
                                        <dd>
                                            <?= h($trabalho->estudocaso) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Geral') ?></dt>
                                        <dd>
                                            <?= h($trabalho->geral) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Dataentrega') ?></dt>
                                        <dd>
                                            <?= h($trabalho->dataentrega) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('User Id') ?></dt>
                                <dd>
                                    <?= $this->Number->format($trabalho->user_id) ?>
                                </dd>
                                                                                                
                                                                                                                                                                                                
                                            
                                                                        <dt><?= __('Especificos') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($trabalho->especificos)); ?>
                            </dd>
                                                    <dt><?= __('Estrutura') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($trabalho->estrutura)); ?>
                            </dd>
                                                    <dt><?= __('Obras') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($trabalho->obras)); ?>
                            </dd>
                                                            </dl>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- ./col -->
</div>
<!-- div -->

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('{0} Relacionados', ['Actividades']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($trabalho->actividades)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Trabalho Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Name
                                    </th>
                                        
                                                                    
                                    <th>
                                    Inicio
                                    </th>
                                        
                                                                    
                                    <th>
                                    Fim
                                    </th>
                                        
                                                                    
                                    <th>
                                    Duracao
                                    </th>
                                        
                                                                    
                                    <th>
                                    Comentarios
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Acções'); ?>
                                </th>
                            </tr>

                            <?php foreach ($trabalho->actividades as $actividades): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($actividades->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($actividades->trabalho_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($actividades->name) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($actividades->inicio) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($actividades->fim) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($actividades->duracao) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($actividades->comentarios) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Actividades', 'action' => 'view', $actividades->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Editar'), ['controller' => 'Actividades', 'action' => 'edit', $actividades->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Eliminar'), ['controller' => 'Actividades', 'action' => 'delete', $actividades->id], ['confirm' => __('Tens a certeza que pretende eliminar # {0}?', $actividades->id), 'class'=>'btn btn-danger btn-xs']) ?>    
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                    
                        </tbody>
                    </table>

                <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
