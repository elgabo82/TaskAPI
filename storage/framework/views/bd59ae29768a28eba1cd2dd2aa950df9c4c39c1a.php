<?php
  session_start(); 
    
?>

<?php $__env->startSection('contenido'); ?>
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-12">
                 <div class="card">
                     <div class="card-body">

                            <h4 align="center">Registro de Usuarios</h4>
                                                        <hr style=" background-color: red; height: 1px">
        
                            <form class="mt-5 mb-5 ">
                                <div  id="inputIUS"></div>
                                <div class="row">
                                    <div class="col-md-4">
                                       
                                        <div class="form-group">
                                            <label for="" style="color: black"><b>Cédula</b></label>
                                            <input type="text" class="form-control input-default"  placeholder="Ingrese cédula" id="cedula" name="cedula" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        
                                        <div class="form-group">
                                            <label for="" style="color: black"><b>Nombres</b></label>
                                            <input type="text" class="form-control input-default"  placeholder="Ingrese nombres" id="nombre" name="nombre" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        
                                        <div class="form-group">
                                           <label for="" style="color: black"><b>Apellidos</b></label>
                                            <input type="text" id="apellido" name="apellido" class="form-control input-default"  placeholder="Ingrese apellidos" required>
                                        </div>
                                    </div>       

                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                         <label for="" style="color: black"><b>Dirección</b></label>
                                            <input type="text" id="direccion" name="direccion" class="form-control input-default"  placeholder="Ingrese dirección" required>
                                        </div>
                                    </div>  
                                    <div class="col-md-4">
                                        <div class="form-group">
                                           <label for="" style="color: black"><b>Celular</b></label>
                                            <input type="text" class="form-control input-default"  placeholder="Ingrese celular" id="Celular" name="Celular" required>
                                        </div>
                                    </div>   
                                    <div class="col-md-4">
                                        <div class="form-group"> 
                                            <label for="" style="color: black"><b>Sexo</b></label>
                                            <select class="form-control input-default" name="Sexo" id="Sexo">
                                                <option value="M">Masculino</option>
                                                <option value="F">Femenino</option>
                                            </select>
                                        </div>
                                     </div>                                      
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" style="color: black"><b>Tipo de Usuario</b></label>
                                            <select class="form-control input-default" name="tipoUser" id="tipoUser">
                                                <option value="1">Empleado</option>
                                                <option value="2">Adminsitrador</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" style="color: black"><b>Email</b></label>
                                            <input type="email" id="email" name="email" class="form-control input-default"  placeholder="Email" required>
                                        </div>
                                    </div>    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" style="color: black"><b>Área</b></label>
                                            <select onchange="RolesArea(this.value)" class="form-control input-default" name="Area" id="Area">}
                                                <option value="0">Seleccione el Área</option>
                                                    <?php if(isset($Area)): ?>
                                                        <?php $__currentLoopData = $Area; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($valor['Id_Area']); ?>"><?php echo e($valor['Descripcion']); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                            </select>
                                        </div>
                                    </div>                                     
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                         <div class="form-group" >
                                            <label for="" style="color: black"><b>Rol</b></label>
                                            <select disabled="true"  class="form-control input-default" name="Rol" id="Rol">}
                                                <option value="0">Seleccione el Rol</option>
                                            </select>
                                        </div>
                                    </div>     
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label id="passwordLabel" for="" style="color: black"><b>Contraseña</b></label>
                                            <input type="password" id="password" name="password" class="form-control input-default"  placeholder="Clave" required>
                                        </div>
                                    </div>      
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label id="passwordConfirLabel" for="" style="color: black"><b>Confirmar Contraseña</b></label>
                                            <input type="password" id="passwordConfir" name="passwordConfir" class="form-control input-default"  placeholder="Confirmar Clave" required>
                                        </div>
                                    </div>           
                                </div>
                                <div id="IngresarUser" >
                                <button type="button" onclick="RegistrarUsuario('A')" class="btn btn-primary btn-block">Registrar</button>
                                </div> 
                            </form>

                            <div class="row">
                                <div class="col-md-12"> 
                                    <h4 align="center">Lista de Usuarios</h4>
                                    <hr style=" background-color: red; height: 1px">
                                        <div class="table-responsive" style="overflow:scroll; height:230px; width:100%;">
                                            <table class="table table-bordered table-sm " style="color: black" >
                                                <thead>
                                                    <tr align="center"  >
                                                        <th >Usuario</th>
                                                        <th >Cédula</th>
                                                        <th >Dirección</th>
                                                        <th >Tipo Usuario</th>
                                                        <th>Email</th>
                                                        <th>Acción</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="table_Usuarios">
                                                    <?php if(isset($Usuarios)): ?>
                                                        <?php $__currentLoopData = $Usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr align="center">
                                                                <td ><?php echo e($valor['Nombre']); ?> <?php echo e($valor['Apellido']); ?> </td>
                                                                <td ><?php echo e($valor['Cedula']); ?></td>
                                                                <td ><?php echo e($valor['Direccion']); ?></td>
                                                                <td ><?php echo e($valor['Id_tipo_Usuarios']); ?></td>
                                                                <td ><?php echo e($valor['email']); ?></td>
                                                                <td><button  type="button" class=" btn btn-info btn-sm" onclick="EditarUsuarios('<?php echo e($valor['Id_Usuario']); ?>')">  <span class="ti-pencil-alt"></span></button>  <button disabled="" readonly type="button" class=" btn btn-danger btn-sm" onclick="EliminarArea('<?php echo e($valor['Id_Usuario']); ?>')">  <span class="icon-trash"></span></button>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                                            
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
          <script src="<?php echo e(asset('js/AdministracionGeneral.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TaskManta\resources\views/registro.blade.php ENDPATH**/ ?>