@extends('layouts.admin')
@section('content')
@if(Session::has('message'))
<div class="alert alert-success">
    <em> {!! session('message') !!}</em>
</div>
@endif

<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Cotizacion </h3>

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
<a href="{{ url('/compras/detalle') }}" class="btn blue darken-4 text-black "><i class="fa fa-plus-square"></i> Volver atras</a>
<button data-id="5" onclick="javascript:imprSelec('muestra')">Imprimir</button>

<div id="muestra" align="center">

<table style="width: 4.6e+2pt;border: none;margin-left:2.75pt;border-collapse:collapse;">
    <tbody>
        <tr>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 39pt;vertical-align: bottom;"><br></td>
            <td colspan="9" style="width:366.45pt;padding:0cm 3.5pt 0cm 3.5pt;height:39.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:21px;color:black;">INFORME DE COTIZACI&Oacute;N Y VERIFICACI&Oacute;N DE DOCUMENTO N&deg;99/2022</span></strong></p>
            </td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 39pt;vertical-align: bottom;"><br></td>
            <td style="height:39.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="12" rowspan="2" style="width: 461.45pt;padding: 0cm 3.5pt;height: 22.5pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><span style="color:black;">A:</span></strong><span style="color:black;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Lic. Valent&iacute;n Pereira Cabezas<br> <strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; RESPONSABLE DE &nbsp;PROCESO DE CONTRACCI&Oacute;N &nbsp;(RPA)&nbsp;</strong></span></p>
            </td>
            <td style="height:22.5pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="height:13.45pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="9" style="width: 366.45pt;padding: 0cm 3.5pt;height: 18.75pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><span style="color:black;">VIA: &nbsp; &nbsp;&nbsp;</span></strong><span style="color:black;">&nbsp;Lic. Janeth Camacho</span></p>
            </td>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 18.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 18.75pt;vertical-align: bottom;"><br></td>
            <td style="height:18.75pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="11" style="width: 419.45pt;padding: 0cm 3.5pt;height: 16.5pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><span style="color:black;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; DIRECTOR DE &nbsp;ADMINISTRACI&Oacute;N a.i.</span></strong></p>
            </td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 16.5pt;vertical-align: bottom;"><br></td>
            <td style="height:16.5pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="12" rowspan="2" style="width: 461.45pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><span style="color:black;">DE:</span></strong><span style="color:black;">&nbsp; &nbsp; &nbsp; &nbsp; Ing. Fidel Castillo Ocampo<br> <strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; RESPONSABLE DE COMPRAS MENORES&nbsp;</strong></span></p>
            </td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="height:14.25pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 11.25pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 71pt;padding: 0cm 3.5pt;height: 11.25pt;vertical-align: bottom;"><br></td>
            <td style="width: 69pt;padding: 0cm 3.5pt;height: 11.25pt;vertical-align: bottom;"><br></td>
            <td style="width: 90pt;padding: 0cm 3.5pt;height: 11.25pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 11.25pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 41.45pt;padding: 0cm 3.5pt;height: 11.25pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 11.25pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 11.25pt;vertical-align: bottom;"><br></td>
            <td style="height:11.25pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><span style="color:black;">Fecha:</span></strong></p>
            </td>
            <td colspan="4" style="width: 230pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><span style="color:black;">mi&eacute;rcoles, 27 de abril de 2022</span></strong></p>
            </td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 41.45pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="12" style="width: 461.45pt;padding: 0cm 3.5pt;height: 37.5pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="color:black;">REF.: REMITE INFORME SOBRE LA COMPRA ADQUISICI&Oacute;N DE MATERIALES DE ESCRITORIO PARA EL HOSPITAL FRAY QUEBRACHO Y &Aacute;REA ADMINISTRATIVA EL PROGRAMA COVID - 19</span></strong></p>
            </td>
            <td style="height:37.5pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="6" style="width: 283pt;padding: 0cm 3.5pt;height: 21pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">De mi mayor consideraci&oacute;n.</span></p>
            </td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 21pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 41.45pt;padding: 0cm 3.5pt;height: 21pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 21pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 21pt;vertical-align: bottom;"><br></td>
            <td style="height:21.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 5.25pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 71pt;padding: 0cm 3.5pt;height: 5.25pt;vertical-align: bottom;"><br></td>
            <td style="width: 69pt;padding: 0cm 3.5pt;height: 5.25pt;vertical-align: bottom;"><br></td>
            <td style="width: 90pt;padding: 0cm 3.5pt;height: 5.25pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 5.25pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 41.45pt;padding: 0cm 3.5pt;height: 5.25pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 5.25pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 5.25pt;vertical-align: bottom;"><br></td>
            <td style="height:5.25pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="12" rowspan="2" style="width:461.45pt;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">A tiempo de saludarlo cordialmente, a traves &nbsp;del presente &nbsp;informe de cotizaci&oacute;n y verificaci&oacute;n de documento, tengo a bien informar lo siguiente:</span></p>
            </td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="height:21.75pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 71pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 69pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 90pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 41.45pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td style="height:6.75pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="12" style="width: 461.45pt;padding: 0cm 3.5pt;height: 31.5pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><span style="color:black;">1.- REQUERIMIENTO DE ADQUISICI&Oacute;N DE MATERIALES DE ESCRITORIO PARA EL HOSPITAL FRAY QUEBRACHO Y &Aacute;REA ADMINISTRATIVA EL PROGRAMA COVID - 19</span></strong></p>
            </td>
            <td style="height:31.5pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="5" style="width: 193pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 90pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 41.45pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td style="height:6.75pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="12" rowspan="3" style="width: 461.45pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">La Direcci&oacute;n de Administraci&oacute;n de Bienes y Servicios del G.A.R.G.CH, ha sido derivado el requerimiento de ADQUISICI&Oacute;N DE MATERIALES DE ESCRITORIO PARA EL HOSPITAL FRAY QUEBRACHO Y &Aacute;REA ADMINISTRATIVA EL PROGRAMA COVID - 19 para la unidad de UNIDAD PROGRAMA COVID - 19; que son solicitados de acuerdo al siguiente detalle :</span></p>
            </td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="height:32.25pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 71pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 69pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 90pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 41.45pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 30.75pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width:71.0pt;border:solid windowtext 1.0pt;background:#A6A6A6;padding:0cm 3.5pt 0cm 3.5pt;height:30.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;color:black;">N&deg;</span></strong></p>
            </td>
            <td style="width: 69pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;background: rgb(166, 166, 166);padding: 0cm 3.5pt;height: 30.75pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;color:black;">NOMBRE DEL PRODUCTO</span></strong></p>
            </td>
            <td style="width:90.0pt;border-top:solid windowtext 1.0pt;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;background:#A6A6A6;padding:0cm 3.5pt 0cm 3.5pt;height:30.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;color:black;">ESPECIFICACIONES T&Eacute;CNICAS</span></strong></p>
            </td>
            <td style="width:42.0pt;border:solid windowtext 1.0pt;border-left:  none;background:#A6A6A6;padding:0cm 3.5pt 0cm 3.5pt;height:30.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;color:black;">&nbsp;</span></strong></p>
            </td>
            <td colspan="2" style="width:41.45pt;border:solid windowtext 1.0pt;border-left:none;background:  #A6A6A6;padding:0cm 3.5pt 0cm 3.5pt;height:30.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;color:black;">UNIDAD&nbsp;</span></strong></p>
            </td>
            <td colspan="2" style="width:53.0pt;border:solid windowtext 1.0pt;border-left:none;background:  #A6A6A6;padding:0cm 3.5pt 0cm 3.5pt;height:30.75pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><span style="font-size:13px;color:black;">CANTIDAD</span></strong></p>
            </td>
            <td style="width: 42pt;background: white;padding: 0cm 3.5pt;height: 30.75pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;color:black;">&nbsp;</span></strong></p>
            </td>
            <td style="height:30.75pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 25.5pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width:71.0pt;border:solid windowtext 1.0pt;border-top:none;background:  white;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;color:black;">1</span></strong></p>
            </td>
            <td style="width: 69pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 3.5pt;height: 25.5pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">ARCHIVADOR DE PALANCA</span></p>
            </td>
            <td colspan="2" style="width:132.0pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;background:white;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">TAMA&Ntilde;O OFICIO LOMO ANCHO Y CART&Oacute;N PLASTIFICADO.</span></p>
            </td>
            <td colspan="2" style="width:41.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:white;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">PIEZA</span></p>
            </td>
            <td colspan="2" style="width:53.0pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:white;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">75</span></p>
            </td>
            <td style="width: 42pt;background: white;padding: 0cm 3.5pt;height: 25.5pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">&nbsp;</span></p>
            </td>
            <td style="height:25.5pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 29.25pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width:71.0pt;border:solid windowtext 1.0pt;border-top:none;background:  white;padding:0cm 3.5pt 0cm 3.5pt;height:29.25pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;color:black;">2</span></strong></p>
            </td>
            <td style="width:69.0pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:  white;padding:0cm 3.5pt 0cm 3.5pt;height:29.25pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">CINTA DE EMBALAJE</span></p>
            </td>
            <td colspan="2" style="width:132.0pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;background:white;padding:0cm 3.5pt 0cm 3.5pt;height:29.25pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">MEDIDAS 100X48 CMS, TRANSPARENTE MATERIAL DE POLIPROPILENO Y DE 100 MTS.</span></p>
            </td>
            <td colspan="2" style="width:41.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:white;padding:0cm 3.5pt 0cm 3.5pt;height:29.25pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">PIEZA</span></p>
            </td>
            <td colspan="2" style="width:53.0pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:white;padding:0cm 3.5pt 0cm 3.5pt;height:29.25pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">100</span></p>
            </td>
            <td style="width: 42pt;background: white;padding: 0cm 3.5pt;height: 29.25pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">&nbsp;</span></p>
            </td>
            <td style="height:29.25pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 27pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width:71.0pt;border:solid windowtext 1.0pt;border-top:none;background:  white;padding:0cm 3.5pt 0cm 3.5pt;height:27.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;color:black;">3</span></strong></p>
            </td>
            <td style="width: 69pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;background: white;padding: 0cm 3.5pt;height: 27pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">CINTA DE MASKIN</span></p>
            </td>
            <td colspan="2" style="width:132.0pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;background:white;padding:0cm 3.5pt 0cm 3.5pt;height:27.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">CINTA ADHESIVA DE PAPEL CREPE DE ALTO GRAMAJE DE 22 MM.</span></p>
            </td>
            <td colspan="2" style="width:41.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:white;padding:0cm 3.5pt 0cm 3.5pt;height:27.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">PIEZA</span></p>
            </td>
            <td colspan="2" style="width:53.0pt;border-top:none;border-left:  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:white;padding:0cm 3.5pt 0cm 3.5pt;height:27.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">100</span></p>
            </td>
            <td style="width: 42pt;background: white;padding: 0cm 3.5pt;height: 27pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:9px;color:black;">&nbsp;</span></p>
            </td>
            <td style="height:27.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="6" style="width: 283pt;padding: 0cm 3.5pt;height: 25.5pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><span style="color:black;">2.- PRECIO REFERENCIAL</span></strong></p>
            </td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 25.5pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 41.45pt;padding: 0cm 3.5pt;height: 25.5pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 25.5pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 25.5pt;vertical-align: bottom;"><br></td>
            <td style="height:25.5pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 71pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 69pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 90pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 41.45pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td style="height:6.75pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 71pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 69pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 90pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 41.45pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 6.75pt;vertical-align: bottom;"><br></td>
            <td style="height:6.75pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 20.25pt;vertical-align: bottom;"><br></td>
            <td colspan="9" style="width:366.45pt;border:solid windowtext 1.0pt;background:#A6A6A6;padding:0cm 3.5pt 0cm 3.5pt;height:20.25pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:13px;color:black;">DESCRIPCI&Oacute;N</span></strong></p>
            </td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 20.25pt;vertical-align: bottom;"><br></td>
            <td style="height:20.25pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 32.25pt;vertical-align: bottom;"><br></td>
            <td colspan="9" style="width:366.45pt;border:solid windowtext 1.0pt;border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:32.25pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:12px;color:black;">&nbsp;ADQUISICI&Oacute;N DE MATERIALES DE ESCRITORIO PARA EL HOSPITAL FRAY QUEBRACHO Y AREA ADMINISTRATIVA EL PROGRAMA COVID - 19&nbsp;</span></p>
            </td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 32.25pt;vertical-align: bottom;"><br></td>
            <td style="height:32.25pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="5" style="width: 272pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:13px;color:black;">PRECIO REFERENCIAL BS.-</span></p>
            </td>
            <td colspan="4" style="width: 94.45pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:13px;color:black;">19.993,92 &nbsp;</span></p>
            </td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 10.5pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 71pt;padding: 0cm 3.5pt;height: 10.5pt;vertical-align: bottom;"><br></td>
            <td style="width: 69pt;padding: 0cm 3.5pt;height: 10.5pt;vertical-align: bottom;"><br></td>
            <td style="width: 90pt;padding: 0cm 3.5pt;height: 10.5pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 10.5pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 41.45pt;padding: 0cm 3.5pt;height: 10.5pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 10.5pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 10.5pt;vertical-align: bottom;"><br></td>
            <td style="height:10.5pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="6" style="width: 283pt;padding: 0cm 3.5pt;height: 27pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><span style="color:black;">3.- COTIZACI&Oacute;N Y VERIFICACI&Oacute;N DE DOCUMENTO</span></strong></p>
            </td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 27pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 41.45pt;padding: 0cm 3.5pt;height: 27pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 27pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 27pt;vertical-align: bottom;"><br></td>
            <td style="height:27.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 8.25pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 71pt;padding: 0cm 3.5pt;height: 8.25pt;vertical-align: bottom;"><br></td>
            <td style="width: 69pt;padding: 0cm 3.5pt;height: 8.25pt;vertical-align: bottom;"><br></td>
            <td style="width: 90pt;padding: 0cm 3.5pt;height: 8.25pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 8.25pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 41.45pt;padding: 0cm 3.5pt;height: 8.25pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 8.25pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 8.25pt;vertical-align: bottom;"><br></td>
            <td style="height:8.25pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="12" rowspan="2" style="width:461.45pt;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">Mediante &nbsp;invitaci&oacute;n efectuada &nbsp; y &nbsp; &nbsp; aceptaci&oacute;n &nbsp;del proponente seg&uacute;n verificaci&oacute;n correspondiente indicamos que el mismo cumple con las especificaciones t&eacute;cnicas solicitadas por la unidad, para tal efecto se adjunta los datos correspondientes a la cotizaci&oacute;n (Proforma):</span></p>
            </td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="height:48.75pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width: 8pt;padding: 0cm 3.5pt;height: 3.75pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">&nbsp; &nbsp; &nbsp;</span></p>
            </td>
            <td colspan="2" style="width: 70.75pt;padding: 0cm 3.5pt;height: 3.75pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 114.25pt;padding: 0cm 3.5pt;height: 3.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 90pt;padding: 0cm 3.5pt;height: 3.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 3.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 23.05pt;padding: 0cm 3.5pt;height: 3.75pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 2cm;padding: 0cm 3.5pt;height: 3.75pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 2cm;padding: 0cm 3.5pt;height: 3.75pt;vertical-align: bottom;"><br></td>
            <td style="height:3.75pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width: 8pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 70.75pt;border: 1pt solid windowtext;background: rgb(166, 166, 166);padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">N&ordm;</span></p>
            </td>
            <td colspan="5" style="width: 269.3pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;background: rgb(166, 166, 166);padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">EMPRESA/CASA COMERCIAL/PROVEEDOR</span></p>
            </td>
            <td colspan="2" style="width: 2cm;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;background: rgb(166, 166, 166);padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="font-size:13px;color:black;">MONTO BS</span></p>
            </td>
            <td colspan="2" style="width: 2cm;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;background: rgb(191, 191, 191);padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="font-size:13px;color:black;">N&ordm; PROFORMA</span></p>
            </td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width: 8pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 70.75pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">1</span></p>
            </td>
            <td colspan="5" style="width: 269.3pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">&nbsp;LENNY DANNY ANDIA SAGARDIA&nbsp;</span></p>
            </td>
            <td colspan="2" style="width: 2cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="font-size:11px;color:black;">&nbsp; &nbsp; &nbsp; 19.993,92 &nbsp;&nbsp;</span></p>
            </td>
            <td colspan="2" style="width: 2cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="font-size:12px;color:black;">110</span></p>
            </td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width: 8pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 70.75pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">&nbsp;</span></p>
            </td>
            <td colspan="5" style="width: 269.3pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">&nbsp;</span></p>
            </td>
            <td colspan="2" style="width: 2cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="font-size:12px;color:black;">&nbsp;</span></p>
            </td>
            <td colspan="2" style="width: 2cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">&nbsp;</span></p>
            </td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width: 8pt;padding: 0cm 3.5pt;height: 9.75pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 70.75pt;padding: 0cm 3.5pt;height: 9.75pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 114.25pt;padding: 0cm 3.5pt;height: 9.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 90pt;padding: 0cm 3.5pt;height: 9.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 9.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 23.05pt;padding: 0cm 3.5pt;height: 9.75pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 2cm;padding: 0cm 3.5pt;height: 9.75pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 2cm;padding: 0cm 3.5pt;height: 9.75pt;vertical-align: bottom;"><br></td>
            <td style="height:9.75pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="12" rowspan="5" style="width: 461.45pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">Dentro de la presente cotizaci&oacute;n obtenida, se pudo constatar que la &nbsp; &nbsp; (proforma) Ofertada por &nbsp;&ldquo;LENNY DANNY ANDIA SAGARDIA&ldquo; en el proceso ADQUISICI&Oacute;N DE MATERIALES DE ESCRITORIO PARA EL HOSPITAL FRAY QUEBRACHO Y &Aacute;REA ADMINISTRATIVA EL PROGRAMA COVID - 19. &nbsp;Con un importe &nbsp;de Bs. 19993,92 &nbsp;- diecinueve mil novecientos noventa y tres &nbsp;92/100 Bolivianos se ajusta a &nbsp;las especificaciones t&eacute;cnicas de la unidad solicitante.</span></p>
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
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="height:21.75pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 6pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 71pt;padding: 0cm 3.5pt;height: 6pt;vertical-align: bottom;"><br></td>
            <td style="width: 69pt;padding: 0cm 3.5pt;height: 6pt;vertical-align: bottom;"><br></td>
            <td style="width: 90pt;padding: 0cm 3.5pt;height: 6pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 6pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 41.45pt;padding: 0cm 3.5pt;height: 6pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 6pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 6pt;vertical-align: bottom;"><br></td>
            <td style="height:6.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="6" style="width: 283pt;padding: 0cm 3.5pt;height: 17.25pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><strong><span style="color:black;">4.- CONCLUSI&Oacute;N Y RECOMENDACI&Oacute;N</span></strong></p>
            </td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 17.25pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 41.45pt;padding: 0cm 3.5pt;height: 17.25pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 17.25pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 17.25pt;vertical-align: bottom;"><br></td>
            <td style="height:17.25pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 4.5pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 71pt;padding: 0cm 3.5pt;height: 4.5pt;vertical-align: bottom;"><br></td>
            <td style="width: 69pt;padding: 0cm 3.5pt;height: 4.5pt;vertical-align: bottom;"><br></td>
            <td style="width: 90pt;padding: 0cm 3.5pt;height: 4.5pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 4.5pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 41.45pt;padding: 0cm 3.5pt;height: 4.5pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 4.5pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 4.5pt;vertical-align: bottom;"><br></td>
            <td style="height:4.5pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="12" rowspan="5" style="width: 461.45pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">Dentro del presente proceso por compra menor de bienes, consistente en &ldquo;ADQUISICI&Oacute;N DE MATERIALES DE ESCRITORIO PARA EL HOSPITAL FRAY QUEBRACHO Y &Aacute;REA ADMINISTRATIVA EL PROGRAMA COVID - 19&rdquo;, habi&eacute;ndose recabado la informaci&oacute;n &nbsp;en base a las especificaciones t&eacute;cnicas y &nbsp;efectuando la verificaci&oacute;n correspondiente, se recomienda al Responsable del Proceso de Contrataci&oacute;n - RPA, proceder con la adjudicaci&oacute;n correspondiente.</span></p>
            </td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="height:13.45pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="height:33.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 71pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 69pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 90pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 41.45pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 71pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 69pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 90pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 41.45pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 71pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 69pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 90pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 41.45pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 71pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 69pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 90pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 41.45pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 71pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 69pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 90pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 41.45pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 71pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 69pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 90pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 41.45pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="2" style="width: 53pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 42pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="12" style="width: 461.45pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">Responsable de Compras Menores</span></p>
            </td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
    </tbody>
</table>
</div>
@endsection
