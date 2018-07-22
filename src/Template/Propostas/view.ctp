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
                        <dt><?= __('Título') ?></dt>
                        <dd>
                            <?= h($proposta->name) ?>
                        </dd>
                        <dt><?= __('Areaspesquisa') ?></dt>
                        <dd>
                            <?= $proposta->has('areaspesquisa') ? $proposta->areaspesquisa->name : '' ?>
                        </dd>
                        <dt><?= __('Estado') ?></dt>
                        <dd>
                            <?= $proposta->estado ? __('Yes') : __('No'); ?>
                        </dd>
                        <dt><?= __('Situacao') ?></dt>
                        <dd>
                            <?= $proposta->situacao ? __('Yes') : __('No'); ?>
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
                        <div class="pull-right"><?= $this->Html->link(__('SUBMETER'), ['controller' => 'trabalhos','action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- ./col -->
    </div>
    <!-- div -->

</section>
