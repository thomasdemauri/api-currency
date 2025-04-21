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
                  <input type="number" class="form-control" id="valor" placeholder="Ex: 100" name="amount" min="0" value="{{ old('amount') }}">
                </div>

                <div class="col-md-4">
                  <label>De:</label>
                  <select class="form-control" id="de" name="from">
                    <option value="USD" {{ old('from') == 'USD' ? 'selected' : '' }}>Dólar Americano (USD)</option>
                    <option value="EUR" {{ old('from') == 'EUR' ? 'selected' : '' }}>Euro (EUR)</option>
                    <option value="BRL" {{ old('from') == 'BRL' ? 'selected' : '' }}>Real Brasileiro (BRL)</option>
                    <option value="AED" {{ old('from') == 'AED' ? 'selected' : '' }}>Dirham dos Emirados (AED)</option>
                    <option value="AFN" {{ old('from') == 'AFN' ? 'selected' : '' }}>Afghani do Afeganistão (AFN)</option>
                    <option value="ALL" {{ old('from') == 'ALL' ? 'selected' : '' }}>Lek Albanês (ALL)</option>
                    <option value="AMD" {{ old('from') == 'AMD' ? 'selected' : '' }}>Dram Armênio (AMD)</option>
                    <option value="ANG" {{ old('from') == 'ANG' ? 'selected' : '' }}>Guilder das Antilhas (ANG)</option>
                    <option value="AOA" {{ old('from') == 'AOA' ? 'selected' : '' }}>Kwanza Angolano (AOA)</option>
                    <option value="ARS" {{ old('from') == 'ARS' ? 'selected' : '' }}>Peso Argentino (ARS)</option>
                    <option value="AUD" {{ old('from') == 'AUD' ? 'selected' : '' }}>Dólar Australiano (AUD)</option>
                    <option value="AZN" {{ old('from') == 'AZN' ? 'selected' : '' }}>Manat Azeri (AZN)</option>
                    <option value="BAM" {{ old('from') == 'BAM' ? 'selected' : '' }}>Marco Conversível (BAM)</option>
                    <option value="BBD" {{ old('from') == 'BBD' ? 'selected' : '' }}>Dólar de Barbados (BBD)</option>
                    <option value="BDT" {{ old('from') == 'BDT' ? 'selected' : '' }}>Taka de Bangladesh (BDT)</option>
                    <option value="BGN" {{ old('from') == 'BGN' ? 'selected' : '' }}>Lev Búlgaro (BGN)</option>
                    <option value="BHD" {{ old('from') == 'BHD' ? 'selected' : '' }}>Dinar do Bahrein (BHD)</option>
                    <option value="BIF" {{ old('from') == 'BIF' ? 'selected' : '' }}>Franco Burundinense (BIF)</option>
                    <option value="BND" {{ old('from') == 'BND' ? 'selected' : '' }}>Dólar de Brunei (BND)</option>
                    <option value="BOB" {{ old('from') == 'BOB' ? 'selected' : '' }}>Boliviano (BOB)</option>
                    <option value="BSD" {{ old('from') == 'BSD' ? 'selected' : '' }}>Dólar das Bahamas (BSD)</option>
                    <option value="BTC" {{ old('from') == 'BTC' ? 'selected' : '' }}>Bitcoin (BTC)</option>
                    <option value="BWP" {{ old('from') == 'BWP' ? 'selected' : '' }}>Pula de Botswana (BWP)</option>
                    <option value="BYN" {{ old('from') == 'BYN' ? 'selected' : '' }}>Rublo Bielorrusso (BYN)</option>
                    <option value="BZD" {{ old('from') == 'BZD' ? 'selected' : '' }}>Dólar de Belize (BZD)</option>
                    <option value="CAD" {{ old('from') == 'CAD' ? 'selected' : '' }}>Dólar Canadense (CAD)</option>
                    <option value="CHF" {{ old('from') == 'CHF' ? 'selected' : '' }}>Franco Suíço (CHF)</option>
                    <option value="CHFRTS" {{ old('from') == 'CHFRTS' ? 'selected' : '' }}>Franco Suíço (CHFRTS)</option>
                    <option value="CLP" {{ old('from') == 'CLP' ? 'selected' : '' }}>Peso Chileno (CLP)</option>
                    <option value="CNH" {{ old('from') == 'CNH' ? 'selected' : '' }}>Yuan chinês offshore (CNH)</option>
                    <option value="CNY" {{ old('from') == 'CNY' ? 'selected' : '' }}>Yuan Chinês (CNY)</option>
                    <option value="COP" {{ old('from') == 'COP' ? 'selected' : '' }}>Peso Colombiano (COP)</option>
                    <option value="CRC" {{ old('from') == 'CRC' ? 'selected' : '' }}>Colón Costarriquenho (CRC)</option>
                    <option value="CUP" {{ old('from') == 'CUP' ? 'selected' : '' }}>Peso Cubano (CUP)</option>
                    <option value="CVE" {{ old('from') == 'CVE' ? 'selected' : '' }}>Escudo cabo-verdiano (CVE)</option>
                    <option value="CZK" {{ old('from') == 'CZK' ? 'selected' : '' }}>Coroa Checa (CZK)</option>
                    <option value="DJF" {{ old('from') == 'DJF' ? 'selected' : '' }}>Franco do Djubouti (DJF)</option>
                    <option value="DKK" {{ old('from') == 'DKK' ? 'selected' : '' }}>Coroa Dinamarquesa (DKK)</option>
                    <option value="DOGE" {{ old('from') == 'DOGE' ? 'selected' : '' }}>Dogecoin (DOGE)</option>
                    <option value="DOP" {{ old('from') == 'DOP' ? 'selected' : '' }}>Peso Dominicano (DOP)</option>
                    <option value="DZD" {{ old('from') == 'DZD' ? 'selected' : '' }}>Dinar Argelino (DZD)</option>
                    <!-- Adicione mais opções conforme necessário -->
                  </select>
                </div>
                

                <div class="col-md-4">
                  <label>Para:</label>
                  <select class="form-control" id="para" name="to">
                    <option value="BRL" {{ old('to') == 'BRL' ? 'selected' : '' }}>Real Brasileiro (BRL)</option>
                    <option value="USD" {{ old('to') == 'USD' ? 'selected' : '' }}>Dólar Americano (USD)</option>
                    <option value="EUR" {{ old('to') == 'EUR' ? 'selected' : '' }}>Euro (EUR)</option>
                    <option value="AED" {{ old('to') == 'AED' ? 'selected' : '' }}>Dirham dos Emirados (AED)</option>
                    <option value="AFN" {{ old('to') == 'AFN' ? 'selected' : '' }}>Afghani do Afeganistão (AFN)</option>
                    <option value="ALL" {{ old('to') == 'ALL' ? 'selected' : '' }}>Lek Albanês (ALL)</option>
                    <option value="AMD" {{ old('to') == 'AMD' ? 'selected' : '' }}>Dram Armênio (AMD)</option>
                    <option value="ANG" {{ old('to') == 'ANG' ? 'selected' : '' }}>Guilder das Antilhas (ANG)</option>
                    <option value="AOA" {{ old('to') == 'AOA' ? 'selected' : '' }}>Kwanza Angolano (AOA)</option>
                    <option value="ARS" {{ old('to') == 'ARS' ? 'selected' : '' }}>Peso Argentino (ARS)</option>
                    <option value="AUD" {{ old('to') == 'AUD' ? 'selected' : '' }}>Dólar Australiano (AUD)</option>
                    <option value="AZN" {{ old('to') == 'AZN' ? 'selected' : '' }}>Manat Azeri (AZN)</option>
                    <option value="BAM" {{ old('to') == 'BAM' ? 'selected' : '' }}>Marco Conversível (BAM)</option>
                    <option value="BBD" {{ old('to') == 'BBD' ? 'selected' : '' }}>Dólar de Barbados (BBD)</option>
                    <option value="BDT" {{ old('to') == 'BDT' ? 'selected' : '' }}>Taka de Bangladesh (BDT)</option>
                    <option value="BGN" {{ old('to') == 'BGN' ? 'selected' : '' }}>Lev Búlgaro (BGN)</option>
                    <option value="BHD" {{ old('to') == 'BHD' ? 'selected' : '' }}>Dinar do Bahrein (BHD)</option>
                    <option value="BIF" {{ old('to') == 'BIF' ? 'selected' : '' }}>Franco Burundinense (BIF)</option>
                    <option value="BND" {{ old('to') == 'BND' ? 'selected' : '' }}>Dólar de Brunei (BND)</option>
                    <option value="BOB" {{ old('to') == 'BOB' ? 'selected' : '' }}>Boliviano (BOB)</option>
                    <option value="BSD" {{ old('to') == 'BSD' ? 'selected' : '' }}>Dólar das Bahamas (BSD)</option>
                    <option value="BTC" {{ old('to') == 'BTC' ? 'selected' : '' }}>Bitcoin (BTC)</option>
                    <option value="BWP" {{ old('to') == 'BWP' ? 'selected' : '' }}>Pula de Botswana (BWP)</option>
                    <option value="BYN" {{ old('to') == 'BYN' ? 'selected' : '' }}>Rublo Bielorrusso (BYN)</option>
                    <option value="BZD" {{ old('to') == 'BZD' ? 'selected' : '' }}>Dólar de Belize (BZD)</option>
                    <option value="CAD" {{ old('to') == 'CAD' ? 'selected' : '' }}>Dólar Canadense (CAD)</option>
                    <option value="CHF" {{ old('to') == 'CHF' ? 'selected' : '' }}>Franco Suíço (CHF)</option>
                    <option value="CHFRTS" {{ old('to') == 'CHFRTS' ? 'selected' : '' }}>Franco Suíço (CHFRTS)</option>
                    <option value="CLP" {{ old('to') == 'CLP' ? 'selected' : '' }}>Peso Chileno (CLP)</option>
                    <option value="CNH" {{ old('to') == 'CNH' ? 'selected' : '' }}>Yuan chinês offshore (CNH)</option>
                    <option value="CNY" {{ old('to') == 'CNY' ? 'selected' : '' }}>Yuan Chinês (CNY)</option>
                    <option value="COP" {{ old('to') == 'COP' ? 'selected' : '' }}>Peso Colombiano (COP)</option>
                    <option value="CRC" {{ old('to') == 'CRC' ? 'selected' : '' }}>Colón Costarriquenho (CRC)</option>
                    <option value="CUP" {{ old('to') == 'CUP' ? 'selected' : '' }}>Peso Cubano (CUP)</option>
                    <option value="CVE" {{ old('to') == 'CVE' ? 'selected' : '' }}>Escudo cabo-verdiano (CVE)</option>
                    <option value="CZK" {{ old('to') == 'CZK' ? 'selected' : '' }}>Coroa Checa (CZK)</option>
                    <option value="DJF" {{ old('to') == 'DJF' ? 'selected' : '' }}>Franco do Djubouti (DJF)</option>
                    <option value="DKK" {{ old('to') == 'DKK' ? 'selected' : '' }}>Coroa Dinamarquesa (DKK)</option>
                    <option value="DOGE" {{ old('to') == 'DOGE' ? 'selected' : '' }}>Dogecoin (DOGE)</option>
                    <option value="DOP" {{ old('to') == 'DOP' ? 'selected' : '' }}>Peso Dominicano (DOP)</option>
                    <option value="DZD" {{ old('to') == 'DZD' ? 'selected' : '' }}>Dinar Argelino (DZD)</option>
                    <!-- Adicione mais opções conforme necessário -->
                  </select>
                </div>
                

              </div>
              <div class="mt-3">
                <button type="submit" class="btn btn-success"><i class="fas fa-exchange-alt"></i> Converter</button>
              </div>
            </form>

            @if (session('amount'))
              <div id="resultado" class="mt-4 alert alert-light">
                <strong>{{ session('amount') }}</strong>
              </div>
              @endif
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Rodapé -->
  <footer class="main-footer text-center">
    <strong>
      Conversor de Moedas &copy; 2025</strong> - Projeto feito por <strong>Thomas Mauro, Rafael Costa e Gustavo Rodrigues.</strong> com muito carinho &#x2764;.
  </footer>
</div>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>
