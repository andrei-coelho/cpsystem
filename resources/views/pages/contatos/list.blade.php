@foreach ($contatos as $contato)

<div class="col-4">
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
