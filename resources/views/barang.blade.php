@include('header')
<div class="layout-page">
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Barang</h4>

    <button
      type="button"
      class="btn btn-primary"
      data-bs-toggle="modal"
      data-bs-target="#modalAdd"
    >
      Tambah Barang
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modalAdd" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalCenterTitle">Tambah Barang</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <form class="" action="/barang/add" method="post">
            {{ csrf_field() }}
            <div class="modal-body">
              <div class="row">
                <div class="col mb-3">
                  <label for="nameWithTitle" class="form-label">Kode Barang</label>
                  <input
                  type="text"
                  id="nameWithTitle"
                  class="form-control"
                  name="kode_barang"
                  maxlength="10"
                  placeholder="Contoh: B0123456789"
                  />
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                  <label for="emailWithTitle" class="form-label">Nama Barang</label>
                  <input
                  type="text"
                  id="nameWithTitle"
                  name="nama_barang"
                  class="form-control"
                  placeholder="Baju"
                  />
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Close
              </button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <br>
    <br>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <div class="table-responsive text-nowrap" style="padding-bottom: 5%;">
        <table class="table">
          <thead>
            <tr>
              <th>Kode Barang</th>
              <th>Nama Barang</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach($barang as $b)
            <tr>
              <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $b->kode_barang }}</strong></td>
              <td>{{ $b->nama_barang }}</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">

                    <a class="dropdown-item" href="/barang/edit/{{ $b->kode_barang }}"
                      ><i class="bx bx-edit-alt me-1"></i> Edit</a
                    >
                    <a class="dropdown-item" href="/barang/delete/{{ $b->kode_barang }}"
                      ><i class="bx bx-trash me-1"></i> Delete</a
                    >
                  </div>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $barang->links("pagination::bootstrap-4") }}
      </div>
    </div>
    <!--/ Basic Bootstrap Table -->
  </div>
  <!-- / Content -->

  <div class="content-backdrop fade"></div>
</div>
</div>
@include('footer')
