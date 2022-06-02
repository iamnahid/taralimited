<div class="container-fluid">
    <div class="row text-right justify-content-end">
        <div class="col-lg-12 pr-3 text-right justify-content-end">
            <button id="myBtn" class="text-right justify-content-end"><i class="fas fa-arrow-up"></i></button>
        </div>
    </div>
</div>

<script>

    $(document).ready(function(){
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        $("#myBtn").click(function() {
            $("#myBtn").show();
            $("html, body").animate({scrollTop: 0}, 1000);
        });
    })
</script>