<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ENTREPRISE</title>

    <style type="text/css">
        @page {
            margin: 0px;
        }
        body {
            margin: 0px;
        }
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        table {
            font-size: x-small;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }
        .invoice table {
            margin: 15px;
        }
        .invoice h3 {
            margin-left: 15px;
        }
        .information {
            background-color: #60A7A6;
            color: #FFF;
        }
        .information .logo {
            margin: 10px;
        }
        .information table {
            padding: 7px;
        }
        .critere {
            background-color: #e6ecec;
            color: rgb(17, 13, 13);
        }
        .critere .logo {
            margin: 10px;
        }
        .critere table {
            padding: 7px;
        }
        .gray {
        background-color: lightgray
        }
    </style>

</head>
<body>

<div class="information">
    <table width="100%">
         <tr>
             <td align="left" style="width: 40%;">
                 <img src="{{ asset('logo.png') }}" alt="Logo" width="100" class="logo"/>
             </td>
             <td align="center" style="width: 80%;">
                 <h3> <u>LISTE DES ENTREPRISES <strong style="text-transform: uppercase"></strong></u></h3>
             </td>
             <td align="right" style="width: 60%;">
                <pre>
                  Editer le: {{ date('m/d/Y H:m:s')}}
                  par : {{  Auth::user()->name }}
                  Extrait de: {{ config('app.name', 'Laravel') }}
              </pre>
                
             </td>
         </tr>

    </table>
</div>


<div class="invoice">
  <table width="100%">
    <thead class=>
      <tr width="100%">
       
          <th align="left">
            Critère 1 : ................ <br/>
            Critère 2 : ................ 
        </th>
        <th align="right">
          Critère 1 : ................ <br/>
          Critère 2 : ................ 
      </th>
       
       
      </tr>
    </thead>
  </table>
</div>

<div class="invoice">
    <table width="100%">
     
        <thead class="gray">
        <tr>
            <th> {{ __('Denomination') }}</th>
            <th>{{ __('nom_commercial') }}</th>
            <th>{{ __('sigle') }}</th>
            <th>{{ __('rcm') }}</th>
            <th>{{ __('ncc') }}</th>
            <th>{{ __('adresse') }}</th>
            <th>{{ __('forme_juridique') }}</th>
            <th>{{ __('capital') }}</th>
            <th> {{ __('image') }}</th>
            <th> {{ __('Statut') }}</th>
            
            
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
            @foreach($entreprise as $entreprise)
        <tr>
            
            <td>{{ $entreprise->denomination}}</td>
            <td>{{ $entreprise->nom_commercial}}</td>
            <td>{{ $entreprise->sigle}}</td>
            <td>{{ $entreprise->rcm}}</td>
            <td>{{ $entreprise->ncc}}</td>
            <td>{{ $entreprise->adresse}}</td>
            <td>{{ $entreprise->forme_juridique}}</td>
            <td>{{ $entreprise->capital}}</td>
            <td>{{ $entreprise->image}}</td>
            <td>{{ $entreprise->actif}}</td>
            
        </tr>
        @endforeach
       
        </tbody>

        <tfoot>
        <tr>
            <td colspan="1"></td>
            <td align="left">Total</td>
            <td align="left" class="gray">€15,-</td>
        </tr>
        </tfoot>
    </table>
</div>

<div class="information" style="position: absolute; bottom: 0;">
    <table width="100%">
        <tr>
            <td align="left" style="width: 33%;">
                &copy; {{ date('Y') }} {{-- config('app.url') --}} {{ config('app.name', 'Laravel') }} - All rights reserved.
            </td>
            <td align="center" style="width: 33%;">
              <pre>Powered by Yannick GOUEDE | Tel : 48975233</pre>
          </td>
            <td align="right" style="width: 33%;">
                Company Slogan
            </td>
        </tr>

    </table>
</div>
</body>
</html>