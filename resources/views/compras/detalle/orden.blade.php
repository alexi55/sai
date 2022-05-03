@extends('layouts.admin')
@section('content')
@if(Session::has('message'))
<div class="alert alert-success">
    <em> {!! session('message') !!}</em>
</div>
@endif

<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Detalle de Compra </h3>

    </div>
</div>
<script type="text/javascript">
function imprSelec(muestra) {
    var ficha = document.getElementById(muestra);
    var ventimp = window.open(' ', 'popimpr');
    ventimp.document.write(ficha.innerHTML);
    ventimp.document.close();
    ventimp.print();
    ventimp.close();
}

function colorChanger(el) {
    el.style.backgroundColor = '#696969';

}

function colorChanger2(el) {
    el.style.backgroundColor = 'transparent';
}
</script>

<button data-id="5" onclick="javascript:imprSelec('muestra')">Imprimir</button>
<a href="{{ url('/compras/detalle') }}" class="btn blue darken-4 text-black "><i class="fa fa-plus-square"></i> Volver atras</a>
<div id="muestra" align="center">
<table >
    <tbody>
        <tr>
            <td colspan="3" style="width: 288pt;padding: 0cm 3.5pt;height: 30.75pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:16px;color:black;">&nbsp; &nbsp; <u>Gobierno Aut&oacute;nomo Regional Del Gran Chaco</u></span></strong></p>
            </td>
            <td style="width:56.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:30.75pt;"><br></td>
            <td rowspan="2" style="width:69.0pt;border:none;border-right:  solid windowtext 1.0pt;padding:  0cm 3.5pt 0cm 3.5pt;height:30.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;color:black;">&nbsp;</span></strong></p>
            </td>
            <td style="width: 77.75pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;background: rgb(166, 166, 166);padding: 0cm 3.5pt;height: 30.75pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;">N&deg; de Orden de Compra</span></strong></p>
            </td>
            <td style="width:57.85pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 3.5pt 0cm 3.5pt;height:30.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style='font-size:13px;font-family:"Arial","sans-serif";'>116</span></strong></p>
            </td>
            <td style="height:30.75pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="3" style="width:288.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:13.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:16px;color:black;">1ra. Secci&oacute;n &nbsp; &nbsp; - Provincia Gran Chaco</span></strong></p>
            </td>
            <td style="width:56.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:13.5pt;"><br></td>
            <td style="width:77.75pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#A6A6A6;padding:0cm 3.5pt 0cm 3.5pt;height:13.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;">N&deg; de Preventivo</span></strong></p>
            </td>
            <td style="width:57.85pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:13.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style='font-size:13px;font-family:"Arial","sans-serif";'>334</span></strong></p>
            </td>
            <td style="height:13.5pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width:32.9pt;padding:0cm 3.5pt 0cm 3.5pt;height:18.0pt;"><br></td>
            <td colspan="2" style="width:255.1pt;padding:0cm 3.5pt 0cm 3.5pt;height:18.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:16px;color:black;">Tel/Fax: 46822039</span></strong></p>
            </td>
            <td style="width:56.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:18.0pt;"><br></td>
            <td style="width:69.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:18.0pt;"><br></td>
            <td style="width:77.75pt;border:solid windowtext 1.0pt;border-top:none;background:  #A6A6A6;padding:0cm 3.5pt 0cm 3.5pt;height:18.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;">N&deg; Control Interno</span></strong></p>
            </td>
            <td style="width:57.85pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:18.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style='font-size:13px;font-family:"Arial","sans-serif";'>22</span></strong></p>
            </td>
            <td style="height:18.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="3" style="width:288.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tarija - Bolivia</span></p>
            </td>
            <td style="width:56.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt;"><br></td>
            <td style="width:69.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt;"><br></td>
            <td style="width:77.75pt;border:solid windowtext 1.0pt;border-top:none;background:  #A6A6A6;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;color:black;">N&deg; Hoja de Ruta</span></strong></p>
            </td>
            <td style="width:57.85pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="color:black;">110</span></strong></p>
            </td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="3" style="width:288.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:21.75pt;"><br></td>
            <td style="width:56.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:21.75pt;"><br></td>
            <td style="width:69.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:21.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><span style="color:black;">Lugar y Fecha:</span></strong></p>
            </td>
            <td colspan="2" style="width:135.6pt;padding:0cm 3.5pt 0cm 3.5pt;height:21.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:right;'><span style="font-size:13px;color:black;">Yacuiba, &nbsp; &nbsp; 27 de abril de 2022 &nbsp;</span></p>
            </td>
            <td style="height:21.75pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width:32.9pt;padding:0cm 3.5pt 0cm 3.5pt;height:.75pt;"><br></td>
            <td style="width:115.1pt;padding:0cm 3.5pt 0cm 3.5pt;height:.75pt;"><br></td>
            <td style="width:140.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:.75pt;"><br></td>
            <td style="width:56.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:.75pt;"><br></td>
            <td style="width:69.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:.75pt;"><br></td>
            <td style="width:77.75pt;padding:0cm 3.5pt 0cm 3.5pt;height:.75pt;"><br></td>
            <td style="width:57.85pt;padding:0cm 3.5pt 0cm 3.5pt;height:.75pt;"><br></td>
            <td style="height:.75pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="7" rowspan="3" style="width:548.6pt;padding:0cm 3.5pt 0cm 3.5pt;height:21.95pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:24px;color:black;">UNIDAD DE COMPRAS MENORES</span></strong></p>
            </td>
            <td style="height:21.95pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="height:21.95pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="height:21.95pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width:32.9pt;padding:0cm 3.5pt 0cm 3.5pt;height:19.5pt;"><br></td>
            <td style="width:115.1pt;padding:0cm 3.5pt 0cm 3.5pt;height:19.5pt;"><br></td>
            <td colspan="3" style="width:265.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:19.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><u><span style="font-size:33px;color:black;">ORDEN DE COMPRA</span></u></strong></p>
            </td>
            <td style="width:77.75pt;padding:0cm 3.5pt 0cm 3.5pt;height:19.5pt;"><br></td>
            <td style="width:57.85pt;padding:0cm 3.5pt 0cm 3.5pt;height:19.5pt;"><br></td>
            <td style="height:19.5pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width:148.0pt;border:solid windowtext 1.0pt;border-right:solid black 1.0pt;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:21.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><span style="color:black;">APERTURA PROGRAM&Aacute;TICA:</span></strong></p>
            </td>
            <td colspan="5" style="width:400.6pt;border:solid windowtext 1.0pt;border-left:none;padding:  0cm 3.5pt 0cm 3.5pt;height:21.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">40-000-150</span></p>
            </td>
            <td style="height:21.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width:148.0pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:18.95pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><span style="color:black;">ACTIVIDAD / PROYECTO:</span></strong></p>
            </td>
            <td colspan="5" style="width:400.6pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:18.95pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">PROGRAMA PREVENCI&Oacute;N CONTROL Y ATENCI&Oacute;N DEL CORONAVIRUS</span></p>
            </td>
            <td style="height:18.95pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width:148.0pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:18.95pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><span style="color:black;">PARTIDA DE GASTO:</span></strong></p>
            </td>
            <td colspan="5" style="width:400.6pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:18.95pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">395</span></p>
            </td>
            <td style="height:18.95pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width:148.0pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:18.95pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><span style="color:black;">UNIDAD SOLICITANTE:</span></strong></p>
            </td>
            <td colspan="5" style="width:400.6pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:18.95pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="font-size:13px;color:black;">&nbsp;UNIDAD PROGRAMA COVID - 19&nbsp;</span></p>
            </td>
            <td style="height:18.95pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width:148.0pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><span style="color:black;">PROVEEDOR:</span></strong></p>
            </td>
            <td colspan="2" style="width:196.0pt;border:none;border-bottom:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="font-size:13px;color:black;">&nbsp;LENNY DANNY ANDIA SAGARDIA&nbsp;</span></p>
            </td>
            <td style="width:69.0pt;border:solid windowtext 1.0pt;border-top:  none;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:12px;color:black;">C.I: 1113159-1H</span></strong></p>
            </td>
            <td style="width:77.75pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;color:black;">NIT &nbsp; &nbsp; 1113159011</span></strong></p>
            </td>
            <td style="width:57.85pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;color:black;">CEL: 73427925</span></strong></p>
            </td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width:148.0pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:none;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:20.25pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><span style="color:black;">MONTO TOTAL:</span></strong></p>
            </td>
            <td style="width:140.0pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:none;padding:  0cm 3.5pt 0cm 3.5pt;height:20.25pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style='font-size:13px;font-family:"Tahoma","sans-serif";'>Bs 19.993,92</span></p>
            </td>
            <td colspan="4" style="width:260.6pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:20.25pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="font-size:13px;color:white;">diecinueve mil novecientos noventa y tres &nbsp;92/100 Bolivianos</span></p>
            </td>
            <td style="height:20.25pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width:148.0pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:17.25pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><span style="color:black;">PLAZO:</span></strong></p>
            </td>
            <td style="width:140.0pt;border:none;border-bottom:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:17.25pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">5 D&iacute;as Calendarios</span></p>
            </td>
            <td style="width:56.0pt;border:none;border-bottom:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:17.25pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">&nbsp;</span></p>
            </td>
            <td style="width:69.0pt;border:none;border-bottom:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:17.25pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">&nbsp;</span></p>
            </td>
            <td style="width:77.75pt;border:none;border-bottom:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:17.25pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">&nbsp;</span></p>
            </td>
            <td style="width:57.85pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:17.25pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">&nbsp;</span></p>
            </td>
            <td style="height:17.25pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width:148.0pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:20.25pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><span style="font-size:14px;color:black;">MODALIDAD DE CONTRATACI&Oacute;N:</span></strong></p>
            </td>
            <td colspan="5" style="width:400.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:20.25pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">Contrataci&oacute;n menor</span></p>
            </td>
            <td style="height:20.25pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width:148.0pt;border:solid windowtext 1.0pt;border-top:none;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:28.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><span style="color:black;">OBJETO DE LA CONTRATACI&Oacute;N:</span></strong></p>
            </td>
            <td colspan="5" style="width:400.6pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:28.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="font-size:13px;color:black;">&nbsp;ADQUISICI&Oacute;N DE MATERIALES DE ESCRITORIO PARA EL HOSPITAL FRAY QUEBRACHO Y &Aacute;REA ADMINISTRATIVA EL PROGRAMA COVID - 19&nbsp;</span></p>
            </td>
            <td style="height:28.5pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width:148.0pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:19.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><span style="color:black;">FORMA DE ENTREGA:</span></strong></p>
            </td>
            <td colspan="5" style="width:400.6pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:19.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="font-size:13px;color:black;">&nbsp;POR EL TOTAL &nbsp; &nbsp;&nbsp;</span></p>
            </td>
            <td style="height:19.5pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width:148.0pt;border:solid windowtext 1.0pt;border-top:none;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:28.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><span style="color:black;">FORMA DE PAGO:</span></strong></p>
            </td>
            <td colspan="5" style="width:400.6pt;border:none;border-bottom:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:28.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="font-size:13px;color:black;">&nbsp;EL PAGO &Uacute;NICO SE EFECTUARA SOBRE EL TOTAL DEL MONTO ADJUDICADO, PREVIO INFORME DE CONFORMIDAD Y LA PRESENTACI&Oacute;N DE LA FACTURA CORRESPONDIENTE.&nbsp;</span></p>
            </td>
            <td style="height:28.5pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="7" style="width:548.6pt;border:none;padding:0cm 3.5pt 0cm 3.5pt;height:34.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">Conforme a &nbsp;PROPUESTA presentada y de acuerdo a las Especificaciones Tecnicas / Terminos de Referencia, elaboradas por la Unidad Solicitante agradeceremos &nbsp;a Ud. sirva realizar la siguiente compra:</span></p>
            </td>
            <td style="height:34.5pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width:32.9pt;border:solid windowtext 1.0pt;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:34.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;color:black;">N&ordm;</span></strong></p>
            </td>
            <td style="width:115.1pt;border:solid windowtext 1.0pt;border-left:  none;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:34.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><span style="font-size:13px;color:black;">NOMBRE &nbsp;DEL PRODUCTO</span></strong></p>
            </td>
            <td style="width:140.0pt;border:solid windowtext 1.0pt;border-left:  none;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:34.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;color:black;">&nbsp;ESPECIFICACIONES T&Eacute;CNICAS</span></strong></p>
            </td>
            <td style="width:56.0pt;border:solid windowtext 1.0pt;border-left:  none;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:34.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;color:black;">UNIDAD</span></strong></p>
            </td>
            <td style="width:69.0pt;border:solid windowtext 1.0pt;border-left:  none;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:34.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;color:black;">CANTIDAD</span></strong></p>
            </td>
            <td style="width:77.75pt;border:solid windowtext 1.0pt;border-left:  none;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:34.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;color:black;">PRECIO UNITARIO</span></strong></p>
            </td>
            <td style="width:57.85pt;border:solid windowtext 1.0pt;border-left:  none;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:34.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;color:black;">PRECIO TOTAL</span></strong></p>
            </td>
            <td style="height:34.5pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width:32.9pt;border:solid windowtext 1.0pt;border-top:  none;background:white;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;color:black;">1</span></strong></p>
            </td>
            <td style="width:115.1pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:white;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="font-size:9px;color:black;">ARCHIVADOR DE PALANCA</span></p>
            </td>
            <td style="width:140.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:white;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">TAMA&Ntilde;O OFICIO LOMO ANCHO Y CARTON PLASTIFICADO.</span></p>
            </td>
            <td style="width:56.0pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:  white;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">PIEZA</span></p>
            </td>
            <td style="width:69.0pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:  white;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">75</span></p>
            </td>
            <td style="width:77.75pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:white;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">22,00</span></p>
            </td>
            <td style="width:57.85pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:white;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">1650</span></p>
            </td>
            <td style="height:25.5pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width:32.9pt;border:solid windowtext 1.0pt;border-top:  none;background:white;padding:0cm 3.5pt 0cm 3.5pt;height:35.25pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;color:black;">2</span></strong></p>
            </td>
            <td style="width:115.1pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:white;padding:0cm 3.5pt 0cm 3.5pt;height:35.25pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="font-size:9px;color:black;">CINTA DE EMBALAJE</span></p>
            </td>
            <td style="width:140.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:white;padding:0cm 3.5pt 0cm 3.5pt;height:35.25pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">MEDIDAS 100X48 CMS, TRANSPARENTE MATERIAL DE POLIPROPILENO Y DE 100 MTS.</span></p>
            </td>
            <td style="width:56.0pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:  white;padding:0cm 3.5pt 0cm 3.5pt;height:35.25pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">PIEZA</span></p>
            </td>
            <td style="width:69.0pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:  white;padding:0cm 3.5pt 0cm 3.5pt;height:35.25pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">100</span></p>
            </td>
            <td style="width:77.75pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:white;padding:0cm 3.5pt 0cm 3.5pt;height:35.25pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">15,40</span></p>
            </td>
            <td style="width:57.85pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:white;padding:0cm 3.5pt 0cm 3.5pt;height:35.25pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">1540</span></p>
            </td>
            <td style="height:35.25pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width:32.9pt;border:solid windowtext 1.0pt;border-top:  none;background:white;padding:0cm 3.5pt 0cm 3.5pt;height:24.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;color:black;">3</span></strong></p>
            </td>
            <td style="width:115.1pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:white;padding:0cm 3.5pt 0cm 3.5pt;height:24.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="font-size:9px;color:black;">CINTA DE MASKIN</span></p>
            </td>
            <td style="width:140.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:white;padding:0cm 3.5pt 0cm 3.5pt;height:24.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">CINTA ADHESIVA DE PAPEL CREPE DE ALTO GRAMAJE DE 22 MM.</span></p>
            </td>
            <td style="width:56.0pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:  white;padding:0cm 3.5pt 0cm 3.5pt;height:24.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">PIEZA</span></p>
            </td>
            <td style="width:69.0pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:  white;padding:0cm 3.5pt 0cm 3.5pt;height:24.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">100</span></p>
            </td>
            <td style="width:77.75pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:white;padding:0cm 3.5pt 0cm 3.5pt;height:24.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">7,70</span></p>
            </td>
            <td style="width:57.85pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:white;padding:0cm 3.5pt 0cm 3.5pt;height:24.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">770</span></p>
            </td>
            <td style="height:24.75pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width:32.9pt;padding:0cm 3.5pt 0cm 3.5pt;height:21.75pt;"><br></td>
            <td colspan="4" style="width:380.1pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:21.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><span style="color:black;">Son: diecinueve mil novecientos noventa y tres &nbsp;92/100 Bolivianos</span></strong></p>
            </td>
            <td style="width:77.75pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:21.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;color:black;">&nbsp;</span></strong></p>
            </td>
            <td style="width:57.85pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:21.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style='font-size:13px;font-family:"Tahoma","sans-serif";'>19.993,92</span></strong></p>
            </td>
            <td style="height:21.75pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width:148.0pt;border:solid windowtext 1.0pt;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:12px;color:black;">LUGAR</span></strong></p>
            </td>
            <td style="width:140.0pt;border:none;border-bottom:solid windowtext 1.0pt;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:12px;color:black;">FECHA DE INICIO</span></strong></p>
            </td>
            <td colspan="2" style="width:125.0pt;border:solid windowtext 1.0pt;border-right:solid black 1.0pt;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:12px;color:black;">FECHA DE CONCLUSI&Oacute;N</span></strong></p>
            </td>
            <td colspan="2" style="width:135.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:12px;color:black;">CONDICIONES DE PAGO</span></strong></p>
            </td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" rowspan="2" style="width:148.0pt;border:solid windowtext 1.0pt;border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:24.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">YACUIBA</span></p>
            </td>
            <td rowspan="2" style="width:140.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:24.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">28/4/2022</span></p>
            </td>
            <td colspan="2" rowspan="2" style="width:125.0pt;border-top:  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:24.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">2/5/2022</span></p>
            </td>
            <td colspan="2" rowspan="2" style="width:135.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:24.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:12px;color:black;">PAGO &Uacute;NICO &nbsp; &nbsp; CON CHEQUE A LA ENTREGA DEL BIEN</span></p>
            </td>
            <td style="height:24.75pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="height:13.45pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="5" style="width:413.0pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:15.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="color:black;">APROBACI&Oacute;N</span></strong></p>
            </td>
            <td colspan="2" style="width:135.6pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:15.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="color:black;">ACEPTACI&Oacute;N</span></strong></p>
            </td>
            <td style="height:15.75pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="5" rowspan="4" style="width:413.0pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></p>
            </td>
            <td colspan="2" rowspan="4" style="width: 135.6pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">&nbsp;</span></p>
            </td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="height:25.5pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="5" style="width:413.0pt;border-top:none;border-left:  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:  solid black 1.0pt;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:33.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="color:black;">RESPONSABLE PROCESO DE CONTRATACI&Oacute;N - RPA &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></strong><strong><span style="font-size:13px;color:black;">FIRMA Y SELLO</span></strong></p>
            </td>
            <td colspan="2" style="width:135.6pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt;height:33.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="color:black;">PROVEEDOR &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></strong><strong><span style="font-size:13px;color:black;">FIRMA Y SELLO</span></strong></p>
            </td>
            <td style="height:33.75pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="7" style="width:548.6pt;border-top:none;border-left:  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:  solid black 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:42.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><u><span style="font-size:13px;color:black;">Decreto Supremo No 956, Articulo 2, P&aacute;rrafo I, &nbsp; &nbsp; se modifica el inciso cc), &nbsp;con el siguiente texto: &nbsp;cc) Orden de Compra u Orden de Servicio:</span></u></strong><strong><span style="font-size:13px;color:black;">&nbsp;</span></strong><span style="font-size:13px;color:black;">Es una solicitud escrita que formaliza un proceso de contrataci&oacute;n, que ser&aacute; aplicable s&oacute;lo en casos de adquisici&oacute;n de bienes o servicios generales de entrega o prestaci&oacute;n, en un plazo no mayor a quince ( 15 ) &nbsp;d&iacute;as calendario.&rdquo;</span></p>
            </td>
            <td style="height:42.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="7" style="width:548.6pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid black 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><u><span style="color:black;">NOTA:</span></u></strong></p>
            </td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="7" style="width:548.6pt;border-top:none;border-left:  solid windowtext 1.0pt;border-bottom:none;border-right:solid black 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:13.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="font-size:13px;color:black;">*En caso de incumplimiento con la entrega del bien se proceder&aacute; de acuerdo a normativa vigente.</span></p>
            </td>
            <td style="height:13.5pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="7" style="width:548.6pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid black 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:13.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="font-size:13px;color:black;">* Los gastos no consignados en la presente ORDEN no ser&aacute;n reconocidos.</span></p>
            </td>
            <td style="height:13.5pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="7" style="width:548.6pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:15.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="font-size:13px;color:black;">* La entrega deber&aacute; efectuarse con ACTA DE RECEPCI&Oacute;N</span></p>
            </td>
            <td style="height:15.75pt;border:none;"><br></td>
        </tr>
    </tbody>
</table>
   
</div>
@endsection
