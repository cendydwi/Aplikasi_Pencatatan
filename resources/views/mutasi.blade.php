@include('header')
<div class="layout-page">
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Mutasi</h4>


    <!-- Basic Bootstrap Table -->
    <div class="card">
      <div class="table-responsive text-nowrap" style="padding-bottom: 5%;">
        <table class="table">
          <thead>
            <tr>
              <th>Tanggal</th>
              <th>Nomor Bukti</th>
              <th>Barang</th>
              <th>Status</th>
              <th>Quantity</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach($mutasi as $m)
            <tr>
              <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $m->tanggal }}</strong></td>
              <td>{{ $m->no_bukti }}</td>
              <td>{{ $m->kode_barang.' - '.$m->nama_barang }}</td>
              <td>
                @if($m->status_barang == 1)
                  IN
                  @else
                  OUT
                  @endif
              </td>
              <td>{{ $m->quantity }}</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">

                    <a class="dropdown-item" href="/mutasi/edit/{{ $m->id_mutasi }}"
                      ><i class="bx bx-edit-alt me-1"></i> Edit</a
                    >
                    <a class="dropdown-item" href="/mutasi/delete/{{ $m->id_mutasi }}"
                      ><i class="bx bx-trash me-1"></i> Delete</a
                    >
                  </div>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $mutasi->links("pagination::bootstrap-4") }}
      </div>
    </div>
    <!--/ Basic Bootstrap Table -->
  </div>
  <!-- / Content -->

  <div class="content-backdrop fade"></div>
</div>
</div>
@include('footer')
