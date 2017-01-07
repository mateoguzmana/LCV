<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" onclick="LoadPage('index.php');" href="#index">LCV Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?=$_SESSION["user"]?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a onclick="LoadPage('profile.php');" href="#profile"><i class="fa fa-fw fa-gear"></i> Configuracion</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="php/classes/unlog.php"><i class="fa fa-fw fa-power-off"></i> Cerrar sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a onclick="LoadPage('index.php');" href="#index"><i class="fa fa-fw fa-dashboard"></i> Inicio</a>
                    </li>
                    <li>
                        <a onclick="LoadPage('cont_principal.php');" href="#cont_principal"><i class="fa fa-fw fa-bar-chart-o"></i> Contenido principal</a>
                    </li>
                   <li>
                        <a onclick="LoadPage('fondos.php');" href="#fondos"><i class="fa fa-fw fa-image"></i> Fotos principales y fondos</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Página de inicio <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a onclick="LoadPage('proyectos.php');" href="#proyectos">Proyectos</a>
                            </li>
                            <li>
                                <a onclick="LoadPage('voluntarios.php');" href="#voluntarios">Voluntarios</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a onclick="LoadPage('super_heroe.php');" href="#super_heroe"><i class="fa fa-fw fa-pencil"></i> Página Soy mi súper heroe</a>
                    </li>
                    <li>
                        <a onclick="LoadPage('cont_comparte.php');" href="#cont_comparte"><i class="fa fa-fw fa-share"></i> Página comparte</a>
                    </li>
                    <li>
                        <a onclick="LoadPage('cont_contacto.php');" href="#cont_contacto"><i class="fa fa-fw fa-edit"></i> Página contácto</a>
                    </li>
                    <li>
                        <a onclick="LoadPage('aprobar.php');" href="#aprobar"><i class="fa fa-fw fa-check"></i> Aprobar imagenes</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>