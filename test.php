<!--
The classic file input element we'll enhance to a file pond
-->
<style>
    /**
 * FilePond Custom Styles
 */
    .filepond--root {
        width: 500px
    }

    .filepond--drop-label {
        color: #4c4e53;
    }

    .filepond--label-action {
        text-decoration-color: #babdc0;
    }

    .filepond--panel-root {
        border-radius: 2em;
        background-color: #edf0f4;
        height: 1em;
    }
</style>
<input type="file" class="filepond" name="filepond[]" multiple data-max-file-size="3MB" data-max-files="3" />
<input type="submit" value="Submit">

<!-- file upload itself is disabled in this pen -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div id="dropzone" style="border: 2px dashed black; background: limegreen; padding: 25px;height:100vh; margin: 25px 0; display: none;">
    🎯 Drop files here!
</div>
<script>
    /*
We want to preview images, so we need to register the Image Preview plugin
*/
    FilePond.registerPlugin(

        // encodes the file as base64 data
        FilePondPluginFileEncode,

        // validates the size of the file
        FilePondPluginFileValidateSize,

        // corrects mobile image orientation
        FilePondPluginImageExifOrientation,

        // previews dropped images
        FilePondPluginImagePreview
    );

    // Select the file input and use create() to turn it into a pond
    FilePond.create(
        document.querySelector('input')
    );


    var dragTimer;
    $(document).on('dragover', function(e) {
        var dt = e.originalEvent.dataTransfer;
        if (dt.types && (dt.types.indexOf ? dt.types.indexOf('Files') != -1 : dt.types.contains('Files'))) {
            $("#dropzone").show();
            window.clearTimeout(dragTimer);
        }
    });
    $(document).on('dragleave', function(e) {
        dragTimer = window.setTimeout(function() {
            $("#dropzone").hide();
        }, 25);
    });
</script>