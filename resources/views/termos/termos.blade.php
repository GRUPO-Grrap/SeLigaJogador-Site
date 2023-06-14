@extends('layouts.secondary-main')

@section('title', 'Termos de uso')


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
                        <h2><i class="material-icons">description</i> Termos de uso</h2>
                        <p><small>

                                <strong>1. ACEITAÇÃO DOS TERMOS E CONDIÇÕES DE USO</strong>
                                O Uso da Plataforma Digital (a partir de agora denominada ferramenta) oferecida pela Se liga
                                jogador em seu website está condicionado à aceitação e aos cumprimentos dos Termos e
                                Condições de Uso abaixo:

                                Ler atentamente os termos descritos abaixo;
                                Concordar expressamente com eles;
                                Fornecer um canal de comunicação a ser validado ao postar qualquer conteúdo no Site.
                                Agir com base nas normas e diretrizes estabelecidas pela corporação bem como atentar a lei
                                nacional.

                                Ao fazer uso da Ferramenta oferecida pela empresa Se liga jogador, você (a partir de agora
                                denominado Usuário) concorda que leu, entendeu e aceitou os termos, regras e condições aqui
                                dispostos.

                                A plataforma, atualmente, presta suporte apenas para usuários residentes no Brasil e que
                                possuam documentos válidos no território nacional. Isto é, estrangeiros só conseguirão
                                utilizar a plataforma de forma parcial, inviabilizando a verificação de documentos na
                                plataforma.

                                A utilização da Ferramenta está condicionada à capacidade civil plena ou a devida
                                representação. A aceitação desses termos representa por si só a declaração de ser o usuário
                                capaz, assistido ou representado.

                                A Se liga jogador se reserva o direito de proibir, permitir, modificar e alterar, a qualquer
                                momento, a apresentação, categorização, organização, ordenação, composição, configuração e
                                disponibilização da plataforma sem aviso prévio, ao seu exclusivo critério. A regra se
                                aplica a estes Termos de Uso, estabelecidos como condição fundamental para a utilização do
                                serviço.

                                <strong>2. FERRAMENTA DE ANÚNCIOS</strong>
                                A Se liga jogador oferece ao Usuário uma ferramenta que permite a publicação de anúncios no
                                Site, que ficará hospedado nos servidores da Se liga jogador. De forma nenhuma a Se liga
                                jogador representa os anúncios de terceiros, tendo o direito de remover qualquer conteúdo
                                que considere ofensivo ou que prejudique de alguma forma a boa conduta do site, seus
                                usuários ou seus produtos.

                                Embora assegurado o direito constitucional de defesa ao anunciante, a Se liga jogador se
                                resguarda no direito de retirar de forma imediata qualquer conteúdo nocivo, uma vez que sua
                                permanência poderá acarretar em prejuízo de terceiros de boa fé.

                                A Se liga jogador se resguarda no direto de desativar e banir as contas de qualquer usuário,
                                ao seu critério próprio e mediante análise, para garantir a segurança da plataforma.

                                A Se liga jogador poderá cessar, unilateralmente, a prestação de serviços para usuários que
                                possuírem baixo índice de reputação e/ou alta incidência de intervenções. Podendo ou não,
                                reter seu saldo para garantir que usuários lesados sejam ressarcidos.

                                É expressamente proibido inserir na ferramenta de anúncios: fotos, vídeos e links que
                                divulguem contatos pessoais, sites externos, informações que identifiquem seu produto (nicks
                                em jogos e plataformas),solicitações de pagamentos externos, ferramentas ilegais (hacks,
                                cheaters, aimbot, scripts ou semelhantes), conteúdo adulto ou cursos pirateados (sem autoria
                                própria do vendedor).

                                É expressamente proibida a comercialização de contas cujo identificador (de qualquer
                                natureza) esteja contido na ferramenta de Verificação de Contas, ocasionando a suspensão da
                                plataforma.


                                <strong>3. GRATUIDADE E COBRANÇA</strong>
                                A plataforma é oferecida ao usuário de forma gratuita para consulta e navegação de suas
                                páginas, categorias e anúncios.

                                A Se liga jogador oferece planos para vendedores, que incluem taxas a serem cobradas em cima
                                das vendas realizadas na Plataforma. Os planos disponíveis são: Prata (9,99%), Ouro (11,99%)
                                e Diamante (12,99%). Ao optar por um dos planos, o vendedor concorda com as taxas cobradas
                                sobre suas vendas e reconhece que essas taxas poderão ser alteradas pela Se liga jogador a
                                qualquer momento, mediante aviso prévio.

                                A Se liga jogador pode apresentar alguns adicionais para os compradores na hora de comprar,
                                tais como descontos, promoções, entre outros. Esses adicionais podem variar de acordo com a
                                política da Plataforma e não estão sujeitos a garantias.

                                <strong>4. UTILIZAÇÃO DA FERRAMENTA</strong>
                                O Usuário reconhece que é responsável por quaisquer informações falsas que possam ser
                                prestadas para a utilização da ferramenta, bem como por qualquer comentário ou conteúdo
                                inserido pelo mesmo no Site.

                                Cada pessoa poderá possuir apenas um usuário no site (um CPF), a criação de múltiplos
                                usuários está expressamente proibida, mesmo que utilizando dados de terceiros. Caso o
                                usuário seja banido e crie outra conta, estará infringindo nossas regras e será banido
                                permanentemente.

                                A conta da Se liga jogador é de uso pessoal, intransferível e não deve ser repassada para
                                terceiros. É proibida sua comercialização. Isso inclui também qualquer valor monetário ou
                                bônus.

                                O pagamento feito pelo comprador pode acabar resultando em um reversal, uma retenção de
                                fundos pela operadora de cartão de crédito ou gateway. O ambiente da internet é propício a
                                fraudes e neste caso o pagamento será descontado do saldo do vendedor.

                                A Se liga jogador se reserva ao direito de analisar a propriedade de qualquer fundo, produto
                                ou disputa gerada pela Ferramenta de vendas, podendo colocar em espera, prender ou até mesmo
                                retirar os fundos recebidos e/ou depositados pelo comerciante e/ou usuário. Em caso de
                                prejuízo causado pelo usuário a qualquer outra pessoa ou à Se liga jogador, ao utilizar o
                                site, esta poderá reter qualquer saldo ou valor disponível no site para que os prejuízos
                                causados sejam compensados.

                                Reclamações, disputas ou contestações em que não seja possível constatar o causador do
                                problema e que não tenham solução após 180 dias, terão os fundos retidos.

                                As formas de saque oferecidas são os únicos métodos para realizar a retirada de fundos do
                                site. Nenhuma outra forma que não seja oferecida no menu poderá ser requisitada pelo
                                comerciante e/ou usuário.

                                É dever do usuário realizar a verificação de sua conta, de forma completa, para utilizar ou
                                retirar seu saldo disponível no site. Isso inclui o envio de documentos pessoais
                                requisitados, válidos, verdadeiros e atualizados.

                                No caso de eventual banimento de contas da plataforma, por qualquer motivo que seja, a
                                empresa reserva-se o direito de suspender temporariamente o acesso aos saldos das contas
                                banidas, a fim de realizar uma análise minuciosa da origem dos saldos. Esta análise
                                considerará a procedência dos produtos/serviços comercializados, o risco das transações
                                realizadas, a existência de usuários e/ou contrapartes lesadas e quaisquer outros motivos
                                que possam afetar a segurança da plataforma. O saldo congelado poderá ainda ser subtraído a
                                fim de resguardar reembolsos a outras partes envolvidas. A Se liga jogador se compromete a
                                realizar a análise o mais rapidamente possível, porém, caso necessário, a análise poderá ser
                                estendida para até 180 dias.

                                Após a realização da análise completa e a constatação de que não há riscos à segurança da
                                plataforma e à terceiros, o saldo da conta banida será desbloqueado e disponibilizado ao
                                usuário. A empresa prontamente irá informar o usuário sobre o resultado da análise e o prazo
                                estimado para a liberação dos saldos, assim que a análise for concluída. Caso sejam
                                identificados problemas durante a análise e o período estimado de liberação, a empresa
                                poderá tomar as medidas necessárias para garantir a segurança da plataforma, o que pode
                                afetar novamente o prazo de liberação dos saldos.

                                Não será permitido realizar negociações de troca, permuta ou câmbio entre anúncios. Sujeito
                                ao banimento da plataforma.

                                O usuário reconhece previamente as tarifas praticadas na Plataforma, bem como os prazos de
                                liberação do dinheiro proveniente de vendas.

                                Não há nenhum plano que acelere o prazo de liberação na plataforma, sendo este igual para
                                todos os usuários.

                                Uma vez cadastrada, a conta do usuário não poderá ser excluída de nosso banco de dados em
                                caso de atividades (compras e vendas), isso garante a segurança de nossa Plataforma. A Se
                                liga jogador não é obrigada a excluir os dados de usuários caso exista alguma base legal que
                                justifique a manutenção deles. O usuário poderá solicitar a desativação no menu "Meus
                                Dados", ao final da página.

                                Caso não haja nenhuma atividade na conta do usuário, o mesmo poderá solicitar a exclusão da
                                conta no menu "Meus Dados", ao final da página.

                                É expressamente proibido a criação de contas de usuário que contenham ou façam referência a
                                Se liga jogador. Não é permitida a utilização da palavra “Se liga jogador” em qualquer nome
                                de usuário no site. A mesma regra deve ser respeitada para a criação de anúncios. Ao
                                desrespeitar esta regra, o usuário pode ter seu nome modificado sem aviso prévio e em último
                                caso, desativação da plataforma.

                                É expressamente proibido anunciar produtos diferentes em um mesmo anúncio ao longo do tempo
                                (exceto anúncio caracterizado como dinâmico), a fim de aproveitar qualquer avaliação ou
                                posição de classificação obtido pelo produto/serviço anunciado anteriormente. Exemplo:
                                Anunciar produto X e, após este ser vendido, modificar o anúncio e anunciar o produto Y. A
                                criação de um anúncio deve ser feita de maneira específica (apenas anunciando um único
                                produto/serviço) e de maneira individual.

                                A Se liga jogador pode, a qualquer momento, solicitar ao usuário que verifique sua conta
                                para segurança da plataforma, não importa se ele é vendedor ou comprador.

                                Caso o usuário estiver com alguma mediação em aberto, a conta será classificada como
                                irregular. Contas Irregulares não poderão fazer a retirada até que as mediações em aberto
                                sejam resolvidas.

                                Em caso de abertura de mediação entre o comprador e vendedor, a Se liga jogador irá
                                intermediar a conversa para aconselhar, auxiliar e ajudar os usuários e chegar a um ponto
                                comum e/ou aplicar as diretrizes do site, respeitando os Termos de Uso e políticas internas.
                                Em último caso, os usuários concedem a decisão da mediação - mediante informações, dados e
                                provas coletadas no chat da plataforma - na responsabilidade de um moderador da Se liga
                                jogador, para um reembolso total ou parcial.

                                Em caso de mediação, o moderador poderá solicitar qualquer informação, dados e provas
                                concretas para compradores e vendedores - a seu exclusivo critério - para auxilia-lo com o
                                andamento da intervenção vigente.

                                Caso a conta do usuário seja banida, a mesma perderá acesso, permissão, suporte, contato
                                e/ou função à plataforma, não sendo possível a reversão de qualquer meio anteriormente
                                citado.

                                <strong>5. REGISTRO E DADOS PESSOAIS</strong>
                                É dever do Usuário manter atualizados os dados pessoais fornecidos quando da utilização da
                                Ferramenta. A Empresa pode cancelar qualquer registro do Usuário, a qualquer momento e sem
                                prévio aviso, assim que tiver conhecimento, e a seu exclusivo critério, se o Usuário
                                descumprir, intencionalmente ou não, estes Termos e Condições de Uso, ou violar leis e
                                regulamentos federais, estaduais e/ou municipais, ou violar os princípios legais, a moral e
                                os bons costumes. Os Usuários que tiverem seus registros cancelados não poderão mais
                                utilizar a Ferramenta, após apresentação da defesa.

                                O usuário ao aceitar os termos dos serviços prestados está ciente e de acordo com todas as
                                cláusulas do presente contrato. Em situação especial, caso o mesmo se utilize de qualquer
                                meio para reaver o pagamento efetuado, seja chargeback, disputas, sustar o pagamento ou
                                qualquer outro meio que impossibilite o crédito, bem como recuperação de contas, itens e
                                produtos digitais, o mesmo estará sujeito a processos tanto civis quanto penais, sendo que
                                tais atitudes qualificam fraude e estelionato, constituindo-se ambas práticas criminais.

                                Por se tratar de uma plataforma séria e para resguardar a segurança de seus usuários, bem
                                como garantir que a lei aplicável seja cumprida, a Se liga jogador se reserva ao direito de
                                execução do presente contrato judicialmente nos casos citados anteriormente, utilizando
                                todos os dados pessoais armazenados na Plataforma e também fica autorizado a divulgação dos
                                dados do usuário transgressor para terceiros.

                                O usuário abre mão de qualquer tipo de contestação direto com o banco/meio de pagamento,
                                como chargeback, disputas, sustar o pagamento ou qualquer outro meio que impossibilite o
                                crédito. Uma vez que a plataforma apenas oferece o serviço de intermediação de pagamento.
                                Qualquer contestação referente à compra deve ser resolvida diretamente com o vendedor.

                                A Se liga jogador poderá solicitar, ao seu próprio critério interno, dados adicionais para
                                que o titular da conta possa comprovar sua identidade e seus dados complementares.

                                Conforme aviso na etapa de preenchimento, uma vez enviados, os dados pessoais (Nome
                                Completo, CPF e Data de Nascimento) não poderão ser modificados ou transferidos, sendo eles
                                atrelados à conta de forma permanente.

                                Conforme aviso na etapa de preenchimento, uma vez enviado, o endereço não poderá ser
                                modificado sem a ajuda de um moderador. Será necessário a abertura de um ticket solicitando
                                a alteração e esta estará sujeita a análise interna para ser aprovada.

                                Embora a identidade (ou qualquer documento de identificação) não tenha prazo de validade por
                                lei, a Se liga jogador pode negar identidades emitidas há mais de 10 anos, por medida de
                                segurança contra fraudes. Havendo dúvida quanto ao estado de conservação, quanto à
                                fotografia ou quanto à data de emissão da identidade, a empresa deve ser consultada com
                                antecedência, evitando transtornos. Se, pelo decurso do tempo, a foto do documento não
                                conseguir expressar a identificação da pessoa que o porta, não poderá ser aceito, por perder
                                a sua finalidade.


                                <strong>6. REGRAS DE CONDUTA DO USUÁRIO</strong>
                                O USUÁRIO SE COMPROMETE A NÃO UTILIZAR A FERRAMENTA PARA A PUBLICAÇÃO, CRIAÇÃO,
                                ARMAZENAMENTO E/OU DIVULGAÇÃO DE:

                                Conteúdo abusivo, como textos, fotos e/ou vídeos que tenham caráter difamatório,
                                discriminatório, obsceno, ofensivo, ameaçador, abusivo, vexatório, prejudicial, que contenha
                                expressões de ódio contra pessoas ou grupos, ou que contenha pornografia infantil,
                                pornografia explícita ou violenta, conteúdo que possa ser danoso a menores, que contenha
                                insultos ou ameaças religiosas ou raciais, ou que incentive danos morais (incluindo os
                                corporais) e patrimoniais, ou que possa violar qualquer direito de terceiro, notadamente os
                                direitos humanos.

                                Banners publicitários e/ou qualquer tipo de comércio eletrônico que seja considerado
                                ilícito, assim entendidos os que sejam contrários à legislação ou ofendam direitos de
                                terceiros. Qualquer tipo de material (textos, fotos e/ou vídeos) protegido por direitos
                                autorais, copyright ou que, por qualquer razão, violem direitos de terceiros.

                                Informações difamatórias e caluniosas ou que sejam contrárias à honra, à intimidade pessoal
                                e familiar ou à imagem das pessoas (inclusive de pessoas jurídicas, entidades e organizações
                                e ela equiparadas). Material que incite à violência e à criminalidade, bem como à pirataria
                                de produtos. Conteúdo que provoque, por suas características (como extensões e formatos de
                                arquivos) danos ao sistema da Se liga jogador.

                                O usuário do site não irá anunciar o produto e comprar de si mesmo, tendo o anúncio e a
                                conta cancelada. Isso inclui também se auto avaliar por conta de terceiros ou a pedido de
                                terceiros. Será feito uma análise e se constatada fraude de adulteração de reputação e
                                avaliações no site com compras ilegítimas ou forjadas, o usuário será banido
                                permanentemente.

                                Todos os dados de acesso do produto, do serviço, da conta ou item vendido devem ser passados
                                obrigatoriamente através da página do pedido referente. Se os dados não forem passados
                                através do chat a garantia estará automaticamente cancelada.

                                A Se liga jogador possui sistema próprio e automatizado de filtragem de mensagens
                                maliciosas. Caso seja detectado pela equipe ou pelo sistema abuso de meios para burlar a
                                filtragem, a conta será permanentemente banida da plataforma.

                                O usuário fica proibido de fazer propaganda de site ou empresa que não seja a Se liga
                                jogador e não pode fazer anúncio ou qualquer atividade para recrutar outros vendedores do
                                site.

                                O usuário não irá anunciar produtos falsos.

                                O usuário não irá comercializar produtos falsificados.

                                As regras de conduta, Termos de Uso e diretrizes se estendem a todos os canais de
                                atendimento e comunicação da Se liga jogador, como Discord, Email e vice-versa. Sendo assim,
                                outros canais que não se resumem ao website funcionam como uma extensão do mesmo e
                                penalidades e punições são aplicáveis em qualquer meio.
                                Será banido por tempo indeterminado o usuário que tentar burlar o sistema de verificação,
                                como o envio de documentos e comprovantes falsos, falsificação de documentos, fraude e forja
                                de qualquer natureza, falsidade ideológica, uso inapropriado de documentos de outrem, uso
                                sem autorização, todos esses supracitados constituindo-se práticas criminais.

                                É proibido aliciar, persuadir e estimular vendedores a trocar seu plano de anúncio para
                                benefício próprio e para obtenção de eventuais descontos.
                                O usuário ao comprar e/ou vender produtos digitais, como contas de jogos e itens virtuais,
                                estão cientes e conhecem os Termos e Condições de Uso da desenvolvedora/proprietária do jogo
                                ou software, e que qualquer quebra, infração ou distrato oriunda do usuário de é sua e
                                exclusiva responsabilidade.
                                O usuário ao comprar e/ou vender na plataforma reconhecem que as informações relacionadas à
                                negociação de produtos e serviços digitais são confidenciais não podem ser compartilhadas
                                com terceiros, como partes não envolvidas na negociação, amigos, desenvolvedora de jogos ou
                                software e similares, sem autorização prévia da moderação ou outra parte.

                                <strong>7. RESTRIÇÕES AO USUÁRIO</strong>
                                O usuário não irá violar qualquer um destes Termos e Condições de Uso; praticar falsidade,
                                assim entendidas a falsidade de informações (i.e: divulgação proposital e voluntária de
                                informações que o Usuário saiba ser falsa ou que sejam notoriamente falsas) e a falsidade
                                ideológica; publicar ou transmitir qualquer conteúdo abusivo ou ofensivo nos comentários;
                                replicar ou armazenar conteúdo abusivo nos servidores da Se liga jogador; fazer qualquer
                                coisa ou praticar qualquer ato contrário à boa-fé e aos usos e costumes das comunidades
                                virtuais e que possam ofender qualquer direito de terceiros. Por violação aos usos e
                                costumes de comunidades virtuais também deve ser entendido o uso excessivo de texto em
                                letras maiúsculas, uso de críticas ofensivas (conhecidas como flamming), a inclusão
                                desnecessária e imprudente de comunicações anteriores em qualquer publicação ou transmissão,
                                bem como qualquer outro ato que esteja em desacordo com a etiqueta da Internet comumente
                                aceita. cometer fraude;

                                O usuário não irá violar ou infringir direitos de propriedade intelectual, direitos
                                fiduciários ou contratuais, direitos de privacidade ou publicidade de outros; propagar,
                                distribuir ou transmitir códigos destrutivos, quer tenham ou não causado danos reais;

                                O usuário não irá vender produtos que não são de sua propriedade, produtos de origem
                                duvidosa, produtos falsificados. Isto se aplica também as contas de jogos, que devem ser de
                                total propriedade do vendedor, contendo os dados de criação, email de criação, chave de
                                recuperação (RK), dados pessoais e documentos que venham a ser necessários para comprovar a
                                propriedade da mesma, bem como para auxiliar em casos de problemas relacionados a compra do
                                seu produto. Em casos de supressão/omissão dessas informações, o produto será avaliado como
                                inseguro e a negociação nula em qualquer problema relacionado à compra que gere um processo
                                de disputa, gerando cancelamento do pedido e reembolso ao comprador.

                                O usuário não irá reunir dados pessoais ou comerciais, incluindo (mas não se limitando a)
                                endereços de e-mail e/ou nomes de qualquer recurso da Internet, seja gerenciado por nós ou
                                por terceiros, para fins comerciais, políticos, de benemerência ou outros, sem o
                                consentimento dos proprietários desses dados; reproduzir, replicar, copiar, alterar,
                                modificar, criar obras derivativas a partir de, vender ou revender qualquer um dos serviços
                                da Se liga jogador ou qualquer parte deles, incluindo websites e páginas web, ou as
                                informações ou dados contidos nos serviços da Se liga jogador; realizar propaganda política
                                nos comentários;

                                O usuário não usará robôs, “spiders” ou qualquer outro dispositivo, automático ou manual,
                                para monitorar ou copiar qualquer conteúdo do serviço da Se liga jogador; transmitir
                                conteúdo que não pertence ao Usuário ou que ele não tenha direito de publicar ou distribuir,
                                seja sob lei ou contrato; acessar a Ferramenta sem autorização, por meio de práticas de
                                “hacking”, “password mining” ou qualquer outro meio fraudulento ou que represente violação a
                                direito de terceiros; realizar ou incentivar atividades ilegais, incluindo (mas não se
                                limitando a) promover ou facilitar o acesso, uso ou venda de substâncias ou dispositivos
                                perigosos; deixar de cumprir com quaisquer leis, normas, regras, princípios e
                                regulamentações aplicáveis;

                                O usuário não irá ajudar qualquer terceiro a realizar qualquer uma das ações vedadas por
                                estes Termos e Condições de Uso. A Se liga jogador tem o direito de remover o(s)
                                comentário(s) de Usuários se considerar que esse conteúdo é impróprio ou inadequado, que
                                viole estes Termos e Condições de Uso, a legislação ou qualquer direito de terceiros. A Se
                                liga jogador se reserva o direito de verificar ou moderar o conteúdo dos comentários
                                publicados por meio de sua ferramenta de comentários a qualquer momento, caso julgue
                                necessário, conforme indicado no item 11 destes Termos.

                                O usuário não irá anunciar produtos/serviços proibidos, listados abaixo:

                                Contas NFA (Non Full Access) ou Inativas.
                                IPTV e Painéis.
                                Produtos piratas.
                                Cursos, Ebooks e semelhantes sem autorização ou não serem postadas pelo próprio autor.
                                Hack, Cheats, Aimbots, Bots, Scripts e semelhantes.
                                "Métodos", Apostas e Robôs.
                                Produtos e Serviços duvidosos e maliciosos.
                                Produtos e Serviços ilegais, telas fakes, CC, mix, tokens.
                                Conteúdo Adulto +18.
                                Produtos Físicos.
                                Produtos relacionados à marca Globo e parceiros (Globo, Globo Play, Telecine, Discovery,
                                Premiere, Combate, Claro TV, VIVO TV, Sky, Canais Abertos, Megapix).
                                Produtos relacionados à marca Ifood e parceiros sem autorização de venda e/ou revenda.
                                Capa Optifine (Minecraft).
                                Robux Gamepass (Roblox).
                                Ou qualquer outro produto/serviço que nossa equipe considere que possa ser prejudicial aos
                                compradores e/ou que prejudique terceiros.

                                <strong>8. DIREITOS DE PROPRIEDADE INTELECTUAL</strong>
                                A Se liga jogador respeita os direitos de propriedade intelectual de terceiros e requer que
                                os Usuários façam o mesmo. Ao enviar qualquer conteúdo ou informação para o Site, incluindo
                                textos, tais como comentários através da Ferramenta, fóruns de discussão, comunidades,
                                enquetes, testes, seção de dúvidas, participação em concurso cultural, fotografias,
                                ilustrações, vídeos, arquivos de áudio e outros materiais, o Usuário declara autorizar, de
                                forma gratuita, não exclusiva, perpétua, global e livre de royalty, o uso do material pela
                                Se liga jogador e suas empresas afiliadas e parceiras, por qualquer modalidade e suporte,
                                para publicação, reprodução, transmissão, retransmissão, distribuição, comunicação ao
                                público, edição, adaptação e outras transformações, tradução para qualquer idioma, inclusão
                                em quaisquer outras obras, representação, execução, uso por radiodifusão e outros meios de
                                comunicação, mediante o emprego de qualquer tecnologia, exposição, inclusão em base de dados
                                e quaisquer outras modalidades de utilização existentes ou que venham a ser inventadas no
                                futuro, em quaisquer suportes existentes ou que venham a ser inventados no futuro,
                                autorizando também a criação de obras derivadas e o sublicenciamento do material para uso em
                                outras plataformas de comunicação da Se liga jogador, sem limite de tempo e território.

                                Qualquer eventual omissão não implicará limitação de uso do material pela Se liga jogador.
                                Se o Usuário não concorda em autorizar a Se liga jogador a utilizar sua contribuição
                                conforme acima, o Usuário então não deverá submeter qualquer material para o Site. Todos os
                                direitos autorais patrimoniais sobre o material submetido pelo Usuário continuam sendo de
                                sua propriedade e seu nome será citado sempre que o material for utilizado pela Se liga
                                jogador, conforme informado pelo Usuário, exceto se o espaço ou suporte físico em que for
                                figurar não possibilitar essa citação. A Se liga jogador não está obrigada a utilizar os
                                materiais enviados pelo Usuário e está autorizada a editar os comentários enviados pelo
                                Usuário.

                                O Usuário reconhece e declara que em qualquer contribuição submetida para o Site, o material
                                correspondente é de sua exclusiva criação, não constituindo violação de direitos autorais,
                                marcas, segredos, direitos de personalidade, incluindo honra, intimidade, vida privada e a
                                imagem das pessoas, direitos patrimoniais e quaisquer outros direitos de terceiros e que
                                possui poderes para autorizar o uso do material pela Se liga jogador conforme acima.

                                Desde que citada a fonte (inclusive o nome do autor, quando possível e aplicável) e dentro
                                das condições e limites previstos em lei, notadamente a Lei de Direitos Autorais (Lei n.º
                                9.610/98), o Usuário não pode reproduzir, publicar, apresentar, alugar, oferecer ou expor
                                qualquer cópia de qualquer conteúdo pertencente à Se liga jogador sem o consentimento da Se
                                liga jogador ou, no caso de conteúdo de autoria de terceiros, sem o consentimento do autor
                                ou autora. O Usuário se compromete a cumprir todas as leis nacionais e internacionais
                                referentes aos Direitos de Propriedade Intelectual.

                                <strong>9. DENÚNCIA DE ABUSOS E VIOLAÇÃO</strong>
                                O Usuário se compromete a denunciar quaisquer abusos ou violação destes Termos e Condições
                                de Uso ou de quaisquer direitos de terceiros que observar e/ou for vítima quando da
                                utilização da Ferramenta. O Usuário pode denunciar, através da Ferramenta Report e
                                Denunciar, qualquer usuário, anúncio ou pergunta/resposta. Caso queira, poderá procurar um
                                moderador para reportar as violações e receber orientações.

                                Todo conteúdo que o Usuário publica utilizando a Ferramenta é uma informação que, por sua
                                natureza e característica, é pública, aberta e não confidencial. Ao revelar dados pessoais,
                                tais como seu nome e endereço de e-mail nos comentários, o Usuário aceita e compreende que
                                essa informação pode ser coletada e usada por outras pessoas para se comunicarem com ele,
                                sem que seja imputável qualquer responsabilidade à Se liga jogador. Desta forma, a Se liga
                                jogador recomenda que o Usuário seja, portanto, cuidadoso ao decidir compartilhar qualquer
                                dado pessoal no Site.

                                <strong>10. ISENÇÃO DE GARANTIAS E LIMITAÇÃO DE RESPONSABILIDADE</strong>
                                O Usuário isenta a Se liga jogador de qualquer responsabilidade quanto à veracidade dos
                                dados pessoais fornecidos por ele quando do uso da Ferramenta, bem como por qualquer
                                violação a direitos de terceiros, ocorrida através da ferramenta no Site decorrentes de suas
                                declarações. O usuário reconhece, ainda, que estes Termos e Condições de Uso da Ferramenta
                                oferecida pela Se liga jogador devem ser observados e fielmente cumpridos, sob pena de
                                cancelamento de bloqueio de utilização da Ferramenta e demais medidas cabíveis, caso os
                                mencionados Termos forem violados ou descumpridos.

                                Ao utilizar os serviços de intermediação da Se liga jogador para realizar transações com
                                vendedores independentes, é importante ter em mente que o vendedor determina as condições de
                                compra, incluindo preço, pagamento, entrega, garantia, devolução, troca e reembolso. A Se
                                liga jogador não é responsável por quaisquer danos que possam ser causados durante essas
                                transações.

                                Caso ocorra algum problema com um pedido, o comprador deve entrar em contato diretamente com
                                o vendedor através do sistema disponibilizado pela Se liga jogador. Se o problema não for
                                resolvido pelo vendedor, o comprador pode tomar medidas coercitivas contra o vendedor. A Se
                                liga jogador pode fornecer dados coletados durante o registro/cadastro do vendedor para
                                ajudar na identificação do mesmo.

                                Os serviços de intermediação fornecidos pela Se liga jogador, incluindo informações,
                                conteúdos, materiais, produtos digitais e outros serviços, são fornecidos "como estão". A Se
                                liga jogador não garante o nível de qualidade ou entrega em relação aos serviços, já que
                                apenas realiza a intermediação entre comprador e vendedor.

                                A Se liga jogador não faz representações ou garantias de qualquer tipo, expressas ou
                                implícitas, com relação ao desempenho dos serviços ou às informações, conteúdo, materiais,
                                produtos (incluindo todos os artigos digitais) ou outras sub-modalidades incluídas nos
                                serviços disponibilizados pelo vendedor.

                                Ao utilizar os serviços Se liga jogador, o usuário concorda expressamente que o uso é por
                                sua conta e risco exclusivo. A Se liga jogador não é responsável por quaisquer danos ou
                                prejuízos decorrentes da compra ou venda de produtos digitais entre vendedores independentes
                                através da plataforma.

                                O Usuário é considerado legalmente responsável pelo conteúdo de seus comentários na
                                Ferramenta. A Se liga jogador não se responsabiliza por quaisquer danos sofridos pelo
                                Usuário ou terceiros que, de qualquer modo, tenha origem ou dependência relacionada à
                                Ferramenta. A Se liga jogador se exime de quaisquer responsabilidades sobre prejuízos
                                resultantes de qualquer interrupção ou erro no Site virtuais da Se liga jogador, incluindo a
                                impossibilidade de acessar o Site e/ou os websites relacionados a ele.

                                A Se liga jogador não é proprietária dos produtos oferecidos pelos vendedores, não detém a
                                posse deles, não realiza as ofertas de venda, tampouco intervém na entrega dos produtos,
                                cuja negociação se inicie no site. O Usuário reconhece que não há nenhum envolvimento ou
                                intervenção da Se liga jogador nos negócios celebrados com os vendedores no site. Em nenhum
                                caso Se liga jogador será responsável por qualquer dano ou prejuízo sofrido pelo Usuário em
                                decorrência das negociações realizadas por meio do site, em função da conduta dos
                                vendedores, inclusive, mas não se limitando, fraudes ou estelionatos online.

                                A Se liga jogador não tem a obrigação de controlar, e efetivamente não controla, a oferta e
                                comercialização de Produtos nas Lojas Virtuais de terceiros, as condições de venda dos
                                Produtos estabelecidas pelos Comerciantes, e o cumprimento, pelo Comerciante, das obrigações
                                decorrentes da oferta e comercialização dos Produtos.

                                A Se liga jogador também não se responsabiliza pela transação efetuada entre Usuário e
                                Comerciante, pelo efetivo cumprimento das obrigações assumidas pelos Comerciantes, nem pela
                                existência, qualidade, estado, licitude, integridade ou legitimidade dos produtos oferecidos
                                e/ou vendidos pelos Comerciantes no site.

                                Se liga jogador não outorga garantia por vícios ocultos ou aparentes nos produtos e/ou nas
                                negociações entre os Usuários e Comerciantes. O Usuário reconhece e aceita que, ao realizar
                                negociações com os Comerciantes, o faz por sua conta e risco, isentando a Se liga jogador de
                                qualquer responsabilidade.

                                Cabe ao comprador assumir ou não o risco em comprar um produto sob a condição de serem
                                informados todos os aspectos em que o produto se encontra pelo vendedor, possuindo ou não
                                dados de criação, como e-mail, documentos e comprovações de compras, seguindo habilmente
                                orientações presentes no Código de Defesa do Consumidor. (art. 6º do CDC, um dos direitos
                                básicos do consumidor é a "informação adequada e clara sobre os diferentes produtos e
                                serviços, com especificação correta de quantidade, características, composição, qualidade e
                                preço, bem como sobre os riscos que apresentam").

                                A garantia do produto / serviço é de única e exclusivamente responsabilidade total do
                                próprio vendedor.

                                O plano adicional adquirido no momento da compra refere-se a tempo de suporte agilizado e
                                prioridade nos atendimentos relacionados a compra, não tendo relação com valores pagos e
                                reembolsos posteriores. Isto é, não concede garantia sobre o valor pago, integridade do
                                produto e/ou serviço.

                                Em casos de vendas de produtos digitais denominados GIFT CARDS, VOUCHERS ou CÓDIGOS DE
                                ATIVAÇÃO, o vendedor concorda que fará a entrega do produto utilizando de meios de gravação
                                para registrar a correta entrega do produto, bem como acompanhar a ativação do produto em
                                questão no momento da entrega. Tais informações devem constar na descrição do anúncio ou no
                                chat da venda do produto para fins de esclarecimentos e necessidade da ação.

                                Em casos de compras de produtos digitais denominados GIFT CARDS, VOUCHERS ou CÓDIGOS DE
                                ATIVAÇÃO, o comprador concorda que estes não poderão ser reembolsados devido a sua natureza.

                                A data limite para SOLICITAÇÃO DE REEMBOLSO nas situações mencionadas na Política de
                                Reembolso será informada no chat no início da compra, que coincide com a data de liberação
                                para o vendedor retirar o dinheiro. Considera-se que este prazo é mais que suficiente para o
                                usuário conferir a integridade do produto adquirido. Após a liberação de pagamento para o
                                vendedor - independente do produto/serviço apresentar desvios, inconsistências e/ou defeitos
                                -, a Se liga jogador não garante e não detém mais a posse do valor pago e as garantias,
                                deveres e reembolsos são de responsabilidade do vendedor.

                                <strong>11. PRIVACIDADE DE DADOS</strong>
                                A Se liga jogador não se responsabiliza por quaisquer danos que o Usuário possa sofrer, que
                                tenham origem na divulgação dos dados pessoais do Usuário ou de terceiros em materiais
                                publicados nos comentários. A Se liga jogador preserva a privacidade dos dados dos Usuários,
                                e se compromete a revelar os dados pessoais do Usuário apenas devido a um dos seguintes
                                motivos: por lei; por meio de uma ordem ou intimação de um órgão, autoridade ou tribunal com
                                poderes para tanto e de jurisdição competente; sob solicitação da parte lesada com
                                justificativa e objetivo exclusivos para fins judiciais; para garantir a segurança dos
                                sistemas, resguardar direitos e prevenir responsabilidades da Se liga jogador.

                                <strong>12. LEGISLAÇÃO APLICÁVEL</strong>
                                Estes Termos e Condições de Uso são governados e interpretados segundo as leis da República
                                Federativa do Brasil e todas as disputas, ações e outros assuntos relacionados serão
                                determinados de acordo com essa legislação.
                                Para solucionar eventuais controvérsias, as partes elegem o foro da comarca de Maringá - PR,
                                renunciando a qualquer outro, por mais privilegiado que seja.
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
