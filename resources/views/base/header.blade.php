<!doctype html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en"/>
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}"/>
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Treinamentos - @yield('title', 'Dashboard')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <!-- Dashboard Core -->
    <link href="{{asset('assets/css/dashboard.css')}}" rel="stylesheet"/>
    <script src="{{asset('assets/js/dashboard.js')}}"></script>
    <!-- c3.js Charts Plugin -->
    <link href="{{asset('assets/plugins/charts-c3/plugin.css')}}" rel="stylesheet"/>
    <script src="{{asset('assets/plugins/charts-c3/plugin.js')}}"></script>
    <!-- Input Mask Plugin -->
    <script src="{{asset('assets/plugins/input-mask/plugin.js')}}"></script>

    <!-- For fix bugs and run dropdown -->
    <script src="{{asset('assets/js/vendors/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('assets/plugins/input-mask/jquery.mask.js')}}"></script>


  </head>

  <body class="">
        <div class="page">
            <div class="page-main">
                <div class="header py-4">
                    <div class="container">
                        <div class="d-flex">
                            <a class="header-brand" href="../index.html">
                                <img src="{{asset('uploads/laravel-logo.png')}}" class="header-brand-img" alt="Logo">
                            </a>
                            <div class="d-flex order-lg-2 ml-auto">
                                <div class="nav-item d-none d-md-flex">
                                    <a href="{{Route('site.home')}}" class="btn btn-sm btn-outline-primary">Visitar site</a>
                                </div>
                                <div class="dropdown d-none d-md-flex">
                                    <a class="nav-link icon" data-toggle="dropdown"> <i class="fe fe-bell"></i> <span class="nav-unread"></span> </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a href="#" class="dropdown-item d-flex">
                                            <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/male/41.jpg)"></span>
                                            <div>
                                                <strong>Nathan</strong> pushed new commit: Fix page load performance issue.
                                                <div class="small text-muted">10 minutes ago</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex">
                                            <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/1.jpg)"></span>
                                            <div>
                                                <strong>Alice</strong> started new task: Tabler UI design.
                                                <div class="small text-muted">1 hour ago</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex">
                                            <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/18.jpg)"></span>
                                            <div>
                                                <strong>Rose</strong> deployed new version of NodeJS REST Api V3
                                                <div class="small text-muted">2 hours ago</div>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item text-center text-muted-dark">Mark all as read</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown"> 
                                    <span class="avatar avatar-blue"><?php echo substr(Auth::user()->name, 0,2); ?></span>
                                      <span class="ml-2 d-none d-lg-block"> <span class="text-default">{{Auth::user()->name}}</span> 
                                      <small class="text-muted d-block mt-1">
                                      @if(Auth::user()->permissao == 1)
                                      Aluno
                                      @elseif(Auth::user()->permissao == 2)
                                      Professor
                                      @elseif(Auth::user()->permissao == 3)
                                      Administrador
                                      @else
                                      Guest
                                      @endif
                                      </small> </span> </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="#"> <i class="dropdown-icon fe fe-user"></i> Profile </a>
                                        <a class="dropdown-item" href="#"> <i class="dropdown-icon fe fe-settings"></i> Settings </a>
                                        <a class="dropdown-item" href="#"> <span class="float-right"><span class="badge badge-primary">6</span></span> <i class="dropdown-icon fe fe-mail"></i> Inbox </a>
                                        <a class="dropdown-item" href="#"> <i class="dropdown-icon fe fe-send"></i> Message </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"> <i class="dropdown-icon fe fe-help-circle"></i> Need help? </a>
                                        <a class="dropdown-item" href="{{Route('logout')}}"> <i class="dropdown-icon fe fe-log-out"></i> Sair </a>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse"> <span class="header-toggler-icon"></span> </a>
                        </div>
                    </div>
                </div>

                <!-- ALUNO MENUS -->
                @if(Auth::user()->permissao == 1)
                <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg order-lg-first">
                                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                                    <li class="nav-item">
                                        <a href="{{Route('portal.dashboard')}}" class="nav-link active"><i class="fe fe-home"></i>Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i>Cursos</a>
                                        <div class="dropdown-menu dropdown-menu-arrow">
                                            <a href="#" class="dropdown-item">Meus Cursos</a>
                                            <a href="../charts.html" class="dropdown-item">Novo Curso</a>
                                            <a href="#" class="dropdown-item">Meus Certificados</a>
                                            <a href="../pricing-cards.html" class="dropdown-item">Sugerir um Curso</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link"><i class="fe fe-calendar"></i>Notas e frequência</a>                                     
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-file"></i>Suporte</a>
                                        <div class="dropdown-menu dropdown-menu-arrow">
                                            <a href="#" class="dropdown-item">Abrir um chamado</a>
                                            <a href="#" class="dropdown-item">Lançar justificativa</a>
                                            <a href="#" class="dropdown-item">Dúvidas Frequentes</a>
                                        </div>
                                    </li>
                                 </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ALUNO MENU FIM -->

                <!-- PROFESSOR MENU START -->
                @elseif(Auth::user()->permissao == 2)
                <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg order-lg-first">
                                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                                    <li class="nav-item">
                                        <a href="{{Route('portal.dashboard')}}" class="nav-link active"><i class="fe fe-home"></i> Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{Route('curso.add')}}" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i>Minhas turmas</a>
                                        <div class="dropdown-menu dropdown-menu-arrow">
                                            <a href="#" class="dropdown-item">Ver turmas</a>
                                            <a href="#" class="dropdown-item">Cadastrar aula</a>
                                        </div>
                                      </li>
                                    <li class="nav-item dropdown">
                                      <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-file"></i>Suporte</a>
                                      <div class="dropdown-menu dropdown-menu-arrow">
                                          <a href="#" class="dropdown-item">Abrir um chamado</a>
                                          <a href="#" class="dropdown-item">Lançar justificativa</a>
                                          <a href="#" class="dropdown-item">Dúvidas Frequentes</a>
                                      </div>
                                  </li>
                                 </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PROFESSOR MENU END -->

                <!-- ADMIN MENU START -->
                @elseif(Auth::user()->permissao == 3)
                <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg order-lg-first">
                                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                                    <li class="nav-item">
                                        <a href="{{Route('portal.dashboard')}}" class="nav-link active"><i class="fe fe-home"></i> Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{Route('aluno.lista')}}" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i>Alunos</a>
                                        <div class="dropdown-menu dropdown-menu-arrow">
                                            <a href="{{Route('aluno.lista')}}" class="dropdown-item">Listar alunos</a>
                                            <a href="{{Route('aluno.add')}}" class="dropdown-item">Cadastrar aluno</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="{{Route('aluno.lista')}}" class="nav-link" data-toggle="dropdown"><i class="fe fe-calendar"></i>Cursos</a>
                                        <div class="dropdown-menu dropdown-menu-arrow">
                                            <a href="{{Route('curso.lista')}}" class="dropdown-item">Cursos</a>
                                            <a href="{{Route('turma.lista')}}" class="dropdown-item">Turmas</a>
                                            <a href="#" class="dropdown-item">Professores</a>
                                        </div>                                        
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link"><i class="fe fe-check-square"></i>Certificados</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fe fe-image"></i>Chamados</a>
                                    </li>
                                 </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                <!-- MENU ADMIN END -->

                @if (\Session::has('alerta'))
                <div class="alert alert-danger alert-dismissible">
                  <div class="container">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    {!! \Session::get('alerta') !!}
                  </div>
                </div>
                @endif

                @if (\Session::has('sucesso'))
                <div class="alert alert-info alert-dismissible">
                  <div class="container">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    {!! \Session::get('sucesso') !!}
                  </div>
                </div>
                @endif
                <div class="my-3 my-md-5">

          @yield('content')


        </div>
      </div>



      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="row">
              <div class="col-6 col-md-3">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Equipe</a>
                  </li>
                  <li>
                    <a href="#">Créditos de software</a>
                  </li>
                </ul>
              </div>
              <div class="col-6 col-md-3">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Empresas que contribuiram</a>
                  </li>
                  <li>
                    <a href="#">Usuários que contribuiram</a>
                  </li>
                </ul>
              </div>
              <div class="col-6 col-md-3">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Ideia por trás do projeto</a>
                  </li>
                  <li>
                    <a href="#">Sixth link</a>
                  </li>
                </ul>
              </div>
              <div class="col-6 col-md-3">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Other link</a>
                  </li>
                  <li>
                    <a href="#">Last link</a>
                  </li>
                </ul>
                </div>
              </div>
              
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
            </div>
          </div>
        </div>
      </div>
        <footer class="footer">
          <div class="container">
            <div class="row align-items-center flex-row-reverse">
            <div class="col-auto ml-lg-auto">
              <div class="row align-items-center">
                <div class="col-auto">
                  <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item">
                      <a href="#">Documentação</a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">FAQ</a>
                    </li>
                  </ul>
                </div>
              <div class="col-auto">
                <a href="https://github.com/dshy1/Easy-Course-Management" class="btn btn-outline-primary btn-sm btn-github"><i class="fa fa-github mr-2"></i>GitProject</a>
              </div>
              </div>
            </div>
              <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
              Copyright © 2019
                <a href=".">Tabler</a>. Theme by
                <a href="https://codecalm.net" target="_blank">codecalm.net</a> All rights reserved.
              </div>
            </div>
          </div>
        </footer>
      </div>
      </body>
      </html>
