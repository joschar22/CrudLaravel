formulario de creacion de empleado
<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data"><br>
@csrf
@include('empleado.form', ['modo'=> 'Crear'])




</form>