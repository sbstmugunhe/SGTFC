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
                    <h3 class="box-title"><?= __('{0} Relacionados', ['Temas']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($areaspesquisa->temas)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Tema
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
                                    Situacao
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

                            <?php foreach ($areaspesquisa->temas as $temas): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($temas->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($temas->tema) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($temas->areaspesquisa_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($temas->descricao) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($temas->estado) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($temas->situacao) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($temas->parecer) ?>
                                    </td>
                                                                                                            
                                    <td>
                                    <?= h($temas->updated) ?>
                                    </td>
                                                                        
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Temas', 'action' => 'view', $temas->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Editar'), ['controller' => 'Temas', 'action' => 'edit', $temas->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Eliminar'), ['controller' => 'Temas', 'action' => 'delete', $temas->id], ['confirm' => __('Tens a certeza que pretende eliminar # {0}?', $temas->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
