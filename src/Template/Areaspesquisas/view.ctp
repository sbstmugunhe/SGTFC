<section class="content-header">
  <h1>
    <?php echo __('Areaspesquisa'); ?>
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
                                                                                                                <dt><?= __('Name') ?></dt>
                                        <dd>
                                            <?= h($areaspesquisa->name) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                            
                                                                                                                                            
                                            
                                                                        <dt><?= __('Descricao') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($areaspesquisa->descricao)); ?>
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
                    <h3 class="box-title"><?= __('{0} Relacionados', ['Propostas']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($areaspesquisa->propostas)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Name
                                    </th>
                                        
                                                                    
                                    <th>
                                    Areaspesquisa Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Descricao
                                    </th>
                                        
                                                                    
                                    <th>
                                    Estado
                                    </th>
                                        
                                                                    
                                    <th>
                                    Parecer
                                    </th>
                                        
                                                                                                        
                                    <th>
                                    Updated
                                    </th>
                                        
                                                                                                        
                                <th>
                                    <?php echo __('Acções'); ?>
                                </th>
                            </tr>

                            <?php foreach ($areaspesquisa->propostas as $propostas): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($propostas->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($propostas->name) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($propostas->areaspesquisa_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($propostas->descricao) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($propostas->estado) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($propostas->parecer) ?>
                                    </td>
                                                                                                            
                                    <td>
                                    <?= h($propostas->updated) ?>
                                    </td>
                                                                        
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Propostas', 'action' => 'view', $propostas->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Editar'), ['controller' => 'Propostas', 'action' => 'edit', $propostas->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Eliminar'), ['controller' => 'Propostas', 'action' => 'delete', $propostas->id], ['confirm' => __('Tens a certeza que pretende eliminar # {0}?', $propostas->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
