<script src="vendor/bootstrap-5.0.0-beta2/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/d39c536428.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$( "#recipeProduct" ).change(function() {
    let optionMeasure = $( "#recipeProduct option:selected" ).data("measure");
    $( "#recipeMeasure" ).val(optionMeasure);
});
$( "#addIngredientRow" ).click(function() {
    $( ".ingRow" ).first().clone().prependTo( ".ingRows" );
    $( ".ingRow" ).first().find( "button" ).remove();
});
</script>