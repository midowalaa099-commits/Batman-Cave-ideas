<x-layout>

    <div class="min-h-screen flex items-center justify-center bg-black bg-[radial-gradient(circle_at_top,_#1f2937,_#000)]">

        <div class="card w-full max-w-md bg-neutral shadow-2xl border border-yellow-500/30">

            <div class="card-body">

                <div class="text-center mb-6">

                    <h1 class="text-5xl mb-2">🦇</h1>

                    <h2 class="text-3xl font-black text-yellow-400">
                        BATCAVE REGISTRATION
                    </h2>

                    <p class="text-gray-400 mt-2">
                        Welcome back, Dark Knight
                    </p>

                </div>

                <form method="POST" action="/register ">

                    @csrf
                    <label class="label text-yellow-400">
                        Name
                    </label>

                    <input
                        type="text"
                        name="name"
                        placeholder="Bruce Wayne"
                        class="input input-bordered bg-black border-yellow-500/30 text-white w-full" required>

                    <label class="label text-yellow-400 mt-4">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        placeholder="bruce@wayne.com"
                        class="input input-bordered bg-black border-yellow-500/30 text-white w-full" required>

                    <label class="label text-yellow-400 mt-4">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        placeholder="••••••••"
                        class="input input-bordered bg-black border-yellow-500/30 text-white w-full" required>

                    <label class="label text-yellow-400 mt-4">
                        Confirm Password
                    </label>

                    <input
                        type="password"
                        name="password_confirmation"
                        placeholder="••••••••"
                        class="input input-bordered bg-black border-yellow-500/30 text-white w-full" required>

                    <button
                        type="submit"
                        class="btn w-full mt-6 bg-yellow-500 hover:bg-yellow-400 text-black border-0 font-bold" data-test="register-button">
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