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
            <div class="box box-success collapsed-box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Submeter Trabalho') ?></h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                    <?php //if (!empty($proposta->trabalhos)): ?>

                    <?php //$this->Form->create($trabalho, array('controller'=>'Trabalhos', 'action' => 'add', 'role' => 'form')) ?>
                    <div class="box-body">
                      <?php
                      echo $this->Form->hidden('proposta_id', ['value' => $proposta->id]);
                      echo $this->Form->input('estudocaso');
                      echo $this->Form->input('geral');
                      echo $this->Form->input('especificos');
                      echo $this->Form->input('dataentrega');
                      echo $this->Form->input('estrutura');
                      echo $this->Form->input('obras');
                      ?>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <?= $this->Form->button(__('Salvar')) ?>
                </div>
                <?= $this->Form->end() ?>


                <?php //endif; ?>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
</section>
