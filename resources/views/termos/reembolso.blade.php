@extends('layouts.secondary-main')

@section('title', 'Política de reembolso')


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
                        <h2><i class="material-icons">description</i> Política de reembolso</h2>
                        <p><small>

                                A Se liga jogador tem uma Política de Reembolso clara e, como forma de segurança para nossos
                                clientes, reserva esse direito sempre que ocorrer uma das situações a seguir:

                                O cliente desiste da compra antes de receber o produto;
                                O cliente desiste da compra (arrependimento), desde que não utilize e mantenha a integridade
                                do produto nas mesmas condições que recebeu;
                                Caso o vendedor não consiga entregar o produto/serviço;
                                Caso o produto/serviço não esteja de acordo com as informações fornecidas no anúncio;
                                Em situações de imprevisto (não tenha mais estoque do produto, por exemplo);
                                Caso o vendedor não responda ou não retorne contato;
                                O reembolso é realizado de acordo com o método de pagamento utilizado pelo cliente:

                                <strong>Cartão de crédito:</strong>

                                O estorno é repassado para a operadora do cartão, caso a fatura já tenha sido fechada, o
                                comprador recebe como crédito na fatura do mês seguinte, do contrário, o abatimento do valor
                                ocorre no período em que o reembolso foi pedido.

                                <strong>Boleto Bancário, Pix, Depósito e Transferência:</strong>

                                O reembolso do valor é feito diretamente no pedido da intervenção ou através do site, onde o
                                saldo ficará disponível em forma de crédito e o usuário poderá comprar qualquer
                                produto/serviço disponível na plataforma ou retirar o saldo para sua conta bancária.
                                Pagamentos via PIX serão reembolsados para a conta de origem.

                                A data limite para <strong>SOLICITAÇÃO DE REEMBOLSO</strong> nas situações mencionadas acima
                                será informada no chat no início da compra, que coincide com a data de liberação para o
                                vendedor retirar o dinheiro. Consideramos que este prazo é mais que suficiente para o
                                usuário conferir a integridade do produto adquirido.

                                Caso haja problemas com a compra após o prazo limite, o reembolso será de responsabilidade
                                do vendedor. Para mais informações sobre reembolsos, devoluções e intervenções, consulte
                                nossos <a href="termos" class="link-purple">Termos de uso</a>.

                                O reembolso é processado em <strong>ATÉ 48 HORAS ÚTEIS</strong>, após ser autorizado por um
                                moderador.


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
