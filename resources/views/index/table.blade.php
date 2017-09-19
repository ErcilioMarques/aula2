


<div class="container">
    @if(session('successedit'))
        <p class="alert-success">{{session('success')}}</p>
    @endif
    @if(session('info'))
        <p class="alert-success">{{session('info')}}</p>
    @endif
    <div class="col-lg-8">
        <table class="table table-responsive table-striped">
            <thead>
            <th>Id</th>
            <th>Nr Estudante</th>
            <th>Nome</th>
            </thead>

            <tbody>


            @foreach($estudantes as $estudante)
                <tr>
                    <td>{{$estudante->id}}</td>
                    <td>{{$estudante->nr_estudante}}</td>
                    <td>{{$estudante->nome}}</td>
                    <td>
                        <form action="{{url('/apagar_estudante',$estudante->id)}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" value="DELETE" name="_method">
                            <input type="submit" value="Deletar" class="btn btn-danger">
                            <a href="{{url('/editar_estudante',$estudante->id)}}" class="btn btn-primary">Editar</a>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>