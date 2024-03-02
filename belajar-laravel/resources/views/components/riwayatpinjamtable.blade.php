<div>
    <div class="table-responsive ">
        <table class="table table-responsive-lg table-bordered">
            <thead>
                <tr>
                    <th class="text-light" scope="col">Id</th>
                    <th class="text-light" scope="col">User</th>
                    <th class="text-light" scope="col">Buku</th>
                    <th class="text-light" scope="col">Tanggal Meminjam</th>
                    <th class="text-light" scope="col">Tanggal Mengembalikam</th>
                    <th class="text-light" scope="col">Dikembalikan Pada</th>
                </tr>
            </thead>
            <tbody>
                @foreach($riwayatList as $data)
                    <tr class="{{ $data->actual_return_date == null ? '' : ($data->return_date < $data->actual_return_date ? 'bg-danger' : 'bg_success') }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->user->name }}</td>
                    <td>{{ $data->buku->judul_buku }}</td>
                    <td>{{ $data->rent_date }}</td>
                    <td>{{ $data->return_date }}</td>
                    <td>{{ $data->actual_return_date }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>