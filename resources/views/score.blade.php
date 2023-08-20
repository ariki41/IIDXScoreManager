<x-app-layout>
    <div class="py-12">
        <div class="grid gap-4 px-12">
            <div class="bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="p-4 md:p-10">
                    <h1 class="text-xl font-bold text-gray-800 dark:text-white">
                        譜面検索
                    </h1>
                    <form method="GET" action="{{ route('score') }}">
                        <input type="text" name="keyword" value="">
                        <button type="submit"
                            class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                            検索
                        </button>
                    </form>
                </div>
            </div>
            <div class="bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="p-4 md:p-10">
                    <h1 class="text-xl font-bold text-gray-800 dark:text-white">
                        譜面検索結果
                    </h1>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
