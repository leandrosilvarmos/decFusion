@extends('layouts.admin')

@section('content')


<section class="cards-info">

    <div class="col-md-4">
        <div class="card-counter danger">
            <div class="card-title">
                <h3> Produtos Menos</h3>
            </div>
            <div class="row">
                <div class="col-auto">
                    <span class="count-numbers">599</span>
                    <span class="count-name">Instances</span>
                    <i class="fas fa-calendar"></i>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="card-counter danger">
            <div class="card-title">
                <h3> Total Clientes </h3>
            </div>
            <div class="row">
                <div class="col-auto">
                    <span class="count-numbers">599</span>
                    <span class="count-name">Instances</span>
                    <i class="fas fa-calendar"></i>
                </div>
            </div>
        </div>
    </div>



    <div class="col-md-4">
        <div class="card-counter danger">
            <div class="card-title">
                <h3> Vendas Montante </h3>
            </div>
            <div class="row">
                <div class="col-auto">
                    <span class="count-numbers">599</span>
                    <span class="count-name">Instances</span>
                    <i class="fas fa-calendar"></i>
                </div>
            </div>
        </div>
    </div>


</section>


<hr>


<section class="tables-info">

    <div>
        <table class="table">
            <thead>
                <tr>
                    <th><i class="fas fa-file-signature aria-hidden=" true"></i>Nome</th>
                    <th scope="col">Cpf</th>
                    <th><i class="fas fa-mobile-alt" arial-hidden="true"></i> Celular</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>

                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>

                </tr>
                <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                </tr>

            </tbody>

            </tbody>
        </table>



</section>





@endsection