<body>
    <div class="container">
        <h1>commune List</h1>
        <a href="{{ route('comuna.create') }}" class="btn btn-success">Add</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Code</th>
      <th scope="col">Commune</th>
      <th scope="col">Municipality</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($comunas as $comuna)
    <tr>
      <th scope="row">{{ $comuna->comu_codi }}</th>
      <td>{{ $comuna->comu_nomb }}</td>
      <td>{{$comuna->muni_nomb }}</td>
      <td><span> Actions</span> </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>
