<div class="px-4">
    <h2 class="font-semibold text-lg underline">Posts</h2>
    <ul class="list-disc">
        @foreach($posts as $post)
        <li> {{ $post->author }} </li>
        @endforeach
    </ul>
</div>
