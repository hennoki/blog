{{-- <div>
    <livewire:comment-create :post="$post" />

    @foreach ($comments as $comment)
        <div wire:key='{{ $comment->id }}'>

            <livewire:comment-item :$comment :key='comment - {{ $comment->id }}' />

        </div>
    @endforeach
</div> --}}

<div class="mt-6">
    <livewire:comment-create :post="$post" />

    @foreach ($comments as $comment)
        {{-- <livewire:comment-item :comment="$comment" wire:key="comment-{{ $comment->id }}-" /> --}}
        <livewire:comment-item :comment="$comment" wire:key="{{ $comment->id }}-{{ $comment->comments->count() }}" />
    @endforeach
</div>
{{-- {{ $comment->comments->count() }} --}}


{{-- <div class="mt-6">

    <livewire:comment-create :post="$post" />

    @foreach ($comments as $comment)
        <livewire:comment-item :comment="$comment" wire:key="{{ $comment->id }}-{{ $comment->comments->count() }}" />
    @endforeach


</div> --}}
