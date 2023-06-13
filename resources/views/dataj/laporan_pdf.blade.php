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
      @foreach ($dataj as $dt)
          <tr>
              <td>{{ $dt->id }}</td>
              <td>{{ $dt->nama_lengkap }}</td>
              <td>{{ $dt->waktu }}</td>
              <td>{{ $dt->keterangan }}</td>
          </tr>
      @endforeach
  </tbody>
</table>