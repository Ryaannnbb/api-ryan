<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('dist/css/dataTables.dataTables.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css">
</head>

<body>
    <div class="d-flex flex-column min-vh-100">
        <div class="flex-grow-1">
            <!-- Your main content goes here -->
            <h1 class="text-center">Single Table</h1>
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
                <div class="card">
                    <div class="card-header">
                        <span>Biodata</span>
                        <!-- Tambah Button Modal -->
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-bs-jenis="Tambah">Tambah</button>

                        <!-- Tambah Modal Body -->
                        <form id="dataForm">
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Modal</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3 row">
                                                <label for="nama_lengkap" class="col-sm-4 col-form-label">Nama
                                                    Lengkap</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="nama_lengkap"
                                                        placeholder="Masukkan Nama Lengkap" name="nama_lengkap">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="nama_panggilan" class="col-sm-4 col-form-label">Nama
                                                    Panggilan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="nama_panggilan"
                                                        placeholder="Masukkan Nama Panggilan" name="nama_panggilan">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="tanggal_lahir" class="col-sm-4 col-form-label">Tanggal
                                                    Lahir</label>
                                                <div class="col-sm-8">
                                                    <input type="date" class="form-control" id="tanggal_lahir"
                                                        name="tanggal_lahir">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="umur" class="col-sm-4 col-form-label">Umur</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="umur"
                                                        placeholder="Masukkan Umur" name="umur">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                                                <div class="col-sm-8">
                                                    <textarea class="form-control" id="alamat" rows="3" placeholder="Masukkan Alamat" name="alamat"></textarea>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="kelas" class="col-sm-4 col-form-label">Kelas</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" id="kelas" name="kelas">
                                                        <option selected>Pilih Kelas</option>
                                                        <option>XII RPL 1</option>
                                                        <option>XII RPL 2</option>
                                                        <option>XII RPL 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="no_hp" class="col-sm-4 col-form-label">No Hp</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="no_hp"
                                                        placeholder="Masukkan No Hp" name="no_hp">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="hobi" class="col-sm-4 col-form-label">Hobi</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="hobi"
                                                        placeholder="Masukkan Hobi" name="hobi">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="moto" class="col-sm-4 col-form-label">Moto</label>
                                                <div class="col-sm-8">
                                                    <textarea class="form-control" id="moto" rows="3" placeholder="Masukkan Moto" name="moto"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="example">
                            <thead>
                                <tr>
                                    {{-- <th scope="col">No</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Nama Panggilan</th>
                                    <th scope="col">Umur</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">No Hp</th>
                                    <th scope="col">Hobi</th> --}}
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    {{-- <th scope="row">1</th>
                                    <td>John Doe</td>
                                    <td>Johnny</td>
                                    <td>20</td>
                                    <td>Jakarta</td>
                                    <td>10 SMK</td>
                                    <td>08123456789</td>
                                    <td>Membaca</td> --}}
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <footer class="bg-body-secondary text-center py-3">
                <div class="container-fluid">
                    <p class="mb-0">Blitaryan Endi Pratama</p>
                </div>
            </footer>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <script src="{{ asset('dist/js/jquery-3.7.1.js') }}"></script>
        <script src="{{ asset('dist/js/dataTables.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>
        <script>
            // new DataTable('#example');
            $(document).ready(function() {
                $('#example').DataTable({
                    ajax: {
                        url: 'http://192.168.206.158:8000/api/biodata',
                        dataSrc: 'datakelas'
                    },
                    columns: [{
                            title: 'No',
                            data: null,
                            render: function(data, type, row, index) {
                                return index.row + 1;
                            }
                        },
                        {
                            title: 'Nama Lengkap',
                            data: 'nama_lengkap'
                        },
                        {
                            title: 'Nama Panggilan',
                            data: 'nama_panggilan'
                        },
                        {
                            title: 'Tanggal Lahir',
                            data: 'tanggal_lahir'
                        },
                        {
                            title: 'Umur',
                            data: 'umur'
                        },
                        {
                            title: 'Alamat',
                            data: 'alamat'
                        },
                        {
                            title: 'Kelas',
                            data: 'kelas'
                        },
                        {
                            title: 'No Hp',
                            data: 'no_hp'
                        },
                        {
                            title: 'Hobi',
                            data: 'hobi'
                        },
                        {
                            title: 'Moto',
                            data: 'moto'
                        },
                        {
                            title: 'Aksi',
                            data: null,
                            render: function(data, type, row) {
                                return `
                                    <div style="display: flex; gap: 5px;">
                                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-jenis="Edit" data-bs-id="` +
                                    row.id + `">Edit</button>
                                        <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                                    </div>
                                `;
                            }
                        }
                    ]
                });
            });

            const targetModal = document.getElementById('exampleModal')
            let setIdBiodata
            if (targetModal) {
                targetModal.addEventListener('show.bs.modal', event => {
                    // Button untuk memancing modal target
                    const button = event.relatedTarget
                    // Menampilkan data-bs-(whatever) = data-bs-jenis
                    const jenismodal = button.getAttribute('data-bs-jenis')
                    const idBiodata = button.getAttribute('data-bs-id')
                    setIdBiodata = idBiodata
                    // Ajax requestnya disini
                    $.ajax({
                        url: 'http://192.168.206.158:8000/api/biodata/' + idBiodata,
                        method: 'GET',
                        success: function(data) {
                            console.log(data);
                            $('#nama_lengkap').val(data.nama_lengkap)
                            $('#nama_panggilan').val(data.nama_panggilan)
                            $('#tanggal_lahir').val(data.tanggal_lahir)
                            $('#umur').val(data.umur)
                            $('#alamat').val(data.alamat)
                            $('#kelas').val(data.kelas)
                            $('#no_hp').val(data.no_hp)
                            $('#hobi').val(data.hobi)
                            $('#moto').val(data.moto)
                        }
                    });
                    // Update Modalnya
                    const modalTitle = exampleModal.querySelector('.modal-title')
                    modalTitle.textContent = `${jenismodal} Biodata`
                })
            }

            $(document).ready(function() {
                $("#dataForm").submit(function events() {
                    const formData = $(this).serialize();

                    let sendData = 'http://192.168.206.158:8000/api/biodata/';
                    let setMethod = 'POST';
                    if (setIdBiodata) {
                        sendData += setIdBiodata;
                        setMethod = 'PUT';
                    }
                    console.log(sendData);

                    $.ajax({
                        url: sendData,
                        method: setMethod,
                        data: formData,
                        success: function(response) {
                            console.log(response);
                            Swal.fire({
                                title: "Good job!",
                                text: "You clicked the button!",
                                icon: "success",
                                timer: 2500,
                                timerProgressBar: true,
                                didClose: () => {
                                    location.reload();
                                }
                            });
                        }
                    })
                })
            })
        </script>
</body>

</html>
