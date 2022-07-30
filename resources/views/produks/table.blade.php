<div class="table-responsive">
    <table class="table" id="produks-table">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Jenis</th>
                <th>Harga</th>
                <th>Foto</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produks as $produk)
                <tr>
                    <td>{{ $produk->nama_produk }}</td>
                    <td>{{ $produk->jenis }}</td>
                    <td>{{ $produk->harga }}</td>
                    <td><img src="{{ asset($produk->foto) }}" alt="" width="100px"></td>
                    <td width="120">
                        {!! Form::open(['route' => ['produks.destroy', $produk->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('produks.show', [$produk->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('produks.edit', [$produk->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', [
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'onclick' => "return confirm('Are you sure?')",
                            ]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
