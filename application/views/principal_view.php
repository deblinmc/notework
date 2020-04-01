

            <div id="page-wrapper">
                <div class="container-fluid">
                   
                    <!-- /.row -->
                       <h5 class="page-header"></h5>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-comments fa-4x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">26</div>
                                            <div>Mensajes</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer panel-huge">
                                        <span class="pull-left">Ver Mensajes</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-4x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">12</div>
                                            <div>Actividades</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer panel-huge">
                                        <span class="pull-left">Ver Actividades</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-clone fa-4x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">124</div>
                                            <div>Tareas</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer panel-huge">
                                        <span class="pull-left">Ver Tareas</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-address-card fa-4x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">13</div>
                                            <div>Usuarios</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer panel-huge">
                                        <span class="pull-left">Ver Usuarios</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="panel panel-primary">
                                
                          
                           
                                <div class="panel-heading">
                                    <i class="fa fa-clone"></i> Tareas y Actividades realizadas
                                    <div class="pull-right">
                                        <?php
                                          echo iconv('ISO-8859-1', 'UTF-8', strftime('Hoy %A %d de %B de %Y', time()));
                                        ?>
                                    </div>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body ">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Usuario</th>
                                                        <th>Fecha</th>
                                                        <th>Hora</th>
                                                        <th>Tarea/Actividad</th>
                                                        <th>Nota</th>
                                                        <th>Estado</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>                                              
<?php
    if(isset($data_actividades)){
        foreach ($data_actividades as $trabajo) {
        $fecha_trabajo = strtotime($trabajo['fecha']); 
        echo '<tr>';
        echo '    <td>'.$trabajo['id'].'</td>';
        echo '    <td>'.$trabajo['user'].'</td>';
        echo '    <td>'.date('d-m-Y',$fecha_trabajo).'</td>';
        echo '    <td>'.date('H:i:s',$fecha_trabajo).'</td>';
        echo '    <td>'.$trabajo['nombre'].'</td>';
        echo '    <td>'.$trabajo['nota'].'</td>';
        echo '    <td>'.$trabajo['estado'].'</td>';
        echo '</tr>';
        }
    }

?>
                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->
                                        </div>
                                        <!-- /.col-lg-4 (nested) -->
                                        <div class="col-lg-8">
                                            <div id="morris-bar-chart"></div>
                                        </div>
                                        <!-- /.col-lg-8 (nested) -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.panel-body -->
                           
                            
                        </div>
                        <!-- /.col-lg-8 -->
                        
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
