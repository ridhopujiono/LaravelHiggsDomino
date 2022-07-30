<!-- Nama Produk Field -->
<div class="col-sm-12">
    {!! Form::label('nama_produk', 'Nama Produk:') !!}
    <p>{{ $produk->nama_produk }}</p>
</div>

<!-- Jenis Field -->
<div class="col-sm-12">
    {!! Form::label('jenis', 'Jenis:') !!}
    <p>{{ $produk->jenis }}</p>
</div>

<!-- Harga Field -->
<div class="col-sm-12">
    {!! Form::label('harga', 'Harga:') !!}
    <p>{{ $produk->harga }}</p>
</div>

<!-- Foto Field -->
<div class="col-sm-12">
    {!! Form::label('foto', 'Foto:') !!}
    <p>{{ $produk->foto }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $produk->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $produk->updated_at }}</p>
</div>

