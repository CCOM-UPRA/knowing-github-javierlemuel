<script>
 $( "#popUpDiv" ).dialog({
  dialogClass: "no-close",
  buttons: [
    {
      text: "X",
      click: function() {
        $( this ).dialog( "close" );
      }
    }
  ]
});
</script>
<?php
if (isset($_POST['number'])){
echo'<div id="popUpDiv">Your Number:  ' .$_POST['number']."</div>";
}
?>