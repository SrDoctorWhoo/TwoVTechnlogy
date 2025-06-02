{{-- resources/views/admin/chat/_message.blade.php --}}
@php $isAdmin = $message->sender==='admin'; @endphp
<div class="d-flex mb-2 {{ $isAdmin?'justify-content-end':'' }}">
    <div class="p-2 rounded {{ $isAdmin?'bg-primary text-white':'bg-secondary text-light' }}" style="max-width:75%;">
        {!! nl2br(e($message->message)) !!}
        <div class="text-right"><small class="text-muted">{{ $message->created_at->format('H:i') }}</small></div>
    </div>
</div>
