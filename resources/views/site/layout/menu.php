<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="<?= route('') ?>" class="<?= segment_url(1) == '' ? "bg-gray-900" : '' ?>  text-white rounded-md px-3 py-2 text-sm font-medium">Home </a>
                        <a href="<?= route('sobre') ?>" class=" <?= segment_url(1) == 'sobre' ? "bg-gray-900" : '' ?>  text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Sobre</a>
                        <a href="<?= route('blog') ?>" class="<?= segment_url(1) == 'blog' ? "bg-gray-900" : '' ?>  text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Blog</a>
                        <a href="<?= route('contato') ?>" class="<?= segment_url(1) == 'contato' ? "bg-gray-900" : '' ?>  text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Contato</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>