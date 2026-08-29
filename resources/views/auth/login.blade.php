<x-layout>

    <div class="min-h-screen flex items-center justify-center bg-black bg-[radial-gradient(circle_at_top,_#1f2937,_#000)]">

        <div class="card w-full max-w-md bg-neutral shadow-2xl border border-yellow-500/30">

            <div class="card-body">

                <div class="text-center mb-6">

                    <h1 class="text-5xl mb-2">🦇</h1>

                    <h2 class="text-3xl font-black text-yellow-400">
                        BATCAVE LOGIN
                    </h2>

                    <p class="text-gray-400 mt-2">
                        Welcome back, Dark Knight
                    </p>

                </div>

                <form method="POST" action="/login">
                    @csrf
                    <label class="label text-yellow-400 mt-4">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        placeholder="bruce@wayne.com"
                        class="input input-bordered bg-black border-yellow-500/30 text-white w-full" required>
                    <x-forms.error name="email"></x-forms.error>
                    <label class="label text-yellow-400 mt-4">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        placeholder="••••••••"
                        class="input input-bordered bg-black border-yellow-500/30 text-white w-full" required>
                    <x-forms.error name="password"></x-forms.error>
                    <button
                        type="submit"
                        class="btn w-full mt-6 bg-yellow-500 hover:bg-yellow-400 text-black border-0 font-bold">
                        Enter The Batcave
                    </button>

                </form>

                <div class="divider divider-warning">
                    Gotham City
                </div>

                <p class="text-center text-sm text-gray-500">
                    Protected by Wayne Enterprises
                </p>

            </div>

        </div>

    </div>

</x-layout>