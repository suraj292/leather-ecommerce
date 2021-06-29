<div class="main-panel">
    <div class="content-wrapper"  x-data="{ isOpen: false }">
        <div class="page-header">
            <h3 class="page-title"> Colors </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Product</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Colors</li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-between">
                            @if(session()->has('added'))
                            <div class="col-12 alert-success mb-3">
                                <p class="m-2">{{session('added')}}</p>
                            </div>
                            @endif
                            @if(session()->has('success_delete'))
                                <div class="col-12 alert-danger mb-3">
                                    <p class="m-2">{{session('success_delete')}}</p>
                                </div>
                            @endif
                            <div class="col-md-6 col-sm-12 col-lg-2">
                                <h4 class="card-title">Colors</h4>
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <button type="button" class="btn btn-primary btn-fw w-75" @click="isOpen = !isOpen">+ Add new Color</button>
                        </div>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>S no.</th>
                                <th>Color</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($colors as $index => $color)
                                <tr>
                                    <td> {{ $index + 1 }} </td>
                                    <td> <div style="background-color: {{$color->color}}; width: 40px; height: 40px; border-radius: 6%;"></div> </td>
                                    <td>
                                        <button type="button" class="btn btn-inverse-info btn-icon" wire:click="getColor({{$color->id}})">
                                            <i class="mdi mdi-tooltip-edit"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-inverse-danger btn-icon" wire:click="deleteColor({{$color->id}})">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>

            @if(!is_null($colorId))
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-between">
                            <div class="col-md-6 col-sm-12 col-lg-2">
                                <h4 class="card-title">Edit Color</h4>
                            </div>
                        </div>
                        <form class="forms-sample" wire:submit.prevent="updateColor">
                            <div class="form-group">
                                <label>Color</label>
                                <input type="text" class="form-control" placeholder="Enter Color" wire:model.lazy="editColor">
                                @error('editColor') <p class="text-danger mt-2">{{ $message }}</p> @enderror
                            </div>
                            <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
            @endif

            <div class="col-12 grid-margin stretch-card" :hidden="!isOpen">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-between">
                            <div class="col-md-6 col-sm-12 col-lg-2">
                                <h4 class="card-title">Add Color</h4>
                            </div>
                        </div>
                        <form class="forms-sample" wire:submit.prevent="addColor">
                            <div class="form-group">
                                <label>Color</label>
                                <input type="text" class="form-control" placeholder="Add new Color" wire:model.lazy="newColor">
                                @error('newColor') <p class="text-danger mt-2">{{ $message }}</p> @enderror
                            </div>
                            <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                            <button type="button" class="btn btn-light" @click="isOpen = !isOpen">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        @if(!is_null($deleteColorId))
        <div class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: block; padding-right: 17px; background-color: #00000080;" aria-modal="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span wire:click="cancelDelete">&times;</span>
                        </button>
                    </div>

                    <form wire:submit.prevent="confirmDelete">
                        <div class="modal-body">
                            <p class=" text-danger"><span class="h5">Warning: </span> All related products Image will be Deleted.</p>
                            <div class="form-group">
                                <label>Admin Password</label>
                                <input type="password" class="form-control" placeholder="Password" wire:model.lazy="adminPassword">
                                @error('adminPassword') <p class="text-danger mt-2">{{ $message }}</p> @enderror
                                @if(session()->has('wrong_pass'))
                                    <p class="text-danger mt-2">{{session('wrong_pass')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" wire:click="cancelDelete">Cancel</button>
                            <button type="submit" class="btn btn-danger">Confirm Delete</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        @endif
    </div>
</div>
