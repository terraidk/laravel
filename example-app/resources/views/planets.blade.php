<div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
    @foreach ($planeten as $planeet) 
        <h2>{{ $planeet['name'] }}</h2>
        {{ $planeet['description'] }}
    @endforeach
</div>
