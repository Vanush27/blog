<div class="container">
    <div class="row">
        <nav>
            <ol>
                @foreach($data as $number)
                    <li><p>Number is {{$number}}</p></li>
                @endforeach
            </ol>
        </nav>
    </div>
</div>
