<ul>
    @foreach ($pokemons as $p)
    <li> [ {{$loop->index}} ] = {{$p['symbol']}} - {{  $p['bidPrice' ]}} </li>
      
    @endforeach
</ul>



{{-- <ul>
    @foreach ($pokemons['pokemon'] as $p)
    <li> {{$p['name']}} </li>
      
    @endforeach
</ul> --}}


{{--
     php artisan tarefa:create 

php artisan schedule:work 
 --}}