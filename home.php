<html>
    <head>
        <title>Welcome to D-chat</title>
    </head>
    <body>
    <?php 
    include 'links.php';
    include 'cabecalho.php';
    ?>
    <!-- inicio listagem -->
            <div class="container">
                <div class="cool-md-8" id="list_rooms">
                    <table class="table table-striped table-hover table-bordered cool-md-8" id="table_room">
                        <tr>
                            <td>Room's number</td>
                            <td>Room's name</td>
                            <td>Login</td>
                        </tr>
<?php

include 'conecta.php';

// cria a instrução SQL que vai selecionar os dados
$query = "SELECT * FROM rooms";
// executa a query
$dados = mysqli_query($conexao, $query) or die(mysqli_error());

// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);

	// se o número de resultados for maior que zero, mostra os dados
	if($total > 0) {
        // transforma os dados em um array
		while($linha = mysqli_fetch_assoc($dados)){
?>
                        <tr>
                            <th><?=$linha['id']?></th>
                            <th><?=$linha['name']?></th>
                            <th><a href="sala.php?room_id=<?=$linha['id']?>" type="button" class="btn btn-sucees">login</a> </th>
                        </tr>
<?php
		}
	// fim do if 
	}
?>
                    </table>
                </div>
            </div>

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
