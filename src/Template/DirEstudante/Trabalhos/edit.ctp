<section class="content-header">
  <h1>
    Trabalho
    <small><?= __('Edit') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Voltar'), ['action' => 'index'], ['escape' => false]) ?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Formulário') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($trabalho, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('user_id');
            echo $this->Form->input('proposta_id', ['options' => $propostas]);
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
      </div>
    </div>
  </div>
</section>

