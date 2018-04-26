<form>
  <p>
    <fieldset>
      <legend>Title<abbr title="This field is mandatory">*</abbr></legend>
      <input type="radio" required name="title" id="r1" value="Sr" ><label for="r1">Sr. </label>
      <input type="radio" required name="title" id="r2" value="Sra"><label for="r2">Sra.</label>
    </fieldset>
  </p>
  <p>
    <label for="n1">¿Cuál es tu edad?</label>
    
    <input type="number" min="12" max="120" step="1" id="n1" name="age"
           pattern="\d+">
  </p>
  <p>
    <label for="t1">¿Cuál es tu fruta favorita?<abbr title="Este campo es obligatorio">*</abbr></label>
    <input type="text" id="t1" name="fruit" list="l1" required
           pattern="[Pp]l[áa]tano|[Cc]ereza|[Mm]anzana|[Ff]resa|[Ll]im[oó]n|[Nn]aranja">
    <datalist id="l1">
        <option>Plátano</option>
        <option>Cereza</option>
        <option>Manzana</option>
        <option>Fresa</option>
        <option>Limón</option>
        <option>Naranja</option>
    </datalist>
  </p>
  <p>
    <label for="t2">¿Cuál es tu dirección de correo electrónico?</label>
    <input type="email" id="t2" name="email">
  </p>
  <p>
    <label for="t3">Déjanos un mensaje corto</label>
    <textarea id="t3" name="msg" maxlength="140" rows="5"></textarea>
  </p>
  <p>
    <button>Enviar</button>
  </p>
</form>