<body>
	<table class="table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama Paket</th>
                      <th>Harga Paket</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($paket as $listpaket)
                    <tr>
                      <td>{{$listpaket->id_paket}}</td>
                      <td>{{$listpaket->nama_paket}}</td>
                      <td>{{$listpaket->harga_paket}}</td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
</body>