
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="<?php echo URL.$att->getContoller()?>" class="site_title"><i class="fa fa-file-archive-o"></i> <span class="text-primary">SIC</span>Doc</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="<?php echo URL?>public/images/perfil/<?php echo $foto;?>" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Bem-vindo,</span>
                        <h2><?php echo $nome?></h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Menu de Navegação</h3>
                        <ul class="nav side-menu">
                            <li><a href="<?php echo URL.$att->getContoller()?>"><i class="fa fa-home"></i> Home</a>
                            </li>
                            <li><a><i class="fa fa-file-archive-o"></i> Processo <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?php echo URL.$att->getContoller().'/novo/'.base64_encode('processo');?>">Criar Processo</a></li>
                                    <li><a href="<?php echo URL.$att->getContoller().'/listar';?>">Todos Processos</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->
            </div>
        </div>