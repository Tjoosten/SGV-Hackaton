@extends ('layouts.app')

@section ('content')
    <div class="container-fluid py-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body shadow-sm">
                        <h5 class="text-danger pb-1 mb-3"><i class="fe mr-1 fe-lock"></i> Account is gedeactiveerd</h5>

                        <p class="card-text">
                           {{ $banInfo->createdBy->name }} heeft jouw account tijdelijk gedeactiveerd in de applicatie wegens {{ $banInfo->comment }}.
                        </p>

                        <hr class="mt-0">

                        <a class="card-link text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit();">
                            <i class="fe mr-1 fe-power"></i> Afmelden
                        </a>

                        <a class="card-link" href="mailto:{{$banInfo->createdBy->email}}?SUBJECT=Deactivatie van login op {{ config('app.name') }} - Verhuur portaal">
                            <i class="fe mr-1 fe-inbox"></i> Contacteer {{ $banInfo->createdBy->name}}
                        </a>

                        <form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf {{-- Form field protection --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection