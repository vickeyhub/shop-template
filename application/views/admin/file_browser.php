<!DOCTYPE html>
<html lang="en">

<head>

    <title>Files Browser</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 80%;
        }

        #fileExplorer {
            display: flex;
            align-content: stretch;
            justify-content: space-evenly;
            align-items: stretch;
            flex-wrap: wrap;

        }

        .thumbnail {
            width: 150px;
            height: auto;
            background: green;
            margin: 5px;
        }

        .title {
            width: 100%;
        }
    </style>

    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
        $(document).ready(function() {
            var funcNum = <?php echo $_GET['CKEditorFuncNum'] . ';'; ?>;
            $('#fileExplorer').on('click', 'img', function() {
                var fileUrl = $(this).attr('title');
                window.opener.CKEDITOR.tools.callFunction(funcNum, fileUrl);
                window.close();
            }).hover(function() {
                $(this).css('cursor', 'pointer');
            });
        });
    </script>
</head>

<body>
    <h2>Choose any one file</h2>
    <div id="fileExplorer">
        <?php
        foreach ($fileList as $fileName) { ?>
            <div class="thumbnail">
                <img src="<?= base_url() . '/' . $fileName; ?>" alt="thumb" title="<?= base_url() . '/' . $fileName; ?>" width="150px" height="120px">
            </div>
        <?php } ?>
    </div>
</body>

</html>