<section class="content-header">
  <h1>
    <?php echo __('Actividade'); ?>
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
                                                                                                        <dt><?= __('Trabalho') ?></dt>
                                <dd>
                                    <?= $actividade->has('trabalho') ? $actividade->trabalho->name : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Name') ?></dt>
                                        <dd>
                                            <?= h($actividade->name) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Duracao') ?></dt>
                                <dd>
                                    <?= $this->Number->format($actividade->duracao) ?>
                                </dd>
                                                                                                
                                                                                                        <dt><?= __('Inicio') ?></dt>
                                <dd>
                                    <?= h($actividade->inicio) ?>
                                </dd>
                                                                                                                    <dt><?= __('Fim') ?></dt>
                                <dd>
                                    <?= h($actividade->fim) ?>
                                </dd>
                                                                                                    
                                            
                                                                        <dt><?= __('Comentarios') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($actividade->comentarios)); ?>
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
