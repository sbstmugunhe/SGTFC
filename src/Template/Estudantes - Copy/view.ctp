<section class="content-header">
  <h1>
    <?php echo __('Estudante'); ?>
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
                                            <?= h($estudante->name) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Apelido') ?></dt>
                                        <dd>
                                            <?= h($estudante->apelido) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Genero') ?></dt>
                                        <dd>
                                            <?= h($estudante->genero) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Nome Pai') ?></dt>
                                        <dd>
                                            <?= h($estudante->nome_pai) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Nome Mae') ?></dt>
                                        <dd>
                                            <?= h($estudante->nome_mae) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Telefone') ?></dt>
                                        <dd>
                                            <?= h($estudante->telefone) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Email') ?></dt>
                                        <dd>
                                            <?= h($estudante->email) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Tipo Documento') ?></dt>
                                        <dd>
                                            <?= h($estudante->tipo_documento) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Numero Doc') ?></dt>
                                        <dd>
                                            <?= h($estudante->numero_doc) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('Profisso') ?></dt>
                                <dd>
                                    <?= $estudante->has('profisso') ? $estudante->profisso->name : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Local Trabalho') ?></dt>
                                        <dd>
                                            <?= h($estudante->local_trabalho) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Foto') ?></dt>
                                        <dd>
                                            <?= h($estudante->foto) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                            
                                                                                                        <dt><?= __('Data Nascimento') ?></dt>
                                <dd>
                                    <?= h($estudante->data_nascimento) ?>
                                </dd>
                                                                                                    
                                            
                                                                        <dt><?= __('Comentarios') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($estudante->comentarios)); ?>
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
