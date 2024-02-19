@if ($pollInterval)
<div class="megaphone" wire:poll.{{ $pollInterval }}ms>
@else
<div class="megaphone">
@endif
    <div class="relative w-12 h-12" x-data="{ open: false }">
        @include('megaphone::icon')
        @include('megaphone::popout')
    </div>
</div>