<div>
    @if(str($row->value)->contains('http'))
        <x-button amber href="{{ $row->value }}" target="_blank">
            <i class="fa fa-thin fa-book-open mr-2"></i>
            Öffnen
        </x-button>
    @endif
</div>