<x-app-layout>
    <div class="py-12">
        <div class="grid grid-rows-5 grid-flow-col gap-4 px-12">
            <div class="row-span-6 bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="p-4 md:p-10">
                    <h1 class="text-2xl font-bold text-gray-800 dark:text-white">
                        ユーザー名
                    </h1>
                    <p class="mt-2 text-gray-800 dark:text-gray-400">
                        IIDX ID :
                    </p>
                    <p class="mt-2 text-gray-800 dark:text-gray-400">
                        Twitter :
                    </p>
                    <p class="mt-6 text-gray-800 dark:text-gray-400">
                        段位 :
                    </p>
                    <p class="mt-2 text-gray-800 dark:text-gray-400">
                        アリーナ :
                    </p>
                    <button
                        type="button"class="w-full mt-5 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        プロフィール変更
                    </button>
                    <button
                        type="button"class="w-full mt-5 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        更新
                    </button>

                </div>
            </div>
            <div class="row-span-4 col-span-8 bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="p-4 md:p-10">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                        実績
                    </h3>
                </div>
            </div>
            <div class="row-span-2 col-span-8 bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="p-4 md:p-10">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                        目標
                    </h3>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
