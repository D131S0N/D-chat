<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/changes.css" rel="stylesheet"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/select2.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/select2-bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/moment.min.js" type="text/javascript"></script>
        <script src="js/pt-br.js" type="text/javascript"></script>
        <script src="js/transition.js" type="text/javascript"></script>
        <script src="js/collapse.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/select2.min.js" type="text/javascript"></script>

        <title>Notas online</title>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default" id="cabecalho">
                <div class="navbar-header">
                    <a class="navbar-brand" href="home.php">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                        Home <span class="sr-only">(current)</span></a>
                </div>
                <ul class="nav navbar-nav">
                <!-- <a href="#" data-toggle="modal" data-target="#modalCad" id="cad" class="btn btn-lg btn-sucess btn-block btn-login" type="button">Cadastrar</a>-->
                    <li><a href="#" data-toggle="modal" data-target="#modalCad" id="cad">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    Criar sala</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="logout.php" id="sair">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    Sair</a></li>
                </ul>
            </nav>
        </div>

        <!-- modal criar sala -->
        <div class="modal fade" id="modalCad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h3 class="modal-title">Register on D-Chat</h3>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" name="form_cad" method="post" action="save_room.php">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Nome: </label>
                                <div class="form-group col-sm-8">
                                    <input class="form-control" required="required" placeholder="Digite o nome da sala" type="text" name="name"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Descrição: </label>
                                <div class="form-group col-sm-8">
                                    <input class="form-control" placeholder="Digite uma descrição para a sala" type="password" name="qtd_disc"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-10">
                                    <input class="btn btn-success" type="button" value="Save" onclick="form_cad.submit();
                                            form_cad.reset();"/>
                                    <input class="btn btn-info" type="reset" value="Clear" />     
                                    <a href="index.php"class="btn btn-primary" type="submit" >Cancel</a>
                                </div>
                            </div>    
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- fim modal criar sala -->
    </body>
</html>
