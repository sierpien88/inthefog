@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pracownicy
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">

                <div class="box">
                    <div class="box-header with-border">
                        <a class="btn btn-warning" href="{{ route('user.index') }}">Wróć</a>
                    </div>

                    <form role="form" method="post" action="{{ route('user.save') }}">

                        {{ csrf_field() }}

                        <div class="box-body">
                            <div class="form-group">
                                <label for="place_name">E-mail (login do konta)</label>
                                <input name="email" type="email" class="form-control" id="place_name" placeholder="email@email.pl">
                            </div>

                            <div class="form-group">
                                <label for="place_name">Hasło do konta</label>
                                <input name="password" type="password" class="form-control" id="place_name" placeholder="Hasło">
                            </div>

                            <div class="form-group">
                                <label for="place_name">Imię</label>
                                <input name="name" type="text" class="form-control" id="place_name" placeholder="Imię">
                            </div>

                            <div class="form-group">
                                <label for="place_address">Nazwisko</label>
                                <input name="surname" type="text" class="form-control" id="place_address" placeholder="Nawisko">
                            </div>

                            <div class="form-group">
                                <label for="place_address">Ksywka</label>
                                <input name="nick" type="text" class="form-control" id="place_address" placeholder="Ksywka">
                            </div>

                            <div class="form-group">
                                <label for="place_address">Kolor pracownika</label>
                                <div class="input-group my-colorpicker colorpicker-element">
                                    <div class="input-group-addon">
                                        <i style="background-color: rgb({{ $color[0] }}, {{ $color[1] }}, {{ $color[2] }});"></i>
                                    </div>
                                    <input type="text" name="color" value="#{{ dechex($color[0]).dechex($color[1]).dechex($color[2]) }}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="place_address">Stanowisko</label>
                                <select name="role" class="form-control" id="role">
                                    <option value="1">Pracownik</option>
                                    <option value="2">Manager</option>
                                    <option value="3">Administrator</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="place_address">Miejsca pracy</label>
                            </div>
                            <div class="checkbox">
                                @foreach($places as $place)
                                    <label style="width: 100%; margin-bottom: 3px;">
                                        <input type="checkbox" name="places[]" value="{{ $place->id }}"> <strong>{{ $place->name }}</strong> - {{ $place->address }}
                                    </label>
                                @endforeach
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Utwórz</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section><!-- /.content -->
@endsection