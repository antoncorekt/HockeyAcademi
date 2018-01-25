<div class="modal fade" id="modalMes" tabindex="-1" role="dialog" aria-labelledby="modalArt" style="color:black">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header" style="color:black">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" >&times;</span>
                </button>
                <h3 class="modal-title" id="modalArt" >Message</h3>
            </div>
            <div class="modal-body" style="color:black">
                <p style="color:black">{{ Session::get('mes') }}</p>
                <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
            </div>

        </div>
    </div>
</div>
