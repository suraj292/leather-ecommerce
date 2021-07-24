<div class="col-md-12 grid-margin stretch-card" :hidden="!isOpen">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Product Details</h4>
            <form class="forms-sample" wire:submit.prevent="productDetails">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Product Title" wire:model.lazy="productTitle">
                        @error('productTitle') <p class="text-danger mt-2">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Dimension</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Product Dimension" wire:model.lazy="productDimension">
                        @error('productDimension') <p class="text-danger mt-2">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Product description" wire:model.lazy="productDescription">
                        @error('productDescription') <p class="text-danger mt-2">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Care Instruction</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Care Instruction" wire:model.lazy="productCareInstruction">
                        @error('productCareInstruction') <p class="text-danger mt-2">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Price</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Product Price" wire:model.lazy="productPrice">
                        @error('productPrice') <p class="text-danger mt-2">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Offer Price</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Product Price" wire:model.lazy="productOfferPrice">
                        @error('productOfferPrice') <p class="text-danger mt-2">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <div class="col-4">
                        <div class="form-check col-sm-9 mx-auto">
                            <input type="checkbox" class="form-check-input" wire:model.lazy="productReturn">
                            <label class="form-check-label"> Return </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check col-sm-9 mx-auto">
                            <input type="checkbox" class="form-check-input" wire:model.lazy="productSale">
                            <label class="form-check-label"> Sale </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check col-sm-9 mx-auto">
                            <input type="checkbox" class="form-check-input" wire:model.lazy="productDiscount">
                            <label class="form-check-label"> Discount </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                <button class="btn btn-light" @click="isOpen = !isOpen">Cancel</button>
            </form>
        </div>
    </div>
</div>