@extends('layouts.secondary-main')

@section('title', 'Política de privacidade')


@section('contentSecondary')
<!--Aqui está o header e o navbar-->
    <header>
        @include('layouts._partials.navbar_show')
    </header>


    <main> 
        <div class="nav-itens">

         </div>
          <div class="announce">
            <div>
                <form action="/events" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mt-3">
                        <h2><i class="material-icons">description</i> Política de privacidade</h2>
                        <p><small>
                            
A Se liga jogador tem o compromisso com a PRIVACIDADE E A SEGURANÇA de seus clientes durante todo o processo de navegação e compra pelo site.  A Se liga jogador utiliza cookies e informações de sua navegação com o objetivo de traçar um perfil do público que visita o site e aperfeiçoar sempre nossos serviços, produtos, conteúdos e garantir as melhores ofertas e promoções para você. Durante todo este processo mantemos suas informações em sigilo. 

<strong>Quais dados pessoais coletamos?</strong> 

Dados Pessoais que o usuário nos fornece voluntariamente: Nome completo, CPF, data de nascimento, celular, endereço, e-mail, senha, dados de pagamento e de crédito, preferências pessoais.

<strong>Dados pessoais coletados automaticamente</strong> 

Endereço IP, geolocalização, informações sobre o dispositivo de acesso (exemplo: modelo, fabricante, sistema operacional), informações sobre o navegador de internet, duração da visita, páginas visitadas, conteúdos interagidos, cookies, histórico de compras, produtos pesquisados, selecionados ou adicionados ao carrinho.

<strong>Dados Pessoais que recebemos de terceiros:</strong> 

Nós também podemos receber, de serviços de terceiros, os Dados Pessoais que o Usuário decidir compartilhar conosco: Facebook, Discord e Google.

<strong>Para que coletamos os Dados Pessoais?</strong> 

Nós utilizamos os Dados Pessoais do Usuário para diversas finalidades em nossos serviços:
• Gerenciar e processar as compras, vendas, reembolsos;
• Cumprir as obrigações decorrentes do uso dos nossos serviços.
• Melhorar a experiência do Usuário e oferecer produtos e serviços alinhados ao seu perfil, além de melhorar a apresentação das Plataformas.
•  Enviar comunicação publicitária por e-mail, Discord, WhatsApp ou mensagens de texto.
• Veicular publicidade na Internet de forma personalizada ou não.
•  Permitir a nossa comunicação com o Usuário, atender às suas solicitações, responder suas dúvidas e reclamações.
• Implementar medidas adequadas de segurança para resguardar os Usuários.
• Corrigir eventuais problemas técnicos encontrados em nossas Plataformas.
•  Proteger os Usuários e a Se liga jogador contra fraudes, incluindo a investigação de ações fraudulentas envolvendo alterações cadastrais de compra e entrega.
•  Cumprir nossa obrigação legal de manter o registro de acesso dos Usuários à Plataforma.

Muitos de nossos serviços dependem diretamente de alguns Dados Pessoais informados acima, principalmente Dados Pessoais relacionados a cadastro. Caso você opte por não fornecer alguns Dados Pessoais de cadastro, podemos ficar impossibilitados de prestar nossos serviços com totalidade.

Nós utilizamos, em nossas Plataformas, as seguintes tecnologias:
•  Cookies;
•  Google Ads, jussi (registros navegação), social miner (navegação), Facebook (registro de eventos) e Google Analytics (dados de navegação).

<strong>Como compartilhamos seus Dados Pessoais</strong> 

Nós podemos compartilhar os Dados Pessoais com terceiros, preservando ao máximo a privacidade do Usuário e, sempre que possível, de forma anonimizada.

Abaixo, descrevemos situações em que podemos compartilhar Dados Pessoais:

•  Internamente, com nossas áreas de negócio, para realizar segmentação de perfil (proporcionar experiências personalizadas), enviar publicidade, promover e desenvolver nossos serviços, por exemplo.
•  Com nossos fornecedores e parceiros comerciais, com quem firmamos obrigações contratuais de segurança e proteção de dados pessoais. Os fornecedores incluem empresas de hospedagem de dados e servidores; empresas de segurança, como monitoramento por imagem; empresas de autenticação e validação de cadastros; ferramentas de publicidade, marketing, mídia digital e social; empresas de logística e entrega dos produtos; empresas de pesquisa; empresas de meios e processamento de pagamento.
•  Com Autoridades Públicas, sempre que houver determinação legal, requerimento, requisição ou ordem judicial nesse sentido.
•  De forma automática, em caso de movimentações societárias, como fusão, aquisição e incorporação das empresas do Grupo Se liga jogador.

•  Constatada ação de má fé ou fraude, sob solicitação da parte lesada com justificativa e objetivo exclusivos para fins judiciais.

