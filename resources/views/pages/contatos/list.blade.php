<div class="container-fluid">

    <div class="row py-3 mb-0 border-bottom">
        <div class="col-2">
            <p>Total: {{ count($contatos) }}</p>
        </div>
        <div class="col-4">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control rounded-0" type="search" placeholder="buscar contato" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0 mx-0 rounded-0" type="submit">Buscar</button>
            </form>
        </div>

        <div class="col-4">

        </div>

    </div>

    <div class="row pt-4">
        @foreach ($contatos as $contato)

        <div class="col-4 mb-3">

            <div class="card mx-auto" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">{{ $contato->nome }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $contato->empresa }}</h6>
                    <p class="card-text">{{ $contato->email }}</p>
                    @if ($contato->telefone)
                        <p class="card-text">{{ $contato->telefone }}</p>
                    @else
                        <p class="card-text">-</p>
                    @endif

                    <a href="#" class="btn btn-outline-primary">detalhes</a>
                </div>
            </div>

        </div>

        @endforeach

    </div>
</div>


