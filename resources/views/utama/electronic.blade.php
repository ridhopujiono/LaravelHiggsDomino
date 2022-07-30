<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
</head>

<body>
    <div class="wrap">
        <div class="header">
            <h1>Wahyu Website</h1>
            <p>Website Langganan Anda Berbelanja</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/food_and_drink') }}">Food & Drink</a></li>
                <li><a href="{{ url('/electronic') }}">Electronic</a></li>
                <li><a href="{{ url('/fashion') }}">Fashion</a></li>
                <li><a href="{{ url('login') }}">Login</a></li>
            </ul>
        </div>
        <div class="badan">
            <div class="content">
                <div style="padding: 10px">
                    <br>
                    Elektronik <br><br>

                    @forelse ($data as $d)
                        <img src="{{ asset($d->foto) }}" style="width: 150px;"><br>
                        {{ $d->nama_produk }}<br>
                        <br>

                    @empty
                        <li>Belum ada data</li>
                    @endforelse
                    <li><a href="1412200002.html">Back</a></li>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="footer">
            @Wahyu_Pamungkas
        </div>
    </div>
</body>

</html>
