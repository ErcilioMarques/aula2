
<div class="container">
    <div  class="col-lg-8">
        @if(session('success'))
            <p class="alert-success">{{session('success')}}</p>
        @endif
        <form action="{{url('/criar_supervisor')}}" method="post">
            {{csrf_field()}}
            <div >
                <div class="form-group">
                    <label for="nr_estudante"> Introduz o numero do processo</label>
                    <input type="number" name="nr_processo" placeholder="introduz o numero do processo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nome">Digite o nome</label>
                    <input type="text" name="nome" placeholder="introduz o nome" class="form-control">
                </div>

                <div class="form-group">
                    <input type="submit" value="Salvar" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</div>