<x-app-layout meta-description=Ghose Eye best trending fact Check news>
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

        @foreach ($posts as $post)
            <x-post-item :post="$post"></x-post-item>
        @endforeach
        <!-- Pagination -->
        {{ $posts->links() }}

    </section>

    <x-sidebar />

</x-app-layout>
