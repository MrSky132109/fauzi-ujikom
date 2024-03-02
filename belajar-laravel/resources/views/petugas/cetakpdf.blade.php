
{{-- boostrap --}}
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Flexy lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Flexy admin lite design, Flexy admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Flexy Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Uzi admin lite</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/Flexy-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/images/favicon.png') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/dist/css/style.min.css') }}" rel="stylesheet">
{{-- endboostrap --}}
<h1 class="text-center">Data peminjaman</h1>
<table class="table table-responsive-lg table-bordered">
    <thead>
        <tr class="bg-info">
            <th class="text-light" scope="col">Id</th>
            <th class="text-light" scope="col">User</th>
            <th class="text-light" scope="col">Buku</th>
            <th class="text-light" scope="col">Tanggal Meminjam</th>
            <th class="text-light" scope="col">Tanggal Mengembalikam</th>
            <th class="text-light" scope="col">Dikembalikan Pada</th>
        </tr>
    </thead>
    <tbody>
        @foreach($peminjamanList as $data)
        <tr class="{{ $data->actual_return_date == null ? '' : ($data->return_date < $data->actual_return_date ? 'bg-danger' : 'bg_success') }}">
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->user->name }}</td>
            <td>{{ $data->buku->judul_buku ?? '' }}</td>
            <td>{{ $data->rent_date }}</td>
            <td>{{ $data->return_date }}</td>
            <td>{{ $data->actual_return_date }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/app-style-switcher.js') }}"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            window.print();
        });
        
        </script>