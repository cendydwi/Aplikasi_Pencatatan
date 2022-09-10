@include('header')

<!-- Layout container -->
<div class="layout-page">
  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4">Edit Barang</h4>

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
            </div>
            <div class="card-body">
              @foreach($barang as $b)
              <form action="/barang/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="kode" value="{{ $b->kode_barang }}">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Kode Barang</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="basic-default-name" placeholder="B0123456789" value="{{ $b->kode_barang }}" name="kode_barang" maxlength="10"/>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-company">Nama Barang</label>
                  <div class="col-sm-10">
                    <input
                      type="text"
                      class="form-control"
                      id="basic-default-company"
                      placeholder="Baju"
                      value="{{ $b->nama_barang }}"
                      name="nama_barang"
                    />
                  </div>
                </div>
                <div class="row justify-content-end">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Edit</button>
                  </div>
                </div>
              </form>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->

    <div class="content-backdrop fade"></div>
  </div>
</div>
@include('footer')
