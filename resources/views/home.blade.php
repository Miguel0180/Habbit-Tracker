<h1>Home</h1>

<h2>Olá, {{$name}}</h2>


<p>Seus Hábitos: </p>
<ul>
    @foreach ($habbits as $habbit)
        <li>{{ $habbit }}</li>
    @endforeach
</ul>