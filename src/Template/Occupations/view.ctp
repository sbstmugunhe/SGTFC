<section class="content-header">
  <h1>
    <?php echo __('Occupation'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Back'), ['action' => 'index'], ['escape' => false])?>
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
                <h3 class="box-title"><?php echo __('Information'); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                                                                                                                <dt><?= __('Name') ?></dt>
                                        <dd>
                                            <?= h($occupation->name) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                            
                                            
                                            
                                                                        <dt><?= __('Comentario') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($occupation->comentario)); ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Estudantes']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($occupation->estudantes)): ?>

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
                                    Apelido
                                    </th>
                                        
                                                                    
                                    <th>
                                    Data Nascimento
                                    </th>
                                        
                                                                    
                                    <th>
                                    Genero
                                    </th>
                                        
                                                                    
                                    <th>
                                    Nome Pai
                                    </th>
                                        
                                                                    
                                    <th>
                                    Nome Mae
                                    </th>
                                        
                                                                    
                                    <th>
                                    Telefone
                                    </th>
                                        
                                                                    
                                    <th>
                                    Email
                                    </th>
                                        
                                                                    
                                    <th>
                                    Tipo Documento
                                    </th>
                                        
                                                                    
                                    <th>
                                    Numero Doc
                                    </th>
                                        
                                                                    
                                    <th>
                                    Occupation Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Local Trabalho
                                    </th>
                                        
                                                                    
                                    <th>
                                    Foto
                                    </th>
                                        
                                                                    
                                    <th>
                                    Comentarios
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($occupation->estudantes as $estudantes): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($estudantes->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estudantes->name) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estudantes->apelido) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estudantes->data_nascimento) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estudantes->genero) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estudantes->nome_pai) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estudantes->nome_mae) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estudantes->telefone) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estudantes->email) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estudantes->tipo_documento) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estudantes->numero_doc) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estudantes->occupation_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estudantes->local_trabalho) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estudantes->foto) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($estudantes->comentarios) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Estudantes', 'action' => 'view', $estudantes->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Estudantes', 'action' => 'edit', $estudantes->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Estudantes', 'action' => 'delete', $estudantes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estudantes->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
