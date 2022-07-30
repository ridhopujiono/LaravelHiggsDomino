<!-- Nama Produk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_produk', 'Nama Produk:') !!}
    {!! Form::text('nama_produk', null, ['class' => 'form-control']) !!}
</div>

<!-- Jenis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenis', 'Jenis:') !!}
    @if (isset($produk->jenis))
        <select class="form-control" name="jenis" id="">
            @if ($produk->jenis == 'Food And Drink')
                <option value="Food And Drink">Food And Drink</option>
            @elseif ($produk->jenis == 'Electronic')
                <option value="Electronic">Electronic</option>
            @else
                <option value="Fashion">Fashion</option>
            @endif
        </select>
    @else
        <select class="form-control" name="jenis" id="">
            <option value="Food And Drink">Food And Drink</option>
            <option value="Electronic">Electronic</option>
            <option value="Fashion">Fashion</option>
        </select>
    @endif
</div>

<!-- Harga Field -->
<div class="form-group col-sm-6">
    {!! Form::label('harga', 'Harga:') !!}
    {!! Form::text('harga', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto', 'Foto:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('foto', ['class' => 'custom-file-input']) !!}
            {!! Form::label('foto', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>
