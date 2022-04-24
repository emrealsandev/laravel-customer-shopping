<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Satış Yap</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 mt-5 shadow">
            <div class="card text-center">
                <div class="card-header">
                    Satış Yap
                </div>
                <div class="card-body">
                    <form action="{{ route('sales.create')}}" method="post">
                        @csrf
                        <div class="form-group">
                            {{-- Müşteri bilgilerini select içine basma --}}
                            <label for="name">Müşteri Adı</label>
                            <select name="customer_id" class="form-select">
                                <option selected disabled>Müşteri Seçiniz...</option>
                                @foreach($customers as $customer)

                                <option value="{{ $customer->id}}">{{$customer->id}}-{{$customer->name}} {{$customer->surname}}</option>
                                @endforeach
                              </select>
                            {{--  --}}
                        </div>
                        <div class="form-group">
                            <label for="price">Ürünün Fiyatı</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Ürünün Fiyatı">
                        </div>
                        <a href="{{ route('customer.index')}}" class="btn btn-primary mt-3">Müşteri</a>
                        <button type="submit" class="btn btn-success mt-3">Satış yap</button>
                    </form>
                </div>
            </div>
            {{-- Satış Tablosu --}}
            @if($sales)
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Müşteri_id</th>
                    <th scope="col">Müşteri Adı</th>
                    <th scope="col">Müşteri Soyadı</th>
                    <th scope="col">Fiyat</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($sales as $sale)


                  <tr>
                    <th scope="row">{{$sale->id}}</th>
                    <td>{{$sale->customer_id}}</td>
                    <td>{{$sale->musteri->name}}</td>
                    <td>{{$sale->musteri->surname}}</td>
                    <td>{{$sale->price}}</td>
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
