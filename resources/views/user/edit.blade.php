@extends('navbar')

{{-- 
    TODO!    

    Kalo ada 2 data dengan agent yang sama tp yg lainnya beda
    semua data dengan agent yang sama itu keedit
    
    sama dengan delete
--}}

@section('table')
@if($errors->any())
<div class="pt-5 pb-1"style="transform: translateY(10%)">
    <div class="alert alert-danger">
        <ul>
            @foreach($errors -> all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
<body class="bg">
    <main class="container" style="transform: translateY(20%)">
<!-- START FORM -->
<form action='{{ url('user/').$data->agent }}' method='post'>
    @csrf
    @method('PUT')
    <div class="my-10 p-3 rounded shadow-sm" style="background-color: #FF4654">
        <a href='{{ url('user') }}' class="btn btn-secondary">BACK</a>
        <div class="mb-3 row">
            <label for="agent" class="col-sm-2 col-form-label" style="font-weight:bolder">Agent Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='agent' value="{{ $data->agent }}" id="agent">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="map" class="col-sm-2 col-form-label" style="font-weight:bolder">Map</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='map' value="{{ $data->map }}" id="map">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kill" class="col-sm-2 col-form-label"style="font-weight:bolder">Kill(s)</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='kill' value="{{ $data->kill }}" id="kill">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="death" class="col-sm-2 col-form-label"style="font-weight:bolder">Death(s)</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='death' value="{{ $data->death }}" id="death">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="assist" class="col-sm-2 col-form-label"style="font-weight:bolder">Assist(s)</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='assist' value="{{ $data->assist }}" id="assist">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="win" class="col-sm-2 col-form-label" style="font-weight:bolder">Match Settlement</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='win' value="{{ $data->win }}" id="win">
            </div>
        </div>
        <div class="mb-.5 row">
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10" style="transform: translateY(-30%)"><button type="submit" class="btn btn-primary" name="submit">SAVE</button></div>
        </div>
      </form>
    </div>
    <!-- AKHIR FORM -->
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>