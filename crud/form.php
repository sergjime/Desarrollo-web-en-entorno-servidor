<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title>CLIENTES</title>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-2">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <form class="form-inline my-2 my-lg-0 mr-3">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>
</nav>
<div class='container mt-4'>
    <?php
        $id=$_GET['id'];
        $nombre=$_GET['nombre'];
        $email=$_GET['email'];
        $telf=$_GET['telf'];
        if(isset($_GET['edit'])){
            $edit=$_GET['edit'];
        }else{
            $edit=null;
        }
          
    if($edit!='edit'){ ?>
        <div class='card-header text-white bg-dark'>Crear cliente</div>
<?php }else{ ?>
        <div class='card-header text-white bg-dark'>Editar cliente</div>
<?php } ?>   
    <div class='card-body'>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group row">
                <label class='col-form-label'>Nombre</label>
            <?php if($edit!='edit'){ ?>
                <input type="text" class="form-control" name="nombre" value="">
            <?php }else{ ?>
                <input type="text" class="form-control" name="nombre" value="<?php echo $nombre ?>">
            <?php } ?>

            </div>
            <div class="form-group row">
                <label class='col-form-label'>Email</label>
                <?php if($edit!='edit'){ ?>
                <input type="text" class="form-control" name="email" value="">
            <?php }else{ ?>
                <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
            <?php } ?>

            </div>
            <div class="form-group row">
                <label class='col-form-label'>Teléfono</label>
                <?php if($edit!='edit'){ ?>
                <input type="text" class="form-control" name="telf" value="">
            <?php }else{ ?>
                <input type="text" class="form-control" name="telf" value="<?php echo $telf ?>">
            <?php } ?>

            </div>
            <div class="form-group row">
                <div class="col-sm-6">                  
            <?php   if($edit!='edit'){ ?>
                    <button class="btn btn-primary" role="button">Crear</button>
            <?php }else{ ?>
                    <button class="btn btn-primary" role="button">Editar</button>
            <?php } ?>
                </div>
            </div>
        </form>
    </div>
</div>