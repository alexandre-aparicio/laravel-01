<div>
    <div class="container">
        <h1>Wish List con Laravel LiveWire</h1>
        <div class="dropdown">
            <div class="num-wishlist">{{ $numero }}</div>
            <a class="dropdown-toggle" type="button" id="my-dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-shopping-bag fa-xl"></i>
                
        </a>
            <ul class="dropdown-menu largo" aria-labelledby="my-dropdown-toggle">
                
                @foreach ($prowish as $pr)
                
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <p>{{ $pr->producto->nombre }}</p>
                    <div class="image-parent">
                        <img src="{{ asset('productos/' . $pr->producto->imagen) }}" class="card-img-top img-fluid">
                    </div>
                    <button type="button" wire:click="removeToWishList({{$pr->id}})" class="btn btn-primary btn-sm float-right">
                        X
                    </button>

                </li>
                @endforeach

            </ul>
        </div>
    </div>
