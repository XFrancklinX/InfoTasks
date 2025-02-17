<div class="modal fade" id="job-modal-data" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="scrollableLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollableLabel">Empleos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <p class="fs-3 text-center fw-bold">
                            {{ $job_data->tittle }}
                        </p>
                    </div>
                    <div class="col-8 border">
                        <p class="fs-4">
                            {{ $job_data->detail }}
                        </p>
                    </div>
                    <div class="col-4 border">
                        <p class="fs-4">
                            {{ $job_data->detail }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
