<html>
    <head>
        <title>Welcome to D-Chat</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/changes.css" rel="stylesheet"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/moment.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <?php
        $con = mysqli_connect('localhost','root','', 'chat');
        ?>
        <div class="container">
            <form class="col-lg-4 col-lg-offset-4 my_form" action="checkLogin.jsp" method="post">
                <img src="img/tom.jpg" class="center-block" alt="" style="width: 150px; height: 150px;" />
                <h2 class="text-center">Welcome!</h2>

                <!--<label for="imput_email" class="sr_only"></label>-->
                <input type="text"  name="user" id="imput_email" class="form-control"  placeholder="Type here your name" required autofocus>
                <!--<label for="imput_senha" class="sr_only"></label>-->
                <input type="password" name="senha" id="imput_senha" class="form-control"  placeholder="Type here you password" required autofocus>
                <br>
                <button class="btn btn-lg btn-info btn-block btn-login" type="submit">Logar</button>
                <a href="#" data-toggle="modal" data-target="#modalCad" id="cad" class="btn btn-lg btn-sucess btn-block btn-login" type="button">Cadastrar</a>
            </form>
        </div>
        
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
                        <form class="form-horizontal" name="form_cad" method="post" action="saveUser.jsp">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Name: </label>
                                <div class="form-group col-sm-8">
                                    <input class="form-control" required="required" placeholder="Type here your name" type="text" name="name"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Password: </label>
                                <div class="form-group col-sm-8">
                                    <input class="form-control" required="required" placeholder="Type here you password" type="password" name="qtd_disc"/>
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
    </div>
</body>
</html>

