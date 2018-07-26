<section class="content-header">
  <h1>
    Proposta
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
        <?= $this->Form->create($proposta, array('role' => 'form')) ?>
        <div class="box-body">
          <?php
          echo $this->Form->hidden('name');
          echo $this->Form->hidden('areaspesquisa_id', ['options' => $areaspesquisas]);
          echo $this->Form->hidden('descricao');
          
          ?>
          <div class="box-body no-padding">
            <table class="table table-condensed">
              <tr>
                <td><b>Título</b></td>
                <td><?= h($proposta->name) ?></td>
              </tr>

              <tr>
                <td><b>Área de Pesquisa<b></b></td>
                <td><?= $proposta->has('areaspesquisa') ? $proposta->areaspesquisa->name : '' ?></td>
              </tr>

              <tr>
                <td><b>Estado</b></td>
                <td><span class="label label-warning"><?= h($proposta->estado) ?></td>
                </tr>

                <tr>
                  <td><b>Descrição</b></td>
                  <td><?= $this->Text->autoParagraph(h($proposta->descricao)); ?></td>
                </tr>

                <tr>
                  <td><b>Estado</b></td>
                  <td><?php echo $this->Form->radio('estado', 
                    [              
                      'aprovado' => 'Aprovado', 
                      'reprovado' => 'Reprovado'

                      ]);?></td>
                    </tr>

                    <tr>
                      <td><b>Parecer</b></td>
                      <td><?php echo $this->Form->input('parecer', ['label'=>false]);?></td>
                    </tr>

                    <tr>
                      <td> </td>
                      <td><?= $this->Form->button(__('Salvar')) ?></td>
                    </tr>

                  </table>
                </div>
              </div>
              <?= $this->Form->end() ?>
            </div>
          </div>
        </div>
      </section>

