@extends('layouts.app')

@section('title', 'Edit Product page')

@section('content')

<style>
    .uper {
      margin-top: 40px;
    }
  </style>

  <div class="card uper">
    <div class="card-header">
      Modifier le produit
    </div>

    <div class="card-body">

      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div><br />
      @endif

        <form method="post" action="{{ route('products.update', $product->id ) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="marque">Name :</label>
                <input type="text" class="form-control" name="name" value="{{ $product->name }}"/>
            </div>

            <div class="form-group">
                <label for="cases">Price :</label>
                <input type="text" class="form-control" name="price" value="{{ $product->price }}"/>
            </div>

            <div class="form-group">
                <label for="cases">Description: </label>
                <input type="text" class="form-control" name="description" value="{{ $product->description }}"/>
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
  </div>

@endsection
