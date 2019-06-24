@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    @include('layouts.headers.guest')

    <div class="container mt--8 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-transparent pb-5">
                        <div class="text-muted text-center mt-2 mb-4"><small>{{ __('Sign up with') }}</small></div>
                        <div class="text-center">
                            <a href="#" class="btn btn-neutral btn-icon mr-4">
                                <span class="btn-inner--icon"><img src="{{ asset('argon') }}/img/icons/common/github.svg"></span>
                                <span class="btn-inner--text">{{ __('Github') }}</span>
                            </a>
                            <a href="#" class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon"><img src="{{ asset('argon') }}/img/icons/common/google.svg"></span>
                                <span class="btn-inner--text">{{ __('Google') }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Material checked -->
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="registerGuru" name="pilihanRegister" checked>
                                        <label class="form-check-label" for="pilihanRegister">Register Guru</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="registerMurid" name="pilihanRegister">
                                        <label class="form-check-label" for="pilihanRegister">Register Murid</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-muted mb-4">
                            <small>{{ __('Or sign up with credentials') }}</small>
                        </div>

                        <form role="form" id="form1" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group{{ $errors->has('nama') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" placeholder="{{ __('Nama') }}" type="text" name="nama" value="{{ old('name') }}" required autofocus>
                                </div>
                                @if ($errors->has('nama'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('alamat') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-square-pin"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" placeholder="{{ __('Alamat') }}" type="text" name="alamat" value="{{ old('name') }}" required autofocus>
                                </div>
                                @if ($errors->has('alamat'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('jeniskelamin') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('jeniskelamin') ? ' is-invalid' : '' }}" placeholder="{{ __('Jenis Kelamin') }}" type="text" name="jeniskelamin" value="{{ old('name') }}" required autofocus>
                                </div>
                                @if ($errors->has('jeniskelamin'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('jeniskelamin') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('notelp') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('notelp') ? ' is-invalid' : '' }}" placeholder="{{ __('No Telp') }}" type="tel" name="notelp" value="{{ old('name') }}" required autofocus>
                                </div>
                                @if ($errors->has('notelp'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('notelp') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('institusi') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('institusi') ? ' is-invalid' : '' }}" placeholder="{{ __('Institusi') }}" type="text" name="institusi" value="{{ old('name') }}" required autofocus>
                                </div>
                                @if ($errors->has('institusi'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('institusi') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('programstudi') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-book-bookmark"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('programstudi') ? ' is-invalid' : '' }}" placeholder="{{ __('Program Studi') }}" type="text" name="programstudi" value="{{ old('name') }}" required autofocus>
                                </div>
                                @if ($errors->has('programstudi'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('programstudi') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('ipk') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-paper-diploma"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('ipk') ? ' is-invalid' : '' }}" placeholder="{{ __('IPK') }}" type="text" name="ipk" value="{{ old('name') }}" required autofocus>
                                </div>
                                @if ($errors->has('ipk'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('ipk') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('bio') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-user-run"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('bio') ? ' is-invalid' : '' }}" placeholder="{{ __('Bio') }}" type="text" name="bio" value="{{ old('name') }}" required autofocus>
                                </div>
                                @if ($errors->has('bio'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('bio') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('foto') ? ' has-danger' : '' }}">
                            <small>{{ __('Upload foto untuk profil') }}</small>
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-album-2"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('foto') ? ' is-invalid' : '' }}" placeholder="{{ __('Foto') }}" type="file" name="foto" value="{{ old('name') }}" required autofocus>
                                </div>
                                @if ($errors->has('foto'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('foto') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" required>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" type="password" name="password" required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="{{ __('Confirm Password') }}" type="password" name="password_confirmation" required>
                                </div>
                            </div>
                            <div class="text-muted font-italic">
                                <small>{{ __('password strength') }}: <span class="text-success font-weight-700">{{ __('strong') }}strong</span></small>
                            </div>
                            <div class="row my-4">
                                <div class="col-12">
                                    <div class="custom-control custom-control-alternative custom-checkbox">
                                        <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                                        <label class="custom-control-label" for="customCheckRegister">
                                            <span class="text-muted">{{ __('I agree with the') }} <a href="#!">{{ __('Privacy Policy') }}</a></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">{{ __('Create account') }}</button>
                            </div>
                        </form>

                            <form role="form" id="form2" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group{{ $errors->has('nama') ? ' has-danger' : '' }}">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                        </div>
                                        <input class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" placeholder="{{ __('Nama') }}" type="text" name="nama" value="{{ old('name') }}" required autofocus>
                                    </div>
                                    @if ($errors->has('nama'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('nama') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('alamat') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-square-pin"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" placeholder="{{ __('Alamat') }}" type="text" name="alamat" value="{{ old('name') }}" required autofocus>
                                </div>
                                @if ($errors->has('alamat'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('asalsekolah') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-building"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('asalsekolah') ? ' is-invalid' : '' }}" placeholder="{{ __('Asal Sekolah') }}" type="text" name="asalsekolah" value="{{ old('name') }}" required autofocus>
                                </div>
                                @if ($errors->has('asalsekolah'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('asalsekolah') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('jeniskelamin') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('jeniskelamin') ? ' is-invalid' : '' }}" placeholder="{{ __('Jenis Kelamin') }}" type="text" name="jeniskelamin" value="{{ old('name') }}" required autofocus>
                                </div>
                                @if ($errors->has('jeniskelamin'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('jeniskelamin') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('notelp') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('notelp') ? ' is-invalid' : '' }}" placeholder="{{ __('No Telp') }}" type="tel" name="notelp" value="{{ old('name') }}" required autofocus>
                                </div>
                                @if ($errors->has('notelp'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('notelp') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('foto') ? ' has-danger' : '' }}">
                            <small>{{ __('Upload foto untuk profil') }}</small>
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-album-2"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('foto') ? ' is-invalid' : '' }}" placeholder="{{ __('Foto') }}" type="file" name="foto" value="{{ old('name') }}" required autofocus>
                                </div>
                                @if ($errors->has('foto'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('foto') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" required>
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" type="password" name="password" required>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="{{ __('Confirm Password') }}" type="password" name="password_confirmation" required>
                                    </div>
                                </div>
                                <div class="text-muted font-italic">
                                    <small>{{ __('password strength') }}: <span class="text-success font-weight-700">{{ __('strong') }}strong</span></small>
                                </div>
                                <div class="row my-4">
                                    <div class="col-12">
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                                            <label class="custom-control-label" for="customCheckRegister">
                                                <span class="text-muted">{{ __('I agree with the') }} <a href="#!">{{ __('Privacy Policy') }}</a></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-4">{{ __('Create account') }}</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
