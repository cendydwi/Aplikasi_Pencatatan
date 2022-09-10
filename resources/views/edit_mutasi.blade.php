@include('header')

<!-- Layout container -->
<div class="layout-page">
  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4">Edit Mutasi</h4>

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
            </div>
            <div class="card-body">
              <form action="/mutasi/update" method="post">
                @foreach($mutasi as $m)
                {{ csrf_field() }}
                <input type="hidden" name="id_mutasi" value="{{ $m->id_mutasi }}">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Nomor Bukti</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="basic-default-name" value="{{ $m->no_bukti }}" placeholder="M123456789" name="no_mutasi" maxlength="10"/>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="html5-date-input" class="col-md-2 col-form-label">Tanggal</label>
                  <div class="col-md-10">
                    <input class="form-control" type="date" value="{{ $m->tanggal }}" id="html5-date-input" name="tanggal"/>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="html5-date-input" class="col-md-2 col-form-label">Status Barang</label>
                  <div class="col-md-10">
                    <div class="form-check" style="float: left; margin-right: 5%;">
                      @if($m->status_barang == 1)
                        <input
                        name="status"
                        class="form-check-input"
                        type="radio"
                        value="1"
                        id="defaultRadio1"
                        checked/>
                      @else
                      <input
                        name="status"
                        class="form-check-input"
                        type="radio"
                        value="1"
                        id="defaultRadio1"
                        />
                      @endif
                      <label class="form-check-label" for="defaultRadio1"> IN </label>
                    </div>
                    <div class="form-check">
                      @if($m->status_barang == 2)
                        <input
                        name="status"
                        class="form-check-input"
                        type="radio"
                        value="2"
                        id="defaultRadio1"
                        checked/>
                      @else
                      <input
                        name="status"
                        class="form-check-input"
                        type="radio"
                        value="2"
                        id="defaultRadio1"
                        />
                      @endif
                      <label class="form-check-label" for="defaultRadio1"> OUT </label>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Quantity</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" value="{{ $m->quantity }}" id="basic-default-name" name="quantity"/>
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
                    value="{{ $m->kode_barang }}"
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
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </div>
                @endforeach
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
