<!DOCTYPE html>
 
<html lang="en">
<head>
<title>Datos de Egresos</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/estilo.css') }}" />
</head>
<body background="{{ asset('img\orig_29817.jpg') }}">
    
    <ul id="nav">
        <li><a href="/">Agregar Ingresos</a></li>
        <li><a href="agregarEgresos">Agregar Egresos</a></li>
        <li><a href="listaIngresos">Listado de Ingresos</a></li>
    </ul>
    <div class="container">
        <h2>Datos de Egresos</h2>
        <table class="table table-bordered" id="laravel_datatable">
            <thead>
                <tr>
                    <th>id</th>
                    <th>codigo</th>
                    <th>descripcion</th>
                    <th>egresos</th>
                    <th>fecha de publicacion</th>
                </tr>
            </thead>
        </table>
    </div>
    <script>
        $(document).ready( function () {
        $('#laravel_datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('listaEg') }}",
            columns: [
                { data: 'id', name: 'id' },
                { data: 'codigo', name: 'codigo' },
                { data: 'descripcion', name: 'descripcion' },
                { data: 'egresos', name: 'egresos' },
                { data: 'created_at', name: 'created_at' }
            ]
        });
     });
  </script>
   </body>
</html>