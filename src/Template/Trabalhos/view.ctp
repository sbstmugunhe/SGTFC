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
                                                                                                                        <dt><?= __('Name') ?></dt>
                                        <dd>
                                            <?= h($trabalho->name) ?>
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
                                                                                                                                    
                                            
                                                                                                                                            
                                                                                                                                                                                                
                                            
                                                                        <dt><?= __('Especificos') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($trabalho->especificos)); ?>
                            </dd>
                                                    <dt><?= __('Estrutura') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($trabalho->estrutura)); ?>
                            </dd>
                                                    <dt><?= __('Material') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($trabalho->material)); ?>
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

</section>
