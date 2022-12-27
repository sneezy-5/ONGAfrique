@if ($errors->any())
    <div class="alert alert-danger" style="text-align:center;height:auto; width:auto; font-size:15px">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="font-size: x-small;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif