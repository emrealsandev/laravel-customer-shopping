<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Müşteri Oluştur</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 mt-5 shadow">

            {{--  Başarı mesajı --}}
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            {{--  --}}
            <div class="card text-center">
                <div class="card-header">
                    Müşteri Oluştur
                </div>
                <div class="card-body">
                    <form action="{{ route('customer.create') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Müşteri Adı</label>
                            <input type="text" class="form-control" id="name" name="name" required
                                placeholder="Müşteri Adı">
                        </div>
                        <div class="form-group">
                            <label for="surname">Müşteri Soyadı</label>
                            <input type="text" class="form-control" id="surname" name="surname" required
                                placeholder="Müşteri Soyadı">
                        </div>
                        <button type="submit" class="btn btn-success mt-3">Müşteri Oluştur</button>
                        <a href="{{ route('sales.index') }}" class="btn btn-primary mt-3">Satış</a>
                    </form>
                </div>
            </div>
            {{-- Müşteri Tablosu --}}
            @if (count($customers) > 0)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Ad</th>
                            <th scope="col">Soyad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <th scope="row">{{ $customer->id }}</th>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->surname }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
            {{--  --}}
        </div>
    </div>

</body>

</html>
