@extends('layouts.app')

@section('content')

<div class="welcome">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <h2>Dashboard</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="statistics">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="box">
                    <i class="fas fa-users fa-fw bg-primary"></i> 
                    <div class="info">
                        <h3>3:</h3> <span> Usuarios</span>
                        <p>cadastrados na base</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <i class="fa fa-caret-up fa-fw danger bg-primary"></i> 
                    <div class="info">
                        <h3>Produto</h3> <span> </span>
                        <p>Mais Vendido</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <i class="far fa-money-bill-alt fa-fw success bg-primary"></i> 

                    <div class="info">
                        <h3>Montante</h3>
                        <p>valor de vendas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


            <div class="card shadow dispatched-orders mt-4">
                <h3 class="stat-title font-weight-bold">Vendas</h3>
                <div class="table-responsive">
                    <table class="table orders-table">
                        <thead>
                            <tr class="text-uppercase">
                                <th>Id</th>
                                <th>Cliente</th>
                                <th>Data</th>
                                <th>Valor</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>


                            <tr>
                                <td>Dallas Oak Dining Chair</td>
                                <td>20</td>
                                <td>$1,342</td>
                            </tr>

                            <tr>
                                <td>Benmore Glass Coffee Table</td>
                                <td>18</td>
                                <td>$1,550</td>
                            </tr>

                            <tr>
                                <td>Aoraki Leather Sofa</td>
                                <td>15</td>
                                <td>$4,170</td>
                            </tr>

                            <tr>
                                <td>Bali Outdoor Wicker Chair</td>
                                <td>25</td>
                                <td>$2,974</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>






@endsection