<div>
    <div class="container">
        <h1>Wish List con Laravel LiveWire</h1>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
                Wish List
            </button>
            <ul class="dropdown-menu largo" aria-labelledby="dropdownMenuButton1">
                
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
