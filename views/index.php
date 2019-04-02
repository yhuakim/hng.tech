<html>
    <?php include 'partials/header.php'; ?>
    <body>
        <div class="hp-jumbotron no-scroll">
            <?php include 'partials/navbar.php'; ?>
            <div class="container hp-container">
                <div class="row">
                    <div class="col-md-6 hp-jumbotron-text">
                        <h1 class="hp-header">The HNG Internship</h1>
                        <h3 class="hp-subheader"><strong>Perfection is always under construction</strong></h1>
                        <p class="hp-header-text">The HNG Internship is an ambitious attempt to change the way education is done in Africa.
                        It’s the bridge between learning to code, and becoming the best in the world.</p>
                    </div>
                </div>

            </div>
                <!-- Toon characters-->
            <div class="hp-floor">
                <div class="container">
                    <div class="row hp-images">
                        <div class="col-md-6 hp-intern">
                            <img class="hp-intern-image" src="app/img/intern-welcome.svg" alt="Image of intern">
                        </div>

                        <div class="col-md-6 hp-office text-right">
                            <img class="hp-office-image" src="app/img/office-setting.svg" alt="Image of Office">
                        </div>
                    </div>
                </div>
                <div class="">
                    <img src="app/img/floor.svg" width="100%" height="">
                </div>
            </div>
                <!--floor-->
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <script type="text/javascript">
        function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
        $(".navbar-toggler").prop('disabled',true);

    }

    /* Set the width of the side navigation to 0 */
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        $(".navbar-toggler").prop('disabled',false); 
    }

</script>

</html>
