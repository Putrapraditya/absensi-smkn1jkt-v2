<x-guest-layout>
    <x-slot name="logo">
    </x-slot>
    <section>
        <div class="box">
            <div class="boxContainer">
                <div class="form">
                    <center><img src="/assets/img/logo.png" width="80" style="margin-bottom: 20px" alt="Logo">
                        <h2>E-Absensi - SMKN 1 Jakarta</h2>
                    </center>
                    <x-validation-errors class="mb-4" />

                    @if (session('status'))
                        <div class="mb-4 text-sm font-medium text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="inputBox">
                            <input type="text" placeholder="Username" name="email" :value="old('email')" required
                                autofocus autocomplete="username">
                        </div>
                        <div class="inputBox">
                            <input type="password" id="passwordField" placeholder="Password" name="password" required
                                autocomplete="current-password">
                            <i id="passwordToggle" class="bx bx-show"></i>
                        </div>
                        <style>
                            #passwordToggle {
                                position: absolute;
                                right: 60px;
                                top: 333px;
                                font-size: 22px;
                                color: #fff;
                                transform: translateY(-50%);
                                cursor: pointer;
                            }
                        </style>
                        <script>
                            const passwordField = document.getElementById("passwordField");
                            const passwordToggle = document.getElementById("passwordToggle");

                            passwordToggle.addEventListener("click", function() {
                                if (passwordField.type === "password") {
                                    passwordField.type = "text";
                                    passwordToggle.classList.remove("bx-show");
                                    passwordToggle.classList.add("bx-hide");
                                } else {
                                    passwordField.type = "password";
                                    passwordToggle.classList.remove("bx-hide");
                                    passwordToggle.classList.add("bx-show");
                                }
                            });
                        </script>
                        <div class="inputBox">
                            <center><button type="submit">Masuk Aplikasi</button></center>
                        </div>
                        <p align="center" class="forget">Lupa Kata Sandi? <a href="#">Reset Kata sandi</a></p>
                    </form>
                </div>
            </div>
            <p style="margin-top: 20px; color: #fff" align="center"><small>&copy;{{ now()->year }}
                    e-absensi by SMK Negeri 1 Jakarta</small></p>
        </div>
    </section>
</x-guest-layout>
