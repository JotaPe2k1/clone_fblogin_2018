<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Facebook - Login</title>
</head>
<body>

    <header>
        <div class="center">
            <div class="logo">
                <h2>Facebook</h2>
            </div><!--logo-->
            <form method="post" class="form-login">
                <div class="form-element">
                    <p>Email ou telefone:</p>
                    <input type="email" name="email">
                </div><!--form-element-->
                <div class="form-element">
                    <p>Senha:</p>
                    <input type="password" name="password">
                </div><!--form-element-->
                <div class="form-element">
                    <input type="submit" name="submit" value="Enviar">
                </div><!--form-element-->
            </form><!--form-login-->
            <div class="clear"></div>
        </div><!--center-->
    </header>

    <section class="main">
        <div class="center">

            <div class="img-people">
                <img src="images/people.png">
            </div>

            <div class="open-account">
                <h2>Abra uma conta</h2>
                <h3>É gratuito e sempre será!</h3>
                <form class="create-account">
                    <div class="w50">
                        <input type="text" placeholder="Nome" required>
                    </div>
                    <div class="w50">
                        <input type="text" placeholder="Sobrenome" required>
                    </div>

                    <div class="clear"></div>

                    <div class="w100">
                        <input type="email" placeholder="Email" required>
                    </div>
                    <div class="w100">
                        <input type="password" placeholder="Nova senha" required>
                    </div>
                    <div class="w100">
                        <h3>Data de nascimento: </h3>
                        <select name="nascimento-dia" class="nascimento">
                            <?php
                                for ($i = 1; $i <= 31; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            
                        </select><!--nascimento-->
                        <select name="nascimento-mes" class="nascimento">
                            <?php
                                $meses = ["janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro",
                                "novembro", "dezembro"];
                                for ($i = 0; $i <= 11; $i++){
                            ?>
                            <option value="<?php echo $meses[$i]; ?>"><?php echo $meses[$i]; ?></option>
                                <?php } ?>
                        </select><!--nascimento-->
                        <select name="nascimento-ano" class="nascimento">
                        <?php
                                for ($i = 1930; $i <= 2020; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                        </select> <!--nascimento-->
                        <div class="clear"></div>
                    </div> <!--w100-->
                    
                    <div class="w100">
                        <h3>Gênero</h3>
                        <div class="input-radio">
                            <input type="radio" value="masculino" name="sexo" id="">
                            <label for="">Masculino</label>
                        </div>
                        <div class="input-radio">
                            <input type="radio" value="feminino" name="sexo" id="">
                            <label for="">Feminino</label>
                        </div>
                        <div class='clear'></div>
                    </div>

                    <div class="w100">
                        <input type="submit" value="Cadastrar">
                    </div><!--w100-->

                </form><!--create-account-->
            </div><!--open-account-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--main-->
    <section class="linguas">
        <div class="center">
            <a class="selected" href="#">Portugues (Br)</a>
            <a href="#">English</a>
            <a href="#">Ipsum</a>
            <a href="#">Ipsum</a>
            <a href="#">Ipsum</a>
            <a href="#">Ipsum</a>
            <a href="#">Ipsum</a>
            <a href="#">Ipsum</a>
            <a href="#">Ipsum</a>
            <a href="#">Ipsum</a>
        </div> <!--center-->
        <div style="border:0; padding-top:15px" class="center">
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
        </div><!--center-->
    </section>
</body>
</html>