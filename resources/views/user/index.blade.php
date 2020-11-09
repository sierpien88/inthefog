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
                        <a class="btn btn-success" href="{{ route('user.new') }}">Dodaj nowego</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody>

                            @if(count($list))

                                @foreach($list as $item)
                                    <tr>
                                        <td><h3 style="border-left: 20px solid {{ $item->color }}; padding-left: 15px;"> {{ $item->name }} {{ $item->surname }}</h3></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-info" href="{{ route('user.edit',['place'=> $item->id]) }}">Edytuj</a>
                                                <a class="btn btn-danger" href="{{ route('user.delete',['place'=> $item->id]) }}">Usuń</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            @else
                                <tr>
                                    <td colspan="3">Brak wpisów</td>
                                </tr>
                            @endif

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </section><!-- /.content -->
@endsection