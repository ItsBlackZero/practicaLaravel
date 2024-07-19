@extends('.layouts/base')
@section('content')
    

<form action="{{url('/')}}" method="post">
        @csrf
        <input type="text" name="task" id="task">
        <input type="submit" value="Crear Usuario">



    </form>
    <br>
    <table border="1">
        <tr>
            <td>Nombre de la tarea</td>
            <td>Accion</td>
        </tr>

        @foreach ($tasks as $task)
            <tr>
                <td>{{$task->task}}</td>
                <td> 
                    <form action="{{ route('task.destroy', $task->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="eliminar">
                    </form>    
                </td>
            </tr>
        @endforeach

    </table>
@endsection