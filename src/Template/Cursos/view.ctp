<section class="content-header">
  <h1>
    <?php echo __('Curso'); ?>
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
                                            <?= h($curso->name) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('Utilizadore') ?></dt>
                                <dd>
                                    <?= $curso->has('utilizadore') ? $curso->utilizadore->name : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Modified') ?></dt>
                                        <dd>
                                            <?= h($curso->modified) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                            
                                                                                                                                            
                                            
                                                                        <dt><?= __('Comentarios') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($curso->comentarios)); ?>
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
