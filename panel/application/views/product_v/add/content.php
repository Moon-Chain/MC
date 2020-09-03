<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Ürün Ekle
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("product/save"); ?>" method="post">
                    <div class="form-group">
                        <label> Başlık</label>
                        <input type="text" class="form-control" placeholder="Başlık" name="title">
                    </div>
                    <div class="form-group">
                        <label>Açıklama</label>
						<textarea name="description" class="m-0" data-plugin="summernote" data-options="{height: 250}">Hello Summernote</textarea>
                    </div><!-- .widget-body -->
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("product"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
				</div>
                </form>
            </div><!-- .widget-body -->
        </div>
    </div><!-- .widget -->
</div>
</div>