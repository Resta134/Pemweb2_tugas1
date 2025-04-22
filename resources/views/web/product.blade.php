<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h1 class="mb-4">SARUNG</h1>
    <div class="container">
        <div class="row">

            <div class="col-6 col-md-3 pt-5">
                <div class="card" style="width: 100%;">
                    <img src="https://i.pinimg.com/736x/ea/04/36/ea04364e31657a89de9bec2bab41e2da.jpg" class="card-img-top" alt="Sarung 1">
                    <div class="card-body">
                        <h5 class="card-title">Sarung A</h5>
                        <p class="card-text">Sarung berkualitas tinggi.</p>

                        <!-- Alert -->
                        <div id="alert-sarung-a" class="alert alert-success alert-dismissible fade show d-none" role="alert">
                            Berhasil ditambahkan ke keranjang!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <button onclick="showAlert('alert-sarung-a')" class="btn btn-primary">Beli Sekarang</button>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 pt-5">
                <div class="card" style="width: 100%;">
                    <img src="https://i.pinimg.com/736x/ea/04/36/ea04364e31657a89de9bec2bab41e2da.jpg" class="card-img-top" alt="Sarung 1">
                    <div class="card-body">
                        <h5 class="card-title">Sarung A</h5>
                        <p class="card-text">Sarung berkualitas tinggi.</p>

                        <!-- Alert -->
                        <div id="alert-sarung-a" class="alert alert-success alert-dismissible fade show d-none" role="alert">
                            Berhasil ditambahkan ke keranjang!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <button onclick="showAlert('alert-sarung-a')" class="btn btn-primary">Beli Sekarang</button>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 pt-5">
                <div class="card" style="width: 100%;">
                    <img src="https://i.pinimg.com/736x/ea/04/36/ea04364e31657a89de9bec2bab41e2da.jpg" class="card-img-top" alt="Sarung 1">
                    <div class="card-body">
                        <h5 class="card-title">Sarung A</h5>
                        <p class="card-text">Sarung berkualitas tinggi.</p>

                        <!-- Alert -->
                        <div id="alert-sarung-a" class="alert alert-success alert-dismissible fade show d-none" role="alert">
                            Berhasil ditambahkan ke keranjang!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <button onclick="showAlert('alert-sarung-a')" class="btn btn-primary">Beli Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showAlert(id) {
            let alertBox = document.getElementById(id);
            alertBox.classList.remove("d-none"); // Tampilkan alert
            setTimeout(() => {
                alertBox.classList.add("d-none"); // Hilangkan alert setelah 3 detik
            }, 3000);
        }
    </script>

</x-layout>