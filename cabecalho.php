        <div class="container">
            <nav class="navbar navbar-default navbar responsive" id="cabecalho">
                <div class="navbar-header">
                    <a class="navbar-brand" href="home.php">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                        Home <span class="sr-only">(current)</span></a>
                </div>
                <ul class="nav navbar-nav">
                <!-- <a href="#" data-toggle="modal" data-target="#modalCad" id="cad" class="btn btn-lg btn-sucess btn-block btn-login" type="button">Cadastrar</a>-->
                    <li><a href="#" data-toggle="modal" data-target="#modalCad" id="cad">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    Create room</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="logout.php" id="sair">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    Logout</a></li>
                </ul>
                    <ul class="nav navbar-nav">
                    <li><a href="#" id="sair">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    Welcome, <?php
                    session_start();
                    echo $_SESSION['user_name']; ?></a></li>
                </ul>
            </nav>
        </div>