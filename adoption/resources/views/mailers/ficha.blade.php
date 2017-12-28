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
                <th style="padding:10px 0px;font-weight:700;color:#3f548e;font-size:30px">¡Hola {{$ficha->names}}!</th>        		
            </tr>
            <tr>
                <td style="padding:10px 0px;font-size:20px;color:#000033">Hemos recibido tu solicitud de adopción para:</td>
            </tr>        	
        </tbody>
    </table>

	<table style="font-weight:400;width:100%;margin:0px auto;max-width:600px;padding:0px 50px 0px 50px;box-sizing:border-box;font-size:17px;padding-bottom:60px;line-height:25px">
        <tbody>
        	<tr>
                <td colspan="2"><h2 style="font-size:30px;font-weight:700;color:#3f548e;text-align:center;margin:0px auto 55px auto">{{$pet->name}}</h2></td>
            </tr>        
            <tr>
                <th style="text-align:left;font-weight:400;color:#3f548e">Sexo: </th>
                <td style="color:#242b3d;font-weight:700">{{$pet->gender}}</td>
            </tr>
            <tr>
                <th style="text-align:left;font-weight:400;color:#3f548e">Edad aprox: </th>
                <td style="color:#242b3d;font-weight:700">{{$pet->age}}</td>
            </tr>
            <tr>
                <th style="text-align:left;font-weight:400;color:#3f548e">Tamaño: </th>
                <td style="color:#242b3d;font-weight:700">{{$pet->size}}</td>
            </tr>    
            <tr>
                <th style="text-align:left;font-weight:400;color:#3f548e">Tipo de pelo: </th>
                <td style="color:#242b3d;font-weight:700">{{$pet->pelo}}</td>
            </tr>
            <tr>
                <th style="text-align:left;font-weight:400;color:#3f548e">Nivel de actividad: </th>
                <td style="color:#242b3d;font-weight:700">{{$pet->activity}}</td>
            </tr>
            <tr>
                <th style="text-align:left;font-weight:400;color:#3f548e">Espacio abierto requerido: </th>
                <td style="color:#242b3d;font-weight:700">{{$pet->space}}</td>
            </tr>  
            <tr>
                <th style="text-align:left;font-weight:400;color:#3f548e">Puede estar solo: </th>
                <td style="color:#242b3d;font-weight:700">{{$pet->alone}}</td>
            </tr>
            <tr>
                <td style="padding:10px 0px;font-size:20px;color:#000033">Entre los proximos dos dias nos pondremos en contacto contigo!</td>
            </tr>              
        </tbody>
    </table>
</body>
</html>


