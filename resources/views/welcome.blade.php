@extends('layout')
@section('content')
    <main class="container py-4 px-5">
        <section>
            <h1>Tanuló hozzáadása</h1>
            <div class="row">
                <div class="col-md mb-5">
                    <div class="border p-3">
                        <form action="/" method="post">
                            @csrf
                            <div class="py-2">
                                <label class="form-label" for="nev">Tanuló neve:</label>
                                <input type="text" name="nev" id="nev" class="form-control" value="{{old('nev')}}">
                                @error('nev')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="py-2">
                                <label for="kor" class="form-label">Tanulói kora:</label>
                                <select name="kor" id="kor" class="form-select">
                                    @for ($i=14; $i<24; $i++)
                                        <option value="{{$i}}">{{$i}} év</option>
                                    @endfor
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Név</th>
                                <th>Kor</th>
                                <th>Lakhely</th>
                                <th>Nem</th>
                                <th>Ágazat</th>
                            </tr>
                            @foreach ($result as $row)
                                <tr>
                                    <td>{{$row->nev}}</td>
                                    <td>{{$row->kor}} év</td>
                                    <td>{{$row->lakhely}}</td>
                                    @if ($row->nem == 'n')
                                        <td>Nő</td>
                                    @else
                                        <td>Férfi</td>
                                    @endif
                                    <td>{{$row->agazat}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
