@include('partials.header')

<div class="col mb-5">
    <div class="card h-100">
        <div class="card-body p-4">
            <div class="text-center">
                <h1>Jordi Catalina Cortés</h1>
                <br>
                <h2>Información contacto</h2>
                @foreach (config('datos') as $key => $group)
                    <h5 class="fw-bolder">{{$key}}: {{$group}}</h5>
                @endforeach

            </div>
        </div>
    </div>
</div>

@include('partials.footer')
