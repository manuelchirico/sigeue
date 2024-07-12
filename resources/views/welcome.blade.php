
@extends('layouts.app')

@section('content')




<div class="main-panel">

          <div class="content-wrapper">
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
               
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">
                              @if ($ultimoPagamentoCampo)
                                  {{ number_format($ultimoPagamentoCampo->pagamento, 2) }}
                              @else
                                  0.00
                              @endif
                            </h3>
                            <p class="text-{{ $variacaoPercentualCampo >= 0 ? 'success' : 'danger' }} ms-2 mb-0 font-weight-medium">
                              {{ $variacaoPercentualCampo >= 0 ? '+' : '' }}{{ number_format($variacaoPercentualCampo, 2) }}%
                            </p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-{{ $variacaoPercentualCampo >= 0 ? 'success' : 'danger' }}">
                            <span class="mdi mdi-arrow-{{ $variacaoPercentualCampo >= 0 ? 'top-right' : 'bottom-left' }} icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Último Pagamento de Campos</h6>
                    </div>
                  </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">
                            @if ($ultimoPagamentoGinasio)
                                {{ number_format($ultimoPagamentoGinasio->pagamento, 2) }}
                            @else
                                $0.00
                            @endif
                          </h3>
                          <p class="text-{{ $variacaoPercentualGinasio >= 0 ? 'success' : 'danger' }} ms-2 mb-0 font-weight-medium">
                            {{ $variacaoPercentualGinasio >= 0 ? '+' : '' }}{{ number_format($variacaoPercentualGinasio, 2) }}%
                          </p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-{{ $variacaoPercentualGinasio >= 0 ? 'success' : 'danger' }}">
                          <span class="mdi mdi-arrow-{{ $variacaoPercentualGinasio >= 0 ? 'top-right' : 'bottom-left' }} icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Último Pagamento de Ginásio</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">
                            @if ($ultimaReserva)
                                {{ number_format($ultimaReserva->valor_total, 2) }}
                            @else
                                $0.00
                            @endif
                          </h3>
                          <p class="text-{{ $variacaoPercentualReserva >= 0 ? 'success' : 'danger' }} ms-2 mb-0 font-weight-medium">
                            {{ $variacaoPercentualReserva >= 0 ? '+' : '' }}{{ number_format($variacaoPercentualReserva, 2) }}%
                          </p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-{{ $variacaoPercentualReserva >= 0 ? 'success' : 'danger' }}">
                          <span class="mdi mdi-arrow-{{ $variacaoPercentualReserva >= 0 ? 'top-right' : 'bottom-left' }} icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Última Entrada Residencial</h6>
                  </div>
                </div>
            
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">
                            ${{ number_format($receitasMesAtual, 2) }}
                          </h3>
                          <p class="text-{{ $variacaoPercentualReceita >= 0 ? 'success' : 'danger' }} ms-2 mb-0 font-weight-medium">
                            {{ $variacaoPercentualReceita >= 0 ? '+' : '' }}{{ number_format($variacaoPercentualReceita, 2) }}%
                          </p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-{{ $variacaoPercentualReceita >= 0 ? 'success' : 'danger' }}">
                          <span class="mdi mdi-arrow-{{ $variacaoPercentualReceita >= 0 ? 'top-right' : 'bottom-left' }} icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Receita Mensal</h6>
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Histórico de Transações</h4>
                    <div class="position-relative">
                      <div class="daoughnutchart-wrapper">
                        <canvas id="transaction-history" class="transaction-chart"></canvas>
                      </div>
                      <div class="custom-value">
                          {{ number_format($totalValorExiste, 2) }} <span>Total_existe</span>
                      </div>
                    </div>
                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                      <div class="text-md-center text-xl-left">
                        <h6 class="mb-1">Valor de Entrada Mensal</h6>
                        <p class="text-muted mb-0">{{ \Carbon\Carbon::now()->format('F Y') }}</p>
                      </div>
                      <div class="align-self-center flex-grow text-end text-md-center text-xl-right py-md-2 py-xl-0">
                        <h6 class="font-weight-bold mb-0">
                            ${{ number_format($entradasMesAtual, 2) }}
                        </h6>
                      </div>
                    </div>
                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                      <div class="text-md-center text-xl-left">
                        <h6 class="mb-1">Saldo Saídas</h6>
                        <p class="text-muted mb-0">{{ \Carbon\Carbon::now()->format('F Y') }}</p>
                      </div>
                      <div class="align-self-center flex-grow text-end text-md-center text-xl-right py-md-2 py-xl-0">
                        <h6 class="font-weight-bold mb-0">
                            ${{ number_format($saidasMesAtual, 2) }}
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title mb-1">Open Projects</h4>
                      <p class="text-muted mb-1">Your data status</p>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="preview-list">
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary">
                                <i class="mdi mdi-file-document"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Admin dashboard design</h6>
                                <p class="text-muted mb-0">Broadcast web app mockup</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">15 minutes ago</p>
                                <p class="text-muted mb-0">30 tasks, 5 issues </p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-success">
                                <i class="mdi mdi-cloud-download"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Wordpress Development</h6>
                                <p class="text-muted mb-0">Upload new design</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">1 hour ago</p>
                                <p class="text-muted mb-0">23 tasks, 5 issues </p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-info">
                                <i class="mdi mdi-clock"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Project meeting</h6>
                                <p class="text-muted mb-0">New project discussion</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">35 minutes ago</p>
                                <p class="text-muted mb-0">15 tasks, 2 issues</p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-danger">
                                <i class="mdi mdi-email-open"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Broadcast Mail</h6>
                                <p class="text-muted mb-0">Sent release details to team</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">55 minutes ago</p>
                                <p class="text-muted mb-0">35 tasks, 7 issues </p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-warning">
                                <i class="mdi mdi-chart-pie"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">UI Design</h6>
                                <p class="text-muted mb-0">New application planning</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">50 minutes ago</p>
                                <p class="text-muted mb-0">27 tasks, 4 issues </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Revenue</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">$32123</h2>
                          <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                        </div>
                        <h6 class="text-muted font-weight-normal">11.38% Since last month</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Sales</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">$45850</h2>
                          <p class="text-success ms-2 mb-0 font-weight-medium">+8.3%</p>
                        </div>
                        <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Purchase</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">$2039</h2>
                          <p class="text-danger ms-2 mb-0 font-weight-medium">-2.1% </p>
                        </div>
                        <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024 <a href="#" target="_blank">Unilicungo-DUE</a>. All rights reserved.</span>
              <span class="text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center"> <span class="text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center">   DEpartamento de Unidades Especiais <i class="mdi mdi-heart text-danger"></i></span> <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->



        @endsection