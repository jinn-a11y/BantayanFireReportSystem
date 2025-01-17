<section class="py-3">
    <div class="container">
        <div class="content py-5 px-3 bg-gradient-danger">
            <h2>Fire Reporting</h2>
        </div>
        <div class="row justify-content-center mt-n3">
            <div class="col-lg-8 col-md-10 col-sm-12 col-sm-12">
                <div class="card card-outline rounded-0">
                    <div class="card-body">
                        <div class="container-fluid">
                            <?php if($_settings->chk_flashdata('request_sent')): ?>
                                <div class="alert alert-success bg-gradient-teal rounded-0">
                                    <div><?= $_settings->flashdata('request_sent') ?></div>
                                </div>
                            <?php endif;?>
                           <form action="" id="request-form" enctype="multipart/form-data">
                               <input type="hidden" name="id">
                               <div class="form-group col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                   <label for="fullname" class="control-label">Fullname <small class="text-danger">*</small></label>
                                   <input type="text" class="form-control form-control-sm rounded-0" name="fullname" id="fullname" required="required">
                               </div>
                               <div class="form-group col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                   <label for="contact" class="control-label">Contact # <small class="text-danger">*</small></label>
                                   <input type="text" class="form-control form-control-sm rounded-0" name="contact" id="contact" required="required">
                               </div>
                               <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                   <label for="message" class="control-label">Message <small class="text-danger">*</small></label>
                                   <div class="position-relative">
                                       <textarea rows="3" class="form-control form-control-sm rounded-0" name="message" id="message" required="required" style="padding-right: 40px;"></textarea>
                                       <label class="upload-icon" for="image-upload">
                                           <i class="fa fa-camera"></i>
                                       </label>
                                       <input type="file" class="d-none" id="image-upload" name="image" accept="image/*">
                                       <div id="image-preview-container" class="d-none">
                                           <img id="image-preview" src="#" alt="Image Preview" class="img-thumbnail">
                                           <span id="remove-image" class="remove-image"><i class="fa fa-times"></i></span>
                                       </div>
                                   </div>
                               </div>
                               <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                   <label for="location" class="control-label">Location <small class="text-danger">*</small></label>
                                   <textarea rows="3" class="form-control form-control-sm rounded-0" name="location" id="location" required="required"></textarea>
                               </div>
                           </form>
                        </div>
                    </div>
                    <div class="card-footer py-1 text-center">
                        <button class="btn btn-flat btn-sm btn-primary bg-gradient-primary" form="request-form"><i class="fa fa-paper-plane"></i> Submit</button>
                        <button class="btn btn-flat btn-sm btn-light bg-gradient-light border" type="reset" form="request-form"><i class="fa fa-times"></i> Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img id="modal-image" src="#" alt="Full-size Image" class="img-fluid">
      </div>
    </div>
  </div>
</div>

<style>
.position-relative {
    position: relative;
}

.upload-icon {
    position: absolute;
    right: 10px;
    bottom: 10px;
    cursor: pointer;
    font-size: 1.2rem;
    color: #6c757d;
}

#image-preview-container {
    position: absolute;
    bottom: 10px;
    right: 50px;
    width: 50px;
    height: 50px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
}

#image-preview {
    max-width: 100%;
    max-height: 100%;
    cursor: pointer;
}

.remove-image {
    position: absolute;
    top: 0;
    right: 0;
    background-color: rgba(255, 255, 255, 0.7);
    border-radius: 50%;
    cursor: pointer;
    padding: 2px;
}
</style>
<script src="report/script.js"></script>