<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>SWLAM SISTEMAS - Tecnologia em sistemas, valor em soluções</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="<?= base_url('assets/css/foundation-responsive.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/foundation.min.css')?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/w3.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/style.css')?>" rel="stylesheet">

    <script src="<?= base_url('assets/js/jquery.js')?>"></script>
    <script src="<?= base_url('assets/js/foundation-collapse.js')?>"></script>
    <!-- <script src="<?= base_url('assets/js/jquery-2.1.1.min.js')?>"></script>    -->
    <script src="<?= base_url('assets/js/foundation.min.js')?>"></script>
    <script src="<?= base_url('assets/js/site.min.js')?>"></script>
    <script src="<?= base_url('assets/js/wow.min.js')?>"></script>
    <script src="<?= base_url('assets/js/jquery.easing.min.js')?>"></script>
    <script src="<?= base_url('assets/js/fliplightbox.min.js')?>"></script>
    <script src="<?= base_url('assets/js/functions.js')?>"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<section  class="section">
    <div class="container">
        <div class="row">
            <div class="span11 offset1">
                <div>
                    <h2><strong>Contratar plano Personalizado</strong></h2>
                    <h3>Agora falta muito pouco, vamos definir algumas configurações do seu sistema.</h3>
                     <h3>Dados de cadastro para acessar sua conta</h3>
                    <div class="container">
                       <div class="row">
                        <div class="span12">
                          <div class="cform" id="contact-form">
                            <form action="" method="post" role="form" class="contactForm">
                            <div class="row">
                            <div class="span7">
                            <div class="field form-group">
                            <p>*E-mail do administrador:</p>
                                <input type="text" name="email" class="form-control" id="email" placeholder="Informe E-mail do Administrador" data-rule="minlen:4" data-msg="Introduza pelo menos 4 caracteres" />
                            </div>

                            <div class="row">
                            <div class="span4">
                            <div class="field form-group">
                              <p>
                                *Nome do administrador:</p>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Informe o nome do administrador" data-rule="name" data-msg="Entre com uma nome válido" />
                                <div class="span3 offset03"><p>*Senha do administrador</p>
                                <input type="text" class="form-control" name="password" id="password" placeholder="Informe sua senha" data-rule="minlen:4" data-msg="Introduza pelo menos 8 caracteres da senha" />
                                </div>
                            </div>
                            </div>
                            </div>

                            <div class="row">
                            <div class="span4">
                            <div class="field form-group">
                              <p>
                                Razão Social</p>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Informe a Razão Social" data-rule="email" data-msg="Entre com um nome válido" />
                                <div class="span3 offset03"><p>*Telefone</p>
                                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Informe seu telefone" data-rule="minlen:4" data-msg="Introduza pelo menos 8 caracteres da senha" />
                                <div class="validation"></div>
                                </div>
                            </div>
                            </div>
                            </div>
                           <div class="row">
                          <div class="span7">
                            <h3>Opções adicionais</h3>
                            <p>Cada plano possui um número padrão de usuários, mas você pode comprar usuários adicionais.</p>
                            <div class="field form-group">
                            <div class="row">
                            <div class="span4">
                            <div class="field form-group">
                              <p>
                                Usuário do plano</p>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Informe o nome do administrador" data-rule="email" data-msg="Entre com um email válido" />
                                <div class="validation"></div>

                                <div class="span3 offset03"><p>Usuário adicionais</p>
                               <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                                       <option selected>Selecione</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                   </select>
                                </div>
                            </div>
                            </div>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="span7">
                            <h3>Opções de pagamento</h3>
                            <div class="field form-group">
                            <div class="row">
                            <div class="span12">
                            <div class="field form-group">
                              <p>
                                Forma de pagamento</p>
                                <div class="form-group">
                                    <select class="form-control btn-cartao">
                                        <option>Cartão de Crédito</option>
                                        <option>Boleto</option>
                                    </select>
                                </div>
                            </div>
                            </div>
                            </div>
                                <div class="row">
                                    <div class="span4">
                                        <div class="form-group">
                                            <p>
                                                *Número do Titular do Cartão:</p>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Informe o Nome do Títular do Cartão" data-rule="email" data-msg="Entre com um nome válido" />
                                            <div class="span3 offset03"><p>*Validade/Mês</p>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>05</option>
                                                        <option>01</option>
                                                        <option>02</option>
                                                        <option>03</option>
                                                        <option>04</option>
                                                    </select>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="span4">
                                        <div class="field form-group">
                                            <p>
                                                *Número do Titular do Cartão:</p>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Informe o Nome do Títular do Cartão" data-rule="email" data-msg="Entre com um nome válido" />
                                            <div class="span3 offset03"><p>*Validade/Ano:</p>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option value="0" selected="selected">2017</option><option value="1">2018</option><option value="2">2019</option><option value="3">2020</option><option value="4">2021</option><option value="5">2022</option><option value="6">2023</option><option value="7">2024</option><option value="8">2025</option><option value="9">2026</option><option value="10">2027</option><option value="11">2028</option><option value="12">2029</option><option value="13">2030</option><option value="14">2031</option><option value="15">2032</option><option value="16">2033</option><option value="17">2034</option><option value="18">2035</option><option value="19">2036</option><option value="20">2037</option></select>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="span4">
                                        <div class="field form-group">
                                            <p>
                                                *Código de Segurança:</p>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Informe o código de segurança" data-rule="email" data-msg="Entre com um nome válido" />
                                            <div class="span3 offset03"><p>*Condições de pagamento:</p>
                                                <div class="form-group">
                                                    <label for="exampleSelect1"></label>
                                                    <select class="form-control" id="exampleSelect1">
                                                        <option>Á Vista</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>


                        <!--LATERAL-->
                        <div class="span3">
                            <div class="field form-group">
                            <p><button type="button" class="btn btn-info">Plano Personalizado</button></p>
                                
                            </p><br><br>
                                <strong class="descontos">Descontos de R$ 29.30<br><br>
                                   R$ 109.90</strong>
                            </div><br><br>
                            <div class="field form-group">
                            <p>Opções de pagamento</p>
                               <div class="form-group row">
                              <div class="span3">
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> Mensal
                                  </label>
                                </div>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> Semestral (5% de desconto)
                                  </label>
                                </div>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> Anual (10% de desconto)
                                  </label>
                                </div>
                              </div>
                            </div>
                            </div>

                            <div class="field form-group">
                            <p>Ler condições e termos de uso</p>
                               <div class="form-group row">
                              <div class="span3">
                               <input type="submit" value="Contratar" class="btn btn-theme pull-left">
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
</section>



<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
    $('.nav-tabs a').on('shown.bs.tab', function(event){
        var x = $(event.target).text();         // active tab
        var y = $(event.relatedTarget).text();  // previous tab
        $(".act span").text(x);
        $(".prev span").text(y);
    });
});
</script>


