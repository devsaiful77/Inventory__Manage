<div>

  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="incomeTypeAdded" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header" style="display: flex; justify-content:space-between; align-items:center">
            <div>
                <h3 class="card-title card_top_title"><i class="fab fa-gg-circle"></i> Added Income Type</h3>
            </div>
            <div>
                <a data-dismiss="modal" aria-label="Close" class="btn-close btn btn-md btn-primary waves-effect card_top_button"><i class="fas fa-times-circle"></i> </a>
            </div>

          {{-- <h5 class="modal-title">Modal title</h5> --}}
          {{-- <button type="button" ></button> --}}
        </div>
        <form wire:submit.prevent="store">
            <div class="modal-body">
                {{-- form part --}}

                    <div class="mb-3">
                        <label class="form-label">Income Name</label>
                        <input type="text" wire:model.lazy='income_name' class="form-control" placeholder="Income Name Here...">
                        <p>{{ $income_name }}</p>
                        @error('income_name') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Remarsk</label>
                        <textarea wire:model.lazy='remarks' class="form-control" cols="30" rows="10" placeholder="Remarks Here..."></textarea>
                    </div>


                {{-- form part --}}
            </div>
            <div class="modal-footer text-center">
            {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
            <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>

</div>
