<fieldset>
    <legend>Park vehicle</legend>
    <form action="." method= "post" >
        
<input type="hidden"name="action" value="park">
<label for="regNR">Regnumber:</label>
<input type="text" id="regnumber"name="regnumber" required>
<label for="vType">Vehicletype:</label>
<input type="radio" id="vType" name="vType" value="car" required > Car
<input type="radio" id="vType" name="vType" value="mc" > MC
<br>
<button>Submit</button>
</form>
</fieldset>