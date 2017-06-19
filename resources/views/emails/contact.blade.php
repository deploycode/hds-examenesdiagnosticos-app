<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <style media="screen">
    thead{
      background-color: white;
      padding: 0.5em;
    }
    tbody td{
      background-color:#12a19b;
      padding: 0.5em;
    }
    a{
      color: white;
    }
  </style>
</head>
<body>
    <table style="background-color:white; padding:1em;color:white; font-family:Calibri; font-size:20px;width:500px;">
      <thead>
        <tr>
          <td colspan="2"><img src= 'http://examenesdiagnosticos.com.co/img/logo.png'></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Examen:</td>
          <td>{!!$examen!!}</td>
        </tr>
        <tr>
          <td>Nombre:</td>
          <td >{!!$name!!}</td>
        </tr>
        <tr>
          <td>Contacto:</td>
          <td>{!!$number!!}</td>
        </tr>
        <tr>
          <td>Email</td>
          <td>{!!$email!!}</td>
        </tr>
      </tbody>
    </table>
</body>
</html>
