<!-- Modal -->
<div class="modal fade" id="staticBackdropResetPass" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <div class="card-header title_modal">{{ __('Recuperção de senha') }}</div>
                <button type="button" class="btn_close" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>

            <div class="modal-body">

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    {{-- <input type="hidden" name="token" value="{{ $token }}">  --}}

                    <div class="row mb-3">
                        <label for="email" class="form-label">{{ __('E-mail de cadastro') }}</label>

                        <div class="input-group mb-1">
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password-confirm"
                            class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>


                    <div class="">
                        <button type="submit" class="btn_modal">
                            {{ __('Enviar') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
