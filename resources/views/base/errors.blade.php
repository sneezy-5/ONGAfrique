@if ($errors->any())
    <div class="alert alert-danger" style="height: 50px; width:50px">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="font-size: x-small;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif