<?php
    include 'links.php';
    include 'conecta.php';
    include 'cabecalho.php';
?>
<html>
    <head>
        <title>Welcome to D-chat</title>
    </head>
    <body>
   

        
        <div class="container" id="list_rooms">

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
                                    <a href="home.php" type="button" class="btn btn-primary">Cancel</a>
                                </div>
                            </div>    
                        </form>
        </div>
    </body>
</html>