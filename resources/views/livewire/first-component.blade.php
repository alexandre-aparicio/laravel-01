<div>
    <button type="button" wire:click="callFunction" class="btn btn-danger">Click Me</button>
    <button type="button" wire:click="callFunctionArg({{ $user_id }})" class="btn btn-danger">Click Me!</button>
    <p>{{ $message }}</p>
    <div class="container">
        @if ($createAccountError)
        <div>{{ $createAccountError }}</div>
    @endif
        <div class="row">
            @foreach ($productos as $producto)
                <div class="col-md-2">
                    <div class="card ">
                        <div class="img-wrap">
                            <img src="{{ asset('productos/' . $producto->imagen) }}" class="card-img-top">
                        </div>
                        <h6 class="title text-dots"><a href="#">{{ $producto->nombre }}</a></h6>
                        <div class="action-wrap">
                            <button type="button" wire:click="addToWishList('{{ $producto->id }}')"
                                class="btn btn-primary btn-sm float-right"> Wish List </button>
                            <div class="price-wrap h5">
                                <span class="price-new">${{ $producto->precio }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
