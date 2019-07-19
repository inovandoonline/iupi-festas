<div class="table-responsive">
    <br>
    <blockquote style="border-left: 5px solid #1b809e">
        <h4 style="color: #1b809e">Fotos do Evento</h4>
        <div class="row">
            @foreach($all as $file)
                <div class="col-md-2 col-xs-4">
                    <div class="box box-primary">
                        <div class="box-body" style="width: 100%; height: 15rem; background-image: url('{{ asset($file->imagem) }}'); background-repeat: no-repeat;
                            background-size: cover">
                        </div>
                        <div class="box-footer">
                            <form method="POST" enctype="application/x-www-form-urlencoded"
                            action="{{ url("admin/foto/$file->id") }}">
                                {!! csrf_field() !!}
                                @method('DELETE')
                                <button class="btn btn-danger btn-block btn-sm">
                                    <i class="fa fa-trash"></i>
                                    Excluir
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </blockquote>
</div>
