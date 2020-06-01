<div class="container-fluid">
    <div class="row pt-3">
        @foreach ($templates as $template)
        <div class="col-4">

            <div class="card m-2" style="width: 18rem;">
            <img src="/img/print/{{ $template->print }}" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">{{ $template->nome }}</h5>
                <a href="#" class="btn btn-primary">Editar</a>
            </div>
            </div>

        </div>

        @endforeach
    </div>
</div>

