

$(document).ready(() => {
    // price modal
    $('.stripe-payment').click(() => {
        $('#priceModal').modal('show');
        $('.modal-body').html('')
        $('.modal-body').append(`
            <form method="POST" action="" id="form">
                <div class="donateBody">
                <label class=""><h5>How much would you like to donate in Naira?<h5></label>
                <input type="number" class="form-control" placeholder="Amount" name="amount" id="donateAmount">
                <p class="modal-error">
                    <small> Please fill the amount you want to donate</small>
                <p>
                </div>
            </form>
        `)
        $('.modal-footer').html('')
        $('.modal-footer').append(`
            <button id="processPayment" type="button" class="btn btn-primary">Donate</button>
        `)

        // on button click
        // stripe payment
        $('#processPayment').click(() => {
            // stripe configuration
            var stripe_handler = StripeCheckout.configure({
                key: 'pk_test_Mc05p5vlxTZ02WAXJ5FYerZ7',
                image: '../app/img/fav.png',
                locale: 'auto',
                currency: 'NGN',
                panelLabel: 'Donate',
                token: function(token) {
                    // You can access the token ID with `token.id`.
                    let data = {
                        'price' : price,
                        token
                    }

                    $.post({
                        url: '../functions/charge.php',
                        data: data,
                        success: function(response){
                            
                        }
                    })
                }
            });
    
            // stripe call function
            var stripe = (price)  => {
                stripe_handler.open({
                name: 'HNG-Internship',
                description: 'Support the Mission',
                zipCode: true,
                amount: price
                });
            }
    
            let price = $('#donateAmount').val()
            if (price == ''){
                $('.modal-error').css('display', 'block')
            }
            else{
                $('#priceModal').modal('hide');
                $('.modal-error').css('display', 'none')
                stripe(Number(price + '00'))
                
            }
        })
    })

    
    

    // paystack call
    $('.paystack-payment').click(() => {
        
        $('#priceModal').modal('show');
        $('.modal-body').html('')
        $('.modal-body').append(`
            <form method="POST" action="" id="form">
                <div class="form-group sp-form">
                    <input type="email" class="form-control" name="email" id="donatorEmail" required>
                    <span class="floating-label"> Email </span>
                    <p class="modal-error">
                        <small> Please fill your email</small>
                    <p>
                </div>
                <div class="form-group sp-form">
                    <input type="number" class="form-control" name="amount" id="donateAmount" required>
                    <span class="floating-label"> Amount </span>
                    <p class="modal-error">
                        <small> Please fill the amount you want to donate</small>
                    <p>
                </div>
                <div class="form-group sp-form">
                    <input type="text" class="form-control" name="firstname" id="donatorFname" required>
                    <span class="floating-label"> First Name </span>
                    <p class="modal-error">
                        <small> Please fill your last name</small>
                    <p>
                </div>
                <div class="form-group sp-form">
                    <input type="text" class="form-control" name="lastname" id="donateLname" required>
                    <span class="floating-label"> Last Name </span>
                    <p class="modal-error">
                        <small> Please fill your last name</small>
                    <p>
                </div>
            </form>
        `)
        $('.modal-footer').html('')
        $('.modal-footer').append(`
            <button id="paystackProcessPayment" type="button" class="btn btn-primary">Donate</button>
        `)

        $('#paystackProcessPayment').click(()=>{
            var paystack = (email,price, fname, lname) => {
                // paystack configuration
                var paystack_handler = PaystackPop.setup({
                    key: 'pk_test_aa0092528d2fa94abd90cba7de025b6f82e357d7',
                    email: email,
                    amount: Number(price + '00'),
                    currency: "NGN",
                    firstname: fname,
                    lastname: lname,
                    label: "HNG Internship",
    
                    // callback: function(response){
                    //     alert('success. transaction ref is ' + response.reference);
                    // },
                    // onClose: function(){
                    //     alert('window closed');
                    // }
                });
                paystack_handler.openIframe();
            }

            let price = $('#donateAmount').val()
            let email = $('#donatorEmail').val()
            let fname = $('#donatorFname').val()
            let lname = $('#donatorLname').val()
            if (price == '' || email == '' || fname =='' || lname == ''){
                $('.modal-error').css('display', 'block')
            }
            else{
                $('#priceModal').modal('hide');
                $('.modal-error').css('display', 'none')
                paystack(email, price, fname, lname)
                
            }
        })
        
    })

    let slick = $('.bi-tracks-slick').css('display')
    if (slick == 'flex'){

    }else{
        $('.bi-tracks-slick').slick({
            dots: true,
            arrows: true,
            center: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                  }
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
            ]
          })
    }


    // create invite modal and send invite mail
   
    $('#invite').click(()=> {
        $('#priceModal').modal('show');
        $('#exampleModalLabel').html('Invite a Friend')
        $('.modal-body').html('')
        $('.modal-body').append(`
            <p> Input the email address you want to invite </p>
            <form method="POST" action="" id="invite">
                <div class="form-group sp-form">
                    <input type="email" class="form-control" name="email" id="invitee" required>
                    <span class="floating-label"> Email </span>
                    <p class="modal-error">
                        <small> Please fill the email field</small>
                    <p>
                </div>
                <div class="form-group sp-form">
                    <input type="text" class="form-control" name="name" id="inviter" required>
                    <span class="floating-label"> Your Name </span>
                    <p class="modal-error">
                        <small> Please fill the your name field</small>
                    <p>
                </div>
            
            </form>
        `)
        $('.modal-footer').html('')
        $('.modal-footer').append(`
            <button id="sendInvite" type="button" class="btn btn-primary">Invite</button>
        `)

        $('#sendInvite').click(()=>{
            let email = $('#invitee').val()
            let name = $('#inviter').val()
            if(email == '' || name == ''){
                $('.modal-error').css('display', 'block')
            }else{
                let data = {
                    'email' : email,
                    'name' : name
                }
                $.post({
                    url: '../functions/mail.php',
                    data: data,
                    success : (response) => {
                        console.log(response)
                        $('#priceModal').modal('hide');
                    } 
                })
            }
        })
    })


    let circle = $('.ap-circles').css('user-select')
    if (circle != 'none'){
        $('.ap-circles').slick({
            dots: true,
            arrows: true,
            center: true,
            autoplay:true,
        })
    }
    let flow = $('.ap-works-info').css('user-select')
    if (flow != 'none'){
        $('.ap-works-info').slick({
            dots: true,
            arrows: true,
            center: true,
            autoplay:true,
        })
    }
    

})


