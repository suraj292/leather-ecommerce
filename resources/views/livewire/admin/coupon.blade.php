<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-tag-multiple"></i>
                </span> Coupons </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Coupon</th>
                                <th>Amount</th>
                                <th>Validity</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="text-success text-uppercase">{{ Str::limit('0A6ERUJU4KOG27O9U80LLUUMXCY3PWJBP3DSI1GH', 10, ' ...') }}</td>
                                    <td> &#8377; 2000 </td>
                                    <td> 12 Dec 2021 </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="text-danger text-uppercase">{{ Str::limit('NBQ2QTO5KEATASJZLPROYWRXYTPEHC8RJMGR7E8B', 10, ' ...') }}</td>
                                    <td> &#8377; 400 </td>
                                    <td> 10 Jan 2020 </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Generate Coupons</h4>
                        <form class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Amount &#8377; xxx..">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" disabled placeholder="Coupon will Valid for 12 Months">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" disabled placeholder="Generate Coupon Here" wire:model="coupon">
                                        <div class="input-group-append">
                                            <button class="btn btn-sm btn-gradient-success" type="button" wire:click="couponGenerate">Generate</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