Para pesquisas de inteligência de mercado, divulgação de dados à imprensa e realização de propagandas, os Dados Pessoais serão compartilhados de forma anonimizada.
Os Dados Pessoais podem ser transferidos para fora do Brasil. Essa transferência ocorre porque alguns dos nossos fornecedores estão localizados no exterior que estão em conformidade com as leis aplicáveis de proteção de Dados Pessoais.

A LGPD garante o Usuário, como Titular dos Dados Pessoais, os seguintes direitos:

•  Acesso: O usuário pode requisitar uma cópia dos Dados Pessoais que nós temos sobre ele.
•  Anonimização, bloqueio ou eliminação: Possibilidade de solicitar a anonimização dos Dados Pessoais; o bloqueio, suspendendo temporariamente o Tratamento, e eliminação, caso em que apagaremos todos os Dados Pessoais, salvo os casos em que a lei exigir sua manutenção.
• Correção: O Usuário pode corrigir, na área “Meus Dados”, os Dados Pessoais que estejam incompletos, inexatos ou desatualizados.
• Revogação do consentimento e informação sobre suas consequências: O Usuário tem o direito de não dar ou retirar seu consentimento e obter informações sobre as consequências dessa escolha. Nesse caso, alguns dos serviços não poderão ser prestados.

 
<strong>Como armazenamos seus dados pessoais</strong> 

Os Dados Pessoais são armazenados somente pelo tempo que for necessário para cumprir com as finalidades definidas, salvo se houver outra razão para sua manutenção como o cumprimento de obrigações legais, regulatórias, contratuais e preservação de direitos da Se liga jogador, desde que devidamente fundamentadas por legislação vigente.

Os requerimentos de exclusão total dos Dados pessoais serão avaliados para que se cumpra com os requisitos normativos, de investigação e cumprimentos legais, previsto no art.16 da LGPD. Terminado o prazo de manutenção e necessidade legal, os Dados Pessoais serão excluídos com uso de métodos de descarte seguro, ou utilizados de forma anonimizada para fins estatísticos.

Uma vez cadastrada, a conta do usuário não poderá ser excluída de nosso banco de dados em caso de atividades (compras e vendas), isso garante a segurança de nossa Plataforma. A Se liga jogador não é obrigada a excluir os dados de usuários caso exista alguma base legal que justifique a manutenção deles. O usuário poderá solicitar a desativação da conta entrando no meu "Meus Dados". Caso não haja nenhuma atividade na conta do usuário, o mesmo poderá solicitar a exclusão clicando no botão "Excluir Conta".



<strong>Confidencialidade e segurança</strong> 

O Usuário também é responsável pelo sigilo dos seus Dados Pessoais e deve ter sempre ciência de que o compartilhamento de senhas viola esta Política e pode comprometer a segurança dos seus Dados Pessoais.

É muito importante que o Usuário se proteja contra acesso não autorizado ao seu computador ou conta, além de se certificar de sempre clicar em “sair” ao encerrar sua navegação em um computador compartilhado.

Internamente, os Dados Pessoais coletados são acessados somente por profissionais autorizados, respeitando os princípios de proporcionalidade, necessidade e relevância, além do compromisso de confidencialidade e preservação da privacidade.

As transações de pagamento são executadas sob protocolos de segurança e criptografia garantindo que os Dados Pessoais, inclusive dados de cartão de crédito, não sejam ilicitamente divulgados a terceiros.

Ao utilizar nossas Plataformas, o Usuário poderá ser conduzido, via link, a sites de terceiros, que poderão coletar suas informações e ter suas próprias Políticas de Privacidade. Nós recomendamos que o Usuário leia as Políticas de Privacidade de tais sites, sendo de sua responsabilidade aceitá-las ou rejeitá-las. A Se liga jogador não se responsabiliza pelas Políticas de Privacidade, conteúdos ou serviços dos sites de terceiros.

 

<strong>Atualização e Contato</strong> 

Trabalhamos em melhorias constantes para aperfeiçoamento de nossos serviços, produtos, conteúdo e navegação, garantindo uma melhor experiência.
O Usuário reconhece o direito da Se liga jogador de alterar o teor desta Política a qualquer momento, conforme a finalidade ou necessidade, sem aviso prévio. Caso algum ponto desta Política seja considerado inaplicável, as demais condições permanecerão em pleno vigor e efeito.
Esta Política será interpretada segundo a legislação brasileira, no idioma português, sendo eleito o foro de Maringá/PR para dirimir qualquer controvérsia que envolva este documento, salvo ressalva específica de competência pessoal, territorial ou funcional pela legislação aplicável. Caso o Usuário não possua domicílio no Brasil, e em razão dos serviços oferecidos pela Se liga jogador apenas em território nacional, será aplicada a legislação brasileira, concordando que, em caso de litígio, a ação deverá ser proposta no Foro da Comarca de Maringá/PR.
 

</small>
</p>
                    </div>
                </form>
            </div>
            
        </div>
    </main>

 <!--Aqui está o footer-->
    <footer>
        @include('layouts._partials.footer')
    </footer>
@endsection