@include('header')
<div class="layout-page">
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Report</h4>


    <!-- Basic Bootstrap Table -->
    <div class="card">
      <div class="table-responsive text-nowrap" style="padding-bottom: 5%;">
        <table class="table">
          <thead>
            <tr>
              <th>Tanggal</th>
              <th>Nomor Bukti</th>
              <th>Barang</th>
              <th>IN</th>
              <th>OUT</th>
              <th>Saldo</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @php
              $kode_barang = NULL;
              $saldo = 0;
            @endphp
            @foreach($mutasi as $m)
            @php
              if($kode_barang == $m->kode_barang){
              }else{
                $kode_barang = $m->kode_barang;
                $saldo = 0;
              }

              if($m->status_barang == 1){
                $saldo = $saldo + $m->quantity;
              }else{
                $saldo = $saldo - $m->quantity;
              }
            @endphp
            <tr>
              <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $m->tanggal }}</strong></td>
              <td>{{ $m->no_bukti }}</td>
              <td>{{ $m->kode_barang.' - '.$m->nama_barang }}</td>
              <td>
                @if($m->status_barang == 1)
                  {{ $m->quantity }}
                  @else
                  0
                  @endif
              </td>
              <td>
                @if($m->status_barang == 2)
                  {{ $m->quantity }}
                  @else
                  0
                  @endif
              </td>
              <td>
                {{ $saldo }}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <!--/ Basic Bootstrap Table -->
  </div>
  <!-- / Content -->

  <div class="content-backdrop fade"></div>
</div>
</div>
@include('footer')
