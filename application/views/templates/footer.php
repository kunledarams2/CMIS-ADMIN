   
   </div>
   </body>


   <footer>
    <script>
        $(document).ready(function(){
            //-- Click on detail
            $("ul.menu-items > li").on("click",function(){
                $("ul.menu-items > li").removeClass("active");
                $(this).addClass("active");
            })

            $(".attr,.attr2").on("click",function(){
                var clase = $(this).attr("class");

                $("." + clase).removeClass("active");
                $(this).addClass("active");
            })

        })
    </script>
    <script>
        function payWithPaystack(){
            var handler = PaystackPop.setup({
                key: '<?php echo 'pk_test_99ddb351f2f761a6aba9f4c2fcf55b2da3e90d09'; ?>',
                email: 'customer@email.com',
                amount: 30000 * 100,
                ref: ''+Math.floor((Math.random() * 1000000000) + 1),
                callback: function(response){
                    //alert('success. transaction ref is ' + response.reference);
                    window.location.replace("<?php echo base_url().'paystack/verify_payment/'; ?>"+response.reference);
                },
                onClose: function(){
                    alert('Window Closed. Payment Cancelled !!!!');
                }
            });
            handler.openIframe();
        }
    </script>
</footer>
</html>