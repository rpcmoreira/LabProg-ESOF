@extends('layouts.app')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registar') }}</div>

                <div class="card-body">
                    <form action="{{url('/candidatos')}}" method="post">
                        @csrf

                        <div class="row mb-3">
                            <label for="Nome" class="col-md-4 col-form-label text-md-end">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('Nome') is-invalid @enderror" name="Nome" value="{{ old('Nome') }}" required autocomplete="Nome" autofocus>

                                @error('Nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Sobrenome" class="col-md-4 col-form-label text-md-end">{{ __('Sobrenome') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('Sobrenome') is-invalid @enderror" name="Sobrenome" value="{{ old('Sobrenome') }}" required autocomplete="Sobrenome" autofocus>

                                @error('Sobrenome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Cargo" class="col-md-4 col-form-label text-md-end">{{ __('Cargo') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('Cargo') is-invalid @enderror" name="Cargo" value="{{ old('Cargo') }}" required autocomplete="Cargo" autofocus>

                                @error('Cargo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="AnosExperiencia" class="col-md-4 col-form-label text-md-end">{{ __('Anos de Experiencia') }}</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control @error('AnosExperiencia') is-invalid @enderror" name="AnosExperiencia" value="{{ old('AnosExperiencia') }}" required autocomplete="AnosExperiencia" autofocus min="0" max="70">

                                @error('AnosExperiencia')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Sexo" class="col-md-4 col-form-label text-md-end">{{ __('Sexo') }}</label>

                            <div class="col-md-6">
                                <select name="Sexo" class="form-control @error('Sexo') is-invalid @enderror" name="Sexo" value="{{ old('Sexo') }}" required autocomplete="Sexo" autofocus>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                    <option value="Outro">Outro</option>
                                </select>

                                @error('Sexo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="Email" type="Email" class="form-control @error('Email') is-invalid @enderror" name="Email" value="{{ old('Email') }}" required autocomplete="Email">

                                @error('Email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="Password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Password') }}</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="Confirmar_password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection