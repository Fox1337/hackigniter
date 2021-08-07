<div class="empty">
    <div class="col-md-12">
        <div class="card">
            <ul class="nav nav-tabs" data-bs-toggle="tabs">
                <li class="nav-item">
                    <a href="#tabs-home-17" class="nav-link active" data-bs-toggle="tab">SSRF (Server Side Request Forgery)</a>
                </li>
            </ul>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="tabs-home-17">
                        <div class="empty">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Server Side Request Forgery</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="<?php echo base_url("Vulnerabilities/ssrf") ?>" method="POST">
                                            <div class="form-group mb-3 ">
                                                <label class="form-label">Merhaba SSRF</label>
                                                <div>
                                                    <input name="path" type="username" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-footer">
                                                <button type="submit" class="btn btn-primary btn-block">Gönder</button>
                                            </div>
                                        </form>
                                        <?php if (isset($path)){
                                            echo $path;
                                        } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
