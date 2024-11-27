@extends('navbar')
{{-- 
    TODO!
    hardcode text to images for agent
--}}
@section('wow')
@if (Session::has('success'))
    <div class="pt-5" style="transform: translateY(10%)">
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    </div>
@endif
<body class="bg">
    <main class="container" style="transform: translateY(20%)">
        
        <!-- START DATA -->
        <div class="my-4 p-3 rounded shadow-sm" style="background-color:#FF4654">
                <!-- FORM PENCARIAN -->
                <div class="pb-.3">
                  <form class="d-flex" action="{{ url('user') }}" method="get">
                      <input class="form-control me-1" type="search" name="keyword" value="{{ Request::get('keyword') }}" placeholder="Insert keywords" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Search</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{ url('user/create') }}' class="btn btn-primary">+ Insert data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-2">Agent</th>
                            <th class="col-md-2">Map</th>
                            <th class="col-md-1">Kill</th>
                            <th class="col-md-1">Death</th>
                            <th class="col-md-2">Assist</th>
                            <th class="col-md-2">W/L</th>
                            <th class="col-md-1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem()?>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{$item->agent}}</td>
                            <td>{{$item->map}}</td>
                            <td>{{$item->kill}}</td>
                            <td>{{$item->death}}</td>
                            <td>{{$item->assist}}</td>
                            <td>{{$item->win}}</td>
                            <td>
                               <div class="d-flex">
                                   <a href='{{ url('user/'.$item->agent.'/edit') }}' class="btn btn-warning btn-sm me-1">Edit</a>
                                   <form onsubmit="return confirm('Delete data?')" action="{{ url('user/'.$item->agent) }}" method="POST" class="mb-0">
                                       @csrf
                                       @method('DELETE')
                                       <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                                   </form>
                               </div>
                            </td>
                        </tr>
                        <?php $i++ ?>
                        @endforeach
                    </tbody>
                </table>
                {{ $data->withQueryString()->links() }}
          </div>
          <!-- AKHIR DATA -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
@show