<center>
    <button style="width: 10%; 
                height : 10%; 
                background-color: #73AD21;">
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </button><br>
</center>
@forelse($achats as $achat)
    <h3>{{ $achat->libelle_achat }}  
        <span style="float : right;
                    width: 300px;
                    border: 3px solid #73AD21;
                    padding: 10px;">
            {{ $achat->created_at }}
        </span>
    </h3><hr>
@empty
    <h3>empty history</h3>
@endforelse