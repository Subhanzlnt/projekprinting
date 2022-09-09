<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(function() {
        // Cache references to both radio inputs at the top of the DOM-ready
        // event handler making further logic clearer
        let $nameInput = $('input#update-name'),
            $descInput = $('input#update-description');

        // Attach a single click event handler to both former radio inputs.
        // Depending on which radio button is clicked, the associated content
        // will be shown whereas the content associated to the other radio
        // button will be hidden
        $nameInput.add($descInput).on('click', function() {
            let isName = this === $nameInput[0],
                $show = isName ? $('#nama-div') : $('#deskripsi-div'),
                $hide = isName ? $('#deskripsi-div') : $('#nama-div');

            if (this.checked) {
                $show.fadeIn();
                $hide.hide();
            }
        });
    });
</script>

<script>
    $(function() {
        let $cold = $('input#cold'),
            $hot = $('input#hot');

        $cold.add($hot).on('click', function() {
            let iscold = this === $cold[0],
                $show = iscold ? $('#es-div') : $('#kosong-div'),
                $hide = iscold ? $('#kosong-div') : $('#es-div');

            if (this.checked) {
                $show.fadeIn();
                $hide.hide();
            }

        });

    });
</script>

<script>
    function countChar(val) {
        var len = val.value.length;
        if (len >= 31) {
            val.value = val.value.substring(0, 30);
        } else {
            $('#charNum').text(0 + len);
        }
    };
</script>
