<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Deploy Rest Api Pertama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/dist/css/dataTables.dataTables.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            flex: 1;
        }

        .foot {
            background-color: black;
            color: aliceblue;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem;
            flex-shrink: 0;
        }
    </style>
</head>

<body>
    <h1 class="text-center">Single Tabel</h1>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Single Tabel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Multiple Tabel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Multifile Tabel</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">Biodata
                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                    data-bs-target="#tambahModal" data-bs-jenis="Tambah">
                    Tambah
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-bordered" id="example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Nama Panggilan</th>
                                <th>Kelas</th>
                                <th>Alamat</th>
                                <th>No Hp</th>
                                <th>Hobi</th>
                                <th>Motto</th>
                                <th>Tanggal Lahir</th>
                                <th>Umur</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <form id="dataform">
        <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="tambahModal">Tambah Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3 d-flex align-items-center">
                            <label for="nama_lengkap" class="form-label me-3" style="min-width: 120px;">Nama
                                Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <label for="nama_panggilan" class="form-label me-3" style="min-width: 120px;">Nama
                                Panggilan</label>
                            <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan">
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <label for="kelas" class="form-label me-3" style="min-width: 120px;">Kelas</label>
                            <select class="form-select" id="kelas" name="kelas">
                                <option selected>Pilih Kelas</option>
                                <option value="XII RPL 1">XII RPL 1</option>
                                <option value="XII RPL 2">XII RPL 2</option>
                                <option value="XII RPL 3">XII RPL 3</option>
                                <option value="rpl">rpl</option>
                            </select>
                        </div>
                        <div class="mb-3 d-flex align-items-start">
                            <label for="alamat" class="form-label me-3" style="min-width: 120px;">Alamat</label>
                            <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <label for="no_hp" class="form-label me-3" style="min-width: 120px;">No HP</label>
                            <input type="number" class="form-control" id="no_hp" min="0"
                                name="no_hp">
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <label for="tanggallahir" class="form-label me-3" style="min-width: 120px;">Tanggal
                                Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <label for="umur" class="form-label me-3" style="min-width: 120px;">Umur</label>
                            <input type="number" class="form-control" id="umur" min="0"
                                name="umur">
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <label for="hobi" class="form-label me-3" style="min-width: 120px;">Hobi</label>
                            <input type="text" class="form-control" id="hobi" name="hobi">
                        </div>
                        <div class="mb-3 d-flex align-items-start">
                            <label for="moto" class="form-label me-3" style="min-width: 120px;">Motto</label>
                            <textarea class="form-control" id="moto" rows="3" name="moto"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <footer class="bg-body-secondary text-center py-3">
        <div class="container-fluid">
            <p class="mb-0">Blitaryan Endi Pratama</p>
        </div>
    </footer>
    <script src="{{ url('dist/js/jquery-3.7.1.js') }}"></script>
    <script src="{{ url('dist/js/dataTables.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>
    <script>
        // new DataTable('#example');
        $(document).ready(function() {
            $('#example').DataTable({
                ajax: {
                    url: 'http://192.168.206.158:8000/api/biodata',
                    dataSrc: function(json) {
                        return json.datakelas;
                    }
                },
                columns: [{
                        'data': null,
                        'render': function(data, type, row, index) {
                            return index.row + 1;
                        }
                    },
                    {
                        'data': 'nama_lengkap'
                    },
                    {
                        'data': 'nama_panggilan'
                    },
                    {
                        'data': 'kelas'
                    },
                    {
                        'data': 'alamat'
                    },
                    {
                        'data': 'no_hp'
                    },
                    {
                        'data': 'hobi'
                    },
                    {
                        'data': 'moto'
                    },
                    {
                        'data': 'tanggal_lahir'
                    },
                    {
                        'data': 'umur'
                    },
                    {
                        'data': null,
                        'render': function(data, type, row) {
                            return `
                                <div style="display: flex; gap:5px;">
                                    <button class="btn btn-sm btn-warning edit-btn" data-bs-toggle="modal"
                                        data-bs-target="#tambahModal" data-bs-jenis="Ubah" data-bs-id="` + row.id + `">Ubah</button>
                                    <button class="btn btn-sm btn-danger delete-btn" onclick="hapusData(${row.id})">Hapus</button>
                                </div>
                            `;
                        },
                    }
                ]

            });
        });
        const targetModal = document.getElementById('tambahModal');
        let setIdBiodata
        if (targetModal) {
            targetModal.addEventListener('show.bs.modal', event => {
                // Button that triggered the modal
                const button = event.relatedTarget;
                // Extract info from data-bs-* attributes
                const jenismodal = button.getAttribute('data-bs-jenis');
                const idBiodata = button.getAttribute('data-bs-id');
                setIdBiodata = idBiodata
                $.ajax({
                    url: 'http://192.168.206.158:8000/api/biodata/' + idBiodata,
                    method: 'GET',
                    success: function(data) {
                        console.log(data)
                        $('#nama_lengkap').val(data.nama_lengkap)
                        $('#nama_panggilan').val(data.nama_panggilan)
                        $('#kelas').val(data.kelas)
                        $('#alamat').val(data.alamat)
                        $('#no_hp').val(data.no_hp)
                        $('#hobi').val(data.hobi)
                        $('#moto').val(data.moto)
                        $('#tanggal_lahir').val(data.tanggal_lahir)
                        $('#umur').val(data.umur)
                    }
                })
                // If necessary, you could initiate an Ajax request here
                // and then do the updating in a callback.

                // Update the modal's content.
                const modalTitle = targetModal.querySelector('.modal-title');

                // Update the modal title
                modalTitle.textContent = `${jenismodal} Biodata`;
            });
        }
        $(document).ready(function() {
            $('#dataform').submit(function(event) {
                event.preventDefault();
                const formData = $(this).serialize();
                let sendData = 'http://192.168.206.158:8000/api/biodata/';
                let setMethod = 'POST';
                if (setIdBiodata) {
                    sendData += setIdBiodata;
                    setMethod = 'PUT';
                }
                $.ajax({
                    url: sendData,
                    method: setMethod,
                    data: formData,
                    success: function(response) {
                        Swal.fire({
                            title: "Good job!",
                            text: "You clicked the button!",
                            icon: "success",
                            timer: 2000,
                            timerProgressBar: true,
                            didClose: () => {
                                location.reload();
                            }
                        });
                    },
                });
            });
        });

        function hapusData(setIdBiodata) {
            Swal.fire({
                title: "Yakin mau hapus data?",
                text: "Masa dihapus sih?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: 'http://192.168.206.158:8000/api/biodata/' + setIdBiodata,
                        method: 'DELETE',
                        success: function(response) {
                            Swal.fire({
                                title: "Deleted!",
                                text: "Yah kan dh kehapus.",
                                icon: "success",
                                timer: 2000,
                                timerProgressBar: true,
                                didClose: () => {
                                    location.reload();
                                }
                            });
                        },
                    });
                }
            });
        }
    </script>
</body>

</html>
