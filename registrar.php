
<%@page contentType="text/html" pageEncoding="UTF-8"%>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Registrar</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  
  <!-- Custom styles for this template-->
</head>

<body class="bg-dark">
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="PesquisaProvaController?acao=gridProvas">Sistema de Corrida de Rua</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="PesquisaProvaController?acao=gridProvas">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Rankings</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="manterAtleta.jsp"> <span class="glyphicon glyphicon-user"></span> Registrar-se</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br>    <br>
    
 <div class="container">

            <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
          
          <form action="ManterAtletaController?acao=confirmarIncluir" method="post" name="frmManterAtleta"/>
                    <div class="row">
                        <div class="col-md-2">

                            <label for="exampleInputEmail1">Código do Atleta:</label>
                                <input type="text" required name="txtIdAtleta" class="form-control" >

                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputPassword1">Nome Completo:</label>
                            <input type="text" required name="txtNomeAtleta" class="form-control">
                        </div>

                        <div class="col-md-4">
                            <label for="exampleInputPassword1">Apelido:</label>
                            <input type="text" name="txtApelido" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">CPF:</label>
                            <input type="text" required name="txtCpf" class="form-control">
                        </div>

                        <div class="col-md-2">

                            <label for="exampleInputPassword1">Sexo:</label>
                            <select class="form-control" name="optSexo" >
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino" >Feminino</option>
                            </select>

                        </div>

                        <div class="col-md-2">
                            <label for="exampleInputPassword1">Data de Nascimento:</label>
                            <input type="text" required name="txtDataNascimento" class="form-control">
                        </div>



                        <div class="col-md-4">
                            <label for="exampleInputPassword1">Tamanho da Camisa:</label>
                            <select class="form-control" name="optTamanhoCamisa">
                            <option>M</option>
                            <option>P</option>
                            <option>PP</option>
                            <option>G</option>
                            <option>GG</option>
                            </select>

                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">Pais:</label>
                            <select class="form-control" name="optPais">

                                <option value="2">África do Sul</option>
                                <option value="4">Albânia</option>
                                <option value="5">Alemanha</option>
                                <option value="6">Andorra</option>
                                <option value="7">Angola</option>
                                <option value="8">Anguilla</option>
                                <option value="9">Antártida</option>
                                <option value="10">Antigua e Barbuda</option>
                                <option value="11">Antilhas holandesas</option>
                                <option value="12">Arábia Saudita</option>
                                <option value="13">Argélia</option>
                                <option value="14">Argentina</option>
                                <option value="15">Arménia</option>
                                <option value="16">Aruba</option>
                                <option value="17">Austrália</option>
                                <option value="18">Áustria</option>
                                <option value="19">Azerbeijão</option>
                                <option value="20">Bahamas</option>
                                <option value="21">Bahrain</option>
                                <option value="22">Bangladesh</option>
                                <option value="23">Barbados</option>
                                <option value="24">Bélgica</option>
                                <option value="25">Belize</option>
                                <option value="26">Benin</option>
                                <option value="27">Bermuda</option>
                                <option value="28">Bielo-Rússia</option>
                                <option value="29">Bolívia</option>
                                <option value="30">Bósnia e Herzegovina</option>
                                <option value="31">Botswana</option>
                                <option value="33" selected="selected">Brasil</option>
                                <option value="34">Brunei</option>
                                <option value="35">Bulgária</option>
                                <option value="36">Burkina Faso</option>
                                <option value="37">Burundi</option>
                                <option value="38">Butão</option>
                                <option value="39">Cabo Verde</option>
                                <option value="41">Camarões</option>
                                <option value="40">Cambodja</option>
                                <option value="42">Canadá</option>
                                <option value="44">Cazaquistão</option>
                                <option value="45">Centro-africana, República</option>
                                <option value="46">Chade</option>
                                <option value="48">Chile</option>
                                <option value="49">China</option>
                                <option value="50">Chipre</option>
                                <option value="53">Colômbia</option>
                                <option value="54">Comores</option>
                                <option value="56">Congo, República Democrática do (antigo Zaire)</option>
                                <option value="59">Coreia do Norte</option>
                                <option value="58">Coreia do Sul</option>
                                <option value="60">Costa do Marfim</option>
                                <option value="61">Costa Rica</option>
                                <option value="62">Croácia</option>
                                <option value="63">Cuba</option>
                                <option value="245">Curaçao</option>
                                <option value="64">Dinamarca</option>
                                <option value="65">Djibouti</option>
                                <option value="66">Dominica</option>
                                <option value="68">Egipto</option>
                                <option value="69">El Salvador</option>
                                <option value="70">Emirados Árabes Unidos</option>
                                <option value="71">Equador</option>
                                <option value="72">Eritreia</option>
                                <option value="73">Eslováquia</option>
                                <option value="74">Eslovénia</option>
                                <option value="75">Espanha</option>
                                <option value="151">Estados Federados da Micronésia</option>
                                <option value="76">Estados Unidos</option>
                                <option value="77">Estónia</option>
                                <option value="78">Etiópia</option>
                                <option value="80">Fiji</option>
                                <option value="81">Filipinas</option>
                                <option value="82">Finlândia</option>
                                <option value="83">França</option>
                                <option value="84">Gabão</option>
                                <option value="85">Gâmbia</option>
                                <option value="86">Gana</option>
                                <option value="87">Geórgia</option>
                                <option value="89">Gibraltar</option>
                                <option value="90">Grécia</option>
                                <option value="91">Grenada</option>
                                <option value="92">Gronelândia</option>
                                <option value="93">Guadeloupe</option>
                                <option value="94">Guam</option>
                                <option value="95">Guatemala</option>
                                <option value="96">Guernsey</option>
                                <option value="97">Guiana</option>
                                <option value="98">Guiana Francesa</option>
                                <option value="101">Guiné Equatorial</option>
                                <option value="99">Guiné-Bissau</option>
                                <option value="100">Guiné-Conacri</option>
                                <option value="102">Haiti</option>
                                <option value="104">Honduras</option>
                                <option value="105">Hong Kong</option>
                                <option value="106">Hungria</option>
                                <option value="107">Iémen</option>
                                <option value="32">Ilha Bouvet</option>
                                <option value="51">Ilha Christmas</option>
                                <option value="187">Ilha da Reunião</option>
                                <option value="140">Ilha de Man</option>
                                <option value="103">Ilha Heard e Ilhas McDonald</option>
                                <option value="43">Ilhas Cayman</option>
                                <option value="52">Ilhas Cocos</option>
                                <option value="57">Ilhas Cook</option>
                                <option value="3">Ilhas de Aland</option>
                                <option value="79">Ilhas Faroe</option>
                                <option value="88">Ilhas Geórgia do Sul e Sandwich do Sul</option>
                                <option value="143">Ilhas Marshall</option>
                                <option value="240">Ilhas Virgens Americanas</option>
                                <option value="241">Ilhas Virgens Britânicas</option>
                                <option value="108">Índia</option>
                                <option value="109">Indonésia</option>
                                <option value="111">Irão</option>
                                <option value="110">Iraque</option>
                                <option value="112">Irlanda</option>
                                <option value="113">Islândia</option>
                                <option value="114">Israel</option>
                                <option value="115">Itália</option>
                                <option value="116">Jamaica</option>
                                <option value="117">Japão</option>
                                <option value="118">Jersey</option>
                                <option value="119">Jordânia</option>
                                <option value="120">Kiribati</option>
                                <option value="121">Kuwait</option>
                                <option value="122">Laos</option>
                                <option value="123">Lesoto</option>
                                <option value="124">Letónia</option>
                                <option value="125">Líbano</option>
                                <option value="126">Libéria</option>
                                <option value="127">Líbia</option>
                                <option value="128">Liechtenstein</option>
                                <option value="129">Lituânia</option>
                                <option value="130">Luxemburgo</option>
                                <option value="131">Macau</option>
                                <option value="132">Macedónia, República da</option>
                                <option value="133">Madagáscar</option>
                                <option value="134">Malásia</option>
                                <option value="135">Malawi</option>
                                <option value="136">Maldivas</option>
                                <option value="137">Mali</option>
                                <option value="138">Malta</option>
                                <option value="139">Malvinas, Ilhas (Falkland)</option>
                                <option value="141">Marianas Setentrionais</option>
                                <option value="142">Marrocos</option>
                                <option value="144">Martinica</option>
                                <option value="145">Maurícia</option>
                                <option value="146">Mauritânia</option>
                                <option value="147">Mayotte</option>
                                <option value="148">Menores Distantes dos Estados Unidos, Ilhas</option>
                                <option value="149">México</option>
                                <option value="152">Moçambique</option>
                                <option value="153">Moldávia</option>
                                <option value="154">Mónaco</option>
                                <option value="155">Mongólia</option>
                                <option value="156">Montenegro</option>
                                <option value="157">Montserrat</option>
                                <option value="150">Myanmar</option>
                                <option value="158">Namíbia</option>
                                <option value="159">Nauru</option>
                                <option value="160">Nepal</option>
                                <option value="161">Nicarágua</option>
                                <option value="162">Níger</option>
                                <option value="163">Nigéria</option>
                                <option value="164">Niue</option>
                                <option value="165">Norfolk Ilha</option>
                                <option value="166">Noruega</option>
                                <option value="167">Nova Caledónia</option>
                                <option value="168">Nova Zelândia</option>
                                <option value="169">Oman</option>
                                <option value="171">Palau</option>
                                <option value="172">Palestina</option>
                                <option value="173">Panamá</option>
                                <option value="174">Papua-Nova Guiné</option>
                                <option value="175">Paquistão</option>
                                <option value="176">Paraguai</option>
                                <option value="177">Peru</option>
                                <option value="178">Pitcairn</option>
                                <option value="179">Polinésia Francesa</option>
                                <option value="246">Polo Norte</option>
                                <option value="180">Polônia</option>
                                <option value="181">Porto Rico</option>
                                <option value="182">Portugal</option>
                                <option value="183">Qatar</option>
                                <option value="184">Quénia</option>
                                <option value="185">Quirguistão</option>
                                <option value="170">Reino dos Países Baixos</option>
                                <option value="186">Reino Unido</option>
                                <option value="47">República Checa</option>
                                <option value="55">República do Congo</option>
                                <option value="67">República Dominicana</option>
                                <option value="188">Roménia</option>
                                <option value="189">Ruanda</option>
                                <option value="190">Rússia</option>
                                <option value="191">Saara Ocidental</option>
                                <option value="194">Saint Pierre et Miquelon</option>
                                <option value="195">Salomão, Ilhas</option>
                                <option value="193">Samoa (Samoa Ocidental)</option>
                                <option value="192">Samoa Americana</option>
                                <option value="197">San Marino</option>
                                <option value="200">Santa Helena</option>
                                <option value="201">Santa Lúcia</option>
                                <option value="196">São Cristóvão e Névis (Saint Kitts e Nevis)</option>
                                <option value="198">São Tomé e Príncipe</option>
                                <option value="199">São Vicente e Granadinas</option>
                                <option value="202">Senegal</option>
                                <option value="203">Serra Leoa</option>
                                <option value="204">Sérvia</option>
                                <option value="205">Seychelles</option>
                                <option value="206">Singapura</option>
                                <option value="207">Síria</option>
                                <option value="208">Somália</option>
                                <option value="209">Sri Lanka</option>
                                <option value="210">Suazilândia</option>
                                <option value="211">Sudão</option>
                                <option value="212">Suécia</option>
                                <option value="213">Suíça</option>
                                <option value="214">Suriname</option>
                                <option value="215">Svalbard e Jan Mayen</option>
                                <option value="216">Tailândia</option>
                                <option value="217">Taiwan</option>
                                <option value="218">Tajiquistão</option>
                                <option value="219">Tanzânia</option>
                                <option value="220">Terras Austrais e Antárticas Francesas (TAAF)</option>
                                <option value="221">Território Britânico do Oceano Índico</option>
                                <option value="222">Timor-Leste</option>
                                <option value="223">Togo</option>
                                <option value="225">Tonga</option>
                                <option value="224">Toquelau</option>
                                <option value="226">Trindade e Tobago</option>
                                <option value="227">Tunísia</option>
                                <option value="228">Turks e Caicos</option>
                                <option value="229">Turquemenistão</option>
                                <option value="230">Turquia</option>
                                <option value="231">Tuvalu</option>
                                <option value="232">Ucrânia</option>
                                <option value="233">Uganda</option>
                                <option value="234">Uruguai</option>
                                <option value="235">Usbequistão</option>
                                <option value="236">Vanuatu</option>
                                <option value="237">Vaticano</option>
                                <option value="238">Venezuela</option>
                                <option value="239">Vietnã</option>
                                <option value="242">Wallis e Futuna</option>
                                <option value="243">Zâmbia</option>
                                <option value="244">Zimbabwe</option></select>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="exampleInputPassword1">Cidade:</label>
                            <input type="text" required name="txtCidadeAtleta" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">Estado:</label>
                            <input type="text" required name="txtEstadoAtleta" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputPassword1">Endereço:</label>
                            <input type="text" required name="txtRuaAtleta" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputPassword1">Bairro:</label>
                            <input type="text" required name="txtBairroAtleta" class="form-control" >
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="exampleInputPassword1">Telefone Fixo:</label>
                            <input type="text" name="txtTelefoneFixo" class="form-control" >
                        </div>
                        <div class="col-md-2">
                            <label for="exampleInputPassword1">Telefone Celular:</label>
                            <input type="text" name="txtTelefoneCelular" class="form-control" >
                        </div>

                        <div class="col-md-4">
                            <label for="exampleInputPassword1">Email:</label>
                            <input type="text" required name="txtEmail" class="form-control" >
                        </div>

                        <div class="col-md-4">
                            <label for="exampleInputPassword1">Confirmar Email:</label>
                            <input type="text" required id="email" name="txtEmail" class="form-control" oninput="validaEmail(this)">
                        </div>


                        <div class="col-md-4">
                            <label for="exampleInputPassword1">Login:</label>
                            <input type="text" required name="txtLoginAtleta" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label>Senha:</label>
                            <input type="password" required id="senha" name="txtSenhaAtleta" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">Confirmar Senha:</label>
                            <input type="password" required name="txtValidadaSenha" class="form-control" oninput="validaSenha(this)">
                        <br> <br>
                        </div>
                        
                        
                      <button type="submit" class="btn btn-primary btn-block">Registrar</button>

        </form>
        
          
           
      </div>
    
      
      <center><a class="d-block small mt-3" href="login.jsp">Pagina de Login</a>
          <a class="d-block small" href="recuperaSenha.jsp">Esqueci minha senha</a></center>
     </div>
  </div>
 </div>
    
    <br><br> <br>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
