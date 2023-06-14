<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <div class="card-header title_modal">{{ __('Login') }}</div>
                <button type="button" class="btn_close" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>

            <div class="modal-body">

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="email" class="form-label">{{ __('Seu E-mail') }}</label>

                        <div class="input-group mb-1 ">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="form-label">{{ __('Sua senha') }}</label>

                        <div class="div_password col-md-6 input-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <i id="btnView" class="material-icons" onclick="viewSenha()">visibility</i>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="div_remember"> 
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Mantenha-me conectado') }}
                                </label>
                        </div>
                    </div>


                    <div class="">
                        <button type="submit" class="btn_modal">
                            {{ __('Login') }}
                        </button>
                    </div>

                    <div class="div_links row  mt-1">
                        
                        <a class="btn btn-link" href="" data-bs-toggle="modal" data-bs-target="#staticBackdropTwo">
                            {{ __('Criar uma conta') }}
                        </a>
                    
                    </div>


                       
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>