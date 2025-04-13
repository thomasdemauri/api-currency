<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Conversor de Moedas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS AdminLTE -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Início</a>
      </li>
    </ul>
  </nav>

  <!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <i class="fas fa-coins brand-image img-circle elevation-3"></i>
      <span class="brand-text font-weight-light">Conversor</span>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column">
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-money-bill-wave"></i>
              <p>Conversor de Moedas</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Conteúdo principal -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <h1 class="m-0">Conversor de Moedas</h1>
      </div>
    </div>

    <div class="content">
      <div class="container-fluid">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Converter</h3>
          </div>
          <div class="card-body">
            <form id="form-conversao" method="POST" action="{{ route('convert') }}">
            @csrf
              <div class="row">
                <div class="col-md-4">
                  <label>Valor:</label>
                  <input type="number" class="form-control" id="valor" placeholder="Ex: 100" name="amount">
                </div>
                <div class="col-md-4">
                  <label>De:</label>
                  <select class="form-control" id="de" name="from">
                    <option value="USD">Dólar (USD)</option>
                    <option value="EUR">Euro (EUR)</option>
                    <option value="BRL">Real (BRL)</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label>Para:</label>
                  <select class="form-control" id="para" name="to">
                    <option value="BRL">Real (BRL)</option>
                    <option value="USD">Dólar (USD)</option>
                    <option value="EUR">Euro (EUR)</option>
                  </select>
                </div>
              </div>
              <div class="mt-3">
                <button type="submit" class="btn btn-success"><i class="fas fa-exchange-alt"></i> Converter</button>
              </div>
            </form>
            <div id="resultado" class="mt-4 alert alert-info" style="display: none;"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Rodapé -->
  <footer class="main-footer text-center">
    <strong>Conversor de Moedas &copy; 2025</strong> - Projeto simples com AdminLTE.
  </footer>
</div>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>
