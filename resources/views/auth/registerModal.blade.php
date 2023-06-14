<!-- Modal -->
<div class="modal fade" id="staticBackdropTwo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <div class="card-header title_modal">{{ __('Crie sua conta') }}</div>
                <button type="button" class="btn_close" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>

            <div class="modal-body">

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!--Name-->
                    <div class="row mb-3">
                        <label for="name" class="form-label">{{ __('Insira seu nome de usário') }}</label>

                        <div class="input-group mb-1">
                            <input id="name" type="text"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!--E-mail-->
                    <div class="row mb-3">
                        <label for="email" class="form-label">{{ __('Insira seu  E-mail') }}</label>

                        <div class="input-group mb-1 ">
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!--E-mail-->
                    <div class="row mb-3">
                        <label for="password" class="form-label">{{ __('Insira uma Senha') }}</label>

                        <div class="div_password col-md-6 input-group">
                            <input id="passwordRegister" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">
                            <i id="btnViewRegisterOne" class="material-icons"
                                onclick="viewSenhaRegister()">visibility</i>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password-confirm"class="form-label">{{ __('Confirme sua senha') }}</label>

                        <div class="div_password col-md-6 input-group">
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                            <i id="btnViewRegisterTwo" class="material-icons">visibility</i>
                        </div>
                    </div>


                    <div class="">
                        <button type="submit" class="btn_modal">
                            {{ __('Finalizar Cadastro') }}
                        </button>
                    </div>

                    <div class="div_links row  mt-1">
                        <a class="btn btn-link" href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            {{ __('Já tenho uma conta') }}
                        </a>
                    </div>



            </div>
            </form>
        </div>
    </div>
</div>
</div>
