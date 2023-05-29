<footer class="footer">
    <div class="container-fluid">
        <nav class="text-center mt-3">
            Copyright &copy; <?php echo date('Y') ?> Yas Properties
        </nav>
    </div>
</footer>
</div>
</div>



<!-- Modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="delete">
                <input type="hidden" name="id" id="del_page_id">
                <input type="hidden" id="delete_page" value="">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete !</h5>
                    <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
                </div>
                <div class="modal-body">
                    Are You Sure to Delete This ?
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sbmit">Yes</button>
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>


</body>
<!-- <script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="<?= $url ?>admin/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?= $url ?>admin/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= $url ?>admin/assets/js/plugins/bootstrap-switch.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="<?= $url ?>admin/assets/js/plugins/chartist.min.js"></script>
<script src="<?= $url ?>admin/assets/js/plugins/bootstrap-notify.js"></script>
<script src="<?= $url ?>admin/assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="<?= $url ?>admin/assets/js/demo.js"></script>
<script src="<?= $url ?>admin/assets/js/customize.js"></script>
<script src="https://cdn.tiny.cloud/1/7oqc5befp5m9u9znnxb9agwq4vdq1a51fo1lq4umu3m1snab/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    const image_upload_handler_callback = (blobInfo, progress) => new Promise((resolve, reject) => {

        const xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', 'include/upload.php');

        xhr.upload.onprogress = (e) => {
            progress(e.loaded / e.total * 100);
        };

        xhr.onload = () => {
            if (xhr.status === 403) {
                reject({
                    message: 'HTTP Error: ' + xhr.status,
                    remove: true
                });
                return;
            }

            if (xhr.status < 200 || xhr.status >= 300) {
                reject('HTTP Error: ' + xhr.status);
                return;
            }

            const json = JSON.parse(xhr.responseText);

            if (!json || typeof json.location != 'string') {
                reject('Invalid JSON: ' + xhr.responseText);
                return;
            }

            resolve(json.location);
        };

        xhr.onerror = () => {
            reject('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
        };

        const formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());

        xhr.send(formData);
    });

    tinymce.init({
        selector: '#mytextareaa',
        height: 500,
        remove_linebreaks: false,
        menubar: true,
        convert_newlines_to_brs: true,
        plugins: ' fullpage   autolink   visualblocks visualchars  image link media  codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcounttinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help preview code twitter_url',
        toolbar1: 'formatselect  |bold italic strikethrough forecolor backcolor sizeselect |  fontsizeselect| link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat | code |preview | twitter_url | image | styles |fontselect ',
        images_upload_url: 'include/upload.php',
        valid_elements: '+*[*]',
        font_formats: "Andale Mono=andale mono,times; Arial=arial,helvetica,sans-serif; Arial Black=arial black,avant garde; Book Antiqua=book antiqua,palatino; Comic Sans 								  MS=comic sans ms,sans-serif; Courier New=courier new,courier; Georgia=georgia,palatino; Helvetica=helvetica; Impact=impact,chicago; Symbol=symbol;Tahoma=tahoma,arial, 								  helvetica,sans-serif; Terminal=terminal,monaco; Times New Roman=times new roman,times; Trebuchet MS=trebuchet ms,geneva; Verdana=verdana,geneva; Webdings=webdings;  									  Wingdings=wingdings,zapf dingbats",
        extended_valid_elements: "+iframe[width|height|name|align|class|frameborder|allowfullscreen|allow|src|*]," +
            "script[language|type|async|src|charset]" +
            "img[*]" +
            "embed[width|height|name|flashvars|src|bgcolor|align|play|loop|quality|allowscriptaccess|type|pluginspage]" +
            "blockquote[dir|style|cite|class|id|lang|onclick|ondblclick" +
            "|onkeydown|onkeypress|onkeyup|onmousedown|onmousemove|onmouseout" +
            "|onmouseover|onmouseup|title]",

        content_css: ['css/main.css?' + new Date().getTime(),
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i'
        ],


        // without images_upload_url set, Upload tab won't show up
        images_upload_handler: function(blobInfo, success, failure) {
            var xhr, formData;

            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', 'include/insert.php?page=imageUploader');

            xhr.onload = function() {
                var json;

                if (xhr.status != 200) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }

                console.log(xhr.response);
                //your validation with the responce goes here

                success(xhr.response);
            };

            formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());

            xhr.send(formData);
        }

    })
</script>
<script>
    $(document).on('click', '.delList', function() {
        let id = $(this).attr('id');
        let page = $(this).attr('data-page');

        $("#delete_page").val(page);
        $("#del_page_id").val(id);
        $("#deletemodal").modal("show");

    })


    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

</html>