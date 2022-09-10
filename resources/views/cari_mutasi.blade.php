@include('header')

<!-- Layout container -->
<div class="layout-page">
  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4">Mutasi</h4>

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
            </div>
            <div class="card-body">
              <form action="/mutasi/search" method="post">
                {{ csrf_field() }}
                <div class="row mb-3">
                    <label for="html5-date-input" class="col-md-2 col-form-label">Tanggal</label>
                    <div class="col-md-10">
                      <div class="float-left" style="float:left; width:100%;">
                        <input class="form-control" type="date" style="width:42.5%; float:left;" value="{{ date('Y-m-d') }}" name="awal" id="html5-date-input" /><p style="float:left; margin: 0 5%;" > Sampai </p>
                        <input class="form-control" type="date" style="width:42.5%; float:left;" value="{{ date('Y-m-d') }}" name="akhir" id="html5-date-input" />

                      </div>
                    </div>
                </div>
                <div class="row mb-3">
                  <label for="html5-date-input" class="col-md-2 col-form-label">Barang</label>
                  <div class="col-md-10">
                  <input
                    class="form-control"
                    list="datalistOptions"
                    id="exampleDataList"
                    placeholder="Type to search..."
                    name="kode_barang"
                  />
                  <datalist id="datalistOptions">
                    @foreach($barang as $b)
                    <option value="{{ $b->kode_barang }}">{{ $b->kode_barang.' - '.ucfirst($b->nama_barang) }}</option>
                    @endforeach
                  </datalist>
                </div>
                </div>
                <div class="row justify-content-end">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Cari</button>
                  </div>
                </div>
              </form>
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
