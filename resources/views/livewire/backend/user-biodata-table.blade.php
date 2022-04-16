<div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Phone Number</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->phone_number}}</td>
                <td>
                    <a href="#" class="btn btn-primary" wire:click="showEditModal({{ $user->id }})">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div wire:ignore.self id="userBiodataEditModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="title" class="col-md-2 col-form-label">@lang('Name')</label>

                        <div class="col-md-10">
                            <input type="text" name="name" class="form-control" placeholder="{{ __('Name') }}" value="{{$currentUser->name ?? ''}}" readonly/>
                        </div>
                    </div><!--form-group-->

                    <div class="form-group row">
                        <label for="title" class="col-md-2 col-form-label">@lang('Address')</label>

                        <div class="col-md-10">
                            <input type="text" name="address" class="form-control" placeholder="{{ __('Address') }}" wire:model="currentUser.address" />
                        </div>
                    </div><!--form-group-->

                    <div class="form-group row">
                        <label for="title" class="col-md-2 col-form-label">@lang('Phone Number')</label>

                        <div class="col-md-10">
                            <input type="text" name="phone_number" class="form-control" placeholder="{{ __('Phone Number') }}" wire:model="currentUser.phone_number" />
                        </div>
                    </div><!--form-group-->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" wire:click="update">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
