<section class="content-header">
  <h1>
    <?php echo __('Proposta'); ?>
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
                            <?= h($proposta->name) ?>
                        </dd>
                        <dt><?= __('Areaspesquisa') ?></dt>
                        <dd>
                            <?= $proposta->has('areaspesquisa') ? $proposta->areaspesquisa->name : '' ?>
                        </dd>
                        <dt><?= __('Estado') ?></dt>
                        <dd>
                            <?= h($proposta->estado) ?>
                        </dd>
                        <dt><?= __('Descricao') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($proposta->descricao)); ?>
                        </dd>
                        <dt><?= __('Parecer') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($proposta->parecer)); ?>
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
                    <h3 class="box-title"><?= __('{0} Relacionados', ['Trabalhos']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                    <?php if (!empty($proposta->trabalhos)): ?>

                        <table class="table table-hover">
                            <tbody>
                                <tr>

                                    <th>
                                        Id
                                    </th>


                                    <th>
                                        Proposta Id
                                    </th>


                                    <th>
                                        Estudocaso
                                    </th>


                                    <th>
                                        Geral
                                    </th>


                                    <th>
                                        Especificos
                                    </th>


                                    <th>
                                        Dataentrega
                                    </th>


                                    <th>
                                        Estrutura
                                    </th>


                                    <th>
                                        Obras
                                    </th>


                                    <th>
                                        <?php echo __('Acções'); ?>
                                    </th>
                                </tr>

                                <?php foreach ($proposta->trabalhos as $trabalhos): ?>
                                    <tr>

                                        <td>
                                            <?= h($trabalhos->id) ?>
                                        </td>

                                        <td>
                                            <?= h($trabalhos->proposta_id) ?>
                                        </td>

                                        <td>
                                            <?= h($trabalhos->estudocaso) ?>
                                        </td>

                                        <td>
                                            <?= h($trabalhos->geral) ?>
                                        </td>

                                        <td>
                                            <?= h($trabalhos->especificos) ?>
                                        </td>

                                        <td>
                                            <?= h($trabalhos->dataentrega) ?>
                                        </td>

                                        <td>
                                            <?= h($trabalhos->estrutura) ?>
                                        </td>

                                        <td>
                                            <?= h($trabalhos->obras) ?>
                                        </td>

                                        <td class="actions">
                                            <?= $this->Html->link(__('Visualizar'), ['controller' => 'Trabalhos', 'action' => 'view', $trabalhos->id], ['class'=>'btn btn-info btn-xs']) ?>

                                            <?= $this->Html->link(__('Editar'), ['controller' => 'Trabalhos', 'action' => 'edit', $trabalhos->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                            <?= $this->Form->postLink(__('Eliminar'), ['controller' => 'Trabalhos', 'action' => 'delete', $trabalhos->id], ['confirm' => __('Tens a certeza que pretende eliminar # {0}?', $trabalhos->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
