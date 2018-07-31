<ul class="sidebar-menu">
    <li class="header"> MENU DE NAVEGAÇÃO</li>
    
    <li class="treeview">
        <a href="#">
            <i class="fa fa-file"></i>
            <span> Temas</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="<?php echo $this->Url->build('/est/propostas/aprovados'); ?>">
                    <i class="fa fa-circle-o"></i> 
                    <span>Temas Aprovados</span>
                    <span class="pull-right-container">
                        <span class="label label-success pull-right">2</span>
                    </span>
                </a>
            </li>

            <li>
                <a href="<?php echo $this->Url->build('/est/propostas/reprovados'); ?>">
                    <i class="fa fa-circle-o"></i> 
                    <span>Temas Reprovados</span>
                    <span class="pull-right-container">
                        <span class="label label-danger pull-right">2</span>
                    </span>
                </a>
            </li>

            <li>
                <a href="<?php echo $this->Url->build('/est/propostas/add'); ?>"><i class="fa fa-circle-o"></i> Propôr um Tema
                </a>
            </li>
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
            <li>
                <a href="<?php echo $this->Url->build('/est/trabalhos/index'); ?>">
                    <i class="fa fa-circle-o"></i>
                    <span>Trabalhos Aprovados </span>
                    <span class="pull-right-container">
                        <span class="label label-info pull-right">2</span>
                    </span>
                </a>
            </li>

            <li>
                <a href="<?php echo $this->Url->build('/est/trabalhos/index'); ?>">
                    <i class="fa fa-circle-o"></i>
                    <span>Meus Trabalhos </span>
                    <span class="pull-right-container">
                        <span class="label label-warning pull-right">2</span>
                    </span>
                </a>
            </li>

            <li>
                <a href="<?php echo $this->Url->build('/est/trabalhos/index'); ?>">
                    <i class="fa fa-circle-o"></i> 
                    <span>Trabalhos Feitos </span>
                    <span class="pull-right-container">
                        <span class="label label-success pull-right">2</span>
                    </span>
                </a>
            </li>

            <li>
                <a href="<?php echo $this->Url->build('/est/trabalhos/index'); ?>">
                    <i class="fa fa-circle-o"></i>
                    <span>Trabalhos Reprovados </span>
                    <span class="pull-right-container">
                        <span class="label label-danger pull-right">2</span>
                    </span>
                </a>
            </li>

        </ul>
    </li>

    <li class="treeview">
        <a href="<?php echo $this->Url->build('/users/logout '); ?>">
            <i class="fa fa-power-off"></i> <span>Terminar Sessão</span>
            <span class="pull-right-container">
            </span>
        </a>

    </li>

</ul>