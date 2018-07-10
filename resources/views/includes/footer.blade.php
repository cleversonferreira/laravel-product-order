
</main>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        //update price
        $('.product-selected').on('change', function(){
            let price = 0;
            let items = [];
            $('.product-selected').each(function(){
                if($(this).is(":checked")){
                    price = (price + parseFloat($(this).data('price')));
                    items.push($(this).data('item-id'));
                }
            });
            console.log();

            $('#total').text(price.toFixed(2));
            $('#input_items').val(items.toString());
            $('#input_total').val(price.toFixed(2));
        });

    });

    //salvar produtos no campo produtos
</script>

</body>
</html>