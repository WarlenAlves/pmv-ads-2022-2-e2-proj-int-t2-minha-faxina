<!DOCTYPE html>
<HTML>

<head>
    <title>Minha Faxina - Cadastro</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Configurando Biblioteca Google -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id"
        content="944729605353-5u5dhp1erho3an5nr76kc738qu0hdf5u.apps.googleusercontent.com">
    <!-- Fim da Configuracao Biblioteca Google-->
    <!-- Configurando Bootstrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
    <!-- Fim da Configuracao Bootstrap -->
    <!-- Configuração Style -->
    <link rel="stylesheet" href="cadastro-faxi.css">
    <!-- Fim Configuração Style -->
</head>

<body>
    <p1>CADASTRE-SE</p1> <br>
    <p2>Preencha os campos abaixo corretamente para realizar o seu cadastro</p2> <br>
    <p3>(*)campos obrigatórios</p3>

    <form class="cad" method="POST" action="cadastro_process.php">
        <div>
            <label class="h-input" for="nome">Nome Completo (*)</label><br>
            <input type="text" name="nome" class="b-input nome "><br>
        </div>

        <div>
            <label class="h-input" for="email">Email (*)</label><br>
            <input type="email" name="email" class="b-input email"><br>
        </div>

        <div>
            <label class="h-input" for="cpf">CPF (*)</label><br>
            <input type="text" name="cpf" class="b-input cpf"><br>
        </div>

        <div>
            <label class="h-input" for="idade">Idade (*)</label><br>
            <input list="idade" name="idade" class="b-input idade"><br>
            <datalist id="idade">
                <option value="0"></option>
                <option value="1"></option>
                <option value="2"></option>
                <option value="3"></option>
                <option value="4"></option>
                <option value="5"></option>
                <option value="6"></option>
                <option value="7"></option>
                <option value="8"></option>
                <option value="9"></option>
                <option value="10"></option>
                <option value="11"></option>
                <option value="12"></option>
                <option value="13"></option>
                <option value="14"></option>
                <option value="15"></option>
                <option value="16"></option>
                <option value="17"></option>
                <option value="18"></option>
                <option value="19"></option>
                <option value="20"></option>
                <option value="21"></option>
                <option value="22"></option>
                <option value="23"></option>
                <option value="24"></option>
                <option value="25"></option>
                <option value="26"></option>
                <option value="27"></option>
                <option value="28"></option>
                <option value="29"></option>
                <option value="30"></option>
                <option value="31"></option>
                <option value="32"></option>
                <option value="33"></option>
                <option value="34"></option>
                <option value="35"></option>
                <option value="36"></option>
                <option value="37"></option>
                <option value="38"></option>
                <option value="39"></option>
                <option value="40"></option>
                <option value="41"></option>
                <option value="42"></option>
                <option value="43"></option>
                <option value="44"></option>
                <option value="45"></option>
                <option value="46"></option>
                <option value="47"></option>
                <option value="48"></option>
                <option value="49"></option>
                <option value="50"></option>
                <option value="51"></option>
                <option value="52"></option>
                <option value="53"></option>
                <option value="54"></option>
                <option value="55"></option>
                <option value="56"></option>
                <option value="57"></option>
                <option value="58"></option>
                <option value="59"></option>
                <option value="60"></option>
                <option value="61"></option>
                <option value="62"></option>
                <option value="63"></option>
                <option value="64"></option>
                <option value="65"></option>

            </datalist>
        </div>

        <div>
            <label class="h-input" for="cep">CEP (*)</label><br>
            <input type="number" name="cep" class="b-input cep"><br>
        </div>

        <div>
            <label class="h-input" for="rua">Rua</label><br>
            <input type="text" name="rua" class="b-input rua"><br>
        </div>

        <div>
            <label class="h-input" for="numero">Número</label><br>
            <input type="number" name="numero" class="b-input numero"><br>
        </div>

        <div>
            <label class="h-input" for="complemento">Complemento</label><br>
            <input type="text" name="complemento" class="b-input complemento"><br>
        </div>

        <div>
            <label class="h-input" for="bairro">Bairro</label><br>
            <input type="text" name="bairro" class="b-input bairro"><br>
        </div>

        <div>
            <label class="h-input" for="cidade">Cidade</label><br>
            <input type="text" name="cidade" class="b-input cidade"><br>
        </div>

        <div>
            <label class="h-input" for="senha">Senha</label><br>
            <input type="password" name="senha" class="b-input senha"><br>
        </div>

        <div>
            <label class="h-input" for="confirm-senha">Confirme a Senha</label><br>
            <input type="password" name="senha" class="b-input confirm-senha"><br><br>
        </div>

        <div>
            <input type="submit" value="Cadastrar">
        </div>
    </form>
    <img src="Background.png" style="width: 100%; max-width: 1080px; display: flex; margin: auto; margin-top: 0%;">

</body>

<footer>
    <a class="footer"> Copyright © 2022 Todos os direitos reservados</a>
</footer>

</HTML>