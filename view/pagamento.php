<?php  
    require_once '../layout/Global.php';
    $global = new GlobalApp();
    $global->import('layout/global', 'index');
    $global->import('layout/global', 'menu'); 
    $global->import('layout/global', 'Components'); 
    $components = new Components();
    $descCredor = array("Vitor França", "Diego Figueiredo", "Ítalo Ribeiro");
    $codCredor = array("1", "2", "3");
    $descDevedor = array("Leila Sanches", "Carolina Cruz", "Francine Araújo");
    $codDevedor = array("1", "2", "3");
?>
        <div id="page-process">
            <div id="conteudo">
                <header>          
                    <h1 id="tituloIni">Sistema de cobranças</h1>       
                </header>          
                <section id="painel">
                    <?=                       
                            $components ->form("", "", "",                                 
                                $components ->h1("cad_titulo", "Realizar Pagamento"). 
                                $components ->section("itens-cad", "",                           
                                    $components -> label("cod_divida", "form_cad", "Código Dívida")."<br>".
                                    $components -> input("text", "", "cod_divida", 'cod_divida',  "",  "readonly","")
                                 ). 
                                 $components ->section("itens-cad", "",                           
                                    $components -> label("data_atualizacao", "form_cad", "Data Atualização")."<br>".
                                    $components -> input("text", "", "data_atualizacao", 'data_atualizacao',  "",  "","")
                                ). 
                                $components ->section("itens-cad", "",                           
                                    $components -> label("data_pagamento", "form_cad", "Data Pagamento")."<br>".
                                    $components -> input("text", "", "data_pagamento", 'data_pagamento',  "",  "","")
                                ).                      
                                $components ->section("itens-cad", "",
                                    $components ->label("desc_credor", "form_cad", "Credor")."<br>".
                                    $components -> input("text", "", "desc_credor", 'desc_credor',  "",  "","")
                                ).     
                                $components ->section("itens-cad", "",
                                    $components ->label("desc_devedor", "form_cad", "Devedor")."<br>".
                                    $components -> input("text", "", "desc_devedor", 'desc_devedor',  "",  "","")
                                )."<br>".
                                 $components ->button( "cadCliente", "cadCliente","Salvar" , "",  "")
                            )
                        ?>        
                </section>
        </div>
<?php     $global->import('layout/global', 'footer');  ?>