<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<style>
/* .progress-wrapper {
    width:100%;
}
.progress-wrapper .progress {
    background-color:green;
    width:0%;
    padding:5px 0px 5px 0px;
} */
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script>
function postFile() {
    var formdata = new FormData();

    formdata.append('file1', $('#file1')[0].files[0]);

    var request = new XMLHttpRequest();

    request.upload.addEventListener('progress', function (e) {
        var file1Size = $('#file1')[0].files[0].size;

        if (e.loaded <= file1Size) {
            var percent = Math.round(e.loaded / file1Size * 100);
            $('#progress-bar-file1').width(percent + '%').html(percent + '%');
        } 

        if(e.loaded == e.total){
            $('#progress-bar-file1').width(100 + '%').html(100 + '%');
        }
    });   

    request.open('post', '/echo/html/');
    request.timeout = 45000;
    request.send(formdata);
}
</script>
</head>
<form id="form1">
    <input id="file1" onchange='postFile()' type="file" />
    <!-- <div class="progress-wrapper">
        <div id="progress-bar-file1" class="progress"></div>
    </div> -->
    <button type="button" onclick="postFile()">Upload File</button>
</form>
</html>