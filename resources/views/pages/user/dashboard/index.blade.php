<x-user-layout>
    <div class="row">
        <!-- total event   -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-inline-block">
                        <h5 class="text-muted">Total Acara Diikuti</h5>
                        <h3 class="mb-0">{{ $qty['event'] }}</h3>
                    </div>
                    <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                        <i class="fa fa-eye fa-fw fa-sm text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- end total event   -->
        <!-- review   -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-inline-block">
                        <h5 class="text-muted">Total Ulasan Acara</h5>
                        <h3 class="mb-0">{{ $qty['review'] }}</h3>
                    </div>
                    <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
                        <i class="fa fa-comments fa-fw fa-sm text-secondary"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- end review   -->
        <!-- total pembelian   -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-inline-block">
                        <h5 class="text-muted">Total Transaksi</h5>
                        <h3 class="mb-0">{{ formatRupiah($qty['transaction']) }}</h3>
                    </div>
                    <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
                        <i class="fa fa-money-bill-alt fa-fw fa-sm text-brand"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- end total pembelian   -->

    </div>
</x-user-layout>
