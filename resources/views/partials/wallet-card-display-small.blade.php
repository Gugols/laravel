@foreach ($cards as $card)
<div class="credit-card 
@switch($card->brand)
    @case($card->brand == 'Visa')
       {{'visa'}}
    @break
    @case($card->brand == 'MasterCard')
        {{'mc'}}
    @break
    @case($card->brand == 'American Express')
        {{'amex'}}
    @break
    @default
        {{ 'Visa' }}
    @break
@endswitch
 active">
    <div class="card-image"></div>
<div class="credit-card_number">**** **** **** {{ $card->last4 }}</div>
    <div class="credit-card_expiration">Valid Thru:{{ $card->ccExpiryMonth }}/{{ $card->ccExpiryYear }}</div>

    @can('delete', $card)
    <div class="card-delete">
    <a href="{{ route('card.delete', $card->id) }}" class="btn btn-danger btn-xs btn-icon-only" role="button" data-method="delete"
        data-disable-with="Deleting..." data-confirm="Are you sure you want to remove this card from your wallet? The action is permanant!">
        <i class="fa fa-trash"></i>
    </a>
    </div>
    @endcan
</div>
@endforeach