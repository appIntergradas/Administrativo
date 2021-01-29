<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicaciones Integradas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
</head>
<style>
*{
    padding: 0;
    margin: 0;
}
.modulo{
    display: flex;
    align-items: center;
    background: rgb(8, 107, 173);
    width: 500px;
    height: 300px;
    position: relative;
    left:300px;
    border-radius: 10px;
}
.encabezado{
    width: 100%;
    height: 200px;
    background:white;
}
.contenedor-login-user{
    padding-left:35px;
}
.contenedor-login-pass{
    padding-left:35px;
}
.lb-login-user{
    color: white;
    font-weight: 600;
}
.lb-login-pass{
    color: white;
    font-weight: 600;
}
.inp-login-user{
    border:1px solid rgb(152, 214, 255); 
    background:#9bbeec;
    width:400px;
}
.inp-login-user:focus{
    outline: none;
    border:1px solid coral;
    background: white;
}
.inp-login-pass{
    border:1px solid rgb(152, 214, 255); 
    background:#9bbeec;
    width:400px;
}
.inp-login-pass:focus{
    outline: none;
    border:1px solid coral;
    background: white;
}
.date-act{
    color:white;
    font-size:15px;
    font-weight:600;
    background:rgb(86, 190, 255);
    width:500px;
    position:relative;
    top:65px;
}
.btn-login-entrar{
    font-size:17px;
    font-weight:600;
    background:#9bbeec;
    position: relative;
    left: 140px;
    top:25px; 
    width:150px;
}
.btn-login-entrar:hover{
  border:1px solid #ced4da; 
 }
 .btn-login-entrar:active{
  background:rgb(60, 177, 255);
  border:1px solid #ced4da; 
 }
</style>
<body>
 <div class="container">
  <div class="row">
   <div class="encabezado">
       <h1></h1>
   </div>
  </div>
  <div class="row modulo">
   <form class="form-signin" method="post" action="../../control/start/login.php" name="form" id="form"> 
    <div class="contenedor-login-user col-xl-3 col-lg-3 col-md-3 col-sm-3">
      <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6">
         <label class="lb-login-user" for="login-user">Usuario</label>
         <input type="text" class="inp-login-user" id="login-user" name="login-user" required autocomplete="off">
      </div> 
    </div>
    <div class="contenedor-login-pass col-xl-3 col-lg-3 col-md-3 col-sm-3">
           <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <label class="lb-login-pass" for="login-pass">Contraseña</label>
            <input type="password" class="inp-login-pass" id="login-pass" name="login-pass" required autocomplete="off">
           </div> 
    </div>
    <div class="contenedor-btn-login-entrar col-xl-3 col-lg-3 col-md-3 col-sm-12">
        <div class="form-group col-xl-5 col-lg-5 ">
         <button id="send"  type="submit" value="Entrar" class="btn btn-primary btn-login-entrar" id="btn-login-entrar" name="btn-login-entrar">Entrar</button>
        </div>
      </div> 
    <div class="contenedor-hora date-act">
    <?php
    date_default_timezone_set('America/Bogota');
    $hoy = $fechaActual = date('d-m-Y H:i:s');
    echo $hoy;
    ?> 
    </div>
   </form>
 </div>
</div>  
</body>
</html>