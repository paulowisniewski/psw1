<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>listaaluno</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="cabecalho">
        <img id="logo-psw" src="imagem/logo-psw.png" alt="">
        <h1>Sistema Aluno</h1>
        <img id="logo-if" src="imagem/logo-if.png" alt="">
    </div>

    <div class="barra-nav">
        <ul>
            <li><a href="http://localhost:8081/atv03-paulo-wisniewski/index.php">Sistema</a></li>
            <li><a href="http://localhost:8081/atv03-paulo-wisniewski/cadaluno.php">Cadaluno</a></li>
            <li><a href="https://web.whatsapp.com/">WhatsApp</a></li>
            <li><a href="https://www.google.com/maps/dir/-14.232444,-42.7556864/Instituto+Federal+de+Educa%C3%A7%C3%A3o,+Ci%C3%AAncia+e+Tecnologia+Baiano+-+Campus+Guanambi,+Caixa+Postal+N%C2%BA+09+Distrito+de,+Sa%C3%ADda+p%2F+cera%C3%ADma+-+n,+%E2%80%93+Zona+Rural,+Guanambi+-+BA,+46430-000/@-14.2666334,-42.769777,13z/data=!3m1!4b1!4m10!4m9!1m1!4e1!1m5!1m1!1s0x75ac88e01cf19d5:0x3eeac85e6070b24b!2m2!1d-42.6936198!2d-14.3014979!3e0?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D">Localização</a></li>
        </ul>
    </div>

    <h2 id="titulo-tabela" >Lista Alunos</h2>

    <table>
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Turma</th>
            <th>Email</th>
            <th>Gênero</th>
            <th>Estado Civil</th>
            <th>Nascimento</th>
            <th>WhatsApp</th>
            <th>Disponibilidade</th>
            <th>Cidade</th>
        </tr>

        <tr>
            <td>Adelita Conceição Wisniewski Puga</td>
            <td>30016603842</td>
            <td>3AII</td>
            <td>adelitaconc@gmail.com</td>
            <td>Feminino</td>
            <td>Casado(a)</td>
            <td>08121977</td>
            <td>77999089069</td>
            <td>Manhã</td>
            <td>Guanambi</td>
        </tr>

        <tr>
            <td>André Maurício Silva</td>
            <td>16803881865</td>
            <td>2AII</td>
            <td>andremau@gmail.com</td>
            <td>Masculino</td>
            <td>Casado(a)</td>
            <td>09101981</td>
            <td>77999147171</td>
            <td>Tarde</td>
            <td>Guanambi</td>
        </tr>

        <tr>
            <td>Luiz Gustavo Wisniewski Puga Silva</td>
            <td>08698867865</td>
            <td>3BII</td>
            <td>luizgustavoares@gmail.com</td>
            <td>Masculino</td>
            <td>Solteiro(a)</td>
            <td>20112012</td>
            <td>77999805812</td>
            <td>Noite</td>
            <td>Caetité</td>
        </tr>

        <tr>
            <td>Maria Clara Wisniewski Puga Silva</td>
            <td>08678035665</td>
            <td>2BII</td>
            <td>claramaria785@gmail.com</td>
            <td>Feminino</td>
            <td>Viúvo(a)</td>
            <td>23032004</td>
            <td>77999289469</td>
            <td>Manhã</td>
            <td>Caiêiras</td>
        </tr>

        <tr>
            <td>Maria isabel Lima da Silva</td>
            <td>08649376965</td>
            <td>3AII</td>
            <td>mariaisabelpuga@gmail.com</td>
            <td>Feminino</td>
            <td>Divorciado(a)</td>
            <td>24062005</td>
            <td>77999178942</td>
            <td>Manhã</td>
            <td>Ilhéus</td>
        </tr>

        <tr>
            <td><?php echo $_POST['nome']?></td>
            <td><?php echo $_POST['cpf']?></td>
            <td><?php echo $_POST['turma']?></td>
            <td><?php echo $_POST['email']?></td>
            <td><?php echo $_POST['genero']?></td>
            <td><?php echo $_POST['estadocivil']?></td>
            <td><?php echo $_POST['nascimento']?></td>
            <td><?php echo $_POST['zap']?></td>
            <td><?php echo $_POST['disponibilidade']?></td>
            <td><?php echo $_POST['cidade']?></td>
        </tr>
    </table>

    <div class="rodape">
        <h5>© 2024 - TODOS OS DIREITOS RESERVADOS A PAULO WISNIEWSKI</h5>
        <a href="https://github.com/psw1-2024"><img id="logo-git" src="imagem/logo-git.webp" alt=""></a>
    </div>

</body>
</html>