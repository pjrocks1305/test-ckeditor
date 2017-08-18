<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Ckeditor</title>
<body>
<h5> Description :</h5>
<div id="descriptiondiv" >
    <textarea id="editor1" name="editor1" style="width:500px"></textarea></div>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
<!--<script src="/js/admin-validations.js" crossorigin="anonymous"></script>-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-te/1.4.0/jquery-te.js" charset="utf-8"></script>
<script src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        CKEDITOR.replace( 'editor1', {
            baseUrl : true,
            xhrData :  {
                withCredentials: true,
                headers: {'X-HEADER-NAME': "X-HEADER VALUE"}
            },
            AllowExternalWebsites: 'http://127.0.0.1:3000',
            filebrowserBrowseUrl: '/ckeditor/plugins/imagebrowser/browser/browser.html',
            filebrowserUploadUrl: 'http://127.0.0.1:3000/upload_url?Type=File',
            filebrowserImageUploadUrl: 'http://127.0.0.1:3000/upload_url?Type=Image',
            filebrowserFlashUploadUrl: 'http://127.0.0.1:3000/upload_url?Type=Flash'

        });

//        var description=CKEDITOR.instances.editor1.getData();
//        console.log(description);
//        var data = {description:description};
//        $.ajax({
//            url: "localhost:3000/savedata",
//            method:'post',
//            data:data,
//            success:function(data){
//                alert("send data");
//            }
//        });
    });
</script>

