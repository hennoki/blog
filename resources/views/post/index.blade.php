{{-- <x-app-layout :meta-title="'Ghost-👁 Blog - Posts by category ' . $category->title" meta-description=Ghose Eye best trending fact Check news>


    <div class="flex">
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">

            @foreach ($posts as $post)
                <x-post-item :post="$post"></x-post-item>
            @endforeach
            <!-- Pagination -->
            {{ $posts->links() }}

        </section>

        <x-sidebar />
    </div>

</x-app-layout> --}}

<x-app-layout :meta-title="'Ghost-👁 Blog - ' . $category->title" :meta-description="'most trusted news source ' . $category->title">
    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Posts Section -->
        <section class="w-full md:w-2/3  px-3">
            <div class=" flex flex-col items-center">
                @foreach ($posts as $post)
                    <x-post-item :post="$post" />
                @endforeach
            </div>
            {{ $posts->links() }}
        </section>

        <!-- Sidebar Section -->
        <x-sidebar />

    </div>
</x-app-layout>
