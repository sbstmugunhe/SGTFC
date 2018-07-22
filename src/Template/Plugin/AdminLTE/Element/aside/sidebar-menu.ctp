<ul class="sidebar-menu">
    <li class="header"> MENU DE NAVEGAÇÃO</li>
    
    <li class="treeview">
        <a href="<?php echo $this->Url->build(' '); ?>">
            <i class="fa fa-dashboard"></i> <span>Painel Prinipal</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>

    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-users"></i>
            <span> Utilizadores</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/utilizadores/index'); ?>"><i class="fa fa-circle-o"></i> Todos Utilizadores</a></li>
            <li><a href="<?php echo $this->Url->build('/utilizadores/add'); ?>"><i class="fa fa-circle-o"></i> Registar Utilizador</a></li>
        </ul>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-user-plus"></i>
            <span>Estudantes</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/estudantes/add'); ?>"><i class="fa fa-circle-o"></i> Registar Estudantes</a></li>
            <li><a href="<?php echo $this->Url->build('/estudantes/index'); ?>"><i class="fa fa-circle-o"></i> Todos Estudantes</a></li>
        </ul>
    </li>

    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-file"></i>
            <span> Temas</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/propostas/index'); ?>">
                <i class="fa fa-circle-o"></i> 
                <span>Temas por Avaliar </span>
                    <span class="pull-right-container">
                        <span class="label label-info pull-right">2</span>
                    </span>
                </a>
            </li>

            <li><a href="<?php echo $this->Url->build('/propostas/aprovados'); ?>">
                <i class="fa fa-circle-o"></i> 
                <span>Temas Aprovados</span>
                    <span class="pull-right-container">
                        <span class="label label-success pull-right">2</span>
                    </span>
            </a>
            </li>
            <li><a href="<?php echo $this->Url->build('/propostas/reprovados'); ?>">
                <i class="fa fa-circle-o"></i> 
                <span>Temas Reprovados</span>
                    <span class="pull-right-container">
                        <span class="label label-danger pull-right">2</span>
                    </span>
            </a>
            </li>

            <li><a href="<?php echo $this->Url->build('/temas/add'); ?>"><i class="fa fa-circle-o"></i> Propôr um Tema</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-book"></i>
            <span>Trabalhos</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/trabalhos/index'); ?>"><i class="fa fa-circle-o"></i> Trabalhos por Avaliar</a></li>
            <li><a href="<?php echo $this->Url->build('/trabalhos/index'); ?>"><i class="fa fa-circle-o"></i> Trabalhos Aprovados</a></li>
            <li><a href="<?php echo $this->Url->build('/trabalhos/index'); ?>"><i class="fa fa-circle-o"></i> Trabalhos Reprovados</a></li>
            <li><a href="<?php echo $this->Url->build('/trabalhos/index'); ?>"><i class="fa fa-circle-o"></i> Em Curso</a></li>
            <li><a href="<?php echo $this->Url->build('/trabalhos/index'); ?>"><i class="fa fa-circle-o"></i> Concluidos</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a href="<?php echo $this->Url->build(' '); ?>">
            <i class="fa fa-power-off"></i> <span>Terminar Sessão</span>
            <span class="pull-right-container">
            </span>
        </a>

    </li>

</ul>