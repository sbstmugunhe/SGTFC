<section class="content-header">
  <h1>
    <?php echo __('Utilizadore'); ?>
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
                                            <?= h($utilizadore->name) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Username') ?></dt>
                                        <dd>
                                            <?= h($utilizadore->username) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Email') ?></dt>
                                        <dd>
                                            <?= h($utilizadore->email) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('Grupo') ?></dt>
                                <dd>
                                    <?= $utilizadore->has('grupo') ? $utilizadore->grupo->name : '' ?>
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
                    <h3 class="box-title"><?= __('{0} Relacionados', ['Cursos']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($utilizadore->cursos)): ?>

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
                                    Utilizadore Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Comentarios
                                    </th>
                                        
                                                                                                                                            
                                <th>
                                    <?php echo __('Acções'); ?>
                                </th>
                            </tr>

                            <?php foreach ($utilizadore->cursos as $cursos): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($cursos->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($cursos->name) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($cursos->utilizadore_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($cursos->comentarios) ?>
                                    </td>
                                                                                                            
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Cursos', 'action' => 'view', $cursos->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Editar'), ['controller' => 'Cursos', 'action' => 'edit', $cursos->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Eliminar'), ['controller' => 'Cursos', 'action' => 'delete', $cursos->id], ['confirm' => __('Tens a certeza que pretende eliminar # {0}?', $cursos->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
