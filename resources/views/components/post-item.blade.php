<div class="flex bg-[#162032]/50 border border-[#23304A] rounded-lg mb-8 hover:border-cyan-400/50 transition-colors">
    <div class="p-5 flex-1">
        <a href="{{ route('post.show', [
            'username' => $post->user->username,
            'post' => $post->slug
        ]) }}">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-slate-200 hover:text-cyan-400 transition-colors">
                {{ $post->title }}
            </h5>
        </a>
        <div class="mb-3 font-normal text-slate-400">
            {{ Str::words($post->content, 20) }}
        </div>
        <div class="text-sm text-slate-500 flex gap-4">
            <div class="">
                by
                <a href="{{ route('profile.show', $post->user->username) }}" class="text-cyan-400 hover:text-cyan-300 hover:underline">
                    {{ $post->user->username }}
                </a>
                at
                <span class="font-mono">{{ $post->created_at->format('M d, Y') }}</span>
            </div>
            <span class="inline-flex gap-1 items-center text-cyan-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                </svg>
                <span class="font-mono">{{  $post->claps_count }}</span> Ack
            </span>
        </div>
    </div>
    @if($post->imageUrl())
    <a href="{{ route('post.show', [
            'username' => $post->user->username,
            'post' => $post->slug
        ]) }}">
        <img class="w-48 h-full max-h-64 object-cover rounded-r-lg"
        src="{{ $post->imageUrl() }}" alt="{{ $post->title }}" />
    </a>
    @endif
</div>
