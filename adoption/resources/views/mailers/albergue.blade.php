<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<table style="font-weight:400;width:100%;margin:0px auto;max-width:600px;text-align:center;margin-bottom:15px">
		<tbody>
			<tr>
                <th style="padding:10px 0px;font-weight:700;color:#3f548e;font-size:30px">¡Hola {{$albergue->encargado}}!</th>        		
            </tr>
            <tr>
                <td style="padding:10px 0px;font-size:20px;color:#000033">Hemos recibido tu solicitud de afiliación para:</td>
            </tr>
            <tr>
                <td colspan="2"><h2 style="font-size:30px;font-weight:700;color:#3f548e;text-align:center;margin:0px auto 55px auto">{{$albergue->name}}</h2></td>
            </tr>        	
        </tbody>
    </table>
</body>
</html>