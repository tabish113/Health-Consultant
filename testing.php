<input disabled  maxlength="3" size="3" value="100" id="counter">
<textarea onkeyup="textCounter(this,'counter',100);" id="message">
</textarea>
<script>
function textCounter(field,field2,maxlimit)
{
 var countfield = document.getElementById(field2);
 
  countfield.value = field.value.length;
 
}
</script>