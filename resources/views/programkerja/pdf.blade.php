<table>
    <thead>
        <tr>
            <th>Program</th>
            <th>Tujuan</th>
            <th>waktu</th>
            <th>keterangan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($program as $dt)
            <tr>
                <td>{{ $dt->program }}</td>
                <td>{{ $dt->tujuanp }}</td>
                <td>{{ $dt->waktu }}</td>
                <td>{{ $dt->keterangan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>