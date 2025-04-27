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
                    <option value="BRL" {{ old('from') == 'BRL' ? 'selected' : '' }}>Real Brasileiro (BRL)</option>
                    <option value="BRLT" {{ old('from') == 'BRLT' ? 'selected' : '' }}>Real Brasileiro Turismo (BRLT)</option>
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
                    <option value="DJF" {{ old('from') == 'DJF' ? 'selected' : '' }}>Franco do Djibouti (DJF)</option>
                    <option value="DKK" {{ old('from') == 'DKK' ? 'selected' : '' }}>Coroa Dinamarquesa (DKK)</option>
                    <option value="DOGE" {{ old('from') == 'DOGE' ? 'selected' : '' }}>Dogecoin (DOGE)</option>
                    <option value="DOP" {{ old('from') == 'DOP' ? 'selected' : '' }}>Peso Dominicano (DOP)</option>
                    <option value="DZD" {{ old('from') == 'DZD' ? 'selected' : '' }}>Dinar Argelino (DZD)</option>
                    <option value="EGP" {{ old('from') == 'EGP' ? 'selected' : '' }}>Libra Egípcia (EGP)</option>
                    <option value="ETB" {{ old('from') == 'ETB' ? 'selected' : '' }}>Birr Etíope (ETB)</option>
                    <option value="ETH" {{ old('from') == 'ETH' ? 'selected' : '' }}>Ethereum (ETH)</option>
                    <option value="EUR" {{ old('from') == 'EUR' ? 'selected' : '' }}>Euro (EUR)</option>
                    <option value="FJD" {{ old('from') == 'FJD' ? 'selected' : '' }}>Dólar de Fiji (FJD)</option>
                    <option value="GBP" {{ old('from') == 'GBP' ? 'selected' : '' }}>Libra Esterlina (GBP)</option>
                    <option value="GEL" {{ old('from') == 'GEL' ? 'selected' : '' }}>Lari Georgiano (GEL)</option>
                    <option value="GHS" {{ old('from') == 'GHS' ? 'selected' : '' }}>Cedi Ganês (GHS)</option>
                    <option value="GMD" {{ old('from') == 'GMD' ? 'selected' : '' }}>Dalasi da Gâmbia (GMD)</option>
                    <option value="GNF" {{ old('from') == 'GNF' ? 'selected' : '' }}>Franco de Guiné (GNF)</option>
                    <option value="GTQ" {{ old('from') == 'GTQ' ? 'selected' : '' }}>Quetzal Guatemalteco (GTQ)</option>
                    <option value="HKD" {{ old('from') == 'HKD' ? 'selected' : '' }}>Dólar de Hong Kong (HKD)</option>
                    <option value="HNL" {{ old('from') == 'HNL' ? 'selected' : '' }}>Lempira Hondurenha (HNL)</option>
                    <option value="HRK" {{ old('from') == 'HRK' ? 'selected' : '' }}>Kuna Croata (HRK)</option>
                    <option value="HTG" {{ old('from') == 'HTG' ? 'selected' : '' }}>Gourde Haitiano (HTG)</option>
                    <option value="HUF" {{ old('from') == 'HUF' ? 'selected' : '' }}>Florim Húngaro (HUF)</option>
                    <option value="IDR" {{ old('from') == 'IDR' ? 'selected' : '' }}>Rupia Indonésia (IDR)</option>
                    <option value="ILS" {{ old('from') == 'ILS' ? 'selected' : '' }}>Novo Shekel Israelense (ILS)</option>
                    <option value="INR" {{ old('from') == 'INR' ? 'selected' : '' }}>Rúpia Indiana (INR)</option>
                    <option value="IQD" {{ old('from') == 'IQD' ? 'selected' : '' }}>Dinar Iraquiano (IQD)</option>
                    <option value="IRR" {{ old('from') == 'IRR' ? 'selected' : '' }}>Rial Iraniano (IRR)</option>
                    <option value="ISK" {{ old('from') == 'ISK' ? 'selected' : '' }}>Coroa Islandesa (ISK)</option>
                    <option value="JMD" {{ old('from') == 'JMD' ? 'selected' : '' }}>Dólar Jamaicano (JMD)</option>
                    <option value="JOD" {{ old('from') == 'JOD' ? 'selected' : '' }}>Dinar Jordaniano (JOD)</option>
                    <option value="JPY" {{ old('from') == 'JPY' ? 'selected' : '' }}>Iene Japonês (JPY)</option>
                    <option value="JPYRTS" {{ old('from') == 'JPYRTS' ? 'selected' : '' }}>Iene Japonês (JPYRTS)</option>
                    <option value="KES" {{ old('from') == 'KES' ? 'selected' : '' }}>Shilling Queniano (KES)</option>
                    <option value="KGS" {{ old('from') == 'KGS' ? 'selected' : '' }}>Som Quirguistanês (KGS)</option>
                    <option value="KHR" {{ old('from') == 'KHR' ? 'selected' : '' }}>Riel Cambojano (KHR)</option>
                    <option value="KMF" {{ old('from') == 'KMF' ? 'selected' : '' }}>Franco Comorense (KMF)</option>
                    <option value="KRW" {{ old('from') == 'KRW' ? 'selected' : '' }}>Won Sul-Coreano (KRW)</option>
                    <option value="KWD" {{ old('from') == 'KWD' ? 'selected' : '' }}>Dinar Kuwaitiano (KWD)</option>
                    <option value="KYD" {{ old('from') == 'KYD' ? 'selected' : '' }}>Dólar das Ilhas Cayman (KYD)</option>
                    <option value="KZT" {{ old('from') == 'KZT' ? 'selected' : '' }}>Tenge Cazaque (KZT)</option>
                    <option value="LAK" {{ old('from') == 'LAK' ? 'selected' : '' }}>Kip Laosiano (LAK)</option>
                    <option value="LBP" {{ old('from') == 'LBP' ? 'selected' : '' }}>Libra Libanesa (LBP)</option>
                    <option value="LKR" {{ old('from') == 'LKR' ? 'selected' : '' }}>Rúpia do Sri Lanka (LKR)</option>
                    <option value="LSL" {{ old('from') == 'LSL' ? 'selected' : '' }}>Loti do Lesofrom (LSL)</option>
                    <option value="LTC" {{ old('from') == 'LTC' ? 'selected' : '' }}>Litecoin (LTC)</option>
                    <option value="LYD" {{ old('from') == 'LYD' ? 'selected' : '' }}>Dinar Líbio (LYD)</option>
                    <option value="MAD" {{ old('from') == 'MAD' ? 'selected' : '' }}>Dirham Marroquino (MAD)</option>
                    <option value="MDL" {{ old('from') == 'MDL' ? 'selected' : '' }}>Leu Moldavo (MDL)</option>
                    <option value="MGA" {{ old('from') == 'MGA' ? 'selected' : '' }}>Ariary Madagascarense (MGA)</option>
                    <option value="MKD" {{ old('from') == 'MKD' ? 'selected' : '' }}>Dinar Macedônio (MKD)</option>
                    <option value="MMK" {{ old('from') == 'MMK' ? 'selected' : '' }}>Kyat de Mianmar (MMK)</option>
                    <option value="MNT" {{ old('from') == 'MNT' ? 'selected' : '' }}>Tugrik Mongol (MNT)</option>
                    <option value="MOP" {{ old('from') == 'MOP' ? 'selected' : '' }}>Pataca de Macau (MOP)</option>
                    <option value="MRO" {{ old('from') == 'MRO' ? 'selected' : '' }}>Ouguiya Mauritana (MRO)</option>
                    <option value="MUR" {{ old('from') == 'MUR' ? 'selected' : '' }}>Rúpia Mauriciana (MUR)</option>
                    <option value="MVR" {{ old('from') == 'MVR' ? 'selected' : '' }}>Rufiyaa Maldiva (MVR)</option>
                    <option value="MWK" {{ old('from') == 'MWK' ? 'selected' : '' }}>Kwacha Malauiano (MWK)</option>
                    <option value="MXN" {{ old('from') == 'MXN' ? 'selected' : '' }}>Peso Mexicano (MXN)</option>
                    <option value="MYR" {{ old('from') == 'MYR' ? 'selected' : '' }}>Ringgit Malaio (MYR)</option>
                    <option value="MZN" {{ old('from') == 'MZN' ? 'selected' : '' }}>Metical Moçambicano (MZN)</option>
                    <option value="NAD" {{ old('from') == 'NAD' ? 'selected' : '' }}>Dólar Namíbio (NAD)</option>
                    <option value="NGN" {{ old('from') == 'NGN' ? 'selected' : '' }}>Naira Nigeriana (NGN)</option>
                    <option value="NGNI" {{ old('from') == 'NGNI' ? 'selected' : '' }}>Naira Nigeriana (NGNI)</option>
                    <option value="NGNPARALLEL" {{ old('from') == 'NGNPARALLEL' ? 'selected' : '' }}>Naira Nigeriana (NGNPARALLEL)</option>
                    <option value="NIO" {{ old('from') == 'NIO' ? 'selected' : '' }}>Córdoba Nicaraguense (NIO)</option>
                    <option value="NOK" {{ old('from') == 'NOK' ? 'selected' : '' }}>Coroa Norueguesa (NOK)</option>
                    <option value="NPR" {{ old('from') == 'NPR' ? 'selected' : '' }}>Rúpia Nepalesa (NPR)</option>
                    <option value="NZD" {{ old('from') == 'NZD' ? 'selected' : '' }}>Dólar Neozelandês (NZD)</option>
                    <option value="OMR" {{ old('from') == 'OMR' ? 'selected' : '' }}>Rial Omanense (OMR)</option>
                    <option value="PAB" {{ old('from') == 'PAB' ? 'selected' : '' }}>Balboa Panamenho (PAB)</option>
                    <option value="PEN" {{ old('from') == 'PEN' ? 'selected' : '' }}>Sol Peruano (PEN)</option>
                    <option value="PGK" {{ old('from') == 'PGK' ? 'selected' : '' }}>Kina Papua-Nova Guiné (PGK)</option>
                    <option value="PHP" {{ old('from') == 'PHP' ? 'selected' : '' }}>Peso Filipino (PHP)</option>
                    <option value="PKR" {{ old('from') == 'PKR' ? 'selected' : '' }}>Rúpia Paquistanesa (PKR)</option>
                    <option value="PLN" {{ old('from') == 'PLN' ? 'selected' : '' }}>Zloty Polonês (PLN)</option>
                    <option value="PYG" {{ old('from') == 'PYG' ? 'selected' : '' }}>Guarani Paraguaio (PYG)</option>
                    <option value="QAR" {{ old('from') == 'QAR' ? 'selected' : '' }}>Rial Catariano (QAR)</option>
                    <option value="RON" {{ old('from') == 'RON' ? 'selected' : '' }}>Leu Romeno (RON)</option>
                    <option value="RSD" {{ old('from') == 'RSD' ? 'selected' : '' }}>Dinar Sérvio (RSD)</option>
                    <option value="RUB" {{ old('from') == 'RUB' ? 'selected' : '' }}>Rublo Russo (RUB)</option>
                    <option value="RUBfromD" {{ old('from') == 'RUBfromD' ? 'selected' : '' }}>Rublo Russo (RUBfromD)</option>
                    <option value="RUBfromM" {{ old('from') == 'RUBfromM' ? 'selected' : '' }}>Rublo Russo (RUBfromM)</option>
                    <option value="RWF" {{ old('from') == 'RWF' ? 'selected' : '' }}>Franco Ruandês (RWF)</option>
                    <option value="SAR" {{ old('from') == 'SAR' ? 'selected' : '' }}>Riyal Saudita (SAR)</option>
                    <option value="SCR" {{ old('from') == 'SCR' ? 'selected' : '' }}>Rúpia de Seicheles (SCR)</option>
                    <option value="SDG" {{ old('from') == 'SDG' ? 'selected' : '' }}>Libra Sudanesa (SDG)</option>
                    <option value="SEK" {{ old('from') == 'SEK' ? 'selected' : '' }}>Coroa Sueca (SEK)</option>
                    <option value="SGD" {{ old('from') == 'SGD' ? 'selected' : '' }}>Dólar de Singapura (SGD)</option>
                    <option value="SOS" {{ old('from') == 'SOS' ? 'selected' : '' }}>Shilling Somali (SOS)</option>
                    <option value="STD" {{ old('from') == 'STD' ? 'selected' : '' }}>Dobra São-frommense (STD)</option>
                    <option value="SVC" {{ old('from') == 'SVC' ? 'selected' : '' }}>Colón Salvadorenho (SVC)</option>
                    <option value="SYP" {{ old('from') == 'SYP' ? 'selected' : '' }}>Libra Síria (SYP)</option>
                    <option value="SZL" {{ old('from') == 'SZL' ? 'selected' : '' }}>Lilangeni Suazi (SZL)</option>
                    <option value="THB" {{ old('from') == 'THB' ? 'selected' : '' }}>Baht Tailandês (THB)</option>
                    <option value="TJS" {{ old('from') == 'TJS' ? 'selected' : '' }}>Somoni do Tajiquistão (TJS)</option>
                    <option value="TMT" {{ old('from') == 'TMT' ? 'selected' : '' }}>Manat Turcomeno (TMT)</option>
                    <option value="TND" {{ old('from') == 'TND' ? 'selected' : '' }}>Dinar Tunisiano (TND)</option>
                    <option value="TRY" {{ old('from') == 'TRY' ? 'selected' : '' }}>Lira Turca (TRY)</option>
                    <option value="TTD" {{ old('from') == 'TTD' ? 'selected' : '' }}>Dólar de Trinidad e frombago (TTD)</option>
                    <option value="TWD" {{ old('from') == 'TWD' ? 'selected' : '' }}>Dólar Taiwanês (TWD)</option>
                    <option value="TZS" {{ old('from') == 'TZS' ? 'selected' : '' }}>Shilling Tanzaniano (TZS)</option>
                    <option value="UAH" {{ old('from') == 'UAH' ? 'selected' : '' }}>Hryvnia Ucraniana (UAH)</option>
                    <option value="UGX" {{ old('from') == 'UGX' ? 'selected' : '' }}>Shilling Ugandês (UGX)</option>
                    <option value="USD" {{ old('from') == 'USD' ? 'selected' : '' }}>Dólar Americano (USD)</option>
                    <option value="USDT" {{ old('from') == 'USDT' ? 'selected' : '' }}>Tether (USDT)</option>
                    <option value="UYU" {{ old('from') == 'UYU' ? 'selected' : '' }}>Peso Uruguaio (UYU)</option>
                    <option value="UZS" {{ old('from') == 'UZS' ? 'selected' : '' }}>Som Uzbeque (UZS)</option>
                    <option value="VEF" {{ old('from') == 'VEF' ? 'selected' : '' }}>Bolívar Venezuelano (VEF)</option>
                    <option value="VND" {{ old('from') == 'VND' ? 'selected' : '' }}>Dong Vietnamita (VND)</option>
                    <option value="VUV" {{ old('from') == 'VUV' ? 'selected' : '' }}>Vatu de Vanuatu (VUV)</option>
                    <option value="XAF" {{ old('from') == 'XAF' ? 'selected' : '' }}>Franco CFA Central (XAF)</option>
                    <option value="XAGG" {{ old('from') == 'XAGG' ? 'selected' : '' }}>Prata (XAGG)</option>
                    <option value="XBR" {{ old('from') == 'XBR' ? 'selected' : '' }}>Brent Spot (XBR)</option>
                    <option value="XCD" {{ old('from') == 'XCD' ? 'selected' : '' }}>Dólar do Caribe Oriental (XCD)</option>
                    <option value="XOF" {{ old('from') == 'XOF' ? 'selected' : '' }}>Franco CFA Ocidental (XOF)</option>
                    <option value="XPF" {{ old('from') == 'XPF' ? 'selected' : '' }}>Franco CFP (XPF)</option>
                    <option value="XRP" {{ old('from') == 'XRP' ? 'selected' : '' }}>XRP (XRP)</option>
                    <option value="YER" {{ old('from') == 'YER' ? 'selected' : '' }}>Rial Iemenita (YER)</option>
                    <option value="ZAR" {{ old('from') == 'ZAR' ? 'selected' : '' }}>Rand Sul-Africano (ZAR)</option>
                    <option value="ZMK" {{ old('from') == 'ZMK' ? 'selected' : '' }}>Kwacha Zambiano (ZMK)</option>
                    <option value="ZWL" {{ old('from') == 'ZWL' ? 'selected' : '' }}>Dólar Zimbabuense (ZWL)</option>
                    <option value="XAU" {{ old('from') == 'XAU' ? 'selected' : '' }}>Ouro (XAU)</option>
                    <option value="BRLPTAX" {{ old('from') == 'BRLPTAX' ? 'selected' : '' }}>Real Brasileiro (BRLPTAX)</option>
                    <option value="XAG" {{ old('from') == 'XAG' ? 'selected' : '' }}>Prata Spot (XAG)</option>
                    <option value="BRETT" {{ old('from') == 'BRETT' ? 'selected' : '' }}>Brett (BRETT)</option>
                    <option value="SOL" {{ old('from') == 'SOL' ? 'selected' : '' }}>Solana (SOL)</option>
                    <option value="BNB" {{ old('from') == 'BNB' ? 'selected' : '' }}>Binance Coin (BNB)</option>
                  </select>
                </div>

                <div class="col-md-4">
                  <label>Para:</label>
                  <select class="form-control" id="para" name="to">
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
                    <option value="BRL" {{ old('to') == 'BRL' ? 'selected' : '' }}>Real Brasileiro (BRL)</option>
                    <option value="BRLT" {{ old('to') == 'BRLT' ? 'selected' : '' }}>Real Brasileiro Turismo (BRLT)</option>
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
                    <option value="DJF" {{ old('to') == 'DJF' ? 'selected' : '' }}>Franco do Djibouti (DJF)</option>
                    <option value="DKK" {{ old('to') == 'DKK' ? 'selected' : '' }}>Coroa Dinamarquesa (DKK)</option>
                    <option value="DOGE" {{ old('to') == 'DOGE' ? 'selected' : '' }}>Dogecoin (DOGE)</option>
                    <option value="DOP" {{ old('to') == 'DOP' ? 'selected' : '' }}>Peso Dominicano (DOP)</option>
                    <option value="DZD" {{ old('to') == 'DZD' ? 'selected' : '' }}>Dinar Argelino (DZD)</option>
                    <option value="EGP" {{ old('to') == 'EGP' ? 'selected' : '' }}>Libra Egípcia (EGP)</option>
                    <option value="ETB" {{ old('to') == 'ETB' ? 'selected' : '' }}>Birr Etíope (ETB)</option>
                    <option value="ETH" {{ old('to') == 'ETH' ? 'selected' : '' }}>Ethereum (ETH)</option>
                    <option value="EUR" {{ old('to') == 'EUR' ? 'selected' : '' }}>Euro (EUR)</option>
                    <option value="FJD" {{ old('to') == 'FJD' ? 'selected' : '' }}>Dólar de Fiji (FJD)</option>
                    <option value="GBP" {{ old('to') == 'GBP' ? 'selected' : '' }}>Libra Esterlina (GBP)</option>
                    <option value="GEL" {{ old('to') == 'GEL' ? 'selected' : '' }}>Lari Georgiano (GEL)</option>
                    <option value="GHS" {{ old('to') == 'GHS' ? 'selected' : '' }}>Cedi Ganês (GHS)</option>
                    <option value="GMD" {{ old('to') == 'GMD' ? 'selected' : '' }}>Dalasi da Gâmbia (GMD)</option>
                    <option value="GNF" {{ old('to') == 'GNF' ? 'selected' : '' }}>Franco de Guiné (GNF)</option>
                    <option value="GTQ" {{ old('to') == 'GTQ' ? 'selected' : '' }}>Quetzal Guatemalteco (GTQ)</option>
                    <option value="HKD" {{ old('to') == 'HKD' ? 'selected' : '' }}>Dólar de Hong Kong (HKD)</option>
                    <option value="HNL" {{ old('to') == 'HNL' ? 'selected' : '' }}>Lempira Hondurenha (HNL)</option>
                    <option value="HRK" {{ old('to') == 'HRK' ? 'selected' : '' }}>Kuna Croata (HRK)</option>
                    <option value="HTG" {{ old('to') == 'HTG' ? 'selected' : '' }}>Gourde Haitiano (HTG)</option>
                    <option value="HUF" {{ old('to') == 'HUF' ? 'selected' : '' }}>Florim Húngaro (HUF)</option>
                    <option value="IDR" {{ old('to') == 'IDR' ? 'selected' : '' }}>Rupia Indonésia (IDR)</option>
                    <option value="ILS" {{ old('to') == 'ILS' ? 'selected' : '' }}>Novo Shekel Israelense (ILS)</option>
                    <option value="INR" {{ old('to') == 'INR' ? 'selected' : '' }}>Rúpia Indiana (INR)</option>
                    <option value="IQD" {{ old('to') == 'IQD' ? 'selected' : '' }}>Dinar Iraquiano (IQD)</option>
                    <option value="IRR" {{ old('to') == 'IRR' ? 'selected' : '' }}>Rial Iraniano (IRR)</option>
                    <option value="ISK" {{ old('to') == 'ISK' ? 'selected' : '' }}>Coroa Islandesa (ISK)</option>
                    <option value="JMD" {{ old('to') == 'JMD' ? 'selected' : '' }}>Dólar Jamaicano (JMD)</option>
                    <option value="JOD" {{ old('to') == 'JOD' ? 'selected' : '' }}>Dinar Jordaniano (JOD)</option>
                    <option value="JPY" {{ old('to') == 'JPY' ? 'selected' : '' }}>Iene Japonês (JPY)</option>
                    <option value="JPYRTS" {{ old('to') == 'JPYRTS' ? 'selected' : '' }}>Iene Japonês (JPYRTS)</option>
                    <option value="KES" {{ old('to') == 'KES' ? 'selected' : '' }}>Shilling Queniano (KES)</option>
                    <option value="KGS" {{ old('to') == 'KGS' ? 'selected' : '' }}>Som Quirguistanês (KGS)</option>
                    <option value="KHR" {{ old('to') == 'KHR' ? 'selected' : '' }}>Riel Cambojano (KHR)</option>
                    <option value="KMF" {{ old('to') == 'KMF' ? 'selected' : '' }}>Franco Comorense (KMF)</option>
                    <option value="KRW" {{ old('to') == 'KRW' ? 'selected' : '' }}>Won Sul-Coreano (KRW)</option>
                    <option value="KWD" {{ old('to') == 'KWD' ? 'selected' : '' }}>Dinar Kuwaitiano (KWD)</option>
                    <option value="KYD" {{ old('to') == 'KYD' ? 'selected' : '' }}>Dólar das Ilhas Cayman (KYD)</option>
                    <option value="KZT" {{ old('to') == 'KZT' ? 'selected' : '' }}>Tenge Cazaque (KZT)</option>
                    <option value="LAK" {{ old('to') == 'LAK' ? 'selected' : '' }}>Kip Laosiano (LAK)</option>
                    <option value="LBP" {{ old('to') == 'LBP' ? 'selected' : '' }}>Libra Libanesa (LBP)</option>
                    <option value="LKR" {{ old('to') == 'LKR' ? 'selected' : '' }}>Rúpia do Sri Lanka (LKR)</option>
                    <option value="LSL" {{ old('to') == 'LSL' ? 'selected' : '' }}>Loti do Lesoto (LSL)</option>
                    <option value="LTC" {{ old('to') == 'LTC' ? 'selected' : '' }}>Litecoin (LTC)</option>
                    <option value="LYD" {{ old('to') == 'LYD' ? 'selected' : '' }}>Dinar Líbio (LYD)</option>
                    <option value="MAD" {{ old('to') == 'MAD' ? 'selected' : '' }}>Dirham Marroquino (MAD)</option>
                    <option value="MDL" {{ old('to') == 'MDL' ? 'selected' : '' }}>Leu Moldavo (MDL)</option>
                    <option value="MGA" {{ old('to') == 'MGA' ? 'selected' : '' }}>Ariary Madagascarense (MGA)</option>
                    <option value="MKD" {{ old('to') == 'MKD' ? 'selected' : '' }}>Dinar Macedônio (MKD)</option>
                    <option value="MMK" {{ old('to') == 'MMK' ? 'selected' : '' }}>Kyat de Mianmar (MMK)</option>
                    <option value="MNT" {{ old('to') == 'MNT' ? 'selected' : '' }}>Tugrik Mongol (MNT)</option>
                    <option value="MOP" {{ old('to') == 'MOP' ? 'selected' : '' }}>Pataca de Macau (MOP)</option>
                    <option value="MRO" {{ old('to') == 'MRO' ? 'selected' : '' }}>Ouguiya Mauritana (MRO)</option>
                    <option value="MUR" {{ old('to') == 'MUR' ? 'selected' : '' }}>Rúpia Mauriciana (MUR)</option>
                    <option value="MVR" {{ old('to') == 'MVR' ? 'selected' : '' }}>Rufiyaa Maldiva (MVR)</option>
                    <option value="MWK" {{ old('to') == 'MWK' ? 'selected' : '' }}>Kwacha Malauiano (MWK)</option>
                    <option value="MXN" {{ old('to') == 'MXN' ? 'selected' : '' }}>Peso Mexicano (MXN)</option>
                    <option value="MYR" {{ old('to') == 'MYR' ? 'selected' : '' }}>Ringgit Malaio (MYR)</option>
                    <option value="MZN" {{ old('to') == 'MZN' ? 'selected' : '' }}>Metical Moçambicano (MZN)</option>
                    <option value="NAD" {{ old('to') == 'NAD' ? 'selected' : '' }}>Dólar Namíbio (NAD)</option>
                    <option value="NGN" {{ old('to') == 'NGN' ? 'selected' : '' }}>Naira Nigeriana (NGN)</option>
                    <option value="NGNI" {{ old('to') == 'NGNI' ? 'selected' : '' }}>Naira Nigeriana (NGNI)</option>
                    <option value="NGNPARALLEL" {{ old('to') == 'NGNPARALLEL' ? 'selected' : '' }}>Naira Nigeriana (NGNPARALLEL)</option>
                    <option value="NIO" {{ old('to') == 'NIO' ? 'selected' : '' }}>Córdoba Nicaraguense (NIO)</option>
                    <option value="NOK" {{ old('to') == 'NOK' ? 'selected' : '' }}>Coroa Norueguesa (NOK)</option>
                    <option value="NPR" {{ old('to') == 'NPR' ? 'selected' : '' }}>Rúpia Nepalesa (NPR)</option>
                    <option value="NZD" {{ old('to') == 'NZD' ? 'selected' : '' }}>Dólar Neozelandês (NZD)</option>
                    <option value="OMR" {{ old('to') == 'OMR' ? 'selected' : '' }}>Rial Omanense (OMR)</option>
                    <option value="PAB" {{ old('to') == 'PAB' ? 'selected' : '' }}>Balboa Panamenho (PAB)</option>
                    <option value="PEN" {{ old('to') == 'PEN' ? 'selected' : '' }}>Sol Peruano (PEN)</option>
                    <option value="PGK" {{ old('to') == 'PGK' ? 'selected' : '' }}>Kina Papua-Nova Guiné (PGK)</option>
                    <option value="PHP" {{ old('to') == 'PHP' ? 'selected' : '' }}>Peso Filipino (PHP)</option>
                    <option value="PKR" {{ old('to') == 'PKR' ? 'selected' : '' }}>Rúpia Paquistanesa (PKR)</option>
                    <option value="PLN" {{ old('to') == 'PLN' ? 'selected' : '' }}>Zloty Polonês (PLN)</option>
                    <option value="PYG" {{ old('to') == 'PYG' ? 'selected' : '' }}>Guarani Paraguaio (PYG)</option>
                    <option value="QAR" {{ old('to') == 'QAR' ? 'selected' : '' }}>Rial Catariano (QAR)</option>
                    <option value="RON" {{ old('to') == 'RON' ? 'selected' : '' }}>Leu Romeno (RON)</option>
                    <option value="RSD" {{ old('to') == 'RSD' ? 'selected' : '' }}>Dinar Sérvio (RSD)</option>
                    <option value="RUB" {{ old('to') == 'RUB' ? 'selected' : '' }}>Rublo Russo (RUB)</option>
                    <option value="RUBTOD" {{ old('to') == 'RUBTOD' ? 'selected' : '' }}>Rublo Russo (RUBTOD)</option>
                    <option value="RUBTOM" {{ old('to') == 'RUBTOM' ? 'selected' : '' }}>Rublo Russo (RUBTOM)</option>
                    <option value="RWF" {{ old('to') == 'RWF' ? 'selected' : '' }}>Franco Ruandês (RWF)</option>
                    <option value="SAR" {{ old('to') == 'SAR' ? 'selected' : '' }}>Riyal Saudita (SAR)</option>
                    <option value="SCR" {{ old('to') == 'SCR' ? 'selected' : '' }}>Rúpia de Seicheles (SCR)</option>
                    <option value="SDG" {{ old('to') == 'SDG' ? 'selected' : '' }}>Libra Sudanesa (SDG)</option>
                    <option value="SEK" {{ old('to') == 'SEK' ? 'selected' : '' }}>Coroa Sueca (SEK)</option>
                    <option value="SGD" {{ old('to') == 'SGD' ? 'selected' : '' }}>Dólar de Singapura (SGD)</option>
                    <option value="SOS" {{ old('to') == 'SOS' ? 'selected' : '' }}>Shilling Somali (SOS)</option>
                    <option value="STD" {{ old('to') == 'STD' ? 'selected' : '' }}>Dobra São-Tomense (STD)</option>
                    <option value="SVC" {{ old('to') == 'SVC' ? 'selected' : '' }}>Colón Salvadorenho (SVC)</option>
                    <option value="SYP" {{ old('to') == 'SYP' ? 'selected' : '' }}>Libra Síria (SYP)</option>
                    <option value="SZL" {{ old('to') == 'SZL' ? 'selected' : '' }}>Lilangeni Suazi (SZL)</option>
                    <option value="THB" {{ old('to') == 'THB' ? 'selected' : '' }}>Baht Tailandês (THB)</option>
                    <option value="TJS" {{ old('to') == 'TJS' ? 'selected' : '' }}>Somoni do Tajiquistão (TJS)</option>
                    <option value="TMT" {{ old('to') == 'TMT' ? 'selected' : '' }}>Manat Turcomeno (TMT)</option>
                    <option value="TND" {{ old('to') == 'TND' ? 'selected' : '' }}>Dinar Tunisiano (TND)</option>
                    <option value="TRY" {{ old('to') == 'TRY' ? 'selected' : '' }}>Lira Turca (TRY)</option>
                    <option value="TTD" {{ old('to') == 'TTD' ? 'selected' : '' }}>Dólar de Trinidad e Tobago (TTD)</option>
                    <option value="TWD" {{ old('to') == 'TWD' ? 'selected' : '' }}>Dólar Taiwanês (TWD)</option>
                    <option value="TZS" {{ old('to') == 'TZS' ? 'selected' : '' }}>Shilling Tanzaniano (TZS)</option>
                    <option value="UAH" {{ old('to') == 'UAH' ? 'selected' : '' }}>Hryvnia Ucraniana (UAH)</option>
                    <option value="UGX" {{ old('to') == 'UGX' ? 'selected' : '' }}>Shilling Ugandês (UGX)</option>
                    <option value="USD" {{ old('to') == 'USD' ? 'selected' : '' }}>Dólar Americano (USD)</option>
                    <option value="USDT" {{ old('to') == 'USDT' ? 'selected' : '' }}>Tether (USDT)</option>
                    <option value="UYU" {{ old('to') == 'UYU' ? 'selected' : '' }}>Peso Uruguaio (UYU)</option>
                    <option value="UZS" {{ old('to') == 'UZS' ? 'selected' : '' }}>Som Uzbeque (UZS)</option>
                    <option value="VEF" {{ old('to') == 'VEF' ? 'selected' : '' }}>Bolívar Venezuelano (VEF)</option>
                    <option value="VND" {{ old('to') == 'VND' ? 'selected' : '' }}>Dong Vietnamita (VND)</option>
                    <option value="VUV" {{ old('to') == 'VUV' ? 'selected' : '' }}>Vatu de Vanuatu (VUV)</option>
                    <option value="XAF" {{ old('to') == 'XAF' ? 'selected' : '' }}>Franco CFA Central (XAF)</option>
                    <option value="XAGG" {{ old('to') == 'XAGG' ? 'selected' : '' }}>Prata (XAGG)</option>
                    <option value="XBR" {{ old('to') == 'XBR' ? 'selected' : '' }}>Brent Spot (XBR)</option>
                    <option value="XCD" {{ old('to') == 'XCD' ? 'selected' : '' }}>Dólar do Caribe Oriental (XCD)</option>
                    <option value="XOF" {{ old('to') == 'XOF' ? 'selected' : '' }}>Franco CFA Ocidental (XOF)</option>
                    <option value="XPF" {{ old('to') == 'XPF' ? 'selected' : '' }}>Franco CFP (XPF)</option>
                    <option value="XRP" {{ old('to') == 'XRP' ? 'selected' : '' }}>XRP (XRP)</option>
                    <option value="YER" {{ old('to') == 'YER' ? 'selected' : '' }}>Rial Iemenita (YER)</option>
                    <option value="ZAR" {{ old('to') == 'ZAR' ? 'selected' : '' }}>Rand Sul-Africano (ZAR)</option>
                    <option value="ZMK" {{ old('to') == 'ZMK' ? 'selected' : '' }}>Kwacha Zambiano (ZMK)</option>
                    <option value="ZWL" {{ old('to') == 'ZWL' ? 'selected' : '' }}>Dólar Zimbabuense (ZWL)</option>
                    <option value="XAU" {{ old('to') == 'XAU' ? 'selected' : '' }}>Ouro (XAU)</option>
                    <option value="BRLPTAX" {{ old('to') == 'BRLPTAX' ? 'selected' : '' }}>Real Brasileiro (BRLPTAX)</option>
                    <option value="XAG" {{ old('to') == 'XAG' ? 'selected' : '' }}>Prata Spot (XAG)</option>
                    <option value="BRETT" {{ old('to') == 'BRETT' ? 'selected' : '' }}>Brett (BRETT)</option>
                    <option value="SOL" {{ old('to') == 'SOL' ? 'selected' : '' }}>Solana (SOL)</option>
                    <option value="BNB" {{ old('to') == 'BNB' ? 'selected' : '' }}>Binance Coin (BNB)</option>
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
