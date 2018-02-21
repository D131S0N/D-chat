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

        <title>Welcome to D-chat</title>
    </head>
    <body>

<!-- inicio listagem -->
<?php
include 'cabecalho.php';
include 'conecta.php';
// cria a instrução SQL que vai selecionar os dados
$query = "SELECT * FROM rooms";
// executa a query
$dados = mysqli_query($conexao, $query) or die(mysqli_error());
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);
?>

<?php
	// se o número de resultados for maior que zero, mostra os dados
	if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?>
			<p><?=$linha['name']?> / <?=$linha['minimum_age']?></p>
<?php
		// finaliza o loop que vai mostrar os dados
		}while($linha = mysqli_fetch_assoc($dados));
	// fim do if 
	}
?>

<!-- fimlistagem -->

        <!-- modal create room -->
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
                                <label class="col-sm-4 control-label">Room's name: </label>
                                <div class="form-group col-sm-8">
                                    <input class="form-control" required="required" placeholder="Type here a name of the room" type="text" name="name_room"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Description: </label>
                                <div class="form-group col-sm-8">
                                    <input class="form-control" required="required" placeholder="Type here a description of the room (optional)" type="text" name="description"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Minimum age: </label>
                                <div class="form-group col-sm-8">
                                    <input class="form-control" placeholder="Type here a minimum age to entery in the room" type="text" name="minium_age"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-10">
                                    <input class="btn btn-success" type="button" value="Save" onclick="form_cad.submit();
                                            form_cad.reset();"/>
                                    <input class="btn btn-info" type="reset" value="Clear" />     
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button> <!--Close modal -->
                                </div>
                            </div>    
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal create room -->
    </body>
</html>
