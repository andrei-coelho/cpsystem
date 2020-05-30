@foreach ($emails as $email)
<div class="w-100 border rounded">
    <div class="container-fluid">
        <div class="row border-bottom">
            <div class="col-12">
                <span class="w-100">Assunto:</span>
                <!-- assunto -->
                <h5>{{ $email->assunto }}</h5>
            </div>
        </div>
    </div>
    @if ($email->status)
    <div class="container-fluid">
        <div class="row p-3">
            <div class="col-5">
                <!-- dados estatísticos -->
                <ul class="nav">
                    <li class="nav-item mx-2 text-center">
                        <div>
                            <div class="bg-primary rounded-circle icons-stat">
                            {{ $email->enviados }}
                            </div> enviados
                        </div>
                    </li>

                    <li class="nav-item mx-2 text-center">
                        <div>
                            <div class="bg-success rounded-circle icons-stat">
                            {{ $email->lidos }}
                            </div> lidos
                        </div>
                    </li>
                    <li class="nav-item mx-2 text-center">
                        <div>
                            <div class="bg-danger rounded-circle icons-stat">
                            {{ $email->erros }}
                            </div> erros
                        </div>
                    </li>
                    <li class="nav-item mx-2 text-center">
                        <div>
                            <div class="bg-gray rounded-circle icons-stat">
                            {{ $email->nl }}
                            </div> NL
                        </div>
                    </li>

                </ul>

            </div>
            <div class="col-2">
                <!-- informações de data -->
                <small>data:</small>
                <p>{{ $email->create_at }}</p>
            </div>
            <div class="col-2">
                <!-- informações do tipo de lista -->
                @switch($email->tipo)
                    @case(1)
                        <small>Lista:</small>
                        <p>Todos</p>
                        @break

                    @case(2)
                        <small>Campanha:</small>
                        <p class="text-truncate">Nome grande de campanha</p>
                        @break

                     @case(3)
                        <small>Lista:</small>
                        <p>Filtrada</p>
                @endswitch
            </div>
            <div class="col-1">
                <!-- Status -->
                <small>Status:</small>
                @if ($email->status == 2)
                <p class="text-success">Enviado</p>
                @else
                <p class="text-primary">Enviando...</p>
                @endif</p>
            </div>
            <div class="col-2">
                <!-- botões -->
                <a href="#" class="btn btn-outline-primary float-right">Detalhes</a>
            </div>
        </div>
    </div>
    @else
    <div class="container-fluid">
        <div class="row p-3">
            Ocorreu um erro na comunicação com o servidor. Tente atualizar o navegador.
        </div>
    </div>
    @endif

</div>
@endforeach
