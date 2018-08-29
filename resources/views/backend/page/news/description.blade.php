<div class="row">
    <div class="col-md-12">
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">Nội dung(Tiếng việt)</a></li>
                <li><a href="#tab_2" data-toggle="tab">Nội dung(Tiếng anh)</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <b>Nôi dung chi tiết</b>
                    <br>
                    {!! $product->description_vi !!}
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    <b>Nôi dung chi tiết</b>
                    <br>
                    {!! $product->description_en !!}
                </div>
                <!-- /.tab-pane -->
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->
    </div>
</div>
    <!-- /.col
