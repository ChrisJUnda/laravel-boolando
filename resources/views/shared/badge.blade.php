<div
    @if ($badge['type'] === 'tag') class="bg-success"
@elseif ($badge['type'] === 'discount')
    class="bg-danger"
@else
    class="bg-white" @endif>
    <span class="px-2 text-white fw-semibold fs-5">
        {{ $badge['value'] }}
    </span>
</div>
