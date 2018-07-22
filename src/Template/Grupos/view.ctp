<section class="content-header">
  <h1>
    <?php echo __('Grupo'); ?>
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
                                            <?= h($grupo->name) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                            
                                                                                                                                                                                                                                                    
                                            
                                                                        <dt><?= __('Comentarios') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($grupo->comentarios)); ?>
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
                    <h3 class="box-title"><?= __('{0} Relacionados', ['Utilizadores']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($grupo->utilizadores)): ?>

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
                                    Username
                                    </th>
                                        
                                                                    
                                    <th>
                                    Email
                                    </th>
                                        
                                                                    
                                    <th>
                                    Grupo Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Password
                                    </th>
                                        
                                                                                                        
                                    <th>
                                    Updated
                                    </th>
                                        
                                                                                                        
                                <th>
                                    <?php echo __('Acções'); ?>
                                </th>
                            </tr>

                            <?php foreach ($grupo->utilizadores as $utilizadores): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($utilizadores->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($utilizadores->name) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($utilizadores->username) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($utilizadores->email) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($utilizadores->grupo_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($utilizadores->password) ?>
                                    </td>
                                                                                                            
                                    <td>
                                    <?= h($utilizadores->updated) ?>
                                    </td>
                                                                        
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Utilizadores', 'action' => 'view', $utilizadores->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Editar'), ['controller' => 'Utilizadores', 'action' => 'edit', $utilizadores->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Eliminar'), ['controller' => 'Utilizadores', 'action' => 'delete', $utilizadores->id], ['confirm' => __('Tens a certeza que pretende eliminar # {0}?', $utilizadores->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
