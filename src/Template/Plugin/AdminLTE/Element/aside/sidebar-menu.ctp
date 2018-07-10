<ul class="sidebar-menu">
    <li class="header">MENU DE NAVEGAÇÃO</li>
    <li class="treeview">

    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-users"></i>
            <span>Gestão de Utilizadores</span>
            <span class="pull-right-container">
                <span class="label label-primary pull-right">2</span>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/users/index'); ?>"><i class="fa fa-circle-o"></i> Todos Utilizadores</a></li>
            <li><a href="<?php echo $this->Url->build('/users/add'); ?>"><i class="fa fa-circle-o"></i> Registar Utilizador</a></li>
        </ul>
    </li>

</ul>