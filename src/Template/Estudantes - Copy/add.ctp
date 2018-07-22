<section class="content-header">
  <h1>
    Estudante
    <small><?= __('Add') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Back'), ['action' => 'index'], ['escape' => false]) ?>
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
          <h3 class="box-title"><?= __('Form') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($estudante, array('role' => 'form')) ?>
          <div class="box-body">


          <div class="row">
            <div class="col-md-6">
              <?php echo $this->Form->input('name', ['class' => 'form-control', 'label' => false, 'placeholder' => 'Primeiro nome', 'required']); ?>
            </div>

            <div class="col-md-6">
              <?php echo $this->Form->input('apelido', ['class' => 'form-control', 'label' => false, 'placeholder' => 'apelido', 'required']); ?>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <?php echo $this->Form->input('data_nascimento', ['empty' => '- Seleccione a data -', 'label' => false, 'default' => '', 'class' => 'datepicker form-control', 'type' => 'text']); ?>
            </div>

            <div class="col-md-6">
              <?php echo $this->Form->input('genero', ['class' => 'form-control', 'label' => false, 'placeholder' => 'Género', 'required']); ?>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <?php echo $this->Form->input('nome_pai', ['default' => '', 'class' => 'form-control','placeholder' => 'Nome do Pai', 'label' => false, 'type' => 'text']); ?>
            </div>

            <div class="col-md-6">
              <?php echo $this->Form->input('nome_mae', ['class' => 'form-control', 'label' => false, 'placeholder' => 'Nome da Mãe', 'required']); ?>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <?php echo $this->Form->input('telefone', ['default' => '', 'class' => 'form-control', 'label' => false, 'placeholder' => 'Telefone', 'type' => 'text']); ?>
            </div>

            <div class="col-md-6">
              <?php echo $this->Form->input('email', ['class' => 'form-control', 'label' => false, 'placeholder' => 'Email', 'required']); ?>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <?php echo $this->Form->input('tipo_documento', ['default' => '', 'class' => 'form-control', 'label' => false, 'placeholder' => 'Tipo de documento', 'type' => 'text']); ?>
            </div>

            <div class="col-md-6">
              <?php echo $this->Form->input('numero_doc', ['class' => 'form-control', 'label' => false, 'placeholder' => 'Número do documento', 'required']); ?>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <?php echo $this->Form->input('profissoe_id', ['options' => $profissoes, 'empty' => '- Seleccione a profissão - ', 'class' => 'form-control select2', 'style'=> 'width: 100%;', 'label' => false, 'required']); ?>
            </div>

            <div class="col-md-6">
              <?php echo $this->Form->input('local_trabalho', ['class' => 'form-control', 'label' => false, 'placeholder' => 'Local de trabalho', 'required']); ?>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <?php echo $this->Form->input('foto', ['default' => '', 'class' => 'form-control', 'placeholder' => 'Fotografia','label' => false, 'type' => 'text']); ?>
            </div>

            <div class="col-md-6">
              <?= $this->Form->button(__('Save')) ?>

            </div>
          </div>


          </div>

        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>

        <?php
$this->Html->css([
    'AdminLTE./plugins/datepicker/datepicker3',
  ],
  ['block' => 'css']);

$this->Html->script([
  'AdminLTE./plugins/input-mask/jquery.inputmask',
  'AdminLTE./plugins/input-mask/jquery.inputmask.date.extensions',
  'AdminLTE./plugins/datepicker/bootstrap-datepicker',
  'AdminLTE./plugins/datepicker/locales/bootstrap-datepicker.pt-BR',
],
['block' => 'script']);
?>
<?php $this->start('scriptBottom'); ?>
<script>
  $(function () {
    //Datemask mm/dd/yyyy
    $(".datepicker")
        .inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"})
        .datepicker({
            language:'en',
            format: 'mm/dd/yyyy'
        });
  });
</script>
<?php $this->end(); ?>
        