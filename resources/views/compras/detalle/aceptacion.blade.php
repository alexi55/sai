@extends('layouts.admin')
@section('content')
@if(Session::has('message'))
<div class="alert alert-success">
    <em> {!! session('message') !!}</em>
</div>
@endif

<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Aceptacion </h3>

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

<table >
    <tbody>
        <tr>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="3" style="width: 180pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:right;'><span style="color:black;">Yacuiba, &nbsp;26 de abril de 2022 &nbsp;</span></p>
            </td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">Se&ntilde;or:</span></p>
            </td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 7.5pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 7.5pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 7.5pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 7.5pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 7.5pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 7.5pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 7.5pt;vertical-align: bottom;"><br></td>
            <td style="height:7.5pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="7" rowspan="3" style="width: 420pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="font-size:13px;color:black;">Lic. Valent&iacute;n Pereira Cabezas<strong><br>&nbsp;RESPONSABLE DEL PROCESO DE CONTRATACI&Oacute;N (RPA)<br>&nbsp;GOBIERNO AUT&Oacute;NOMO REGIONAL DEL GRAN CHACO</strong></span></p>
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
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 11.25pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 11.25pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 11.25pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 11.25pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 11.25pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 11.25pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 11.25pt;vertical-align: bottom;"><br></td>
            <td style="height:11.25pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 120pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">Presente. -</span></p>
            </td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="7" rowspan="3" style="width: 420pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="color:black;">REF.: ACEPTACI&Oacute;N A LA INVITACI&Oacute;N REALIZADA EN EL PROCESO DE CONTRATACI&Oacute;N MENOR ADQUISICI&Oacute;N DE MATERIALES DE ESCRITORIO PARA EL HOSPITAL FRAY QUEBRACHO Y &Aacute;REA ADMINISTRATIVA EL PROGRAMA COVID - 19</span></strong></p>
            </td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="height:21.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 24.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 24.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 24.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 24.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 24.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 24.75pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 24.75pt;vertical-align: bottom;"><br></td>
            <td style="height:24.75pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="3" style="width: 180pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">De mi consideraci&oacute;n:</span></p>
            </td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="7" rowspan="3" style="width: 420pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">Mediante la presente manifiesto mi aceptaci&oacute;n a invitaci&oacute;n recibida en fecha &nbsp; 25 de abril del presente A&ntilde;o, &nbsp; para el &nbsp;Proceso de Contrataci&oacute;n ADQUISICI&Oacute;N DE MATERIALES DE ESCRITORIO PARA EL HOSPITAL FRAY QUEBRACHO Y &Aacute;REA ADMINISTRATIVA EL PROGRAMA COVID - 19 , adjunto a &nbsp;la misma la documentaci&oacute;n solicitada:</span></p>
            </td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="height:36.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="7" style="width: 420pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="7" style="width: 420pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">1. Carta de aceptaci&oacute;n&nbsp;</span></p>
            </td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="7" style="width: 420pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">2. Fotocopia de cedula de identidad</span></p>
            </td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="7" style="width: 420pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">3. Proforma/Cotizaci&oacute;n&nbsp;</span></p>
            </td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="7" style="width: 420pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">4. Certificaci&oacute;n Electr&oacute;nica</span></p>
            </td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 120pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">5. Matricula de Comercio</span></p>
            </td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="6" style="width: 360pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">Esperando una respuesta favorable me despido con la mayor consideraci&oacute;n.</span></p>
            </td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="2" style="width: 120pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:  normal;font-size:15px;font-family:"Calibri","sans-serif";'><span style="color:black;">Atentamente,&nbsp;</span></p>
            </td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td colspan="3" style="width: 180pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">&nbsp;LENNY DANNY ANDIA SAGARDIA&nbsp;</span></p>
            </td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="width: 60pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;"><br></td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
        <tr>
            <td colspan="7" style="width: 420pt;padding: 0cm 3.5pt;height: 15pt;vertical-align: bottom;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="color:black;">C.I.N&deg; 1113159-1H CH</span></strong></p>
            </td>
            <td style="height:15.0pt;border:none;"><br></td>
        </tr>
    </tbody>
</table>
</div>
@endsection
